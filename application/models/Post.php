<?php
/**
 * Created by PhpStorm.
 * User: moataz
 * Date: 7/11/18
 * Time: 4:43 AM
 */

class Post extends CI_Model
{
    /**
     * Post constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all()
    {

        $this->db->order_by("id", "desc");
        return $this->db->get('posts')->result_array();

    }


    public function get_post($slug)
    {
        $this->db->order_by("id", "desc");
        return $this->db->get_where('posts', array('slug' => $slug))->row_array();

    }


    public function save_post()
    {
        return $this->db->insert('posts', array(
            'title' => $this->input->post('title'),
            'body' => $this->input->post('body'),
            'slug' => url_title($this->input->post('title'), 'dash', true),
        ));

    }


}