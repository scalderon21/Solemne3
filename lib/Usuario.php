<?php
class Usuario{
    
    var $idusuario;
    var $nombre;
    var $contrasena;
    
    function __construct($usu="",$contrasena="") {
        $this->nombre=$usu;
        $this->contrasena=$contrasena;
    }
    
    function VerificaUsuario(){
        $oConn=new Conexion();
        
        if($oConn->Conectar())
            $db=$oConn->objonn;
        else
            return false;
        
        
        
    }
    
}

