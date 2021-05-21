

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./meu.css">
    <link rel="stylesheet" a href="./resources/bootstrap.css">
    <title>Pizzaria</title>
    <link rel="shortcut icon" type="image/jpg" href="./images/logo.png"/>
</head>
<body>
    <section>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark op7" style="background-color: #000000;">
            <a class="navbar-brand" href="#">
                <img src="./images/logo.png" width="60" height="60" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
              
            <div class="collapse navbar-collapse flex-row-reverse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav bd-navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link" href="#about">Sobre</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#menu">Menu</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#contact">Contato</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#maps">Localização</a>
                    </li>
                  </ul>
                </div>
              </nav>
    </section>

    <section id="home">
            <div class="home-content">

                <div class="">
                    <h1>
                Mais do que uma pizza, uma experiência
                  </h1>
                </div>  

                <div class="tamanho">
                  <p>
                   O casamento entre a culinária italiana e americana aconteceu no Brasil, em nossa querida cidade de Salvador. Para melhorar ainda mais a experiência gastronômica, a mágica acontece em um ambiente aconchegante e fora da caixa. Está pronto para para ter a melhor experiência de sua vida?
                  </p>
                </div> 

                <div>
                    <button type="button" class="btn btn-outline-light">ESTOU COM FOME!</button>
                </div>    

            </div> 
    </section>

    <section id="about">
        <div>
            <h3>SOBRE A EMPRESA</h3>
        <hr>
        <p>
            Filha do casamento entre as culinárias italiana e americana, a {placeholder} chegou em território soteropolitano para inovar em sabores e experiências. Idealizada pelo Chef Rafael Viana, a pizzaria se materializou em 2021 para trazer o melhor de dois mundos para perto de sua casa. Não só prometemos felicidade e prazer como também garantimos essa experiência.
        </p>

        </div>
    </section>

    <section id="menu" class="">
        <div class="tam">
            <h1>MENU</h1>
        </div>

        <div class="tam">
            <h3>A cara da Itália, com jeitinho brasileiro</h3>
        </div>

        <div id="box_menu">
            <div class="box">
                <h4>Pizza Brasileira</h4>
                <div class="box-content">
                    <p>Portuguesa</p>
                    <p>Bacon</p>
                    <p>Quatro Queijos</p>
                    <p>Frango</p>
                    <p>Chocolate</p>
                    <p>Costela Suína</p>
                    <p>Queijo Branco com Geleia</p>
                    <p>Salmão</p>
                    <p>Baiana</p>
                </div>
            </div>

            <div class="box">
                <h4>Pizza Italiana</h4>
                <div class="box-content">
                    <p>Calabresa</p>
                    <p>Mussarela</p>
                    <p>Pepperoni</p>
                    <p>Presunto di Parma</p>
                    <p>Peito de Peru</p>
                    <p>Napolitana</p>
                    <p>Marguerita</p>
                    <p>Pizza Parmegiana</p>
                    <p>Capricciosa</p>
                </div>
            </div>

            <div class="box">
                <h4>Pizza Americana</h4>
                <div class="box-content">
                    <p>Catupiry</p>
                    <p>Lombinho Canadense</p>
                    <p>Pizza de abacaxi</p>
                    <p>Quatro Queijos</p>
                    <p>Três Queijos</p>
                    <p> Califórnia</p>
                    <p>Bacon</p>
                    <p>Nova York</p>
                    <p>Cheddar</p>
                </div>
            </div>

        </div>

    </section>

</body>
</html>