<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		// $data['first_name'] = 'john';
		$this->load->view('home');
	}

    public function getUsers()
	{
		$data['first_name'] = 'maria';
		$this->load->view('home', $data);
	}

	public function getUsersById($id= null)
	{
		echo "El Id es: ". $id;
	}
	public function getUrl($id= null)
	{
		echo base_url();
	}

	public function createUser($id= null)
	{
		$userData = array(
			'first_name'=> 'jhon',
			'last_name'=> 'smith',
			'img'=> 'user.jpg',
			'email'=> 'admin@hotmail.com',
			'password'=> password_hash('123', PASSWORD_BCRYPT),
			'id_country'=> 1,
			'id_state'=> 1,
			'id_role'=> 1,
			'created_at'=> date('Y-m-d'),
			'updated_at'=> date('H-i-s'),
		);
		$this->db->insert('users', $userData);
	}
	public function getAllUsers()
	{
		$data=$this->Users_Model->getUsers();
		// print_r($data);
		print_r('hla mundo');
		// echo '<br>';
		// print_r($data[0]->id_user);

	}
}
