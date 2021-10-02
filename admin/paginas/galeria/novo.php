<?php require_once("../header.php");

if(isset($_POST['send'])){
    $arq = $_FILES['arq'];

    $permissao = array('image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png');
    $ext       = ($arq['type'] == 'image/png' ? '.png' : '.jpg');
    $size      = 1024 * 1024 * 10;
    $pasta = "../../../img/galeria";


    for ($i=0; $i < count($arq['tmp_name']); $i++) { 
        if($arq['size'][$i] > $size){
            echo "Não foi possivel enviar a imagem <b>{$arq['name'][$i]}</b>. Imagem não pode ser maior do que 10mb.<br>";
        }elseif(!in_array($arq['type'][$i], $permissao)){
            echo "Não foi possivel enviar o arquivo <b>{$arq['name'][$i]}</b>. Apenas imagens podem ser enviadas.<br>";
        }
        else{
            $nome = time().md5(time().$arq['name'][$i]).$ext;

            if(move_uploaded_file($arq['tmp_name'][$i], $pasta.'/'.$nome)){
                echo "Enviado com sucesso!<br>";
            }else{
                echo "Erro ao enviar.<br>";
            }
        }
    }
}

?>

<div class="container">

    <form action="" method="post" enctype="multipart/form-data">
        <label>Arquivo:</label><br>
        <input type="file" name="arq[]" multiple>
        <br>
        <br>

        <input class="btn btn-default" type="submit" value="Enviar Arquivos" name="send" />
    </form>

</div><!-- /.container -->

<?php require_once("../footer.php") ?>