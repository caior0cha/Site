<?php

    class Produto
    {
        private int $id;
        private String $nome;
        private float $valor;
        private int $quantidade;

        public function setId(int $id)
        {
            $this->id = $id;
        }

        public function setNome(String $nome)
        {
            $this->nome = $nome;
        }

        public function setValor(float $valor)
        {
            $this->valor = $valor;
        }

        public function setQuantidade(int $quantidade)
        {
            $this->quantidade = $quantidade;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getNome()
        {
            return $this->nome;
        }

        public function getValor()
        {
            return $this->valor;
        }

        public function getQuantidade()
        {
            return $this->quantidade;
        }
    }



?>