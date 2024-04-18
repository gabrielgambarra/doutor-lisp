<html>

<head>
    <title>Doutor Lisp</title>
    <link rel="stylesheet" type="text/css" href="assets/php_css_lisp/css.css">
</head>

<body>
    <header>
        <p>Doutor Lisp</p>
    </header>
    <div class="wrap">
        <div class="caixa1">
            <?php
            $pergunta = file_get_contents("assets/php_css_lisp/pergunta.txt");
            echo "<p style='font-size: 18px; color: white; text-align: center; padding-top: 64px;'>" . $pergunta . "</p>";
            ?>
        </div>
        <div class="wrap2">
            <button class="nao" type="submit" form="NAO" value="Submit">NÃO</button>
            <form action="assets/php_css_lisp/nao.php" method="get" id="NAO"></form>
            <button class="sim" type="submit" form="SIM" value="Submit">SIM</button>
            <form action="assets/php_css_lisp/sim.php" method="get" id="SIM"></form>
        </div>
    </div>
</body>

</html>