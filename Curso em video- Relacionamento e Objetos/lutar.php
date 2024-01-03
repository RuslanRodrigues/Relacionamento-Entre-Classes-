<?php

require_once 'lutador.php';

class Luta {
  // Atributos
  private $desafiado;
  private $desafiante;
  private $rounds;
  private $aprovada;

  // Métodos Get
  function getDesafiado() {
    return $this->desafiado;
  }

  function getDesafiante() {
    return $this->desafiante;
  }

  function getRounds() {
    return $this->rounds;
  }

  function getAprovada() {
    return $this->aprovada;
  }

  // Métodos Set
  function setDesafiado($desafiado) {
    $this->desafiado = $desafiado;
  }

  function setDesafiante($desafiante) {
    $this->desafiante = $desafiante;
  }

  function setRounds($rounds) {
    $this->rounds = $rounds;
  }

  function setAprovada($aprovada) {
    $this->aprovada = $aprovada;
  }

  // Métodos
  public function marcarLuta($l0, $l1) {
    if ($l0->getCategoria() == $l1->getCategoria() && ($l0 != $l1)){
      $this->aprovada = true;
      $this->desafiado = $l0;
      $this->desafiante = $l1;
    } else {
      $this->aprovada = false;
      $this->desafiado = null;
      $this->desafiante = null;
    }
  }

  public function lutar() {
   if ($this->aprovada) {
     $this->desafiado->apresentar();
     $this->desafiante->apresentar();
     $vencedor = rand(0, 2);
     switch ($vencedor) {
       case 0: // Desafiado vence
         echo "<p>" . $this->desafiado->getNome() . " Ganhou a Luta!</p>";
         $this->desafiado->ganharLuta();
         $this->desafiante->perderLuta();
         break;
       case 1: // Desafiante vence
         echo "<p>" . $this->desafiante->getNome() . " Ganhou a Luta!</p>";
         $this->desafiante->ganharLuta();
         $this->desafiado->perderLuta();
         break;
       case 2: // Empate
         echo "<p>Empate!</p>";
         $this->desafiado->empatarLuta();
         $this->desafiante->empatarLuta();
         break;
     }

   } else {
     echo "<p>Luta não pode acontecer </p>";
   }
  }
}
