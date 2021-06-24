<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genre extends CI_Controller {

	//Invocar la funcion index()
	/*Funcion para mostrar por medio de template*/
	public function index()
	{
		$data['encabezado'] = "All Genres";

		$this->load->model('genre_model','genre');
		$genres = $this->genre->genre_all();

		$data['genres']= $genres;

		$this->load->view('genre/index',$data);
		//Mostrar todos lo generos existentes
		
	}
	public function edit($id){

		$this->load->model('genre_model','genre');
		$genre = $this->genre->genreById($id);

		$data['genre']= $genre[0];

		$this->load->view('genre/edit',$data);
	}

	public function deleteview($id){

		$this->load->model('genre_model','genre');
		$genre = $this->genre->genreById($id);

		$data['genre']=$genre[0];
		$this->load->view('genre/delete',$data);
	}
	public function delete ($id){
		$this->load->model('genre_model','genre');
		$genre = $this->genre->deleteGenreById($id);

		echo "El genero fue eliminado";
	}
	public function update($id){
				$this->load->model('genre_model','genre');
				$mod= $this->genre->updateById(
					$id,
					$this->input->post("submit"), 
					$this->input->post("name"),
				);

		echo "Genero Actualizado";
		
	}

	public function add(){
		
		$this->load->view("genre/add");
	}

	public function save(){
		$name= $this->input->post('name');
		$this->load->model('genre_model','genre');
		$this->genre->save($name);

		echo "El genero se agrego correctamente";
	}

}
