<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/modelo/entidades/usuario.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/modelo/entidades/cancion.php';
require_once $_SERVER['DOCUMENT_ROOT']. '/modelo/crud/usuariocrud.php';

 class CancioneCrud{
    // propiedades
    
    public static function agregar($ac) {
    try {
        $ac->save();
    } catch ( Exception $error) {
        throw new Exception("error al guardar la Cancion<br>Detalles: " .$error->getMessage());
    }
    }
    
    public static function buscar($cc) {
        try {
           return Cancione::find_by_usuariocc($cc);
           //return $ac;
        } catch ( Exception $error) {
            throw new Exception("error al buscar la Cancion<br>Detalles: " .$error->getMessage());
        }
    }
        
    
    public static function editar($ac) {
        try{
        $ac->save();
        //return $u;
     } catch (Exception $error) {
        throw new Exception("error al editar la Cancion<br>Detalles: " .$error->getMessage());
     }
    
    }

    public static function eliminar($ac) {
        try{
            $ac->delete();
        } catch(Exception $error){
            throw new Exception("error al eliminar al Usuario<br>Detalles: " .$error->getMessage());
        }
    
        }

        public static function listar(){
            return Cancione::all();
       }
   
    
    }

   // CancioneCrud::agregar(1);
/*
    $u = UsuarioCrud::buscar(array("15454534"));
    $cancion = new Cancione();
    $cancion->nombre = "dfd";
    $cancion->ritmo = "dfdfd";
    $cancion->duracion = "gfgf";
    $cancion->album = "dfdf";
    $cancion->posicionenalbum = "4";
    $cancion->banda = "pulled";
    $cancion->interprete = "pasme";
    $cancion->autor = "jul";
    $cancion->fechalanzamiento = '13-05-2019';
    $cancion->usuariocc= $u->cc;
    try{
       $estado = CancioneCrud::agregar($cancion);
       echo "Cancion Guardada en la BD";
    
    } catch(Exception $error) {
        echo $error->getMessage();
    }
  */

    // CancioneCrud::buscar(1);
    /*
    try{ 
        
       $ac = Cancione::find_by_usuariocc(array(15454534));
        echo "ID: $ac->id<br/>";
    echo "Nombre: $ac->nombre<br/>";
    echo "Ritmo: $ac->ritmo<br/>";
    echo "Duracion: $ac->duracion<br/>";
    echo "Album: $ac->album<br/>";
    echo "Posicionenalbum: $ac->posicionenalbum<br/>";
    echo "Banda: $ac->banda<br/>";
    echo "Interprete: $ac->interprete<br/>";
    echo "Autor: $ac->autor<br/>";
    echo "fechalanzamiento: $ac->fechalanzamiento<br/>";
        } 
      catch( Exception $error ){
        echo $error->getMessage();
        }

    */

    //CancioneCrud::editar(1);
/*
    try{ 
        echo "Antes de editar la Cancion<br/>";
        $ac = Cancione::find_by_usuariocc(array(15454534));
    echo "ID: $ac->id<br/>";
    echo "Nombre: $ac->nombre<br/>";
    echo "Ritmo: $ac->ritmo<br/>";
    echo "Duracion: $ac->duracion<br/>";
    echo "Album: $ac->album<br/>";
    echo "Posicionenalbum: $ac->posicionenalbum<br/>";
    echo "Banda: $ac->banda<br/>";
    echo "Interprete: $ac->interprete<br/>";
    echo "Autor: $ac->autor<br/>";
    echo "fechalanzamiento: $ac->fechalanzamiento<br/>";

        echo "Modificando el Nombre y Ritmo<br/>";
        $ac->nombre = "brunomars";
        $ac->ritmo = "pop";
    
        $ac = CancioneCrud::editar($ac);
        echo "Luego de Cambiar la Cancion<br/>";
        $ac = Cancione::find_by_usuariocc(array(15454534));
    echo "ID: $ac->id<br/>";
    echo "Nombre: $ac->nombre<br/>";
    echo "Ritmo: $ac->ritmo<br/>";
    echo "Duracion: $ac->duracion<br/>";
    echo "Album: $ac->album<br/>";
    echo "Posicionenalbum: $ac->posicionenalbum<br/>";
    echo "Banda: $ac->banda<br/>";
    echo "Interprete: $ac->interprete<br/>";
    echo "Autor: $ac->autor<br/>";
    echo "fechalanzamiento: $ac->fechalanzamiento<br/>";
    
    } 
        catch( Exception $error ){
        echo $error->getMessage();
        }
*/


/*
    CancioneCrud::eliminar();
    */
/*
    try{
        echo "Buscando la Cancion<br/>";
        $cancion = Cancione::find_by_usuariocc(array(434343443));
    echo "ID: $ac->id<br/>";
    echo "Nombre: $ac->nombre<br/>";
    echo "Ritmo: $ac->ritmo<br/>";
    echo "Duracion: $ac->duracion<br/>";
    echo "Album: $ac->album<br/>";
    echo "Posicionenalbum: $ac->posicionenalbum<br/>";
    echo "Banda: $ac->banda<br/>";
    echo "Interprete: $ac->interprete<br/>";
    echo "Autor: $ac->autor<br/>";
    echo "fechalanzamiento: $ac->fechalanzamiento<br/>";
       $estado = CancioneCrud::eliminar($ac);
       echo "Eliminada la Cancion<br/>";
       if ($estado == TRUE) {
        echo "El Usuario ha sido Eliminado<br/>";
    }
else {
    echo "El Usuario no Existe<br/>";
}
    echo "Buscando el Usuario Nuevamente<br/>";
    @$cancion = Cancione::find_by_usuariocc(array(434343443));
    echo "ID: $ac->id<br/>";
    echo "Nombre: $ac->nombre<br/>";
    echo "Ritmo: $ac->ritmo<br/>";
    echo "Duracion: $ac->duracion<br/>";
    echo "Album: $ac->album<br/>";
    echo "Posicionenalbum: $ac->posicionenalbum<br/>";
    echo "Banda: $ac->banda<br/>";
    echo "Interprete: $ac->interprete<br/>";
    echo "Autor: $ac->autor<br/>";
    echo "fechalanzamiento: $ac->fechalanzamiento<br/>";
} catch( Exception $error ){
    echo $error->getMessage();
    }
*/

    
/*

    CancioneCrud::listar(1);
    */
/*
    $listado = CancioneCrud::listar();
    if (count($listado)== 0){
        echo "No existen Canciones que Mostrar";
        exit;
    }
    
    foreach ($listado as $indice => $ac){
        echo "ID: $ac->id<br/>";
    echo "Nombre: $ac->nombre<br/>";
    echo "Ritmo: $ac->ritmo<br/>";
    echo "Duracion: $ac->duracion<br/>";
    echo "Album: $ac->album<br/>";
    echo "Posicionenalbum: $ac->posicionenalbum<br/>";
    echo "Banda: $ac->banda<br/>";
    echo "Interprete: $ac->interprete<br/>";
    echo "Autor: $ac->autor<br/>";
    echo "fechalanzamiento: $ac->fechalanzamiento<br/>";
    }

     
    //Usuario Eliminado
    $resultado = CancioneCrud::eliminar($ac);
    echo "Despues de Eliminado!!<br/>";
    $listado = CancioneCrud::listar();
    foreach ($listado as $indice => $ac){
        echo "ID: $ac->id<br/>";
    echo "Nombre: $ac->nombre<br/>";
    echo "Ritmo: $ac->ritmo<br/>";
    echo "Duracion: $ac->duracion<br/>";
    echo "Album: $ac->album<br/>";
    echo "Posicionenalbum: $ac->posicionenalbum<br/>";
    echo "Banda: $ac->banda<br/>";
    echo "Interprete: $ac->interprete<br/>";
    echo "Autor: $ac->autor<br/>";
    echo "fechalanzamiento: $ac->fechalanzamiento<br/>";
    }
  
   */
    

   