<?php
class Post_model extends CI_Model {

    public $category_id;
    public $title;
    public $content;
    public $updated_at;
    public $created_at;

    const TABLE = 'posts';

    public function __construct()
    {
        parent::__construct();
    }
}