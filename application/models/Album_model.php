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

  public function deleteAlbumById($id)
  {
      // $this->db->delete('editoriales', array('id' => $id));
     $this->db->delete('albums',array('id' => $id));
  }
  function update($id, $nombre)
  {
      $this->db->where('id', $id);
      $this->db->set('nombre', $nombre);
      return $this->db->update('editoriales');
  }

  //   public function add()
  // {
  //     $data = array(
  //         'nombre'   => $this->input->post('nombre'),
  //     );
  //     return $this->db->insert('editoriales', $data);
  // }
 
}
