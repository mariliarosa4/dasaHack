<?php

namespace AppBundle\Entity;

/**
 * Dadosfinais
 */
class Dadosfinais
{
    /**
     * @var integer
     */
    private $codigodadosfinais;

    /**
     * @var string
     */
    private $impressaoclinica;

    /**
     * @var boolean
     */
    private $diagnosticofinal;

    /**
     * @var string
     */
    private $diagnosticofinalds;

    /**
     * @var \AppBundle\Entity\Identificacao
     */
    private $codigoidentificacao;


    /**
     * Get codigodadosfinais
     *
     * @return integer
     */
    public function getCodigodadosfinais()
    {
        return $this->codigodadosfinais;
    }

    /**
     * Set impressaoclinica
     *
     * @param string $impressaoclinica
     *
     * @return Dadosfinais
     */
    public function setImpressaoclinica($impressaoclinica)
    {
        $this->impressaoclinica = $impressaoclinica;

        return $this;
    }

    /**
     * Get impressaoclinica
     *
     * @return string
     */
    public function getImpressaoclinica()
    {
        return $this->impressaoclinica;
    }

    /**
     * Set diagnosticofinal
     *
     * @param boolean $diagnosticofinal
     *
     * @return Dadosfinais
     */
    public function setDiagnosticofinal($diagnosticofinal)
    {
        $this->diagnosticofinal = $diagnosticofinal;

        return $this;
    }

    /**
     * Get diagnosticofinal
     *
     * @return boolean
     */
    public function getDiagnosticofinal()
    {
        return $this->diagnosticofinal;
    }

    /**
     * Set diagnosticofinalds
     *
     * @param string $diagnosticofinalds
     *
     * @return Dadosfinais
     */
    public function setDiagnosticofinalds($diagnosticofinalds)
    {
        $this->diagnosticofinalds = $diagnosticofinalds;

        return $this;
    }

    /**
     * Get diagnosticofinalds
     *
     * @return string
     */
    public function getDiagnosticofinalds()
    {
        return $this->diagnosticofinalds;
    }

    /**
     * Set codigoidentificacao
     *
     * @param \AppBundle\Entity\Identificacao $codigoidentificacao
     *
     * @return Dadosfinais
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

