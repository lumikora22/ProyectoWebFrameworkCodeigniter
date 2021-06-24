<?php
/**
 *Definicion de la clase que nos representa la tabla genres
 */
class Genre_model extends CI_Model
{  /*Regresar todos los registros de la tabla genres*/
  public function genre_all()
  {
    return $this->db->get('genres')->result();
  }
  public function genreById($id)
  {
    $query = $this->db->get_where('genres',['id'=>$id]);
    return $query->result();
  }
  public function save($name){
    
    $this->db->insert('genres',['name'=>$name]);
  }

  public function deleteGenreById($id)
  {
     $this->db->delete('genres',array('id' => $id));
  }

  function updateById($id,$mod=null, $nombre=null){
    
      $this->db->select('genres.name');
      $this->db->from('genres');
      $this->db->set('genres.name', $nombre);
      $this->db->where('genres.id', $id);
      
      
      return $this->db->update('genres');
    }
}
