<?php
$pergresp = fopen("pergresp.txt", "w");
$pergunta = file_get_contents("pergunta.txt");
fwrite($pergresp, $pergunta . PHP_EOL . "1");

exec("sbcl --load lisp.lisp");

$redireciona = file_get_contents("pergunta.txt");
if ($redireciona > 0 and $redireciona < 12) {
    exit('<script>location.href = "redireciona.php"</script>');
}
exit('<script>location.href = "../../DoutorLisp.php"</script>');
?> <!-- Fim do php -->