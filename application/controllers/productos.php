<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productos extends CI_Controller
{
    /*
     *  Funcion principal que dirige a la página de productos
     */
    function index()
    {
        $data['productos'] = $this->Producto->obtener_productos();
        
        redir_sitio('sitio/productos', $data);
    }
    
}