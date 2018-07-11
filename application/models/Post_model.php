<?php

/**
 * Created by PhpStorm.
 * User: moataz
 * Date: 7/10/18
 * Time: 7:19 PM
 */
Class Post_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get_post($slug = false)
    {
        if (!$slug) {
            return $this->db->get('posts')->result_array();
        }
        return $this->db->get_where('posts', array('slug' => $slug))->row_array();


    }
}