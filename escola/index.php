<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="estilo/img/3069198_cap_education_hat_school_icon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Butterfly+Kids&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo/mainstyle.css">
    <title> Foreign school</title>
    <style>

@media (min-width: 1290px) {
         div#result {
        width: 20%;
        background-color: var(--navcolor);
        opacity: 90%;
        position: relative;
        left: 41%;
        padding: 0.3%;
        margin: 2px 0px 5px 0px;
      }
      
      
      button#btnTESTE {
        background-color: var(--nav);
        border-radius: 10px;
        font-size: 1em;
        position: relative;
        left: 45%;
        margin: 5px 0px;
        padding: 5px;
      }
    }

    @media (max-width: 670px) {
        div#result {
        width: 40%;
        background-color: var(--navcolor);
        opacity: 90%;
        position: relative;
        left: 34%;
        padding: 0.3%;
        margin: 2px 0px 5px 0px;
      }
      
      
      button#btnTESTE {
        background-color: var(--nav);
        border-radius: 10px;
        font-size: 1em;
        position: relative;
        left: 35%;
        margin: 5px 0px;
        padding: 5px;
      }
    }
    

    @media screen and (min-width: 671px) and (max-width: 1289px){
        div#result {
        width: 40%;
        background-color: var(--navcolor);
        opacity: 90%;
        position: relative;
        left: 35%;
        padding: 0.3%;
        margin: 2px 0px 5px 0px;
      }
      
      
      button#btnTESTE {
        background-color: var(--nav);
        border-radius: 10px;
        font-size: 1em;
        position: relative;
        left: 41%;
        margin: 5px 0px;
        padding: 5px;
      }
    }
    </style>
</head>
<body>
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
            }
        ?>
    <header class="header">

        <div class="nomenclatura">
            <h1>foreign school</h1>
        </div>
        
        <div class="menu">
            <nav class="menulinks">
                <ul class="listalinks">


                    <li class="menu-l">
                        <a href="#">
                            <span>Sobre</span>
                        </a>
                    </li>

                    <li class="menu-l">
                        <a class="menu-a" href="./consulta_usuarios.php">
                            <span>Inscrições</span>
                        </a>
                    </li>

                    <li class="submenu-ancora">
                        <a href="#">
                            <span>Cursos</span>
                        </a>

                      
            </nav>

    </header>

    <div class="background-top">
        <div class="foto-top-1">  
        </div>
        <div class="foto-top-2">  
        </div>
    </div>
</div>

    <main class="main">
        <div class="container">
            <section class="information">
                <article class="article-1">
                    <h1>Venha! Não perca a chance de fazer parte da nossa historia</h1>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi velit blanditiis dolorum facere sequi iure soluta totam, dolorem incidunt! Accusantium officiis molestiae totam voluptatum quae fugiat cum magnam fugit optio!Lorem Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim illo iure culpa libero ipsa quidem, labore voluptatum nam eveniet? Eaque obcaecati dignissimos odio distinctio molestias iste provident deserunt perferendis similique.</p>
                </article>
            </section>
        </div>

        <div class="container-timer">
            <section class="schedule">
                <div class="timer">
                    <ul class="list-timer">

                        <h1>Horario</h1>

                        <h2>Manha</h2>

                        <picture><img src="estilo/img/sun.png" alt=""></picture>

                        <li>

                            <span>
                                Segunda<br>AM.07-13
                            </span>

                        </li>

                        <li>

                            <span>
                                Terça<br>AM.07-13
                            </span>

                        </li>

                        <li>

                            <span>
                                Quarta<br>AM.07-13
                            </span>

                        </li>

                        <li>

                            <span>
                                Quinta<br>AM.07-13
                            </span>

                        </li>

                        <li>

                            <span>
                                Sexta<br>AM.07-13
                            </span>

                        </li>

                    </ul>

                </div>


                <div class="timer">
                    <ul class="list-timer">

                        <h1>Horario</h1>

                        <h2>Tarde</h2>

                        <picture><img src="estilo/img/moon.png" alt=""></picture>

                        <li>

                            <span>
                                Segunda<br>PM.13-18
                            </span>

                        </li>

                        <li>

                            <span>
                                Terça<br>PM.13-18
                            </span>

                        </li>

                        <li>

                            <span>
                                Quarta<br>PM.13-18
                            </span>

                        </li>

                        <li>

                            <span>
                                Quinta<br>PM.13-18
                            </span>

                        </li>

                        <li>

                            <span>
                                Sexta<br>PM.13-18
                            </span>

                        </li>

                    </ul>

                </div>

                <div class="timer">
                    <ul class="list-timer">

                        <h1>Horario</h1>

                        <h2>EAD</h2>

                        <picture><img src="estilo/img/chip.png" alt=""></picture>

                        <li>

                            <span>
                                Segunda<br>AM.09-16
                            </span>

                        </li>

                        <li>

                            <span>
                                Terça<br>AM.09-16
                            </span>

                        </li>

                        <li>

                            <span>
                                Quarta<br>AM.09-16
                            </span>

                        </li>

                        <li>

                            <span>
                                Quinta<br>AM.09-16
                            </span>

                        </li>

                        <li>

                            <span>
                                Sexta<br>AM.09-16
                            </span>


                        </li>

                    </ul>

                </div>

            </section>
        </div>

        <div class="container-last">

                <div class="img-side">
                    <img src="estilo/img/garota-musica.jpg" alt="">
                </div>

                <div class="information-side">
                    <section class="information-side-section">
                        <h2>Intercambio</h2>
                        <span>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. At aspernatur, ullam officia atque asperiores odio quisquam possimus. Mollitia a accusamus quia voluptatibus necessitatibus nesciunt eum, totam vitae distinctio ipsa atque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate porro consequatur aut ex eos eaque dicta odit quas repellendus consectetur repellat incidunt, quaerat sunt alias amet nostrum perspiciatis! Aliquid, commodi.
                            <br>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit obcaecati eveniet quasi neque consequatur porro provident laborum, vitae dolores quo accusantium id. Sint, illo esse repellendus aspernatur aperiam quaerat suscipit.
                        </span>
                        <div class="submit">
                            <button class="submit-button" type="submit"></button>
                        </div>
                    </section>
					
                </div>

        </div>
		
		<div class="container">
    
            <section class="formulario">
                
                <form action="valida.php" method="post" >
                    <ul class="form-input">

                        <li>
                            <label for="nome">Nome:</label>
                            <input type="text" placeholder="Digite seu nome completo" " id="nome" name="nome" pattern="[a-zA-Z\s]{4,50}" title="4 até 50 Letras" required>
                        </li>
<!--pattern="[a-zA-Z\s]+-->
                        <li>
                            <label for="cpf">CPF:</label>
                            <input type="text" name="cpf" id="cpf" placeholder="11111111111" maxlength="14" pattern="[0-9\s]{11,12}" title="Gentileza não usar pontos" required >
                        </li>

                        <li>
                            <label for="tel">Tel:</label>
                            <input type="text" name="tel" id="tel" placeholder="111 111111111" maxlength="13" pattern="[0-9\s]{11,13}" title="Gentileza colocar DDD e numero com espaço entre"  required>
                        </li>


                        <li>
                            <span>Redação sobre tema "Suas ferias" para avaliação de conhecimentos basicos e conhecimento do candidato.<br> <br>
                            </span>

                            <textarea  class="redacao" placeholder="Escreva Aqui" name="redacao" id="redacao"  cols="120" rows="10" required></textarea>

                        </li>

                        <li>
                            <input class="envia" type="submit" maxlength="600" value="Enviar" placeholder="Não esqueca do titulo" required >
                        </li>

                    </ul>
                </form>

                <br>
                
                <button class="btnTESTE" id="btnTESTE">Gravar redação</button>
                
                <div class="result" id="result">Clique acima para ditar :)</div>
                

            </section>
        </div>
			
			
    </main>

    <footer class="footer">
        <div class="container">
            <ul>

                <li>
                    <span>Contatos</span>
                </li>

                <li>
                    <a href="#">
                        <img src="estilo/img/Gmail.png" alt="">
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img src="estilo/img/insta.svg" alt="">
                    </a>
                </li>


                <li>
                    <a href="#">
                        <img src="estilo/img/Twitter.png" alt="">
                    </a>
                </li>

                <li>
                    <a href="#">
                        <img src="estilo/img/whatsapp.png" alt="">
                    </a>
                </li>

            </ul>

            <div class="map">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d65311940.860948!2d-79.88618303859757!3d2.3979608713239244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5b9a0911c713%3A0x5f7ea6661f34d96!2sMinuto%20Otaku%20-%20Portal%20Otaku%20%2301%20do%20Brasil!5e0!3m2!1spt-BR!2sbr!4v1664729086923!5m2!1spt-BR!2sbr" width="1170" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>

        </div>
    </footer>

<script src="acessibilidade.js"></script>

</body>
</html>
