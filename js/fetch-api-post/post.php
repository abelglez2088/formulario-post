<?php
$usuario = $_POST['usuario'];
$pass= $_POST['pass'];
if($usuario==='' || $pass===''){
    echo json_encode('false');

}else{
    echo json_encode('Correcto: </br> usuario: '.$usuario. '</br> pass:  '. $pass);
}
?>