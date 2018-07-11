<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends CI_Controller
{

    public function single()
    {
        $data['PAGE_TITLE'] = "single user";
        $this->load->view('user/single', $data);
    }

    public function get()
    {
        $id = $this->input->get('id');
        $data['post'] = $this->post->get_post($id);
        $this->load->view('posts/single', $data);
    }

    public function create()
    {

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');

        if ($this->form_validation->run()) {
            $this->post->save_post();
            redirect('posts');
        } else {
            $this->load->view('posts/create');
        }
    }

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $data['posts'] = $this->post->get_all();
        $this->load->view('posts/index', $data);
    }


}
