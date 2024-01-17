<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de preço</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php 
            $preco =$_POST['preco'] ?? 0;
            $reaj = $_POST['reaj'] ?? 0;
            $aumento = $preco * $reaj /100;
            $novo = $preco + $aumento;
            
        ?>
    <main>
        <h1>Reajuste de preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="preco">Digite o preço do produto</label>
        <input type="number" name="preco" id="preco" min="0.01" step="0.01" value="<?=$preco?>">
        <label for="reaj">Qual será o percentual de reajuste ?(<strong><span id="p">?</span>%</strong>)</label>
        <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reaj?>">

        <input type="submit" value="Reajustar">
        </form>
    </main>
    <section> 
        <h2>Preço reajustado</h2>
        <p>O preço do produto era de R$<?=number_format($preco,2,',','.')?> com o reajuste de <strong><?=$reaj?>%</strong> o valor passou para <strong>R$<?=number_format($novo,2,',','.')?></strong> </p>
    </section>
    <script>
        //declarações automaticas
        mudaValor()
        function mudaValor(){
            p.innerText = reaj.value
        }
    </script>
    
</body>
</html>