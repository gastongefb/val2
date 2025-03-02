<?php

namespace App\Models;

use CodeIgniter\Model;

class ValidacionModel extends Model
{
    //protected $table = 'materias';

    protected $primaryKey = 'id_valoracion';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['dni', 'id_titulo','j1','j2','j3','id_materia_valoracion','id_condicion'];

    protected $table = 'valoracion';

    public function getValidacion()
    {
        return $this->findAll();
    }

    public function getUnaValidacion($d)
    {
        $db = \Config\Database::connect();
        $builder = $this->db->query("select * from validación where dni = $d");
        return $builder->getResult();
    }
    public function obtenerUltimoID()
    {
        return $this->insertID();
    }

    public function obtenerUltimoCampoDeseado()
    {
        $ultimoRegistro = $this->orderBy('id_valoracion', 'DESC')->first();
        return $ultimoRegistro ? $ultimoRegistro['id_valoracion'] : null;
    }

    public function etLastInsertedIdFromOtraTablag()
    {
    // Obtener la conexión a la base de datos
    $db = db_connect();

    // Verificar si la conexión es válida
    if ($db) {
        // Obtener el último ID insertado usando la conexión a la base de datos
        $query = $db->query('SELECT LAST_INSERT_ID() as last_id');
        $row = $query->getRow();
        
        // Verificar si se obtuvo alguna fila
        if ($row) {
            // Devolver el último ID insertado
            return $row->last_id;
        } else {
            // No se pudo obtener el último ID insertado, manejar el caso de error según sea necesario
            return -1; // Por ejemplo, devolvemos -1 como indicador de error
        }
    } else {
        // La conexión a la base de datos no es válida, manejar el caso de error según sea necesario
        return -1; // Por ejemplo, devolvemos -1 como indicador de error
    }
   }

}