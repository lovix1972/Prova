

<?php
require_once 'db.php';
require_once 'util.php';
$db= new Database;
$util= new Util;

// handle Add
if(isset($_POST['add'])){
   
$n_pds          = $util->testInput($_POST['n_pds']);
$data_pds       = $util->testInput($_POST['data_pds']);
$protocollo     = $util->testInput($_POST['protocollo']);
$capitolo       = $util->testInput($_POST['capitolo']);
$art            = $util->testInput($_POST['art']);
$prog           = $util->testInput($_POST['prog']);
$oggetto        = $util->testInput($_POST['oggetto']);
$reparto        = $util->testInput($_POST['reparto']);
if ($db->insert( $n_pds, $data_pds, $protocollo, $capitolo, $art, $prog, $oggetto, $reparto)){

    echo $util->showMessage('Success', 'Dati registrati!');

}else{
    echo $util->showMessage('Attenzione','Qualcosa è andato storto!');
}

}
if (isset($_GET['read'])){

    $pds=$db->read();

   $output='';
if($pds){
    foreach ($pds as $row) {
            $output .= '<tr>
                        <td>'.$row['id_pds'].'</td>
                         <td>'.$row['n_pds'].'</td>
                       
                         <td>'.$row['protocollo'].'</td>
                           <td>'.$row['data_pds'].'</td>
                         <td>'.$row['capitolo'].'</td>
                         <td>'.$row['art'].'</td>
                         <td>'.$row['prog'].'</td>
                          <td>'.$row['oggetto'].'</td>
                          <td>'.$row['reparto'].'</td>
                         
                        <td>
                        <a href="#" id="' . $row['id_pds'] .'" class="btn btn-success btn-sm rounded-pill py-0 editLink" data-toggle="modal" data-target="#editmodale">Edit</a>
                        <a href="#" id="' . $row['id_pds'] .'" class="btn btn-danger btn-sm rounded-pill py-0">Delete</a>
                        </td>
                        </tr>';
    }
    echo $output;
}else{

    echo '<tr>
            <td colspan="9">Dati non presenti</td>
            </tr>';
}
}

// handle Edit

if(isset($_GET['edit'])){
$id=$_GET['id'];

$pds=$db->readOne($id);


echo json_encode($pds);
}

// Hnadle Update

if(isset($_POST['update'])) {


   $id =            $util->testInput($_POST['id']);
   $n_pds =         $util->testInput($_POST['n_pds']);
   $data_pds =      $util->testInput($_POST['data_pds']);
   $protocollo =    $util->testInput($_POST['protocollo']);
   $capitolo =      $util->testInput($_POST['capitolo']);
   $art =           $util->testInput($_POST['art']);
   $prog =          $util->testInput($_POST['prog']);
   $oggetto =       $util->testInput($_POST['oggetto']);
   $reparto =       $util->testInput($_POST['reparto']);


    if($db->update($id, $n_pds, $data_pds, $protocollo, $capitolo, $art, $prog, $oggetto, $reparto)){


    echo $util->showMessage('Modifica eseguita', 'Dati Aggiornati!');

    } else {

    echo $util->showMessage('Attenzione', 'Qualcosa è andato storto!');
    }
}

?>

