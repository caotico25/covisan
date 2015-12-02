<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacta extends CI_Controller
{
    /*
     *  Funcion principal que dirige a la página de contacto
     */
    function index()
    {
        $this->load->view('sitio/contacta2');
    }
    
    
    /*
     *  Función encargada del envío de formulario
     */
    function enviar_email()
    {
        $this->load->library('email');
        
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.gmail.com';
        $config['smtp_timeout'] = '7';
        $config['smtp_port'] = '465';
        $config['charset'] = 'utf-8';
        $config['newline']    = "\r\n";
        $config['smtp_user'] = 'bodegascovisan@gmail.com';
        $config['smtp_pass'] = 'bodegascovisan2014';
        $config['wordwrap'] = TRUE;
        $config['mailtype'] = 'html';
        
        $this->email->initialize($config);
        
        $this->email->from('bodegascovisan@gmail.com', 'Covisan');
        
        $this->email->to('admin@covisan.net');
        
        
        $this->email->subject($this->input->post('asunto'));
        
        $this->email->message(
            "NOMBRE: " . $this->input->post('nombre') .
            "<br /> <br /> TELÉFONO: " . $this->input->post('telefono') .
            "<br /><br /> EMAIL: " . $this->input->post('email') .
            "<br /><br /> ASUNTO: " . $this->input->post('asunto') .
            "<br /><br /> MENSAJE: " . $this->input->post('mensaje')
        );
        
        if ($this->email->send())
        {
            $this->session->set_flashdata('envio', array('cabecera' => 'Email enviado', 'cuerpo' => 'Muchas gracias por contactar con nosotros.'));
        }
        else
        {
            $this->session->set_flashdata('error',array('cabecera' => 'Error al enviar email', 'cuerpo' => 'Ha ocurrido un error en nuestros servidores.'));
        }

        redirect('contacta');
    }
    
}