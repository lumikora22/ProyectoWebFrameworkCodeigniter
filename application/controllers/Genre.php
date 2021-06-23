<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genre extends CI_Controller {

	//Invocar la funcion index()
	/*Funcion para mostrar por medio de template*/
	public function index()
	{
		//Mostrar todos lo generos existentes
		echo "mostrar todos los generos";
	}

	public function new(){
		$this->load->view("genre/new");
	}

	public function save(){
		$name= $this->input->post('name');
		$this->load->model('genre_model','genre');
		$this->genre->save($name);
	}




}
