<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Model
{
    /*
     *  Funcion que devuelve el id del usuario indicado.
     * 
     * @param string $usuario Nombre del usuario.
     * 
     * @return int El id del usuario.
     */
    function obtener_id($usuario)
    {
        $res = $this->db->query("select * from usuarios where usuario = ?", array($usuario));
        
        $res = $res->row_array();
        
        return $res['id'];
    }
    
    
    /*
     *  Funcionque comprueba si la contraseña es valida
     */
    function password_valido($pass, $usuario)
    {
        $res = $this->db->query("select * from usuarios
                               where passwd = md5(?) and usuario = ?",
                               array($pass, $usuario));
      
      return $res->num_rows() > 0;
    }
    
    
    /*
     *  Funcion que comprueba si el usuario existe
     */
    function comprobar_usuario($usuario)
    {
        $res = $this->db->query("select * from usuarios
                                where usuario = ?", array($usuario));
                           
        return $res->num_rows() > 0;
    }
}