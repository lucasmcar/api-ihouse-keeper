<?php

namespace app\vo;

class ClienteVo
{

    private $cdCliente;
    private $clienteNome;
    private $email;
    private $nrCelular;
    private $nrTelefone;

    public function __construct()
    {

    }

    public function setCdCliente($cdCliente)
    {
        $this->cdCliente = $cdCliente;
    }

    public function getCdCliente()
    {
        return $this->cdCliente;
    }

    public function setClienteNome($clienteNome)
    {
        $this->clienteNome = $clienteNome;
    }

    public function getClienteNome()
    {
        return $this->clienteNome;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setNrCelular($nrCelular)
    {
        $this->nrCelular = $nrCelular;
    }

    public function getNrCelular()
    {
        return $this->nrCelular;
    }

    public function setNrTelefone($nrTelefone)
    {
        $this->nrTelefone = $nrTelefone;
    }

    public function getNrTelefone()
    {
        return $this->nrTelefone;
    }
}