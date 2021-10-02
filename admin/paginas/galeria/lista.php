<?php require_once("../header.php"); ?>

<div class="container">

    <a class="btn btn-primary" href="novo.php">Adicionar Imagens</a>

    <table class="table">
        <thead>
            <th>Imagem</th>
            <th>Nome</th>
            <th></th>
        </thead>

        <tbody>
            <?php
                $path = "../../../img/galeria";
                $dir = dir($path);

                while($arq = $dir->read()){
                    if($arq != '.' && $arq != '..'){
                        echo '<tr>
                                <td><img style="width: 100px" src="'.$path.'/'.$arq.'" /></td>
                                <td>'.$arq.'</td>
                                <td><a data-toggle="modal" data-target="#myModal" class="excluir" id="'.$path.'/'.$arq.'">Excluir</a></td>
                            </tr>
                        ';
                    }
                }
            ?>

        </tbody>
    </table>

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Deseja excluir este arquivo?</h4>
                </div>

                <div class="modal-footer">
                    <button id="yes" type="button" class="btn btn-danger" data-dismiss="modal" autofocus>Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function(){
            var img = "";
            $(".excluir").click(function(){
                img = $(this);
            });

            $("#yes").click(function(){
                $.post("funcoes.php", { del: img.attr("id") }, function(result){
                    if(result)
                        img.closest("tr").remove();
                    else
                        alert("Não foi possivel deletar a imagem");
                });
            });
        });
    </script>
</div><!-- /.container -->

<?php require_once("../footer.php") ?>