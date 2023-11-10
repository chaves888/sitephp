<?php 
    include "header.php";
    include "config.php";

    $id = $_GET["id"];

    $sql = "select * from produto where id = $id";
    $consulta = $pdo->prepare($sql);
    $consulta->execute();

    $produtos = $consulta->fetch(PDO::FETCH_ASSOC);


    //print_r($produtos);exit;
?>
<main>
    <div class="grid-3">
    <div class="coluna">
        <img src="imagens/<?=$produtos["imagem"] ?>" alt="<?=$produtos["nome"] ?>">
    </div>
    <div class="coluna">
        <h2><?=$produtos["nome"] ?></h2>
        <p>R$ <?=$produtos["valor"] ?></p>
        <a class="botao" href="#">Comprar agora</a>
    </div>
    </div>
</main>


<?php 
    include "footer.php"
?>