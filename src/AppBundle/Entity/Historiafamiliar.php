<?php

namespace AppBundle\Entity;

/**
 * Historiafamiliar
 */
class Historiafamiliar
{
    /**
     * @var integer
     */
    private $codigohistoriafamiliar;

    /**
     * @var string
     */
    private $paiescolaridade;

    /**
     * @var string
     */
    private $maeescolaridade;

    /**
     * @var integer
     */
    private $idadematerna;

    /**
     * @var integer
     */
    private $idadepaterna;

    /**
     * @var boolean
     */
    private $cosanguinidade;

    /**
     * @var string
     */
    private $graucosanguinidade;

    /**
     * @var string
     */
    private $descricaocosanguinidade;

    /**
     * @var string
     */
    private $maeocupacao;

    /**
     * @var string
     */
    private $paiocupacao;

    /**
     * @var integer
     */
    private $quantidadeirmaos;

    /**
     * @var boolean
     */
    private $recorrenciafamiliar;

    /**
     * @var boolean
     */
    private $recorrenciafamiliargenetica;

    /**
     * @var string
     */
    private $descricaorecorrenciafamiliargenetica;

    /**
     * @var \AppBundle\Entity\Identificacao
     */
    private $codigoidentificacao;

    /**
     * @var \AppBundle\Entity\Escolaridade
     */
    private $codigoescolaridademae;

    /**
     * @var \AppBundle\Entity\Escolaridade
     */
    private $codigoescolaridadepai;


    /**
     * Get codigohistoriafamiliar
     *
     * @return integer
     */
    public function getCodigohistoriafamiliar()
    {
        return $this->codigohistoriafamiliar;
    }

    /**
     * Set paiescolaridade
     *
     * @param string $paiescolaridade
     *
     * @return Historiafamiliar
     */
    public function setPaiescolaridade($paiescolaridade)
    {
        $this->paiescolaridade = $paiescolaridade;

        return $this;
    }

    /**
     * Get paiescolaridade
     *
     * @return string
     */
    public function getPaiescolaridade()
    {
        return $this->paiescolaridade;
    }

    /**
     * Set maeescolaridade
     *
     * @param string $maeescolaridade
     *
     * @return Historiafamiliar
     */
    public function setMaeescolaridade($maeescolaridade)
    {
        $this->maeescolaridade = $maeescolaridade;

        return $this;
    }

    /**
     * Get maeescolaridade
     *
     * @return string
     */
    public function getMaeescolaridade()
    {
        return $this->maeescolaridade;
    }

    /**
     * Set idadematerna
     *
     * @param integer $idadematerna
     *
     * @return Historiafamiliar
     */
    public function setIdadematerna($idadematerna)
    {
        $this->idadematerna = $idadematerna;

        return $this;
    }

    /**
     * Get idadematerna
     *
     * @return integer
     */
    public function getIdadematerna()
    {
        return $this->idadematerna;
    }

    /**
     * Set idadepaterna
     *
     * @param integer $idadepaterna
     *
     * @return Historiafamiliar
     */
    public function setIdadepaterna($idadepaterna)
    {
        $this->idadepaterna = $idadepaterna;

        return $this;
    }

    /**
     * Get idadepaterna
     *
     * @return integer
     */
    public function getIdadepaterna()
    {
        return $this->idadepaterna;
    }

    /**
     * Set cosanguinidade
     *
     * @param boolean $cosanguinidade
     *
     * @return Historiafamiliar
     */
    public function setCosanguinidade($cosanguinidade)
    {
        $this->cosanguinidade = $cosanguinidade;

        return $this;
    }

    /**
     * Get cosanguinidade
     *
     * @return boolean
     */
    public function getCosanguinidade()
    {
        return $this->cosanguinidade;
    }

    /**
     * Set graucosanguinidade
     *
     * @param string $graucosanguinidade
     *
     * @return Historiafamiliar
     */
    public function setGraucosanguinidade($graucosanguinidade)
    {
        $this->graucosanguinidade = $graucosanguinidade;

        return $this;
    }

    /**
     * Get graucosanguinidade
     *
     * @return string
     */
    public function getGraucosanguinidade()
    {
        return $this->graucosanguinidade;
    }

    /**
     * Set descricaocosanguinidade
     *
     * @param string $descricaocosanguinidade
     *
     * @return Historiafamiliar
     */
    public function setDescricaocosanguinidade($descricaocosanguinidade)
    {
        $this->descricaocosanguinidade = $descricaocosanguinidade;

        return $this;
    }

    /**
     * Get descricaocosanguinidade
     *
     * @return string
     */
    public function getDescricaocosanguinidade()
    {
        return $this->descricaocosanguinidade;
    }

    /**
     * Set maeocupacao
     *
     * @param string $maeocupacao
     *
     * @return Historiafamiliar
     */
    public function setMaeocupacao($maeocupacao)
    {
        $this->maeocupacao = $maeocupacao;

        return $this;
    }

    /**
     * Get maeocupacao
     *
     * @return string
     */
    public function getMaeocupacao()
    {
        return $this->maeocupacao;
    }

    /**
     * Set paiocupacao
     *
     * @param string $paiocupacao
     *
     * @return Historiafamiliar
     */
    public function setPaiocupacao($paiocupacao)
    {
        $this->paiocupacao = $paiocupacao;

        return $this;
    }

    /**
     * Get paiocupacao
     *
     * @return string
     */
    public function getPaiocupacao()
    {
        return $this->paiocupacao;
    }

    /**
     * Set quantidadeirmaos
     *
     * @param integer $quantidadeirmaos
     *
     * @return Historiafamiliar
     */
    public function setQuantidadeirmaos($quantidadeirmaos)
    {
        $this->quantidadeirmaos = $quantidadeirmaos;

        return $this;
    }

    /**
     * Get quantidadeirmaos
     *
     * @return integer
     */
    public function getQuantidadeirmaos()
    {
        return $this->quantidadeirmaos;
    }

    /**
     * Set recorrenciafamiliar
     *
     * @param boolean $recorrenciafamiliar
     *
     * @return Historiafamiliar
     */
    public function setRecorrenciafamiliar($recorrenciafamiliar)
    {
        $this->recorrenciafamiliar = $recorrenciafamiliar;

        return $this;
    }

    /**
     * Get recorrenciafamiliar
     *
     * @return boolean
     */
    public function getRecorrenciafamiliar()
    {
        return $this->recorrenciafamiliar;
    }

    /**
     * Set recorrenciafamiliargenetica
     *
     * @param boolean $recorrenciafamiliargenetica
     *
     * @return Historiafamiliar
     */
    public function setRecorrenciafamiliargenetica($recorrenciafamiliargenetica)
    {
        $this->recorrenciafamiliargenetica = $recorrenciafamiliargenetica;

        return $this;
    }

    /**
     * Get recorrenciafamiliargenetica
     *
     * @return boolean
     */
    public function getRecorrenciafamiliargenetica()
    {
        return $this->recorrenciafamiliargenetica;
    }

    /**
     * Set descricaorecorrenciafamiliargenetica
     *
     * @param string $descricaorecorrenciafamiliargenetica
     *
     * @return Historiafamiliar
     */
    public function setDescricaorecorrenciafamiliargenetica($descricaorecorrenciafamiliargenetica)
    {
        $this->descricaorecorrenciafamiliargenetica = $descricaorecorrenciafamiliargenetica;

        return $this;
    }

    /**
     * Get descricaorecorrenciafamiliargenetica
     *
     * @return string
     */
    public function getDescricaorecorrenciafamiliargenetica()
    {
        return $this->descricaorecorrenciafamiliargenetica;
    }

    /**
     * Set codigoidentificacao
     *
     * @param \AppBundle\Entity\Identificacao $codigoidentificacao
     *
     * @return Historiafamiliar
     */
    public function setCodigoidentificacao(\AppBundle\Entity\Identificacao $codigoidentificacao = null)
    {
        $this->codigoidentificacao = $codigoidentificacao;

        return $this;
    }

    /**
     * Get codigoidentificacao
     *
     * @return \AppBundle\Entity\Identificacao
     */
    public function getCodigoidentificacao()
    {
        return $this->codigoidentificacao;
    }

    /**
     * Set codigoescolaridademae
     *
     * @param \AppBundle\Entity\Escolaridade $codigoescolaridademae
     *
     * @return Historiafamiliar
     */
    public function setCodigoescolaridademae(\AppBundle\Entity\Escolaridade $codigoescolaridademae = null)
    {
        $this->codigoescolaridademae = $codigoescolaridademae;

        return $this;
    }

    /**
     * Get codigoescolaridademae
     *
     * @return \AppBundle\Entity\Escolaridade
     */
    public function getCodigoescolaridademae()
    {
        return $this->codigoescolaridademae;
    }

    /**
     * Set codigoescolaridadepai
     *
     * @param \AppBundle\Entity\Escolaridade $codigoescolaridadepai
     *
     * @return Historiafamiliar
     */
    public function setCodigoescolaridadepai(\AppBundle\Entity\Escolaridade $codigoescolaridadepai = null)
    {
        $this->codigoescolaridadepai = $codigoescolaridadepai;

        return $this;
    }

    /**
     * Get codigoescolaridadepai
     *
     * @return \AppBundle\Entity\Escolaridade
     */
    public function getCodigoescolaridadepai()
    {
        return $this->codigoescolaridadepai;
    }
}

