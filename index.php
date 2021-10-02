<!DOCTYPE html>
<html>
<head>
    <title>Doe Medula Óssea</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="icon" href="img/icone.png" type="image/png" />

    <link rel="stylesheet" href="css/estilo.css" />

    <script src="jQuery/jquery-3.2.1.min.js"></script>
    <script src="jQuery/jquery.cycle.all.js"></script>
    <script src="js/banner.js"></script>
    <script src="js/funcoes.js"></script>
</head>

<body>
    <header id="index-site-header">
        <?php include("menu.php"); ?>

        <!-- BANNER -->
        <section id="campanha-full">
            <div class="layout">
                <div id="slide-conteiner">
                    <div id="slide-conteiner-full">
                        <ul>
                            <li><img class="banner" src="img/campanha1.jpg" /></li>
                            <li><img class="banner" src="img/campanha2.jpg" /></li>
                            <li><img class="banner" src="img/campanha3.jpg" /></li>
                        </ul>
                    </div>
                    <span class="pager"></span>
                </div>
            </div>
        </section>
        <!-- FIM BANNER -->
    </header>

    <!-- CONTEUDO -->
    <div class="conteudo-full">
        <section class="layout">
            <article>
                <ul id="atividades">
                    <li id="bolinha01">
                        <a href="http://redome.inca.gov.br/doador-atualize-seu-cadastro/" target="_blank">
                            <div id="foto01"></div>
                            <h1>Dados de Doador</h1>
                            <p>Mantenha todos os seus dados de doador sempre atualizado.</p>
                        </a>
                    </li>
                    <li id="bolinha02">
                        <a href="palestras">
                            <div id="foto02"></div>
                            <h1>Palestras</h1>
                            <p>Confira onde serão realizadas as próximas palestras.</p>
                        </a>
                    </li>
                    <li id="bolinha03">
                        <a href="locais-para-doar">
                            <div id="foto03"></div>
                            <h1>Locais para Doar</h1>
                            <p>Veja agora mesmo onde ficam os locais para doação.</p>
                        </a>
                    </li>
                    <li id="bolinha04">
                        <a href="galeria-de-fotos">
                            <div id="foto04"></div>
                            <h1>Galeria</h1>
                            <p>Aqui estão as fotos de todas as atividades realizadas.</p>
                        </a>
                    </li>
                </ul>
            </article>
        </section>
    </div>
    <!-- FIM CONTEUDO -->
    
    <?php include("rodape.php") ?>
</body>
</html>
