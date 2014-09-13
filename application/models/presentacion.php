<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Presentacion extends CI_Model
{
    /*
     *      Funcion para modificar la presentacion
     */
    function modificar($presentacion)
    {
        $data = array(
                    'presentacion' => $presentacion
                );
                
        $this->db->where('id',1);
        $this->db->update('presentaciones',$data);
    }
    
    
    /*
     *      Funcion para obtener la presentacion
     */
    function obtener()
    {
        $res = $this->db->query('select presentacion from presentaciones where id = 1');
        
        return $res->row();
    }
}