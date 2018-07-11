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
		if ( ! $slug ) {
			return $this->db->get( 'posts' )->result_array();
		} else {
			return $this->db->get_where( 'posts', array( 'slug' => $slug ) )->row_array();
		}

	}

}