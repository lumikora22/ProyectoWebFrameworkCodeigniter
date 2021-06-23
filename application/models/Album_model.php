<?php
/**
 *Definicion de la clase que nos representa la tabla genres
 */
class Album_model extends CI_Model
{  /*Regresar todos los registros de la tabla genres*/
  public function album_all()
  {
    $this->db->select('albums.id, albums.name,albums.author, genres.name as name_g');
    $this->db->from('albums');
    $this->db->join('genres', 'albums.genre_id = genres.id');
    $query = $this->db->get();

    return $query->result();
  }

  public function albumById($id)
  {
    $query = $this->db->get_where('albums',['id'=>$id]);
    return $query->result();
  }
}
