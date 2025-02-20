<?php 

    require "./src/conection.php";
    require "./src/Model/decoracao.php";
    require "./src/repository/repositorioDecoracao.php";

    $decoracaoRepositorio = new DecoracaoRepositorio($pdo);
    $dadosDecoracao = $decoracaoRepositorio->listaDecoracao();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./ImagensSite-LuzeCor/Luz e cor.png" type="image/x-icon" />
    <link rel="stylesheet" href="./styles/pags/decoracoes.css">
    <link rel="stylesheet" href="./styles/global.css">
    
    <title>Luz e Cor - Decoracoes</title>
</head>
<body>

<header>
    <a href="/">  <img class="logo_LuzECor" src="./ImagensSite-LuzeCor/Luz e cor.png" alt="Logo"> </a> 
    <a class="menu" href="/">HOME</a>
    <a class="menu" href="/decoracoes.php">DECORAÇÕES</a>
    <a class="menu" href="/parceria.php">PARCERIA</a>
    <a class="menu" href="/contato.php">CONTATO</a>
    <a href="">  <img class="logo_Whats" src="./ImagensSite-LuzeCor/Fotos/Whats.png" alt="LogoWhats" > </a> 
</header>

<section class="banner_01">
    <div class="main_content_banner_01"> 
        <img class="duasCriancas" src="./ImagensSite-LuzeCor/Fotos/Criança6_Nuvem.png" alt="Criança3_Nuvem">
        <div class="texto_banner_01">
            <h2>Celebre como um verdadeiro herói ou princesa! </h2>
            <div>
                <p>Trazemos à vida ao mundo encantado dos</p>
                <p>personagens favoritos das crianças.</p>
            </div>
            <h2>Veja as festas mágicas que já criamos!</h2>

        </div>
        
    </div>
    <img src="./ImagensSite-LuzeCor/Fotos/arrowDown.gif" alt="arrowDown" class="arrowDown">
</section>

<section class="destacados_container">
    <h2 class="titulos_categorias">Destacados</h2>
    <div class="categorias_content">
        <?php foreach($dadosDecoracao as $decoracaoDestacada):
        //Comando para destacar apenas as decorações em alta
        if($decoracaoDestacada->getHighlighted() == 0){
            continue;
        }
        ?>
        <a class="ancorDecoracao" href="">   
            <div class="cardDecoracao" >
                <img src=" <?php echo "./ImagensSite-LuzeCor/Fotos_decoracoes/" . $decoracaoDestacada->getFilePath() ?>" class="imagemDecoracao" alt="<?php echo $decoracaoDestacada->getFilePath() ?>">
                <div class="cardTextContent">
                    <h5 class="card-title-decoracao"><?php echo $decoracaoDestacada->getTitle() ?></h5>
                    <p class="card-text-decoracao"><?php echo $decoracaoDestacada->getSummary() ?></p>
                </div>
             </div>
        </a> 
        <?php endforeach;?>
    </div>
</section>

<section class="todas_container">
    <h2 class="titulos_categorias">Todas</h2>
    <div class="categorias_content">
    <?php foreach($dadosDecoracao as $decoracaoDestacada):?>
        <a class="ancorDecoracao" href="">   
            <div class="cardDecoracao" >
                <img src=" <?php echo "./ImagensSite-LuzeCor/Fotos_decoracoes/" . $decoracaoDestacada->getFilePath() ?>" class="imagemDecoracao" alt="<?php echo $decoracaoDestacada->getFilePath() ?>">
                <div class="cardTextContent">
                    <h5 class="card-title-decoracao"><?php echo $decoracaoDestacada->getTitle() ?></h5>
                    <p class="card-text-decoracao"><?php echo $decoracaoDestacada->getSummary() ?></p>
                </div>
             </div>
        </a> 
        <?php endforeach;?>
    </div>
</section>

<section class="banner_02">
    <div class="main_content_banner_02"> 
        <div>
            <img class="criancaMeninaApontando" src="./ImagensSite-LuzeCor/Fotos/Criança7_Nuvem.png" alt="Criança3_Nuvem">
        </div>
        <div class="texto_banner_02">
            <h2>Ficou encantado(a) com o que viu? 😍</h2>
            <div>
            <p> Por que não entrar em contato agora e começar a</p>
            <p>planejar a festa dos sonhos?</p>
            </div>
            <a class="button_contact" href=""><strong>ENTRE EM CONTATO AGORA!</strong></a>
        </div>
    </div>
</section>

<footer>

    <a href="">  <img class="Logo_footer"   src="./ImagensSite-LuzeCor/Luz e cor.png" alt="Logo"> </a>
    <div class="contato_footer">
    <h3>Contato</h3> 
    <div class="contato_footer_numero">
    <a href="">  <img class="iconWhats_footer" src="./ImagensSite-LuzeCor/Fotos/Whats.png" alt="LogoWhats" > </a> 
    <p><strong>(19) 99601-7447</strong></p>
    </div>
    </div>
    <div class="redes_footer">
        <h3>Redes sociais</h3> 
        <div class="redes_footer_icons">
        <a href=""> <img class="iconFacebook_footer" src="./ImagensSite-LuzeCor/Fotos/FAce.png" alt=""></a>
        <a href=""> <img class="iconInstagram_footer" src="./ImagensSite-LuzeCor/Fotos/Insta.png" alt=""></a>
        </div>
    </div>
</footer>
    
</body>
</html>