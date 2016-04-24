<?php
class History_model extends CI_Model {

    public $page;
    public $ip;
    public $browser;
    public $os;
    public $lat;
    public $lng;
    public $city;
    public $region;
    public $country;
    public $postal;
    public $languages;
    public $created_at;

    const TABLE = 'history';

    public function __construct()
    {
        parent::__construct();
    }
}