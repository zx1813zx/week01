<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		echo "Hello Home";
		
		/*$this->load->view('welcome_message');*/
	}

	public function a1()
	{
		$data['title'] = 'Post_title';
		$body['body'] = 'Post_body';
		$this->load->view('Post', $data+$body);
	}

	public function getdata()
	{
		$this->load->model('member');
		$rows = $this->member->get_all();

		foreach ($rows as $row)
		{
			$data['title'] = $row->title;
			$data['name'] = $row->name;
			$data['email'] = $row->email;
			/*echo $row->id; echo "<br>";*/
    		/*echo $row->title; echo "<br>";
    		echo $row->name; echo "<br>";
    		echo $row->email;
    		echo '<br>';*/
		}
		$this->load->view('Post', $data);
	}

}
