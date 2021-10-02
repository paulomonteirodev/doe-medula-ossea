<?php 
if(!empty($_POST['del'])){
    deletar();
}

function deletar(){
    $del = $_POST['del'];

    if(unlink($del)){
        echo true;
    }
    echo false;
}
?>