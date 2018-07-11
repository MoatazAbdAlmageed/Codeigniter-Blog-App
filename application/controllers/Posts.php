<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Posts extends CI_Controller {

	public function single() {
		$data['PAGE_TITLE'] = "single user";
		$this->load->view( 'user/single', $data );
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
	public function index() {
		$data['PAGE_TITLE'] = "Posts";

		$slug          = $this->input->get( 'slug' );
		$data['posts'] = $this->post->get_all( $slug );
		$this->load->view( 'posts/index', $data );
	}


}
