<?php

require("../vendor/autoload.php");

$instagram = new \Instagram\Instagram();

try {

    //Login
    $instagram->login("username", "password");

    //Get ReelsTrayFeed (Stories)
    $reelsTrayFeed = $instagram->getReelsTrayFeed();

    foreach($reelsTrayFeed->getTray() as $trayItem){

        //User Object, (who posted these stories)
        $user = $trayItem->getUser();

        //FeedItems (Stories by this User)
        $items = $trayItem->getItems();

        echo sprintf("\nStories by: %s [%s]\n", $user->getFullName(), $user->getUsername());

        foreach($items as $item){

            echo sprintf("---------- ReelTray Item ----------\n");

            //How many Likes?
            $likeCount = $item->getLikeCount();

            //How many Comments?
            $commentCount = $item->getCommentCount();

            //How many Viewers?
            $viewerCount = $item->getViewerCount();

            //Get the Comments
            $comments = $item->getComments();

            //Which Filter did they use?
            $filterType = $item->getFilterType();

            //Grab a list of Images for this Post (different sizes)
            $images = $item->getImageVersions2()->getCandidates();

            //Grab the URL of the first Photo in the list of Images for this Post
            $photoUrl = $images[0]->getUrl();

            echo sprintf("Like Count: %s\n", $likeCount);
            echo sprintf("Comment Count: %s\n", $commentCount);
            echo sprintf("Viewer Count: %s\n", $viewerCount);
            echo sprintf("Filter Type: %s\n", $filterType);
            echo sprintf("URL: %s\n", $photoUrl);
            echo sprintf("Comments:\n", $commentCount);

            foreach($comments as $comment){

                $commentUser = $comment->getUser();

                echo sprintf("---------- Comment ----------\n");
                echo sprintf("User: %s [%s]\n", $commentUser->getFullName(), $commentUser->getUsername());
                echo sprintf("Text: %s\n", $comment->getText());
                echo sprintf("--------- \\Comment ----------\n");

            }

        }

    }

} catch(Exception $e){
    //Something went wrong...
    echo $e->getMessage() . "\n";
}