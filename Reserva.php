<?php

class Reserva {
    private $id;
    private $nome;
    private $checkin;
    private $checkout;
    private $num_hospedes;

    public function __construct($id, $nome, $checkin, $checkout, $num_hospedes) {
        $this->id = $id;
        $this->nome = $nome;
        $this->checkin = $checkin;
        $this->checkout = $checkout;
        $this->num_hospedes = $num_hospedes;
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCheckin() {
        return $this->checkin;
    }

    public function getCheckout() {
        return $this->checkout;
    }

    public function getNumHospedes() {
        return $this->num_hospedes;
    }
}
