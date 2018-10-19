<?php                                                                   # Início do php
    $pergresp = fopen("pergresp.txt","w");                              # $pergresp recebe o arquivo para escrita
    $pergunta = file_get_contents("pergunta.txt");                      # $pergunta recebe o conteúdo
    fwrite($pergresp,$pergunta.PHP_EOL."1");                            # Escreve no arquivo recebido pelo $pergresp a pergunta e a resposta
    exec("lisp.lisp");
    exec("lisp.fas");                                                   # Executa o operador LISP
    $redireciona = file_get_contents("pergunta.txt");                   # $redireciona recebe o contéudo atualizado do arquivo
    if($redireciona > 0 and $redireciona <12){                          # Início do if que verifica se o arquivo pergunta.txt recebeu a folha
        exit('<script>location.href = "redireciona.php"</script>');     # Script usado para chamar o redirecionador.php
    }                                                                   # Fim do if
    exit('<script>location.href = "../../DoutorLisp.php"</script>');    # Script que redireciona para a tela inicial com uma nova pergunta
?>                                                                      <!-- Fim do php -->
