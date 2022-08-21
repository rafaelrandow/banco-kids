<?php
    $currentDirectory = getcwd();
    $uploadDirectory = "/data/";
    $p1 = $_GET['pontosEllen'];
    $p2 = $_GET['pontosRafa'];
    $p3 = $_GET['objRafa'];
    $p4 = $_GET['pontosBia'];
    $p5 = $_GET['objBia'];
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