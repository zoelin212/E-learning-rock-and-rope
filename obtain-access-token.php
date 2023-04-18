<?php

// use Facebook\Facebook;

include 'defines.php';

require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

// facebook credentials array
$creds = array(
    'app_id' => FACEBOOK_APP_ID,
    'app_secret' => FACEBOOK_APP_SECRET,
    'default_graph_version' => 'v3.2',
    'persistent_data_handler' => 'session'
);

// create facebook object
$facebook = new Facebook\Facebook($creds);

// helper
$helper = $facebook->getRedirectLoginHelper();

// oauth object
$oAuth2Client = $facebook->getOAuth2Client();

if (isset($_GET['code'])) { // get access token
    try {
        $accessToken = $helper->getAccessToken();
    } catch (Facebook\Exceptions\FacebookResponseException $e) { // graph error
        echo 'Graph return error' . $e->getMessages;
    } catch (Facebook\Exceptions\FacebookSDKException $e) { //Validation error
        echo 'Facebook SDK return error' . $e->getMessages;
    }
    echo '<h1>Short Lived Access Token</h1>';
    print_r((string) $accessToken);

    if (!$accessToken->isLongLived()) { //exchange short for long
        try {
            $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Error getting long lived access token' . $e->getMessage();
        }
    }
    echo '<pre>';
    var_dump($accessToken);

    $accessToken = (string) $accessToken;
    echo '<h1>Long Lived Access Token</h1>';
    print_r($accessToken);
} else { // display login error
    $permissions = ['public_profile', 'instagram_basic', 'pages_show_list'];
    $loginUrl = $helper->getLoginUrl(FACEBOOK_REDIRECT_URI, $permissions);
    echo '<a href="' . $loginUrl . '">Login with Facebook</a>';
}
// https://www.facebook.com/v3.2/dialog/oauth?client_id=1324838608280541&state=05b2ea1071a6e32169b35c16c45ef8c6&response_type=code&sdk=php-sdk-5.1.4&redirect_uri=https%3A%2F%2Fwww.lihoworld.com%2Frock-and-rope%2Fobtain-access-token.php&scope=public_profile%2Cinstagram_basic%2Cpages_show_list

// https://www.lihoworld.com/rock-and-rope/obtain-access-token.php?code=AQCvssLHWIV1_He8Bgq3mzMxVrEg7zjlLgqeYY1bhVz9KqViJwQ62Nn6Ku4nqc7d_PYkbVDpnw-869VzpffW0i3vWU_0WHZj99h6-N3VYvSr12uZVz5Nk1I34RkcSI01VfGcYAFM-CuQhPgEth-Q7q_43-RVjuPdRdTH9eAJEBWu-YwWpf3Qk81DikHKo3REO6YcKCNI3-AJcS4AcqUb2skFGfPYiWX8GqOAwW45Ch0UR93Tzc3aMy4x2KtmUvOZP3If0l7EjrImzNeC18WQih6A9GAN_MgbiNb5gcEkqtHYJeaihu1qLt0pXG_HMh8kavTwXCgBE0gPis21mkHDf7WlRjwePg6OteYpLw7CfQDtxkSUEqvs0DdI0-VVIFWLDpic3H_zUqbkrHnPLbp6BUzs7XR0IIp7yDHUemVReAz0Aw&state=6267a17df4f731d98fff65a44ff664a7#_=_

// short lived token
// EAB4dbPzESeABAEZB9ZCXsludE14WLZA0i3Sb0RvDCnnaQQDTwdAqy1Yotlzl0ZAzDwnrvlaHdcL7HXVA9VkD9aQhTBXljOllEcgo7geOozc0r7njblMHJtdmpnWrUugDiO3ZBTG8ZANCZAXNK7fZAn8qxTV8FZAr5BpRwDFuCkuFCPyCXxhgVVl3QOWsy6nZBEgk8Shytw5hugDsJFh9duuZCcTZBhJicnFpB7dM4RDA5Fd5WwZDZD

// long live token
// EAB4dbPzESeABALPZC7bW11xr8XO6fOFW1ZBpZB1vdu1pC7jbEvX9n8bgDZAKCZCrdsenRvzXcAa4UL8BXhhQP3Xwu7onzYbvhl2rTdZBNm52CIDZCo99jMqwJBDkD3SAEDfPTVgCqHri8uWVgFzuZBjemcYBUm1TZBKtV3J82tzLwt2hjNHaDTjlRZB5rtToBWooXBBdGKZCsZBq2D89bYiFR5ktaVsWC34Nto52IF0Q3EBxuwZDZD