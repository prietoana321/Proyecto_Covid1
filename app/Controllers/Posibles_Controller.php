<?php namespace App\Controllers;

use App\Models\Posibles_Models;

class Posibles_Controller extends BaseController
{
    public function index()
	{
        $Posibles_Models=new Posibles_Models();
        $BuscarPosible=$Posibles_Models->asObject()->findAll();

        $TraerPosiblealaVista=array('Posibles'=>$BuscarPosible);

        return view('Registro_Posibles',$TraerPosiblealaVista);
        //return view('Registro_Confirmados');
    }
    public function eliminar($Id_Posible_Caso){
        $Posibles_Models=new Posibles_Models();

        $Posibles_Models->where('Id_Posible_Caso',$Id_Posible_Caso)->delete();

        return redirect()->to(base_url('public/Posibles'));
    }
    public function Crear(){

        $Posibles_Models=new Posibles_Models();
         
       $Nombres=$this->request->getPost('Nombres');
       $Apellidos=$this->request->getPost('Apellidos');
       $Cedula=$this->request->getPost('Cedula');
       $Direccion=$this->request->getPost('Direccion');
       $Barrio_Residencia=$this->request->getPost('Barrio_Residencia');
       $Sintomas=$this->request->getPost('Sintomas');
       $Fecha_Cita_medica=$this->request->getPost('Fecha_Cita_medica');
       $Celular=$this->request->getPost('Celular');
       $Circulo_Afectados=$this->request->getPost('Circulo_Afectados');

       $Posibles_Models->save([
           'Nombres'=>$Nombres,
           'Apellidos'=>$Apellidos,
           'Cedula'=>$Cedula,
           'Direccion'=>$Direccion,
           'Barrio_Residencia'=>$Barrio_Residencia,
           'Sintomas'=>$Sintomas,
           'Fecha_Cita_medica'=>$Fecha_Cita_medica,
           'Celular'=>$Celular,
           'Circulo_Afectados'=>$Circulo_Afectados
       ]);
       return redirect()->to(base_url('public/Posibles'))->with('MENSAJE',"CREADO CON EXITO");

        
    }
    public function Actualizar($Id_Posible_Caso){

        $Posibles_Models=new Posibles_Models();

        $Nombres=$this->request->getPost('Nombres2');
        $Apellidos=$this->request->getPost('Apellidos2');
        $Cedula=$this->request->getPost('Cedula2');
        $Direccion=$this->request->getPost('Direccion2');
        $Barrio_Residencia=$this->request->getPost('Barrio_Residencia2');
        $Sintomas=$this->request->getPost('Sintomas2');
        $Fecha_Cita_medica=$this->request->getPost('Fecha_Cita_medica2');
        $Celular=$this->request->getPost('Celular2');
        $Circulo_Afectados=$this->request->getPost('Circulo_Afectados2');

       
       $Posibles_Models->update($Id_Posible_Caso,[

           'Nombres'=>$Nombres,
           'Apellidos'=>$Apellidos,
           'Cedula'=>$Cedula,
           'Direccion'=>$Direccion,
           'Barrio_Residencia'=>$Barrio_Residencia,
           'Sintomas'=>$Sintomas,
           'Fecha_Cita_medica'=>$Fecha_Cita_medica,
           'Celular'=>$Celular,
           'Circulo_Afectados'=>$Circulo_Afectados
       ]);

       return redirect()->to(base_url('public/Posibles'));
        
    }
	//--------------------------------------------------------------------

}
