<?php namespace Granot;

class Account {

    protected $api_id, $mover_ref;

    public function __construct($api_id, $mover_ref = '') {
        $this->api_id = $api_id;
        $this->mover_ref = $mover_ref;
    }

    public function setApiId($api_id) {
        $this->api_id = $api_id; 
    }

    public function setMoverRef($mover_ref) {
        $this->mover_ref = $mover_ref;
    }

    public function getApiId() {
        return $this->api_id;
    }

    public function getMoverRef() {
        return $this->mover_ref;
    }

}
