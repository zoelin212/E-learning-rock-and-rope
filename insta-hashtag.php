<?php
include 'defines.php';
// echo $instagramAccountId;

function makeApiCall($endpoint, $type, $params)
{
    $ch = curl_init();

    if ('POST' == $type) {
        curl_setopt($ch, CURLOPT_URL, $endpoint);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        curl_setopt($ch, CURLOPT_POST, 1);
    } elseif ('GET' == $type) {
        curl_setopt($ch, CURLOPT_URL, $endpoint . '?' . http_build_query($params));
    }

    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true);
}

$hashtag = 'climbinggym';
$hashtagId = '17843797792021634';

// ENDPOINT_BASE = https://graph.facebook.com/v5.0/
$hashtagSearchEndpoingFormat = ENDPOINT_BASE . 'ig_hashtag_search?user_id={user-id}&q={hashtag-name}&fields=id,name';
$hashtagDataEndpointFormat = ENDPOINT_BASE . '{hashtag-id}?fields=id,name';
$hashtagTopMediaEndpointFormat = ENDPOINT_BASE . '{ig-hashtag-id}/top_media?user_id={user-id}&fields=id,caption,children,comments_count,like_count,media_type,media_url,permalink';
$hashtagRecentEndpointFormat = ENDPOINT_BASE . '{ig-hashtag-id}/recent_media?user_id={user-id}&fields=id,media_type,media_url,permalink';
$mediaIdEndpointFormat = INSTA_ENDPOINT . '{media-id}?fields={media_type,media_url,permalink}&access_token={access-token}';
// get hashtag by name
$hashtagSearchEndpoint = ENDPOINT_BASE . 'ig_hashtag_search';
$hashtagSearchParams = array(
    'user_id' => $instagramAccountId,
    'fields' => 'id,name',
    'q' => $hashtag,
    'access_token' => $accessToken
);
// $hashtagSearch = makeApiCall($hashtagSearchEndpoint, 'GET', $hashtagSearchParams);

// get hashtag by id
$hashtagDataEndpoint = ENDPOINT_BASE . $hashtagId;
$hashtagDataParams = array(
    'fields' => 'id,name',
    'access_token' => $accessToken
);
// $mediaIdDataEndpoint = INSTA_ENDPOINT . $mediaId;
// $mediaIdParams = array(
//     'fields' => 'id,name',
//     'access_token' => $accessToken
// );
// $hashtagData = makeApiCall($hashtagDataEndpoint, 'GET', $hashtagDataParams);

// top media for hashtag
$hashtagTopMediaEndpoint = ENDPOINT_BASE . $hashtagId . '/top_media';
$hashtagTopMediaParams = array(
    'user_id' => $instagramAccountId,
    'fields' => 'id,caption,children,comments_count,like_count,media_type,media_url,permalink',
    'access_token' => $accessToken
);
// $hashtagTopMedia = makeApiCall($hashtagTopMediaEndpoint, 'GET', $hashtagTopMediaParams);
// $topPostArr = $hashtagTopMedia['data'];
// $topPost = $hashtagTopMedia['data'][0];

// recent media
$hashtagRecentEndpoint = ENDPOINT_BASE . $hashtagId . '/recent_media';
$hashtagRecentParams = array(
    'user_id' => $instagramAccountId,
    'fields' => 'id,media_type,media_url,permalink',
    'access_token' => $accessToken
);
$hashtagRecent = makeApiCall($hashtagRecentEndpoint, 'GET', $hashtagRecentParams);
$recentPostArr = $hashtagRecent['data'];
$recentPost = $hashtagRecent['data'][0];
?>

<h2>Photo Board</h2>
<div class="grid" id="photoBoard">
    <?php
    for ($i = 0; $i < count($recentPostArr); $i++) {
        if ($recentPostArr[$i]['media_type'] == 'IMAGE') {

            echo '<a href="' . $recentPostArr[$i]['permalink'] . '" class="imgBox" target="_blank">';
            echo '<img src="' . $recentPostArr[$i]['media_url'] . '" alt="" width=200 height=200>';
            echo '</a>';
        }
    }
    ?>
</div>