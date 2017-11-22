<?php

namespace AppBundle\Entity;

/**
 * Historicoirmaos
 */
class Historicoirmaos
{
    /**
     * @var integer
     */
    private $codigodadosescolares;

    /**
     * @var boolean
     */
    private $irmaosaudavel;

    /**
     * @var string
     */
    private $irmaosexo;

    /**
     * @var integer
     */
    private $irmaoidade;

    /**
     * @var string
     */
    private $irmaoparentesco;

    /**
     * @var \AppBundle\Entity\Identificacao
     */
    private $codigoidentificacao;


    /**
     * Get codigodadosescolares
     *
     * @return integer
     */
    public function getCodigodadosescolares()
    {
        return $this->codigodadosescolares;
    }

    /**
     * Set irmaosaudavel
     *
     * @param boolean $irmaosaudavel
     *
     * @return Historicoirmaos
     */
    public function setIrmaosaudavel($irmaosaudavel)
    {
        $this->irmaosaudavel = $irmaosaudavel;

        return $this;
    }

    /**
     * Get irmaosaudavel
     *
     * @return boolean
     */
    public function getIrmaosaudavel()
    {
        return $this->irmaosaudavel;
    }

    /**
     * Set irmaosexo
     *
     * @param string $irmaosexo
     *
     * @return Historicoirmaos
     */
    public function setIrmaosexo($irmaosexo)
    {
        $this->irmaosexo = $irmaosexo;

        return $this;
    }

    /**
     * Get irmaosexo
     *
     * @return string
     */
    public function getIrmaosexo()
    {
        return $this->irmaosexo;
    }

    /**
     * Set irmaoidade
     *
     * @param integer $irmaoidade
     *
     * @return Historicoirmaos
     */
    public function setIrmaoidade($irmaoidade)
    {
        $this->irmaoidade = $irmaoidade;

        return $this;
    }

    /**
     * Get irmaoidade
     *
     * @return integer
     */
    public function getIrmaoidade()
    {
        return $this->irmaoidade;
    }

    /**
     * Set irmaoparentesco
     *
     * @param string $irmaoparentesco
     *
     * @return Historicoirmaos
     */
    public function setIrmaoparentesco($irmaoparentesco)
    {
        $this->irmaoparentesco = $irmaoparentesco;

        return $this;
    }

    /**
     * Get irmaoparentesco
     *
     * @return string
     */
    public function getIrmaoparentesco()
    {
        return $this->irmaoparentesco;
    }

    /**
     * Set codigoidentificacao
     *
     * @param \AppBundle\Entity\Identificacao $codigoidentificacao
     *
     * @return Historicoirmaos
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
}

