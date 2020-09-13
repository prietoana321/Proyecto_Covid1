<?php namespace App\Models;

use CodeIgniter\Model;

class Posibles_Models extends Model{
    
    protected $table ='Posibles_Casos';
    protected $primaryKey = 'Id_Posible_Caso';
    protected $allowedfields = ['Nombres','Apellidos','Cedula','Direccion','Barrio_Residencia',
    'Sintomas','Fecha_Cita_medica','Celular','Circulo_Afectados'];

}