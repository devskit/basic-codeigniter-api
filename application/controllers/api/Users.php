<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Api
{

    function index_get()
    {
        $users = $this->db->get('users')->result();

        if ($users)
        {
            $this->response($users, 200);
        }
        else
        {
            $this->response(NULL, 404);
        }
    }

    function user_get()
    {
        if (!$this->get('id'))
        {
            $this->response(NULL, 400);
        }

        $user = $this->db->get_where('users', array('id' => $this->get('id')))->row();

        if ($user)
        {
            $this->response($user, 200); // 200 being the HTTP response code
        }
        else
        {
            $this->response(NULL, 404);
        }
    }

    function user_put()
    {
        $update = array(
            'updated_at' => date("Y-m-d H:i:s")
        );

        if (!empty($this->put('name'))) {
            $update['name'] = $this->put('name');
        }

        if (!empty($this->put('email'))) {
            $update['email'] = $this->put('email');
        }

        if (!empty($this->put('password'))) {
            $update['password'] = sha1($this->put('password'));
        }

        $result = $this->db->update('users', $update, array('id' => $this->put('id')));

        if ($result === FALSE)
        {
            $this->response(array('status' => 'failed'));
        }
        else
        {
            $this->response(array('status' => 'success'));
        }
    }

    function user_post()
    {
        $result = $this->db->insert('users', array(
            'name' => $this->post('name'),
            'email' => $this->post('email'),
            'password' => sha1($this->post('password')),
            'updated_at' => date("Y-m-d H:i:s"),
            'created_at' => date("Y-m-d H:i:s"),
        ));

        if ($result === FALSE)
        {
            $this->response(array('status' => 'failed'));
        }
        else
        {
            $this->response(array('status' => 'success'));
        }
    }

    function user_delete()
    {
        $result = $this->db->delete('users', array('id' => $this->delete('id')));

        if ($result === FALSE)
        {
            $this->response(array('status' => 'failed'));
        }
        else
        {
            $this->response(array('status' => 'success'));
        }
    }

}
