<?php




  use PHPMailer\PHPMailer\PHPMailer;

  $msg = '';
 
  
 if (array_key_exists('email', $_POST)) {
     date_default_timezone_set('Etc/UTC');

     require './lib/vendor/autoload.php';

    
     $mail = new PHPMailer();
    
     $mail->isSMTP();
     $mail->CharSet = 'UTF-8';
     $mail->Host = 'smtp.mailtrap.io';
     $mail->SMTPAuth = true;
     $mail->Username = '8930101b3574d6';
     $mail->Password = '9c1ec98b72efd5';
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
     $mail->Port = 2525;

        

         if(isset($_POST['email'], $_POST['name'], $_POST['how'], $_POST['text'], $_POST['promotion'])){ 
            $mail->setFrom('cliente@cliente.com.br', 'Cliente');
            $mail->addAddress('rafael@pizzaria.com.br', 'Rafael');
            
        
            if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
                $mail->Subject = 'Resposta do Formulário';
                
                $mail->isHTML(false);
                
                $mail->Body = <<<EOT
                    Email: {$_POST['email']}
                    Nome: {$_POST['name']}
                    Como encontrou: {$_POST['how']}
                    Mensagem: {$_POST['text']}
                    Promoção: {$_POST['promotion']}
                    EOT;
                
                $mail->send();
   
      
            }    
        }
    }
 

?>

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
    <link rel="stylesheet" href="./style.css">
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

    <section id="contact">
    
        <div id="clock" class="igual left ">
            <div class="contato_box left ">
                <div class="center small ">
                    <h3>Horários de Funcionamento</h3>
                </div>
    
                <div class="center small ">
                    <h4>De segunda a sexta</h4>
                    <p>14:00 - 22:00</p> 
                </div>
    
                <div class="center small ">
                    <h4>Finais de Semana</h4>
                    <p>12:00 - 22:00</p>
                </div>
    
                <div class="center small">
                    <h4>Feriados</h4>
                    <p>13:00 - 22:00</p>
                </div>
            
            </div>
        </div>

        <div id="number" class="igual right">
            <div class="contato_box left">
                <div class="right small">
                    <h3>Contato</h3>
                </div>
    
                <div class="right small">
                    <h4>Telefones</h4>
                     <p>
                        (71) 91212-1212 <br>
                        (71) 3252-9001
                    </p>
                </div>
    
                <div class="right small">
                    <h4>Email</h4>
                    <p class="contact-small">contato@rafaspizza.com.br</p>
                </div>
    
                <div class="right small">
                    <h4>Endereço</h4>
                    <p class=""> Rua do Salete, 28 - Barris, Salvador - BA</p>
                </div>
            
            </div>
        </div>
    </section>

    <section id="form">
        <div id="title">
			<h3>Fale conosco</h3>
		</div>

        <div id="box_forms" class="">
                <div class="form-box center">
                        <div class="label_nome label-box center">
                            <label class="right" for="name">Nome</label>
                        </div>

                        <div class="label_email label-box center">
                            <label class="right" for="email">Email</label>
                        </div>

                        <div class="label_how label-box center">
                            <label class="right" for="how">Como você nos encontrou?</label>
                        </div>

                        <div class="label_check label-box center">
                            <label class="right" for="promotion">Deseja receber promoções?</label>
                        </div>

                        <div class="label_text label-box center">
                            <label class="right" for="text">Deixe-nos uma mensagem</label>
                        </div>

                        <div class="label_button label-box center">
                        </div>
                </div>
                    
                <div class="form-box">
                    <form action="send_mail.php" method="post" name="form" class="tam-form">
                        <div class="toda center">
                            <div class="input_name input-box right">
                                <input id="name" class="input placeholder-text" type="text" name="name" placeholder="Seu nome" required>
                            </div>
                            <div class="input_email input-box right">
                                <input id="email" class="input placeholder-text" type="email" name="email" placeholder="Seu email" required>
                            </div>
                            <div class="input_how input-box right">
                                <select name="how" id="how" class="input placeholder-text" required>
                                    <option class="" value="">Selecione uma opção</option>
                                    <option value="Redes sociais">Redes sociais</option>
                                    <option value="Por outras pessoas">Por outras pessoas</option>
                                    <option value="Outdoors">Outdoors</option>
                                    <option value="Outra forma">Outra forma</option>
                                </select>
                            </div>
                            <div class="input_check input-box right">
                                <select name="promotion" id="promotion" class="input placeholder-text option-custom" required>
                                    <option value="">Selecione uma opção</option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </div>
                            <div class="input_text input-box right">
                                 <input id="text" class="input placeholder-text" type="text" name="text" placeholder="Sua mensagem" required>
                            </div>
                            <div class="input-box right">
                                 <input id="sub" class="btn btn-outline-light" type="submit" name="submit" value="Enviar Email">
                            </div>
                        </div>
                     </form>
                </div>
        </div>
	</section>

    <section id="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d971.9465258528716!2d-38.515574743912545!3d-12.985528353351796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDU5JzA3LjciUyAzOMKwMzAnNTUuNyJX!5e0!3m2!1spt-BR!2sbr!4v1621271328710!5m2!1spt-BR!2sbr" width="" height="" style="border:0;" allowfullscreen="" loading="lazy" class="map"></iframe>
    </section>

    <a href="#home" class="top"></a>

    <footer class="footer-bar">
        <p class="copyright">
        Todos os Direitos Reservados |
        <span id="copyright-year"> 2021 </span>
         Desenvolvido por 
        <a href="https://praxisjr.com.br" target="_blank" class="footer-href"> Praxis - Empresa Jr. </a>
    </footer>


</body>
</html>