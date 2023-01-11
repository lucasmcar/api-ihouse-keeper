<?php

namespace app\vo;

class AvalizacaoVo
{
    private $cdAvaliacao;
    private $avaliacao;
    private $descricao;
    private $cdCliente;


    public function __construct()
    {
        
    }

    public function setCdAvaliacao($cdAvaliacao)
    {
        $this->cdAvaliacao = $cdAvaliacao;
    }

    public function getCdAvaliacao()
    {
        return $this->cdAvaliacao;
    }

    public function setAvaliacao($avaliacao)
    {
        $this->avaliacao = $avaliacao;
    }

    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    public function setDescricaoAvaliacao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setCdCliente($cdCliente)
    {
        $this->cdCliente = $cdCliente;
    
    }

    public function getCdCliente()
    {
        return $this->cdCliente;
    }


}