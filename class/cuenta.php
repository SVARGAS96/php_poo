<?php
//Se crea la clase Cuenta
class Cuenta{ 
  private $nombre;
  private $nroCuenta;
  private $tipoInteres;
  private $saldo;
  public function__construct($nombre $nroCuenta $tipoInteres $saldo)
  {
    $this->nombre = $nombre;
    $this->nroCuenta= $nroCuenta;
    $this->tipoInteres= $tipoInteres;
    $this->saldo= $saldo;

  }

}
?>