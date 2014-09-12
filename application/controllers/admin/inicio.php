<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller
{
    /*
     *  Funcion principal que dirige a la página principal
     */
    function index()
    {
        redir_admin('admin/login');
    }
    
    
    /*
     *  Funcion para logeo de administrador
     */
    function login()
    {
        $usuario = $this->input->post('usuario_log');
        
        $reglas = array(
                        array(
                            'field' => 'usuario',
                            'label' => 'Usuario',
                            'rules' => 'trim|required|callback__usuario_existe'
                        ),
                        array(
                            'field' => 'passwd',
                            'label' => 'Contraseña',
                            'rules' => 'trim|required|callback__password_valido['.$usuario.']'
                        )
        );
        
        $this->form_validation->set_rules($reglas);
        
        if ($this->form_validation->run() == FALSE)
        {
            redir_sitio('portal/registro');
        }
        else
        {
            $id_login = $this->Usuario->obtener_id($usuario);
            $this->session->set_userdata('user_login', $usuario);
            $this->session->set_userdata('id_login', $id_login);
            
            $data['usuario'] = $usuario;
            $data['id_login'] = $id_login;
            
            redirect('portal/inicio', $data);
        }
    }


    function _password_valido($pass, $usuario)
    {
        if ($this->Usuario->password_valido($pass, $usuario))
        {
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('_password_valido', 'Contraseña incorrecta');
            return FALSE;
        }
    }

    function _usuario_existe($usuario)
    {
        if ($this->Usuario->comprobar_usuario($usuario))
        {
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('_usuario_existe', 'Usuario no válido.');
            return FALSE;
        }
    }
}