<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/modelo/entidades/usuario.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/modelo/entidades/cancion.php';

 class UsuarioCrud{
    // propiedades
    
    public static function agregar($cc, $pass, $nombre, $apellido, $genero, $email) {
        $usuario = new Usuario();
        $usuario->cc = $cc;
        $usuario->pass = $pass;
        $usuario->nombre = $nombre;
        $usuario->apellido = $apellido;
        $usuario->genero = $genero;
        $usuario->email = $email;
        $usuario->save();
        return $usuario;
    }
    public static function buscar($cc) {
        try {
            return Usuario::find($cc);
            //return $u;
        } catch ( Exception $error) {
            throw new Exception("error al buscar al Usuario<br>Detalles: " .$error->getMessage());
        }
    }
        
    
    public static function editar($u) {
        try{
        $u->save();
        //return $u;
     } catch (Exception $error) {
        throw new Exception("error al editar al Usuario<br>Detalles: " .$error->getMessage());
     }
    
    }

     public static function eliminar($u) {
        try{
            $u->delete();
        } catch(Exception $error){
            throw new Exception("error al eliminar al Usuario<br>Detalles: " .$error->getMessage());
        }
    
        }
     

        public static function listar(){
             return Usuario::all();
        }

        public static function contar() {
            try{
                return Usuario::count();
            } catch(Exception $error){
                throw new Exception("error al r al Usuario<br>Detalles: " .$error->getMessage());
            }

    }



}
    /*UsuarioCrud::agregar();*/
    /*
    $user = new Usuario();
    $user->cc = 102197916; 
    $user->pass = "equis";
    $user->nombre = "stivenson";
    $user->apellido = "garcia";
    $user->genero = "M";
    $user->email = "sgarciar@gmail.com";
    try{
       UsuarioCrud::agregar($user);
       echo "Usuario Guardado en la BD";
    
    } catch(Exception $error) {
        echo $error->getMessage();
    }
    */
    /*
    UsuarioCrud::buscar(1);
    */
    /*
    try{ 
    $u = UsuarioCrud::buscar(array(15454534));
    echo "Cedula: $u->cc<br/>";
    echo "Password: $u->pass<br/>";
    echo "Nombre: $u->nombre<br/>";
    echo "Apellido: $u->apellido<br/>";
    echo "Genero: $u->genero<br/>";
    echo "Email: $u->email<br/>";
    } 
    catch( Exception $error ){
    echo $error->getMessage();
    }
    */
    /*
    UsuarioCrud::editar(1);
    */
    /*
    try{ 
        echo "Antes de editar el Usuario<br/>";
        $u = UsuarioCrud::buscar(array(123456789));
        echo "Cedula: $u->cc<br/>";
        echo "Password: $u->pass<br/>";
        echo "Nombre: $u->nombre<br/>";
        echo "Apellido: $u->apellido<br/>";
        echo "Genero: $u->genero<br/>";
        echo "Email: $u->email<br/>";
        echo "Modificando el Email y Pass<br/>";
        $u->email = "stiven200212@hotmail.com";
        $u->pass = "avispa";
    
        $u = UsuarioCrud::editar($u);
        echo "Luego de Cambiar el Usuario<br/>";
        $u = UsuarioCrud::buscar(array(123456789));
        echo "Cedula: $u->cc<br/>";
        echo "Password: $u->pass<br/>";
        echo "Nombre: $u->nombre<br/>";
        echo "Apellido: $u->apellido<br/>";
        echo "Genero: $u->genero<br/>";
        echo "Email: $u->email<br/>";
    
    } 
        catch( Exception $error ){
        echo $error->getMessage();
        }
    
    */
    
    /*
    UsuarioCrud::eliminar();
    */
    /*
    try{
        echo "Buscando el Usuario<br/>";
        $u = UsuarioCrud::buscar(array(102197916));
        echo "Cedula: $u->cc<br/>";
        echo "Password: $u->pass<br/>";
        echo "Nombre: $u->nombre<br/>";
        echo "Apellido: $u->apellido<br/>";
        echo "Genero: $u->genero<br/>";
        echo "Email: $u->email<br/>";
        echo "Eliminado el Usuario<br/>";
        $estado = UsuarioCrud::eliminar(102197916);
        if ($estado == TRUE) {
            echo "El Usuario ha sido Eliminado<br/>";
        }
    else {
        echo "El Usuario no Existe<br/>";
    }
    
        echo "Buscando el Usuario Nuevamente<br/>";
        @$u = UsuarioCrud::buscar(array(102197916));
        echo "Cedula: $u->cc<br/>";
        echo "Password: $u->pass<br/>";
        echo "Nombre: $u->nombre<br/>";
        echo "Apellido: $u->apellido<br/>";
        echo "Genero: $u->genero<br/>";
        echo "Email: $u->email<br/>";
    
    } catch( Exception $error ){
        echo $error->getMessage();
        }
    
    
    
    /*
    UsuarioCrud::listar_usuario(1);
    */
    /*
    $listado = UsuarioCrud::listar();
    if (count($listado)== 0){
        echo "Usuario no existen usuarios que Mostrar";
        exit;
    }
    
    foreach ($listado as $indice => $u){
        echo "Cedula: $u->cc<br/>";
        echo "Password: $u->pass<br/>";
        echo "Nombre: $u->nombre<br/>";
        echo "Apellido: $u->apellido<br/>";
        echo "Genero: $u->genero<br/>";
        echo "Email: $u->email<br/>";
        echo "<hr/>";
    }
    
    /*
    //Usuario Eliminado
    $resultado = UsuarioCrud::eliminar($u);
    echo "Despues de Eliminado!!<br/>";
    $listado = UsuarioCrud::listar_usuario();
    foreach ($listado as $indice => $usuario){
        echo "Cedula: $usuario->cc<br/>";
        echo "Password: $usuario->pass<br/>";
        echo "Nombre: $usuario->nombre<br/>";
        echo "Apellido: $usuario->apellido<br/>";
        echo "Genero: $usuario->genero<br/>";
        echo "Email: $usuario->email<br/>";
        echo "<hr/>";
    }
    
    */
    
    
    
    
    









