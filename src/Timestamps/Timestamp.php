<?php
namespace Timestamps;

class Timestamp {
    private $timestamp;

    public function __construct() {
        $this->timestamp = date('Y-m-d H:i:s');
    }

    public function getTimestamp(): string {
        return $this->timestamp;
    }
}