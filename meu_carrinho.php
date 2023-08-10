<?php




include("/wamp64/www/Trabalho006/carrinho.php");
include("/wamp64/www/Trabalho006/produtos.php");

session_start();




$carrinho = new Carrinho();
$produtoInCarrinho = $carrinho->getCarrinho();

if(isset($_GET['id']))
{
    $id = strip_tags($_GET['id']);
    $carrinho->remove($id);
    header("Location:meu_carrinho.php");
}


?>

<?php include("/wamp64/www/Trabalho006/Layout/topo.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a class="btn btn-success"href="/Trabalho006//Layout/index.html">Voltar</a>

    <ul>
        <?php  if(count($produtoInCarrinho) <= 0 ): ?>
            <br>Nenhum produto no carrinho.
        <?php endif; ?>
        <?php foreach ($produtoInCarrinho as $produto): ?>
            <br>
            <li>
                <?php echo $produto->getNome();?> 
                <input type="number" value="<?php echo $produto->getQuantidade();?>">
                Valor: R$ <?php echo number_format($produto->getValor(), 2,',','.') ;?>
                Subtotal: R$ <?php echo number_format($produto->getValor() * $produto->getQuantidade(),2,',','.');?>
                <br>
                <a class="btn btn-secondary" href="?id=<?php echo $produto->getId() ?>">Remover produto</a>
                <br>
            </li>
        <?php endforeach; ?>
        <br>
        <br>
        <li>Total: R$ <?php echo number_format($carrinho->getTotal(),2,',','.'); ?></li>
        
        
    </ul>
</body>
</html>




<?php include("/wamp64/www/Trabalho006/Layout/baixo.php");?>