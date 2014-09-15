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
        $res = $this->db->query("select id, nombre from productos order by id");
        
        return $res->result_array();
    }
    
    
    /*
     *      Funcion para obtener los productos con toda la informacion
     */
    function obtener_productos()
    {
        $res = $this->db->query("select * from productos order by id");
        
        return $res->result_array();
    }
    
    
    /*
     *      Funcion para obtener toda la informacion de un producto
     */
    function obtener_producto($id)
    {
        $res = $this->db->query("select * from productos where id = $id");
        
        return $res->row_array();
    }
    
    
    /*
     *      Funcion para dar de alta los datos de un producto
     */
    function alta($datos)
    {
        extract($datos);
        
        $data = array(
                    'nombre' => $nombre,
                    'descripcion' => $descripcion,
                    'precio' => $precio
                );
        
        $this->db->insert('productos', $data);
        
        $res = $this->db->query("select id from productos where nombre = ?", array($nombre));
        $id = $res->row();
        
        return $id->id;
    }
    
    
    /*
     * 
     */
    function imagen($file, $id_producto)
    {
        $this->db->query("update productos set imagen = ? where id = ?",
                              array('uploads/carteles/' . $file, $id_producto));
    }
    
    
    /*
     * 
     */
    function eliminar($id)
    {
        $this->db->query("delete from productos where id = $id");
    }
    
    
    /*
     * 
     */
    function modificar_producto($datos)
    {
        extract($datos);
        
        $this->db->query("update productos set nombre = ?, descripcion = ?, precio = ? where id = $id_producto", array($nombre, $descripcion, $precio));
    }
    
    
    
    
    
    
}