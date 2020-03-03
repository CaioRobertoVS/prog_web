<?php

class Pessoa
  {
    private $nome;

    private $email;

    private $fone;

    
    public function __construct($nome = null, $sobrenome = null)
    {
      $this->nome = $nome;
      $this->email = $email;
      $this->fone = $fone;
    }
    

    public function setNome($nome)
    {
      $this->nome = $nome;
    }

    public function setEmail($sobrenome)
    {
      $this->email = $email;
    }

    public function setFone($fone)
    {
      $this->fone = $fone;
    }

    public function getNomeCompleto()
    {
      return "{$this->nome} {$this->email}";
    }

    public function receiveData($post)
    {
      $this->nome = $post["nome"];
      $this->email = $post["email"];
      $fone = $post["fone"];
    }
  }