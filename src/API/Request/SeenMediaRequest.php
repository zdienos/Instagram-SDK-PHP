<?php

namespace Instagram\API\Request;

use Instagram\API\Response\SeenMediaResponse;
use Instagram\Instagram;

class SeenMediaRequest extends AuthenticatedBaseRequest {

    protected $mediaId;

    /**
     * @param $instagram Instagram
     * @param $mediaId string Media Id
     * @param $timestampTakenAt int Timestamp the Media was Taken at in seconds (taken_at)
     */
    public function __construct($instagram, $mediaId, $timestampTakenAt){

        parent::__construct($instagram);

        $this->mediaId = $mediaId;

        $reels[$mediaId] = sprintf("%s_%s", $timestampTakenAt, time());

        $this->setSignedBody(array(
            "_csrftoken" => $instagram->getCSRFToken(),
            "_uid" => $instagram->getLoggedInUser()->getPk(),
            "_uuid" => $instagram->getUUID(),
            "nuxes" => (object) array(),
            "reels" => $reels
        ));

    }

    public function getMethod(){
        return self::POST;
    }

    public function getEndpoint(){
        return "/v1/media/seen/";
    }

    public function getResponseObject(){
        return new SeenMediaResponse();
    }

    /**
     * @return SeenMediaResponse
     */
    public function execute(){
        return parent::execute();
    }

}