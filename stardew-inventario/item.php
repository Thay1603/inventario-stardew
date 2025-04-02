<?php

class Item {
    private $nome;
    private $quantidade;
    private $descrição;
    private $imagem;

    // Construtor
    public function __construct($nome, $quantidade, $descrição, $imagem) {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->descrição = $descrição;
        $this->imagem = $imagem;
    }

    // Métodos para acessar os atributos
    public function getNome() {
        return $this->nome;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function getDescrição() {
        return $this->descrição;
    }

    public function getImagem() {
        return $this->imagem;
    }
}
