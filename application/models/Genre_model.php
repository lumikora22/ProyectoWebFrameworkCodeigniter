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

  public function save($name){
    $this->db->insert('genres',['name'=>$name]);
  }
}
