<?php

namespace Instagram\API\Response;

/**
 * Should extend TrayItem, but we extend BaseResponse so idk
 */
class ReelMediaUserFeedResponse extends BaseResponse {

    /**
     * Can Reply
     * @var boolean
     */
    protected $can_reply;

    /**
     * Expiring At
     * @var float
     */
    protected $expiring_at;

    /**
     * User
     * @var Model\User
     */
    protected $user;

    /**
     * Items
     * @var Model\FeedItem[]
     */
    protected $items;

    /**
     * Seen
     * @var int
     */
    protected $seen;

    /**
     * Last Reel Media
     * @var float
     */
    protected $last_reel_media;

    /**
     * Id
     * @var string
     */
    protected $id;

    /**
     * @return boolean
     */
    public function isCanReply()
    {
        return $this->can_reply;
    }

    /**
     * @param boolean $can_reply
     */
    public function setCanReply($can_reply)
    {
        $this->can_reply = $can_reply;
    }

    /**
     * @return float
     */
    public function getExpiringAt()
    {
        return $this->expiring_at;
    }

    /**
     * @param float $expiring_at
     */
    public function setExpiringAt($expiring_at)
    {
        $this->expiring_at = $expiring_at;
    }

    /**
     * @return Model\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param Model\User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return Model\FeedItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param Model\FeedItem[] $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @return int
     */
    public function getSeen()
    {
        return $this->seen;
    }

    /**
     * @param int $seen
     */
    public function setSeen($seen)
    {
        $this->seen = $seen;
    }

    /**
     * @return float
     */
    public function getLastReelMedia()
    {
        return $this->last_reel_media;
    }

    /**
     * @param float $last_reel_media
     */
    public function setLastReelMedia($last_reel_media)
    {
        $this->last_reel_media = $last_reel_media;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

}