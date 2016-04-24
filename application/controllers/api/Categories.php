<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends Api
{

    function index_get()
    {
        $categories = $this->db->get('categories')->result();

        if ($categories)
        {
            $this->response($categories, 200);
        }
        else
        {
            $this->response(NULL, 404);
        }
    }

    function category_get()
    {
        if (!$this->get('id'))
        {
            $this->response(NULL, 400);
        }

        $post = $this->db->get_where('categories', array('id' => $this->get('id')))->row();

        if ($post)
        {
            $this->response($post, 200); // 200 being the HTTP response code
        }
        else
        {
            $this->response(NULL, 404);
        }
    }

    function category_put()
    {
        $update = array(
            'updated_at' => date("Y-m-d H:i:s")
        );

        if (!empty($this->put('title'))) {
            $update['title'] = $this->put('title');
        }

        if (!empty($this->put('description'))) {
            $update['description'] = $this->put('description');
        }

        $result = $this->db->update('categories', $update, array('id' => $this->put('id')));

        if ($result === FALSE)
        {
            $this->response(array('status' => 'failed'));
        }
        else
        {
            $this->response(array('status' => 'success'));
        }
    }

    function category_post()
    {
        $result = $this->db->insert('categories', array(
            'title' => $this->post('title'),
            'description' => $this->post('description'),
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

    function category_delete()
    {
        $result = $this->db->delete('categories', array('id' => $this->delete('id')));

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
