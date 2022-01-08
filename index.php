    <?php 
        require_once 'class.php';

        $c1 = new Banco();

        echo "<br>";

        $c1->abrirConta("CC");
        print "<strong>Tipo de conta:</strong> {$c1->getTipo()}";
        
        echo "<br>";

        print "<strong>Conta ativa?:</strong> {$c1->getStatus()}";

        echo "<br>";

        $c1->setnumConta(3);
        print "<strong>Número da conta:</strong> {$c1->getnumConta()}";

        
        echo "<br>";
        
        $c1->setDono("Fulano de Tal");
        print "<strong>Dono da conta:</strong> {$c1->getDono()}";
        
        ////////DIGITE AQUI////////
        $c1->depositar(500);

        ///////////////////////////



        print "<br><strong>Saldo:</strong>  {$c1->getSaldo()} reais";
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/main.css">
    <title>Document</title>
</head>
<body>

    <div class="container">

        <div class="saldoDiv">
            <p>Saldo</p>
            <h1>R$ <?php print "{$c1->getSaldo()}"; ?></h1>
        </div>


        <div class="options">
            <button></button>
            <p>Adicionar</p>

            <button></button>
            <p>Retirar</p>

            <button></button>
            <p>Mais</p>
        </div>

    </div>

</body>
</html>