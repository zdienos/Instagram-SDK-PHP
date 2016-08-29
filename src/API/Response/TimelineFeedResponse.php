<?php

namespace Instagram\API\Response;

class TimelineFeedResponse extends BaseResponse {

    /**
     * Number of Results
     * @var int
     */
    protected $num_results;

    /**
     * More items available
     * @var boolean
     */
    protected $more_available;

    /**
     * Next Maximum Id
     * @var string
     */
    protected $next_max_id;

    /**
     * Number of New Stories
     * @var int
     */
    protected $num_new_stories;

    /**
     * Feed Items
     * @var Model\FeedItemContainer[]
     */
    protected $feed_items;

    /**
     * @return int
     */
    public function getNumResults()
    {
        return $this->num_results;
    }

    /**
     * @param int $num_results
     */
    public function setNumResults($num_results)
    {
        $this->num_results = $num_results;
    }

    /**
     * @return boolean
     */
    public function isMoreAvailable()
    {
        return $this->more_available;
    }

    /**
     * @param boolean $more_available
     */
    public function setMoreAvailable($more_available)
    {
        $this->more_available = $more_available;
    }

    /**
     * @return string
     */
    public function getNextMaxId()
    {
        return $this->next_max_id;
    }

    /**
     * @param string $next_max_id
     */
    public function setNextMaxId($next_max_id)
    {
        $this->next_max_id = $next_max_id;
    }

    /**
     * @return int
     */
    public function getNumNewStories()
    {
        return $this->num_new_stories;
    }

    /**
     * @param int $num_new_stories
     */
    public function setNumNewStories($num_new_stories)
    {
        $this->num_new_stories = $num_new_stories;
    }

    /**
     * @return Model\FeedItemContainer[]
     */
    public function getFeedItems()
    {
        return $this->feed_items;
    }

    /**
     * @param Model\FeedItemContainer[] $feed_items
     */
    public function setFeedItems($feed_items)
    {
        $this->feed_items = $feed_items;
    }

}