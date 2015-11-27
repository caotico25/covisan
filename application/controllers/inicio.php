<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller
{
    /*
     *  Funcion principal que dirige a la página principal
     */
    function index()
    {
        $data['presentacion'] = $this->Presentacion->obtener();
        
        $this->load->view('sitio/inicio2',$data);
    }
}
