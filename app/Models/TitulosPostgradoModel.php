<?php

namespace App\Models;

use CodeIgniter\Model;

class TitulosPostgradoModel extends Model
{
    //protected $table = 'materias';

    protected $primaryKey = 'id_titulo_postgrado';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['detalle_postgrado','puntaje'];

    protected $table = 'titulos_postgrado';

    public function getValidacion()
    {
        return $this->findAll();
    }

    public function obtenerDatoRelacionadoPorDNI($dni)
    {
        // Consulta a la base de datos para obtener el dato relacionado basado en el DNI
        echo $dni;
        $query = $this->where('id_titulo_postgrado', $dni)
                      ->first(); // Obtiene el primer resultado

        // Verificar si se encontró un registro con el DNI dado
        if ($query) {
            // Si se encontró, devolver el valor del campo dato_relacionado
            return $query['puntaje'];
        } else {
            // Si no se encontró ningún registro con el DNI dado, devolver un valor por defecto o NULL
            return null;
        }
    }

    
}