<?php namespace App\Models;

use CodeIgniter\Model;

class Confirmados_Models extends Model{
    
    protected $table ='Casos_Confirmados';
    protected $primaryKey = 'Id_contagiado';
    protected $allowedfields = ['Nombres_C','Apellidos_C','Cedula_C','Direccion_C','Barrio',
    'Fecha_diagnostico','Cant_personas_riesgo'];

}