<?php
/**
 * Created by PhpStorm.
 * User: moataz
 * Date: 7/11/18
 * Time: 4:43 AM
 */

class Post extends CI_Model {
	/**
	 * Post constructor.
	 */
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function get_all( $slug = false ) {
		return $slug == false ? $this->db->get( 'posts' )->result_array() : $this->db->get_where( 'posts', array( 'slug' => $slug ) )->result_array();

	}


	public function get_post( $id ) {

		return $this->db->get_where( 'posts', array( 'id' => $id ) )->result_array()[0];

	}

}