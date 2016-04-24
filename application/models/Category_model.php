<?php
class Category_model extends CI_Model {

    public $title;
    public $description;
    public $updated_at;
    public $created_at;

    const TABLE = 'categories';

    public function __construct()
    {
        parent::__construct();
    }
}