<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Testing extends CI_Controller {
	function index(){
		$this->load->view('testing');
	}

	function conditions(){
		$this->load->view('testing2');
	}
	function access_test(){
		$this->load->view('testing3');
	}
	function next_test(){
		$this->load->view('testing4');
	}
	function users(){
		$this->load->view('test_header');
		$this->load->view('test_users');
		$this->load->view('test_footer');
	}
	function adduser(){
		$this->load->view('test_header');
		$this->load->view('test_add_user');
		$this->load->view('test_footer');
	}
	function edituser(){
		$this->load->view('test_header');
		$this->load->view('test_edit_user');
		$this->load->view('test_footer');
	}
	function deluser(){
		$this->load->view('test_header');
		$this->load->view('test_del_user');
		$this->load->view('test_footer');
	}
	function tests(){
		$this->load->view('test_header');
		$this->load->view('tests');
		$this->load->view('test_footer');
	}
	function addtest(){
		$this->load->view('test_header');
		$this->load->view('addtest');
		$this->load->view('test_footer');
	}
	function edittest(){
		$this->load->view('test_header');
		$this->load->view('edit_test');
		$this->load->view('test_footer');
	}
	function deletetest(){
		$this->load->view('test_header');
		$this->load->view('del_test');
		$this->load->view('test_footer');
	}
	function categories(){
		$this->load->view('test_header');
		$this->load->view('categories');
		$this->load->view('test_footer');
	}
	function addcategory(){
		$this->load->view('test_header');
		$this->load->view('add_category');
		$this->load->view('test_footer');
	}
	function delcategory(){
		$this->load->view('test_header');
		$this->load->view('del_category');
		$this->load->view('test_footer');
	}
	function topics(){
		$this->load->view('test_header');
		$this->load->view('topics');
		$this->load->view('test_footer');
	}
	function addtopic(){
		$this->load->view('test_header');
		$this->load->view('add_topic');
		$this->load->view('test_footer');
	}
	function deltopic(){
		$this->load->view('test_header');
		$this->load->view('del_topic');
		$this->load->view('test_footer');
	}
	function questions(){
		$this->load->view('test_header');
		$this->load->view('questions');
		$this->load->view('test_footer');
	}
	function addquest(){
		$this->load->view('test_header');
		$this->load->view('add_quest');
		$this->load->view('test_footer');
	}
	function delquest(){
		$this->load->view('test_header');
		$this->load->view('del_quest');
		$this->load->view('test_footer');
	}
	function addmtquest(){
		$this->load->view('test_header');
		$this->load->view('add_mt_quest');
		$this->load->view('test_footer');
	}
	function addsaquest(){
		$this->load->view('test_header');
		$this->load->view('add_sa_quest');
		$this->load->view('test_footer');
	}
	function results(){
		$this->load->view('test_header');
		$this->load->view('results');
		$this->load->view('test_footer');
	}
	function viewresult(){
		$this->load->view('test_header');
		$this->load->view('view_result');
		$this->load->view('test_footer');
	}
}
?>