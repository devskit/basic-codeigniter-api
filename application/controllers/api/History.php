<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends Api
{

    function index_get()
    {
        $history = $this->db->get('history')->result();

        if ($history)
        {
            $this->response($history, 200);
        }
        else
        {
            $this->response(NULL, 404);
        }
    }

}
