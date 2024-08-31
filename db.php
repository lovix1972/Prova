<?php 
require_once 'config.php';

class Database extends Config
{
// Insert Data into database

public function insert( $n_pds, $data_pds, $protocollo, $capitolo, $art, $prog, $oggetto, $reparto){


$sql = 'INSERT INTO registro_pds ( n_pds, data_pds, protocollo, capitolo, art, prog, oggetto, reparto) VALUES (:n_pds, :data_pds, :protocollo, :capitolo, :art, :prog, :oggetto, :reparto)';

$stmt=$this->conn->prepare($sql);
$stmt->execute([
   
    'n_pds'=>$n_pds,
    'data_pds'=>$data_pds, 
    'protocollo'=>$protocollo,
    'capitolo'=>$capitolo,
    'art'=>$art,
    'prog'=>$prog,
    'oggetto'=>$oggetto,
    'reparto'=>$reparto
    ]);
    return true;

    }

    public function read(){
        $sql='SELECT * FROM registro_pds ORDER BY id_pds ';
        $stmt=$this->conn->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAll();
    return $result;
    }   
    
    
    public function readOne($id){
        $sql='SELECT * FROM registro_pds where id_pds = :id ';
        $stmt=$this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        $result=$stmt->fetch();
    return $result;
    }   
    

// update PDS

public function update( $id, $n_pds, $data_pds, $protocollo, $capitolo, $art, $prog, $oggetto, $reparto){
    $sql='UPDATE registro_pds SET n_pds = :n_pds, data_pds = :data_pds, protocollo = :protocollo, capitolo = :capitolo, art = :art, prog = :prog, oggetto = :oggetto, reparto = :reparto WHERE id_pds = :id';
    $stmt=$this->conn->prepare($sql);
    $stmt->execute([
        'n_pds'=>$n_pds,
        'data_pds'=>$data_pds, 
        'protocollo'=>$protocollo,
        'capitolo'=>$capitolo,
        'art'=>$art,
        'prog'=>$prog,
        'oggetto'=>$oggetto,
        'reparto'=>$reparto,
        //'id' => $id
    ]);

return true;
}   


}
?>
