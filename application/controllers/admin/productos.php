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
    function nuevo_producto()
    {
        $reglas = array(
                        array(
                            'field' => 'nombre',
                            'label' => 'nombre',
                            'rules' => 'trim|required|max_length[20]'
                        ),
                        array(
                            'field' => 'descripcion',
                            'label' => 'descripcion',
                            'rules' => 'trim|required|'
                        ),
                        array(
                            'field' => 'precio',
                            'label' => 'precio',
                            'rules' => 'trim|required|'
                        ),
                    );
        
        $this->form_validation->set_rules($reglas);
        
        if ($this->form_validation->run() == FALSE)
        {
            redir_admin('admin/alta_producto');
        }
        else
        {
            $data['id_producto'] = $this->Producto->alta($this->input->post());
            $data['error'] = '';
            
            redir_admin('admin/subir_imagen', $data);
        }
    }
    
    
    /*
     *      Funcion para subir imagen de producto
     */
    function subir_imagen()
    {
        $config['upload_path'] = './uploads/carteles';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '1000';
        $config['max_width'] = '1500';
        $config['max_height'] = '1500';
        $config['remove_spaces'] = TRUE;
        
        $this->load->library('upload',$config);
        $this->upload->initialize($config);
        
        if (!$this->upload->do_upload('imagen'))
        {
            $data['error'] = $this->upload->display_errors();
            $data['id_producto'] = $this->input->post('id_producto');

            redir_admin('admin/subir_imagen', $data);
        }
        else
        {
            $datos = $this->upload->data();
            $file = $datos['file_name'];
            $this->Producto->imagen($file, $this->input->post('id_producto'));
            
            redirect('admin/productos');
        }
    }
    
    
    /*
     *      Funcion para eliminar un producto
     */
    function eliminar_producto()
    {
        $this->Producto->eliminar($this->input->post('id_producto'));
        
        redirect('admin/productos');
    }
    
    
    /*
     *      Funcion para modificar productos
     */
    function modificar_producto()
    {
        $reglas = array(
                        array(
                            'field' => 'nombre',
                            'label' => 'nombre',
                            'rules' => 'trim|required|max_length[20]'
                        ),
                        array(
                            'field' => 'descripcion',
                            'label' => 'descripcion',
                            'rules' => 'trim|required|'
                        ),
                        array(
                            'field' => 'precio',
                            'label' => 'precio',
                            'rules' => 'trim|required|numeric'
                        ),
                    );
        
        $this->form_validation->set_rules($reglas);
        
        if ($this->form_validation->run() == FALSE)
        {
            $data['producto'] = $this->Producto->obtener_producto($this->input->post('id_producto'));
            
            redir_admin('admin/mod_producto', $data);
        }
        else
        {
            $this->Producto->modificar_producto($this->input->post());
            $data['producto'] = $this->Producto->obtener_producto($this->input->post('id_producto'));
            
            redir_admin('admin/mod_producto', $data);
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
}
