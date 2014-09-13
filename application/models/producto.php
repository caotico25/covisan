<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Producto extends CI_Model
{
    /*
     *      Funcion para modificar la presentacion
     */
    function modificar()
    {
        
    }
    
    
    /*
     *      Funcion para obtener los productos de la base de datos (solo nombre e id)
     */
    function obtener_productos_base()
    {
        $res = $this->db->query("select id, nombre from productos");
        
        return $res->result_array();
    }
}