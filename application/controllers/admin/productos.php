<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productos extends CI_Controller
{
    /*
     * 
     */
    function index()
    {
        $data['productos'] = $this->Producto->obtener_productos_base();
        
        redir_admin('admin/mod_productos', $data);
    }
    
    
    /*
     * 
     */
    function anadir()
    {
        redir_admin('admin/anadir_producto');
    }
}