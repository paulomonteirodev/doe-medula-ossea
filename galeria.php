<?php
	$cabecalho_title = "Galeria de Fotos"; 
	include("cabecalho.php")
?>
    
    <!-- CONTEUDO -->
    <div class="conteudo-full-galeria">
        <section class="layout">
            <article>
                <h1>Galeria de Fotos</h1>
                <ul id="galeria">
                    <?php
                        $path = "img/galeria";
                        $dir = dir($path);
                        while($arq = $dir->read()){
                            if($arq != "." && $arq != "..")
                            echo '<li><img src="'.$path.'/'.$arq.'" /></li>';
                        }
                    ?>
                </ul>
            </article>
        </section>
    </div>
    <!-- FIM CONTEUDO -->

	<?php include("rodape.php") ?>
</body>
</html>