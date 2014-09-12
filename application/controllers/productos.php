<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productos extends CI_Controller
{
    /*
     *  Funcion principal que dirige a la página de productos
     */
    function index()
    {
        redir_sitio('sitio/productos');
    }
    
}