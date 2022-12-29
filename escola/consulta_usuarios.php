<?php
    
    include ("conectar.php");//CHAMADA DB
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
    <style>

.consulta_usuario_sql{
    padding: 5px;
    margin: 5px 0px;
    text-align: center;
}

.consulta_usuario_sql h1{
    padding: 10px;
    margin: 5px 10px;
    text-align: center;
    font-family: 'Roboto Condensed', sans-serif;
}

.consulta_usuario_sql .container_pesquisar{
    text-align: center;
    margin-bottom: 15px;
}


/*====================>>From<<====================*/


.consulta_usuario_sql form{
    text-align: center;
    padding: 5px;
    margin: 5px 0px;
    display: grid;
}

.consulta_usuario_sql form input{
    padding: 5px;
    margin: 5px 0px;
    border-radius: 5px;
    font-family: 'Roboto Condensed', sans-serif;
    height: 5vh;
}

.consulta_usuario_sql form button {
    padding: 5px;
    margin: 5px 0px;
	background: linear-gradient(95deg, rgba(2,0,36,0.88) 0%, rgba(0,41,255,1) 50%, rgba(2,0,36,0.8785889355742297) 100%);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 7vh;
    box-sizing: content-box;
    border-radius: 5px;
    font-family: 'Roboto Condensed', sans-serif;
    font-size: 1.5em;
    color: #00a9dc;
}


/*====================>>table<<====================*/


table{
    background-color: lightblue;
    margin: 5px 5px;
    text-align: center;
}

table tr th{
    background-color: #6875ee;
    margin: 5px 10px;
    width: 10%;
    font-family: 'Roboto Condensed', sans-serif;
}

table tr td{
    background-color: white;
    width: 10%;
    text-align: center;
    font-size: 1.0em;
    padding: 5px;
    font-family: Arial, Helvetica, sans-serif;
}


/*====================>>link<<====================*/

.retorno{
    font-size: 1.1em;
    font-style: Helvetica;
    text-decoration: none;
    border: 1px solid black;
    box-sizing: content-box;
    padding: 2px 5px;
    border-radius: 5px;
    color: white;
    background-color: #6875ee;
}

@media (max-width: 670px) {
    table tr th{
    font-size: 1em; 
}
}

@media (min-width: 671px) {
    table tr th{
    font-size: 1.5em; 
}
}

    </style>
    <title>Inscrições FRS</title>
</head>
<body>

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

                <li class="submenu-ancora">
                    <a href="#">
                        <span>Cursos</span>
                    </a>

                        
        </nav>
        </div>

    </header>

    <div class="consulta_usuario_sql">
        <h1>Lista de alunos</h1>
        <form action="">
            <input value="<?php if(isset($_GET['buscar'])) echo $_GET['buscar']; ?>" name="buscar" type="text" placeholder="Digite aqui o termo de pesquisa">
            <button id="enviar" class="enviar_consulta" type="submit">Pesquisar</button>
        </form><!--BOTAO PARA CONSULTAR-->
        
        <div class="container_pesquisar">
            <table>
                <tr>
                    <th>Nome</th>
                    <th>Documento</th>
                    <th>Mes</th>
                    <th>Ano</th>
                    <th>Nota</th>
                    <th>Situação</th>
                </tr>
                <?php
                if(!isset($_GET['buscar'])){
                ?>
                <tr>
                    <td colspan="6">Digite algo para pesquisar...Lembrando sempre de usar Nome ou documento</td>
                </tr>
                <?php
                 }
                else {
                    $pesquisa = $conn->real_escape_string($_GET['buscar']);
                    $sql_code = "select
                        USR_NOME,
                        USR_DOCUMENTO,
                        month(USR_DATA_CADASTRO),
                        year(USR_DATA_CADASTRO),
                        AI.USR_NOTA,
                        TEXTO_STATUS
                    FROM  ALUNOS_INSCRICAO AS AI
                        INNER JOIN ALUNOS_INSCRICAO_STATUS AS AIS
                        ON AIS.USR_STATUS = AI.USR_STATUS
                    WHERE USR_DOCUMENTO LIKE '%$pesquisa%' OR USR_NOME LIKE '%$pesquisa%';";
                    $sql_query = $conn->query($sql_code) or die("Erro ao consultar! ".$conn->error);
            
                   if($sql_query->num_rows == 0){
                ?>
            
                <tr>
                    <td colspan="6">Nenhum resultado da pesquisa...Por gentileza revise a consulta, tente por CPF ou Nome</td>
                </tr>
                <?php
                   }
                   else {
                    while($dados = $sql_query->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $dados['USR_NOME']; ?></td>
                            <td><?php echo $dados['USR_DOCUMENTO']; ?></td>
                            <td><?php echo $dados['month(USR_DATA_CADASTRO)']; ?></td>
                            <td><?php echo $dados['year(USR_DATA_CADASTRO)']; ?></td>
                            <td><?php echo $dados['USR_NOTA']; ?></td>
                            <td><?php echo $dados['TEXTO_STATUS']; ?></td>
                        </tr>
                        <?php
                    }
            
                   }
                ?>
                <?php
                }
                ?>
            </table>
        </div>

        <a class="retorno" href="index.php">Retornar para Home</a>
    </div>


</body>
</html>


