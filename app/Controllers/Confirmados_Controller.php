<?php namespace App\Controllers;

use App\Models\Confirmados_Models;

class Confirmados_Controller extends BaseController
{
	
    public function index(){
        $Confirmados_Models=new Confirmados_Models();
        $BuscarConfirmado=$Confirmados_Models->asObject()->findAll();

        $TraerConfirmadoalaVista=array('Confirmados'=>$BuscarConfirmado);

        return view('Registro_Confirmados',$TraerConfirmadoalaVista);
        //return view('Registro_Confirmados');
    }
    public function Crear(){
        $Confirmados_Models=new Confirmados_Models();
         
       $Nombres_C=$this->request->getPost('Nombres_C');
       $Apellidos_C=$this->request->getPost('Apellidos_C');
       $Cedula_C=$this->request->getPost('Cedula_C');
       $Direccion_C=$this->request->getPost('Direccion_C');
       $Barrio=$this->request->getPost('Barrio');
       $Fecha_diagnostico=$this->request->getPost('Fecha_diagnostico');
       $Cant_personas_riesgo=$this->request->getPost('Cant_personas_riesgo');

       $Confirmados_Models->save([
           'Nombres_C'=>$Nombres_C,
           'Apellidos_C'=>$Apellidos_C,
           'Cedula_C'=>$Cedula_C,
           'Direccion'=>$Direccion,
           'Barrio'=>$Barrio,
           'Fecha_diagnostico'=>$Fecha_diagnostico,
           'Cant_personas_riesgo'=>$Cant_personas_riesgo
       ]);
       return redirect()->to(base_url('public/Confirmados'))->with('MENSAJE',"CREADO CON EXITO");
    }
    
    public function eliminar($Id_contagiado){

        $Confirmados_Models=new Confirmados_Models();

        $Confirmados_Models->where('Id_contagiado',$Id_contagiado)->delete();

        return redirect()->to(base_url('public/Confirmados'));
    }
    public function Actualizar($Id_contagiado){

        $Confirmados_Models=new Confirmados_Models();

       $Nombres_C=$this->request->getPost('Nombres_C2');
       $Apellidos_C=$this->request->getPost('Apellidos_C2');
       $Cedula_C=$this->request->getPost('Cedula_C2');
       $Direccion_C=$this->request->getPost('Direccion_C2');
       $Barrio=$this->request->getPost('Barrio2');
       $Fecha_diagnostico=$this->request->getPost('Fecha_diagnostico2');
       $Cant_personas_riesgo=$this->request->getPost('Cant_personas_riesgo2');

       
       $Confirmados_Models->update($Id_contagiado,[
        
           'Nombres_C'=>$Nombres_C,
           'Apellidos_C'=>$Apellidos_C,
           'Cedula_C'=>$Cedula_C,
           'Direccion'=>$Direccion,
           'Barrio'=>$Barrio,
           'Fecha_diagnostico'=>$Fecha_diagnostico,
           'Cant_personas_riesgo'=>$Cant_personas_riesgo
       ]);

       return redirect()->to(base_url('public/Confirmados'));
        
    }
    

	//--------------------------------------------------------------------

}