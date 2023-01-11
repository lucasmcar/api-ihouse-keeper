<?php

namespace app\vo;

class EmpregadaVo
{

    private $cdEmpregada;
    private $empregadaNome;
    private $email;
    private $nrCelular;
    private $nrTelefone;
    private $avalicao;

    public function __construct()
    {

    }

    public function setCdEmpregada($cdEmpregada)
    {
        $this->cdEmpregada = $cdEmpregada;
    }

    public function getCdEmpregada()
    {
        return $this->cdEmpregada;
    }

    public function setClienteNome($empregadaNome)
    {
        $this->empregadaNome = $empregadaNome;
    }

    public function getEmpregadaNome()
    {
        return $this->empregadaNome;
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