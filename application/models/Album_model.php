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
  function updateById($id,$mod=null, $nombre=null, $autor=null, $genre=null){
  // {   $consult =$this->db->get_where('albums',['id'=>$id]);
    // $this->db->select('albums.id, albums.name,albums.author, genres.name as name_g');
    $this->db->select('albums.id, albums.name,albums.author, genres.name as name_g');
    $this->db->from('albums');
    $this->db->join('genres', 'albums.genre_id = genres.id');
    $this->db->set('albums.name', $nombre);
    $this->db->set('albums.author', $autor);
    $this->db->set('albums.genre_id',$genre);
    $this->db->where('albums.id', $id);
    

    return $this->db->update('albums');
  }

  public function insert($data){

   return  $this->db->insert('albums',$data);

  //   public function add()
  // {
  //     $data = array(
  //         'nombre'   => $this->input->post('nombre'),
  //     );
  //     return $this->db->insert('editoriales', $data);
  // }
  }
}
