<?php

include("/wamp64/www/Trabalho006/carrinho.php");
include("/wamp64/www/Trabalho006/produtos.php");

session_start();


$products =
[
    1 => ['id' => '1', 'nome' => 'CADEIRA OFFICE PREMIUM ZINNIA DALIA, PRETO', 'valor' => 2079.90, 'quantidade' => 1],
    2 => ['id' => '2', 'nome' => 'Cadeira Gamer Base Giratória Com Braço Linha Gamer Racing Amarelo', 'valor' => 3593.36, 'quantidade' => 1],
    3 => ['id' => '3', 'nome' => 'WATER COOLER PICHAU GAMING AQUA 120 PRO, ARGB, 120MM', 'valor' => 279.90, 'quantidade' => 1],
    4 => ['id' => '4', 'nome' => 'COMPUTADOR PICHAU GAMER BARBATOS II, INTEL I5-11400F, GEFORCE RTX 2060 SUPER 8GB, 16GB DDR4, SSD M.2 480GB', 'valor' => 3999.97, 'quantidade' => 1],
    5 => ['id' => '5', 'nome' => 'PC Gamer Tertz Absurde, Intel Core I9-12900kf, 32GB, RTX 3080TI, SSD 1TB NVMe, Windows 10 Trial', 'valor' => 32363.91, 'quantidade' => 1],
    6 => ['id' => '6', 'nome' => 'Headset Gamer Havit, Drivers 53mm, Microfone Plugável, P2, PC, PS4, XBOX ONE, Preto', 'valor' => 209.99, 'quantidade' => 1],
    7 => ['id' => '7', 'nome' => 'MONITOR PROFISSIONAL PICHAU PERSEUS P1, MINILED, 27 POL., IPS, QHD, 1MS, 165HZ', 'valor' => 4499.90, 'quantidade' => 1],
    8 => ['id' => '8', 'nome' => 'MONITOR GAMER PICHAU CENTAURI CRS24B, 23.8 POL., IPS, FHD, 1MS, 165HZ, FREESYNC, HDMI/DP', 'valor' => 839.90, 'quantidade' => 1],
    9 => ['id' => '9', 'nome' => 'MONITOR PROFISSIONAL PICHAU PERSEUS P1, MINILED, 27 POL., IPS, QHD, 1MS, 165HZ', 'valor' => 4499.90, 'quantidade' => 1],
    10 => ['id' => '10', 'nome' => 'Mouse Gamer Havit RGB, 4 Botões, 1200DPI', 'valor' => 58.81, 'quantidade' => 1],
    11 => ['id' => '11', 'nome' => 'Asus Rog Zephyrus G14 AMD Ryzen 9-7940hs, RTX 4090, Tela 14 Polegadas QHD, 4TB NVMe RAM 32gb', 'valor' => 45684.21, 'quantidade' => 1],
    12 => ['id' => '12', 'nome' => 'PLACA DE VIDEO MANCER RTX 2060 SUPER HEIMDALL SS, 8GB, GDDR6, 256-BIT', 'valor' => 1799.00, 'quantidade' => 1],
    13 => ['id' => '13', 'nome' => 'Placa de Vídeo RX 6750 XT Mech 2X 12G OC MSI AMD, 12 GB GDDR6', 'valor' => 2559.99, 'quantidade' => 1],
    14=> ['id' => '14', 'nome' => 'Processador AMD Ryzen 5 4500 3.6GHz (4.1GHz Turbo), 6-Cores 12-Threads, Cooler Wraith Stealth, AM4', 'valor' => 549.00, 'quantidade' => 1],
    15 => ['id' => '15', 'nome' => 'Processador Intel Core i3 12100F 3.3GHz (4.3GHz Turbo), 12ª Geração, 4-Cores 8-Threads, LGA 1700, Com Cooler', 'valor' => 599.00, 'quantidade' => 1],
    16 => ['id' => '16', 'nome' => 'Console Sony Playstation 5, Edição Digital', 'valor' => 3999.99, 'quantidade' => 1],
    17 => ['id' => '17', 'nome' => 'SSD REDRAGON HASTE, 240GB, 2.5, SATA III 6GB/S, LEITURA 550MB/S, GRAVAÇÃO 420MB/S', 'valor' => 99.90, 'quantidade' => 1],
    18 => ['id' => '18', 'nome' => 'TECLADO MAGNETICO GAMER REDRAGON KUMARA PRO, RGB, SWITCH MARROM, PRETO', 'valor' => 379.90, 'quantidade' => 1],
    19 => ['id' => '19', 'nome' => 'Kit Upgrade AMD Ryzen 5 5600G + Placa Mãe B450 + 16GB DDR4', 'valor' => 1697.81, 'quantidade' => 1],
    20 => ['id' => '20', 'nome' => 'Kit Upgrade, Intel i3 10100F + Placa Mãe H510 + Memória 8GB DDR4', 'valor' => 1207.90, 'quantidade' => 1],
    21 => ['id' => '21', 'nome' => 'VENTOINHA COUGAR MHP 120, 120MM, BRANCO', 'valor' => 119.90, 'quantidade' => 1],
    22 => ['id' => '22', 'nome' => 'Console Microsoft Xbox Series S, 512GB, Branco', 'valor' => 2048.17, 'quantidade' => 1],
];

if (isset($_GET['id']))
{
    $id = strip_tags($_GET['id']);
    $produtoInfo = $products[$id];
    $produto = new Produto();
    $produto->setId($produtoInfo['id']);
    $produto->setNome($produtoInfo['nome']);
    $produto->setValor($produtoInfo['valor']);
    $produto->setQuantidade($produtoInfo['quantidade']);

    $carrinho = new Carrinho();
    $carrinho->add($produto);
}

?>
