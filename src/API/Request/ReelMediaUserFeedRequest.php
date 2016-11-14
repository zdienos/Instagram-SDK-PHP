<?php

namespace Instagram\API\Request;

use Instagram\API\Response\ReelMediaUserFeedResponse;
use Instagram\Instagram;

class ReelMediaUserFeedRequest extends AuthenticatedBaseRequest {

    protected $userId;

    /**
     * @param $instagram Instagram
     * @param $userId string User Id to load the Reel Media Feed of
     */
    public function __construct($instagram, $userId){

        parent::__construct($instagram);

        $this->userId = $userId;

    }

    public function getMethod(){
        return self::GET;
    }

    public function getEndpoint(){
        return sprintf("/v1/feed/user/%s/reel_media/", $this->userId);
    }

    public function getResponseObject(){
        return new ReelMediaUserFeedResponse();
    }

    /**
     * @return ReelMediaUserFeedResponse
     */
    public function execute(){
        return parent::execute();
    }

}