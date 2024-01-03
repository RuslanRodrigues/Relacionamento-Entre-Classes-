<?php

class Lutador {
  // Atributos
  private $nome, $nacionalidade, $idade;
  private $altura, $peso, $categoria;
  private $vitorias, $derrotas, $empates;

  // Construtor
  function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){
    $this->nome = $no;
    $this->nacionalidade = $na;
    $this->idade = $id;
    $this->altura = $al;
    $this->setPeso($pe);
    $this->vitorias = $vi;
    $this->derrotas = $de;
    $this->empates = $em;
  }

  // Métodos Get
  function getNome() {
    return $this->nome;
  }

  function getNacionalidade(){
    return $this->nacionalidade;
  }

  function getIdade(){
    return $this->idade;
  }

  function getAltura(){
    return $this->altura;
  }

  function getPeso(){
    return $this->peso;
  }

  function getCategoria(){
    return $this->categoria;
  }

  function getVitorias(){
    return $this->vitorias;
  }

  function getDerrotas(){
    return $this->derrotas;
  }

  function getEmpates(){
    return $this->empates;
  }

  // Métodos Set
  function setNome($nome) {
    $this->nome = $nome;
  }

  function setNacionalidade($nacionalidade){
    $this->nacionalidade = $nacionalidade;
  }

  function setIdade($idade){
    $this->idade = $idade;
  }

  function setAltura($altura){
    $this->altura = $altura;
  }

  function setPeso($peso){
    $this->peso = $peso;
    $this->setCategoria();

  }

  private function setCategoria(){
    if ($this->peso < 52.2){
      $this->categoria = "Inválido";
    }elseif ($this->peso <= 70.3){
      $this->categoria = "Leve";
    }elseif ($this->peso <= 83.9){
      $this->categoria = "Médio";
    }elseif($this->peso <= 120.2){
      $this->categoria ="pesado";
    }else{
      $this->categoria = "Inválido";
    }

  }

  function setVitorias($vitorias){
    $this->vitorias = $vitorias;
  }

  function setDerrotas($derrotas){
    $this->derrotas = $derrotas;
  }

  function setEmpates($empates){
    $this->empates = $empates;
  }
  // Objetos

  function apresentar(){
    echo "<p>----------------------</p>";
    echo "<p>CHEGOU A HORA! O lutador " . $this->getNome();
    echo ", veio diretamente de " . $this->getNacionalidade();
    echo ", Tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . " KG!!.";
    echo "<br> Ele tem " . $this->getVitorias() . " vitória(s)";
    echo ", " . $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empate(s)";
  }
  function status(){
    echo "<p>----------------------</p>";
    echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
    echo " e já ganhou " . $this->getVitorias() . " vez(es), ";
    echo "perdeu " . $this->getDerrotas() . " vez(es) e, ";
    echo "empatou " . $this->getEmpates() . " vez(es)!";
  }
  function ganharLuta(){
    $this->setVitorias($this->getVitorias() + 1);
  }
  function perderLuta(){
      $this->setDerrotas($this->getDerrotas() + 1);
  }
  function empatarLuta(){
  $this->setEmpates($this->getEmpates() + 1);
  }
}
