<?php
include 'defines.php';
require_once __DIR__ . '/vendor/autoload.php';

use Instagram\Page\Page;

$config = array( // instantiation config params
    'page_id' => $pageId,
    'access_token' => $accessToken,
);

// instantiate page        
$page = new Page($config);

// get info
$pageInfo = $page->getSelf();

echo '<pre>';
print_r($pageInfo);
die();
