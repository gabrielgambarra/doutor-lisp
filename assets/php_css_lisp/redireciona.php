<?php
$redireciona = file_get_contents("pergunta.txt");
switch ($redireciona) {
        case 1:
                $pergnova = fopen("pergunta.txt", "w");
                fwrite($pergnova, "Corrimento pelo canal vaginal ou vontade de urinar constante?");
                exit('<script>location.href = "../doencas/semdst.html"</script>');
                break;
        case 2:
                $pergnova = fopen("pergunta.txt", "w");
                fwrite($pergnova, "Corrimento pelo canal vaginal ou vontade de urinar constante?");
                exit('<script>location.href = "../doencas/doido.html"</script>');
                break;
        case 3:
                $pergnova = fopen("pergunta.txt", "w");
                fwrite($pergnova, "Corrimento pelo canal vaginal ou vontade de urinar constante?");
                exit('<script>location.href = "../doencas/hpv.html"</script>');
                break;
        case 4:
                $pergnova = fopen("pergunta.txt", "w");
                fwrite($pergnova, "Corrimento pelo canal vaginal ou vontade de urinar constante?");
                exit('<script>location.href = "../doencas/donovanose.html"</script>');
                break;
        case 5:
                $pergnova = fopen("pergunta.txt", "w");
                fwrite($pergnova, "Corrimento pelo canal vaginal ou vontade de urinar constante?");
                exit('<script>location.href = "../doencas/linfogranuloma.html"</script>');
                break;
        case 6:
                $pergnova = fopen("pergunta.txt", "w");
                fwrite($pergnova, "Corrimento pelo canal vaginal ou vontade de urinar constante?");
                exit('<script>location.href = "../doencas/herpesgenital.html"</script>');
                break;
        case 7:
                $pergnova = fopen("pergunta.txt", "w");
                fwrite($pergnova, "Corrimento pelo canal vaginal ou vontade de urinar constante?");
                exit('<script>location.href = "../doencas/cancromole.html"</script>');
                break;
        case 8:
                $pergnova = fopen("pergunta.txt", "w");
                fwrite($pergnova, "Corrimento pelo canal vaginal ou vontade de urinar constante?");
                exit('<script>location.href = "../doencas/sifilis.html"</script>');
                break;
        case 9:
                $pergnova = fopen("pergunta.txt", "w");
                fwrite($pergnova, "Corrimento pelo canal vaginal ou vontade de urinar constante?");
                exit('<script>location.href = "../doencas/micoplasma.html"</script>');
                break;
        case 10:
                $pergnova = fopen("pergunta.txt", "w");
                fwrite($pergnova, "Corrimento pelo canal vaginal ou vontade de urinar constante?");
                exit('<script>location.href = "../doencas/tricomoniase.html"</script>');
                break;
        case 11:
                $pergnova = fopen("pergunta.txt", "w");
                fwrite($pergnova, "Corrimento pelo canal vaginal ou vontade de urinar constante?");
                exit('<script>location.href = "../doencas/gonorreiaclamidia.html"</script>');
                break;
}
?> <!-- Fim do php -->