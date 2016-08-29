<?php

namespace Instagram\API\Request;

use Instagram\API\Response\ReelsTrayFeedResponse;

class ReelsTrayFeedRequest extends AuthenticatedBaseRequest {

    public function getMethod(){
        return self::GET;
    }

    public function getEndpoint(){
        return "/v1/feed/reels_tray/";
    }

    public function getResponseObject(){
        return new ReelsTrayFeedResponse();
    }

    /**
     * @return ReelsTrayFeedResponse
     */
    public function execute(){
        return parent::execute();
    }

}