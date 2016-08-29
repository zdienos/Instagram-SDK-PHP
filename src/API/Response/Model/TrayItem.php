<?php

namespace Instagram\API\Response\Model;

class TrayItem extends Model {

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
     * @var User
     */
    protected $user;

    /**
     * Items
     * @var FeedItem[]
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
     * Ranked Position
     * @var int
     */
    protected $ranked_position;

    /**
     * Seen Ranked Position
     * @var int
     */
    protected $seen_ranked_position;

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
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return FeedItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param FeedItem[] $items
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

    /**
     * @return int
     */
    public function getRankedPosition()
    {
        return $this->ranked_position;
    }

    /**
     * @param int $ranked_position
     */
    public function setRankedPosition($ranked_position)
    {
        $this->ranked_position = $ranked_position;
    }

    /**
     * @return int
     */
    public function getSeenRankedPosition()
    {
        return $this->seen_ranked_position;
    }

    /**
     * @param int $seen_ranked_position
     */
    public function setSeenRankedPosition($seen_ranked_position)
    {
        $this->seen_ranked_position = $seen_ranked_position;
    }

}