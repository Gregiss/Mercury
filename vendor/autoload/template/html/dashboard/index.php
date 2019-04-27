<?php 
if(isset($work)){?>
<html>
<head>
  <meta charset="UTF-8">
  <title><?php echo $title;?></title>
  <meta name="description" content="<?php echo $title;?>">
  <meta name="keywords" content="<?php echo $keywords;?>">
  <meta name="author" content="kaway404">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/assets/css/style.css?version=1" rel="stylesheet" type="text/css">
  <link href="/assets/css/theme_<?php echo $theme;?>.css?version=1" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <script
  src="https://code.jquery.com/jquery-3.4.0.js"
  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
  crossorigin="anonymous"></script>
</head>

<body>
<div class="header">
    <div class="left">
        <h1 class="logo"><?php echo $title;?></h1>
        <a href="">Ínicio</a>
        <a href="">Ajuda</a>
        <a href="">Comprar</a>
        <a href="">Discord</a>
    </div>
    <div class="right">
    <?php if(isset($_COOKIE['iduser']) && isset($_COOKIE['cry'])){?>
    <button style="width: auto" class="btn-grad" id="registerbtn" data-href="2"><?php echo $user['username'];?></button>
    <?php }  else{ ?>
    <button class="btn-grad" id="loginbtn" data-href="0">Entrar</button>
    <button class="btn-grad" id="registerbtn" data-href="1">Registrar</button>
    <?php } ?>
    </div>
</div>

<video src="/assets/body.webm" class="background_video" autoplay loop></video>

<div class="trans">

<div class="center">
<h1>Melhores hacks de CS:GO atualmente</h1>
<h2>Feito pelos melhores programadores na área, pelo um preço acessivel a todos</h2>
</div>

</div>

<div class="main">
    <div class="center">
        <h1 class="apresentar">Produtos disponiveis</h1>
    <div class="window" data-name="Cheat CS:GO" data-title="Cheat para liga - R$120,00" data-image="https://cdn.ome.lt/NKGxt0oPByF8_GnT7i7t_JzhHRc=/1200x630/smart/extras/conteudos/cs-go-2_BIeFUjZ.jpg">
        <img src="https://cdn.ome.lt/NKGxt0oPByF8_GnT7i7t_JzhHRc=/1200x630/smart/extras/conteudos/cs-go-2_BIeFUjZ.jpg" alt="">
        <h1>Cheat CS:GO</h1>
        <h2>Cheat para liga - R$120,00</h2>
    </div>
    <div class="window" data-name="Cheat PUBG" data-title="Cheat para PUBG - R$150,00" data-image="https://steamcdn-a.akamaihd.net/steam/apps/578080/header.jpg?t=1556089957">
        <img src="https://steamcdn-a.akamaihd.net/steam/apps/578080/header.jpg?t=1556089957" alt="">
        <h1>Cheat PUBG</h1>
        <h2>Cheat para PUBG - R$150,00</h2>
    </div>
    <div class="window" data-name="Cheat League Of Legends" data-title="Cheat LOL - R$250,00" data-image="https://2.bp.blogspot.com/-9z-BbsD9hpk/VfcQSE0ZmzI/AAAAAAAARw4/IHsZDWi5AMc/w1200-h630-p-k-no-nu/league-of-legends.jpeg">
        <img src="https://2.bp.blogspot.com/-9z-BbsD9hpk/VfcQSE0ZmzI/AAAAAAAARw4/IHsZDWi5AMc/w1200-h630-p-k-no-nu/league-of-legends.jpeg" alt="">
        <h1>Cheat League Of Legends</h1>
        <h2>Cheat LOL - R$250,00</h2>
    </div>
    </div>
</div>

<div class="bottom"></div>

<div class="overlay">
    <div class="table login" id="okay">
    <div class="errort"></div>
        <h1>Login</h1>
        <h2>Faça o login agora, e desfrute de tudo</h2>
        <form>
        <input id="email" type="text" placeholder="E-mail">
        <input id="senha" type="password" placeholder="Senha">
        <button data-id="0">Logar</button>
        </form>
    </div>
    <div class="table register" id="okay2">
    <div class="errort"></div>
        <h1>Registro</h1>
        <h2>Faça o registro agora, e desfrute de tudo</h2>
        <form>
        <input id="email" type="text" placeholder="E-mail">
        <input id="senha" type="password" placeholder="Senha">
        <input id="username" type="text" placeholder="Usuario">
        <button data-id="1">Cadastrar</button>
        </form>
    </div>
    <div class="table error" id="okay3">
        <h1>Ocorreu um erro</h1>
    </div>


    <div class="table product" id="okay4">
        <img src="" alt="">
        <h1></h1>
        <h2></h2>
        <button>Mais informações</button>
        <button id="cancelar">Fechar</button>
    </div>

</div>

<script src="/assets/js/dashboard.js"></script>
<script src="/assets/js/account.js"></script>

</body>

</html>
<?php } else{ ?>

    <html>
<head>
  <meta charset="UTF-8">
  <title>404 NOT FOUND</title>
  <meta name="author" content="kaway404">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/assets/css/style.css?version=1" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <script
  src="https://code.jquery.com/jquery-3.4.0.js"
  integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
  crossorigin="anonymous"></script>
</head>

<body>

<video src="/assets/body.webm" class="background_video" style="height: 100%;" autoplay loop></video>

<div class="trans" style="height: 100%;">

<div class="center" style="transform: translate(-50%, -50%); color: #fff;">
<h1>404 NOT FOUND</h1>
<h2>Alguma coisa deu errado :/</h2>
</div>

</div>


<script>
$("body").css("overflow", "hidden");
</script>

<div class="bottom"></div>

</body>

</html>

<?php } ?>