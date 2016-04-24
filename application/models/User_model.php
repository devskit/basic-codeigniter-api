<?php
class User_model extends CI_Model {

    public $name;
    public $email;
    public $password;
    public $updated_at;
    public $created_at;

    const TABLE = 'users';

    public function __construct()
    {
        parent::__construct();
    }
}