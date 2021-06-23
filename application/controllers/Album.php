<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album extends CI_Controller {

	//Invocar la funcion index()
	/*Funcion para mostrar por medio de template*/
	public function index()
	{
		$data['encabezado'] = "All Albums";

		$this->load->model('album_model','album');
		$albums = $this->album->album_all();

		$data['albums']= $albums;

		$this->load->view('album/index',$data);
	}

	/*Recuperar el id que viene por url*/

	public function edit($id){

		$this->load->model('album_model','album');
		$album = $this->album->albumById($id);


		$this->load->model('genre_model','genre');
		$genres=$this->genre->genre_all();

		$data['album']= $album[0];
		$data['genres'] = $genres;
		$this->load->view('album/edit',$data);
	}
	public function deleteview($id){

		$this->load->model('album_model','album');
		$album = $this->album->albumById($id);

		// $this->load->model('genre_model','genre');
		// $genres=$this->genre->genre_all();

		$data['album']=$album[0];
		// $data['genres']=$genres;
		$this->load->view('album/delete',$data);
	}
	public function delete ($id){
		$this->load->model('album_model','album');
		$album = $this->album->deleteAlbumById($id);

		echo "El album fue eliminado";
	}
	/*Update fields*/
	public function update(){
		echo "vamos a actualizar";
	}




}
