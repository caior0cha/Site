<?php
    class Carrinho
    {
        public function add(Produto $produto)
        {
            $noCarrinho = false;
            $this->setTotal($produto);
            if(count($this->getCarrinho()) > 0)
            {
                foreach($this->getCarrinho() as $produtoInCarrinho)
                {
                    if($produtoInCarrinho->getId() === $produto->getId())
                    {
                        $quantidade = $produtoInCarrinho->getQuantidade() + $produto->getQuantidade();
                        $produtoInCarrinho->setQuantidade($quantidade);
                        $noCarrinho = true;
                        break;
                    }
                }
            }
            
            if(!$noCarrinho)
            {
                $this->setProdutoInCarrinho($produto);
            }
        }

        private function setProdutoInCarrinho($produto)
        {
            $_SESSION['carrinho']['products'][] = $produto;
        }

        private function setTotal(Produto $produto)
        {
            $_SESSION['carrinho']['total'] += $produto->getValor() * $produto->getQuantidade();
        }

        public function remove(int $id)
        {
            if(isset($_SESSION['carrinho']['products']))
            {
                foreach($this->getCarrinho() as $index => $produto)
                {
                    if($produto->getId() === $id)
                    {
                        unset($_SESSION['carrinho']['products'][$index]);
                        $_SESSION['carrinho']['total'] -= $produto->getValor() * $produto->getQuantidade();
                    }
                }
            }
        }

        public function getCarrinho()
        {
           return $_SESSION['carrinho']['products'] ?? [];
        }

        public function getTotal()
        {
           return $_SESSION['carrinho']['total'] ?? 0;
        }
    }

?>