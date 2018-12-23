<?php

require("../vendor/autoload.php");

$instagram = new \Instagram\Instagram();

try {

    //Login
    $instagram->login("zdienos", "Diekano1981");
    $savedSession = $instagram->saveSession();


    $hasil = $instagram->getUserByUsername("zdienos");
    $userInfo = $instagram->getUserInfo($hasil);

    $json = json_encode($userInfo);


    $result = json_decode($json);

    echo '<br>username:';
    echo $result->user->username;

    // Prints "Shakya"
    echo '<br>foto:';
    echo '<img src="'.$result->user->profile_pic_url.'">';

    echo '<br>nama lengkap:';
    echo $result->user->full_name;

    echo '<br>status:';
    echo $result->status;

    echo '<br>post:';
    echo $result->user->media_count;

    echo '<br>follower:';
    echo $result->user->follower_count;

    echo '<br>following:';
    echo $result->user->following_count;




} catch(Exception $e){
    //Something went wrong...
    echo $e->getMessage() . "\n";
}


?>
