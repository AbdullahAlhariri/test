<?php

$url = "https://whde7c764d5358dc0768.free.beeceptor.com";

$response = file_get_contents($url);

if ($response === false) {
    echo "Request failed";
} else {
    echo "Response:\n";
    echo $response;
}
