<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends Api
{

    function index_get()
    {
        $posts = $this->db->get('posts')->result();

        if ($posts)
        {
            $this->response($posts, 200);
        }
        else
        {
            $this->response(NULL, 404);
        }
    }

    function post_get()
    {
        if (!$this->get('id'))
        {
            $this->response(NULL, 400);
        }

        $post = $this->db->get_where('posts', array('id' => $this->get('id')))->row();

        if ($post)
        {
            $this->response($post, 200); // 200 being the HTTP response code
        }
        else
        {
            $this->response(NULL, 404);
        }
    }

    function post_put()
    {
        $update = array(
            'updated_at' => date("Y-m-d H:i:s")
        );

        if (!empty($this->put('category_id'))) {
            $update['category_id'] = $this->put('category_id');
        }

        if (!empty($this->put('title'))) {
            $update['title'] = $this->put('title');
        }

        if (!empty($this->put('content'))) {
            $update['content'] = $this->put('content');
        }

        $result = $this->db->update('posts', $update, array('id' => $this->put('id')));

        if ($result === FALSE)
        {
            $this->response(array('status' => 'failed'));
        }
        else
        {
            $this->response(array('status' => 'success'));
        }
    }

    function post_post()
    {
        $result = $this->db->insert('posts', array(
            'category_id' => $this->post('category_id'),
            'title' => $this->post('title'),
            'content' => $this->post('content'),
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

    function post_delete()
    {
        $result = $this->db->delete('posts', array('id' => $this->delete('id')));

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
