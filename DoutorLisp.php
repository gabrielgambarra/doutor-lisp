<html>                                                                                                                      <!-- Início do escopo html -->
<head>                                                                                                                      <!-- Início do escopo head -->
	<title>Doutor Lisp</title>                                                                                              <!-- Título da página -->
    <link rel="stylesheet" type="text/css" href="assets/php_css_lisp/css.css">                                              <!-- Chamada do arquivo para edição da página -->
</head>                                                                                                                     <!-- Fim do escopo head -->
<body>                                                                                                                      <!-- Início do escopo body -->
    <header>                                                                                                                <!-- Início do cabeçalho -->
        <p>Doutor Lisp</p>                                                                        <!-- Conteudo do cabeçalho -->
    </header>                                                                                                               <!-- Fim do cabeçalho -->
	<div class="wrap">                                                                                                      <!-- Abertura da wrap para organização do conteúdo -->
        <div class="caixa1">                                                                                                <!-- Abertuda da caixa1 onde a pergunta será inserida -->
            <?php                                                                                                              # Início da execução do php
                $pergunta = file_get_contents("assets/php_css_lisp/pergunta.txt");                                             # $pergunta recebe o conteúdo do arquivo txt
                echo "<p style='font-size: 18px; color: white; text-align: center; padding-top: 64px;'>".$pergunta."</p>";     # Retorna para a tela a pergunta com a devida personalização
            ?>                                                                                                              <!-- Fim da execução do php -->
        </div>                                                                                                              <!-- Fim do escopo caixa1 -->
        <div class="wrap2">                                                                                                 <!-- Abertura da wrap2 para organização do conteúdo -->
            <button class="nao" type="submit" form="NAO" value="Submit">NÃO</button>                                        <!-- Botão não -->
            <form action="assets/php_css_lisp/nao.php" method="get" id="NAO"></form>                                        <!-- Executa as funções do arquivo nao.php, quando clicado no botão não -->
            <button class="sim" type="submit" form="SIM" value="Submit">SIM</button>                                        <!-- Botão sim -->
            <form action="assets/php_css_lisp/sim.php" method="get" id="SIM"></form>                                        <!-- Executa as funções do arquivo sim.php, quando clicado no botão sim -->
        </div>                                                                                                              <!-- Fim do escopo wrap2 -->  
    </div>                                                                                                                  <!-- Fim do escopo wrap1 -->
</body>                                                                                                                     <!-- Fim do escopo body -->
</html>                                                                                                                     <!-- Fim do escopo html -->