<?php 
include("/wamp64/www/Trabalho006/index_carrinho.php");
include("/wamp64/www/Trabalho006/Layout/topo.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Item - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
    
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="/Trabalho006/Layout/assets/img/processador02_02.jpg" alt="..." /></div>
                    <div class="col-md-6">
                        <div class="small mb-1">SKU: BX8071512100F</div>
                        <h1 class="display-5 fw-bolder">Processador Intel Core i3 12100F 3.3GHz (4.3GHz Turbo), 12ª Geração, 4-Cores 8-Threads, LGA 1700, Com Cooler</h1>
                        <div class="fs-5 mb-5">
                        <span class="text-decoration-line-through">R$ 1.199,90</span>
                            <span>R$ 599,00</span>
                        </div>
                        <p class="lead"></p>
                        <div class="d-flex">
                        <a class="btn btn-outline-dark flex-shrink-0" type="button" href="?id=15">
                                <i class="bi-cart-fill me-1"></i>
                                Adicionar ao carrinho
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
<?php include("/wamp64/www/Trabalho006/layout_catalogo/baixo_item_shop.php");?>


<?php include("/wamp64/www/Trabalho006/Layout/baixo.php");?>