<?php

namespace Instagram\API\Response;

class ReelsTrayFeedResponse extends BaseResponse {

    /**
     * Tray Items
     * @var Model\TrayItem[]
     */
    protected $tray;

    /**
     * @return Model\TrayItem[]
     */
    public function getTray()
    {
        return $this->tray;
    }

    /**
     * @param Model\TrayItem[] $tray
     */
    public function setTray($tray)
    {
        $this->tray = $tray;
    }

}