<?php
include_once(dirname(__FILE__) . '/../config/connexion.php');

class Modele extends ConnexionDB
{
    public $dataQuery;

    /*
    * Fonction générer automatiquement les colonnes d'une table par des valeurs nulles.
    * Sera permettra d'exécuter une procédure sans à avoir besoins d'insérer
    * les valeurs nulles manuellement.
    * Si @param id est donnée, il ajoute la valeur de l'id.
    * @param dataException est une chaine de caractère qui spécifier les colonnes que nous
    * nous ne voulons pas récupérer. Cet param permet de faire correspondre les params de la procédure
    * à notre besoin.
    */
    public function colmnMatch($column, $tableName, $dataException)
    {
        try {
            $exception = !empty($dataException) ? ',' . $dataException  : null;
            $this->dataQuery = " SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = '$tableName' AND COLUMN_NAME
             NOT IN ('update_date','create_date'" . $exception . ")";
            $result = $this->dbQuery($this->dataQuery);
            if (count($result) > 0) {
                $data = array();
                foreach ($result as $key => $value) {
                    $verify_column = $value[0];
                    if (!empty($column) && array_key_exists($verify_column, $column)) {
                        array_push($data, $column[$verify_column]);
                    } else {
                        array_push($data, '');
                    }
                }
            }
        } catch (PDOException $e) {
            return $e->getMessage();
        }
        return $data;
    }

    /*
    ** Function to request in the database by stored procedure
    * @param mixed ps procedure name
    * @param  int operation 0 select all, 1 insert, 2 update, 3 delete, 4 select by id
    * @param data query data
    * @param all choose site and country,put '' if you not choose site or country
    ** 
    */
    public function getProcedure($ps, $operation, $data = array())
    {
        try {
            $ps_query = "SET NOCOUNT ON;EXEC $ps " . (int) $operation . ",";
            foreach ($data as $key => $val) {
                $ps_query .= "'$val',";
            }
            $ps_query = substr($ps_query, 0, -1);
            $ps_query .= ";";
            // var_dump($ps_query);
            $this->dataQuery = $ps_query;
            return $this->dbQuery($this->dataQuery);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    public function getProcedureString($ps, $operation, $data = array())
    {
        try {
            $operation = 'SELECT * FROM  test';
            $ps_query = "SET NOCOUNT ON;EXEC $ps " . (string) "'$operation'" . ",";
            foreach ($data as $key => $val) {
                $ps_query .= "'$val',";
            }
            $ps_query = substr($ps_query, 0, -1);
            $ps_query .= ";";
            $this->dataQuery = $ps_query;
            return $this->dbQuery($this->dataQuery);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }


    public function getProcedureFree($operation)
    {
        try {
            $ps_query = "SET NOCOUNT ON;EXEC PS_FREE_QUERY " . (string) "'$operation'";
            $this->dataQuery = $ps_query;
            var_dump($ps_query);
            return $this->dbQuery($this->dataQuery);
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }

    // public function getProcedureFree($sql) {
    //     try {
    //         $stmt = $this->dataQuery->prepare($sql);
    //         $stmt->execute();
    //         return $stmt->fetchAll(PDO::FETCH_ASSOC);
    //     } catch (PDOException $e) {
    //         echo $e->getMessage();
    //         return null;
    //     }
    // }
}