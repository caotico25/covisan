<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('redir_sitio'))
{
    function redir_sitio($direccion = 'sitio/inicio', $data = null)
    {
        $CI =& get_instance();
        
        $contenido = $CI->load->view($direccion, $data, TRUE);
        
        $data['contenido'] = $contenido;
        
        $CI->load->view('comunes/plantilla', $data);
    }
}

if (!function_exists('redir_admin'))
{
    function redir_admin($direccion = 'admin/inicio', $data = null)
    {
        $CI =& get_instance();
        
        $contenido = $CI->load->view($direccion, $data, TRUE);
        
        $data['contenido'] = $contenido;
        
        $CI->load->view('comunes/plantilla_admin', $data);
    }
}

// Fin de comunes_helper
?>