<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Presentaciones extends CI_Controller
{
    /*
     *  Funcion principal que dirige a la página principal
     */
    function index()
    {
        redirect('admin/presentaciones/modificar_presentacion');
    }
    
    
    /*
     *  Funcion para modificar la presentacion
     */
    function modificar_presentacion()
    {
        if ($this->input->post('content') == '')
        {
            $presentacion = $this->Presentacion->obtener();
        }
        else
        {
            $presentacion = $this->input->post('content');
        }
        
        $reglas = array(
                        array(
                            'field' => 'content',
                            'label' => 'Presentacion',
                            'rules' => 'trim|required'
                        )
                    );
        
        $this->form_validation->set_rules($reglas);
        
        if ($this->form_validation->run() == FALSE)
        {
            $data['content'] = $presentacion;
            
            redir_admin('admin/mod_presentacion', $data);
        }
        else
        {
            $this->Presentacion->modificar($presentacion);
            $this->session->set_flashdata('mensaje','Presentación modificada correctamente.');
            
            redirect('admin/presentaciones/modificar_presentacion');
        }
    }
    
}