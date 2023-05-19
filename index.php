<?php
include 'db.php';

require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$apiKey                 = 'VWHooiuAy8nxKXLNgxkKxH4WO';
$SecretKey              = 'I235BbcmNWjTUDxF9N9laeibIXoj63CH3AdJVHV9RhZRZz6EqT';
$access_token           = '4824307551-aEmoiqa0UogVnq8RF05Qjn7iZcIq8ihUHhWkem6';
$access_token_secret    = 'nvwcP5uAuvSrMFEiJjEBw6rU2s1RZqrRiZFAD5IKZwslh';

$connection = new TwitterOAuth($apiKey, $SecretKey, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");
$content = json_decode(json_encode($content), true);
// echo'<pre>';print_r($content);
    if(!empty($content)){
        $twitterId                     = $content['id'];
        $twitterId_str                 = $content['id_str'];
        $name                   = $content['name'];
        $screen_name            = $content['screen_name'];
        $location               = $content['location'];
        $followers_count        = $content['followers_count'];
        $friends_count          = $content['friends_count'];
        $favourites_count       = $content['favourites_count'];
        $verified               = $content['verified'];
        $profile_image_url      = $content['profile_image_url'];
        $profile_banner_url     = $content['profile_banner_url'];
        
        // echo $twitterId . '<br>' . $twitterId_str . '<br>' . $name . '<br>' . $screen_name . '<br>' . $location . '<br>' . $followers_count . '<br>' . $friends_count . '<br>' . $favourites_count . '<br>' . $verified . '<br>' . $profile_image_url . '<br>' . $profile_banner_url;exit();

        $query = "INSERT INTO twitterapptable(intTwitterId, intTwitterId_str, vchTwitterName, vchScreenName, vchLocation, vchFollowers_count, vchFriends_count, vchFavourites_count, intTwitterVerified, twitterProfile_image_url, twiterProfile_banner_url) VALUES('$twitterId', '$twitterId_str', '$name', '$screen_name', '$location', '$followers_count', '$friends_count', '$favourites_count', '$verified', '$profile_image_url', '$profile_banner_url')";
        // echo $query;exit;
        $connecting = mysqli_query($conn,$query);
        if($connecting == true){
            echo 'successfully added twitter data';
        }else {
            echo 'Sorry please try again...';
        }
    }