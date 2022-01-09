    <?php 
        require_once 'class.php';

        $c1 = new Banco();

        $c1->abrirConta("CC");
        
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
            <button><img src="CSS\IMG\deposit.jpg" alt="deposit icon"><p id="p-options1">Adicionar</p></button>
            <button><img src="CSS\IMG\withdraw.png" alt="withdraw icon"><p id="p-options2">Retirar</p></button>
            <button><img src="CSS\IMG\more.png" alt="more icon"><p id="p-options3">Mais</p></button>
        </div>

    </div>

</body>
</html>