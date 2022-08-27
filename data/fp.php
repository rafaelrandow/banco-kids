<?php
    $currentDirectory = getcwd();
    $uploadDirectory = "/data/";
    $p1 = $_POST['pontosEllen'];
    $p2 = $_POST['pontosRafa'];
    $p3 = $_POST['objRafa'];
    $p4 = $_POST['pontosBia'];
    $p5 = $_POST['objBia'];
    $arquivo = fopen('pontos.json','w+');

    $conteudo = "[{\"nome\":\"Ellen\",\"pontos\":$p1},{\"nome\":\"Rafa\",\"pontos\":$p2},{\"nome\":\"objRafa\",\"pontos\":\"$p3\"},{\"nome\":\"Bia\",\"pontos\":$p4},{\"nome\":\"objBia\",\"pontos\":\"$p5\"}]";

    if ($arquivo) {
      if (!fwrite($arquivo, $conteudo)) die('Não foi possível atualizar o arquivo.');

      fclose($arquivo);


    echo '<html><head>    <meta http-equiv="refresh" content="0;url=../" /></head><body>   <div>';
     echo "<small>salvando...</small><br>";
     echo '</div></body></html>';
    }
?>