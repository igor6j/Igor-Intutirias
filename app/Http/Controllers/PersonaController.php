<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonaController extends Controller
{
    function listar()
    {
    	return view('personas.listar');
    }
    function registrar()
    {
    	return view('personas.registrar');
    }
    function guardar(Request $request)
    {
    	return $request->txtProfesion;
    	//return "CREAR PRODUCTOS jejeje";
    }
    //function editar($id,$Profesion,$Nombre,$Primer_apellido,$Segundo_apellido,$Fecha_nacimiento,$Edad,$Estado);
    //{
		//return view('personas.editar',['id'=>$id,'Profesionp' =>$Profesion,'Nombrep' =>$Nombre,'Primer_apellidop' =>$Primer_apellido,'Segundo_apellidop' =>$Segundo_apellido,'Fecha_nacimientop' =>$Fecha_nacimiento,'Edadp' =>$Edad,'Estadop' =>$Estado]);
    	//return $id;
    //}
    function editar($id)
    {
    	return view('personas.editar',['id'=>$id]);
    }
    
    function modificar($id,Request $request)
    {
    	return $id." Profesion_id ".$request->txtProfesion_id." Nombre ".$request->txtNombre." Primer_apellido ".$request->txtPrimer_apellido." Segundo_apellido ".$request->txtSegundo_apellido." Fecha_nacimiento ".$request->txtFecha_nacimiento." Edad ".$request->txtEdad." Estado ".$request->txtEstado;
    }
    function eliminar($id)
    {
    	//return "id de registro eliminado: ".$id;
    	return redirect('/persona');
    }


}