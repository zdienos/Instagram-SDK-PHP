<?php

namespace Instagram\API\Response\Model;

class FeedItemContainer extends Model {

    /**
     * Media or Ad
     * @var FeedItem
     */
    protected $media_or_ad;

    /**
     * @return FeedItem
     */
    public function getMediaOrAd()
    {
        return $this->media_or_ad;
    }

    /**
     * @param FeedItem $media_or_ad
     */
    public function setMediaOrAd($media_or_ad)
    {
        $this->media_or_ad = $media_or_ad;
    }

    /**
     * Is Media or Ad
     * @return boolean
     */
    public function isMediaOrAd(){
        return !is_null($this->media_or_ad);
    }

}