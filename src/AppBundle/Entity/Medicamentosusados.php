<?php

namespace AppBundle\Entity;

/**
 * Medicamentosusados
 */
class Medicamentosusados
{
    /**
     * @var integer
     */
    private $codigomedicamentousado;

    /**
     * @var string
     */
    private $medicamentodescricao;

    /**
     * @var string
     */
    private $medicamentomesgestacaouso;

    /**
     * @var boolean
     */
    private $primeiromesmedicamentogestacaouso;

    /**
     * @var boolean
     */
    private $segundomesmedicamentogestacaouso;

    /**
     * @var boolean
     */
    private $terceiromesmedicamentogestacaouso;

    /**
     * @var boolean
     */
    private $quartomesmedicamentogestacaouso;

    /**
     * @var boolean
     */
    private $quintomesmedicamentogestacaouso;

    /**
     * @var boolean
     */
    private $sextomesmedicamentogestacaouso;

    /**
     * @var boolean
     */
    private $setimomesmedicamentogestacaouso;

    /**
     * @var boolean
     */
    private $oitavomesmedicamentogestacaouso;

    /**
     * @var boolean
     */
    private $nonomesmedicamentogestacaouso;

    /**
     * @var boolean
     */
    private $naoseimesmedicamentogestacaouso;

    /**
     * @var \AppBundle\Entity\Historicogestacaoneonatal
     */
    private $codigohistorico;

    /**
     * @var \AppBundle\Entity\Medicamentos
     */
    private $codigomedicamento;


    /**
     * Get codigomedicamentousado
     *
     * @return integer
     */
    public function getCodigomedicamentousado()
    {
        return $this->codigomedicamentousado;
    }

    /**
     * Set medicamentodescricao
     *
     * @param string $medicamentodescricao
     *
     * @return Medicamentosusados
     */
    public function setMedicamentodescricao($medicamentodescricao)
    {
        $this->medicamentodescricao = $medicamentodescricao;

        return $this;
    }

    /**
     * Get medicamentodescricao
     *
     * @return string
     */
    public function getMedicamentodescricao()
    {
        return $this->medicamentodescricao;
    }

    /**
     * Set medicamentomesgestacaouso
     *
     * @param string $medicamentomesgestacaouso
     *
     * @return Medicamentosusados
     */
    public function setMedicamentomesgestacaouso($medicamentomesgestacaouso)
    {
        $this->medicamentomesgestacaouso = $medicamentomesgestacaouso;

        return $this;
    }

    /**
     * Get medicamentomesgestacaouso
     *
     * @return string
     */
    public function getMedicamentomesgestacaouso()
    {
        return $this->medicamentomesgestacaouso;
    }

    /**
     * Set primeiromesmedicamentogestacaouso
     *
     * @param boolean $primeiromesmedicamentogestacaouso
     *
     * @return Medicamentosusados
     */
    public function setPrimeiromesmedicamentogestacaouso($primeiromesmedicamentogestacaouso)
    {
        $this->primeiromesmedicamentogestacaouso = $primeiromesmedicamentogestacaouso;

        return $this;
    }

    /**
     * Get primeiromesmedicamentogestacaouso
     *
     * @return boolean
     */
    public function getPrimeiromesmedicamentogestacaouso()
    {
        return $this->primeiromesmedicamentogestacaouso;
    }

    /**
     * Set segundomesmedicamentogestacaouso
     *
     * @param boolean $segundomesmedicamentogestacaouso
     *
     * @return Medicamentosusados
     */
    public function setSegundomesmedicamentogestacaouso($segundomesmedicamentogestacaouso)
    {
        $this->segundomesmedicamentogestacaouso = $segundomesmedicamentogestacaouso;

        return $this;
    }

    /**
     * Get segundomesmedicamentogestacaouso
     *
     * @return boolean
     */
    public function getSegundomesmedicamentogestacaouso()
    {
        return $this->segundomesmedicamentogestacaouso;
    }

    /**
     * Set terceiromesmedicamentogestacaouso
     *
     * @param boolean $terceiromesmedicamentogestacaouso
     *
     * @return Medicamentosusados
     */
    public function setTerceiromesmedicamentogestacaouso($terceiromesmedicamentogestacaouso)
    {
        $this->terceiromesmedicamentogestacaouso = $terceiromesmedicamentogestacaouso;

        return $this;
    }

    /**
     * Get terceiromesmedicamentogestacaouso
     *
     * @return boolean
     */
    public function getTerceiromesmedicamentogestacaouso()
    {
        return $this->terceiromesmedicamentogestacaouso;
    }

    /**
     * Set quartomesmedicamentogestacaouso
     *
     * @param boolean $quartomesmedicamentogestacaouso
     *
     * @return Medicamentosusados
     */
    public function setQuartomesmedicamentogestacaouso($quartomesmedicamentogestacaouso)
    {
        $this->quartomesmedicamentogestacaouso = $quartomesmedicamentogestacaouso;

        return $this;
    }

    /**
     * Get quartomesmedicamentogestacaouso
     *
     * @return boolean
     */
    public function getQuartomesmedicamentogestacaouso()
    {
        return $this->quartomesmedicamentogestacaouso;
    }

    /**
     * Set quintomesmedicamentogestacaouso
     *
     * @param boolean $quintomesmedicamentogestacaouso
     *
     * @return Medicamentosusados
     */
    public function setQuintomesmedicamentogestacaouso($quintomesmedicamentogestacaouso)
    {
        $this->quintomesmedicamentogestacaouso = $quintomesmedicamentogestacaouso;

        return $this;
    }

    /**
     * Get quintomesmedicamentogestacaouso
     *
     * @return boolean
     */
    public function getQuintomesmedicamentogestacaouso()
    {
        return $this->quintomesmedicamentogestacaouso;
    }

    /**
     * Set sextomesmedicamentogestacaouso
     *
     * @param boolean $sextomesmedicamentogestacaouso
     *
     * @return Medicamentosusados
     */
    public function setSextomesmedicamentogestacaouso($sextomesmedicamentogestacaouso)
    {
        $this->sextomesmedicamentogestacaouso = $sextomesmedicamentogestacaouso;

        return $this;
    }

    /**
     * Get sextomesmedicamentogestacaouso
     *
     * @return boolean
     */
    public function getSextomesmedicamentogestacaouso()
    {
        return $this->sextomesmedicamentogestacaouso;
    }

    /**
     * Set setimomesmedicamentogestacaouso
     *
     * @param boolean $setimomesmedicamentogestacaouso
     *
     * @return Medicamentosusados
     */
    public function setSetimomesmedicamentogestacaouso($setimomesmedicamentogestacaouso)
    {
        $this->setimomesmedicamentogestacaouso = $setimomesmedicamentogestacaouso;

        return $this;
    }

    /**
     * Get setimomesmedicamentogestacaouso
     *
     * @return boolean
     */
    public function getSetimomesmedicamentogestacaouso()
    {
        return $this->setimomesmedicamentogestacaouso;
    }

    /**
     * Set oitavomesmedicamentogestacaouso
     *
     * @param boolean $oitavomesmedicamentogestacaouso
     *
     * @return Medicamentosusados
     */
    public function setOitavomesmedicamentogestacaouso($oitavomesmedicamentogestacaouso)
    {
        $this->oitavomesmedicamentogestacaouso = $oitavomesmedicamentogestacaouso;

        return $this;
    }

    /**
     * Get oitavomesmedicamentogestacaouso
     *
     * @return boolean
     */
    public function getOitavomesmedicamentogestacaouso()
    {
        return $this->oitavomesmedicamentogestacaouso;
    }

    /**
     * Set nonomesmedicamentogestacaouso
     *
     * @param boolean $nonomesmedicamentogestacaouso
     *
     * @return Medicamentosusados
     */
    public function setNonomesmedicamentogestacaouso($nonomesmedicamentogestacaouso)
    {
        $this->nonomesmedicamentogestacaouso = $nonomesmedicamentogestacaouso;

        return $this;
    }

    /**
     * Get nonomesmedicamentogestacaouso
     *
     * @return boolean
     */
    public function getNonomesmedicamentogestacaouso()
    {
        return $this->nonomesmedicamentogestacaouso;
    }

    /**
     * Set naoseimesmedicamentogestacaouso
     *
     * @param boolean $naoseimesmedicamentogestacaouso
     *
     * @return Medicamentosusados
     */
    public function setNaoseimesmedicamentogestacaouso($naoseimesmedicamentogestacaouso)
    {
        $this->naoseimesmedicamentogestacaouso = $naoseimesmedicamentogestacaouso;

        return $this;
    }

    /**
     * Get naoseimesmedicamentogestacaouso
     *
     * @return boolean
     */
    public function getNaoseimesmedicamentogestacaouso()
    {
        return $this->naoseimesmedicamentogestacaouso;
    }

    /**
     * Set codigohistorico
     *
     * @param \AppBundle\Entity\Historicogestacaoneonatal $codigohistorico
     *
     * @return Medicamentosusados
     */
    public function setCodigohistorico(\AppBundle\Entity\Historicogestacaoneonatal $codigohistorico = null)
    {
        $this->codigohistorico = $codigohistorico;

        return $this;
    }

    /**
     * Get codigohistorico
     *
     * @return \AppBundle\Entity\Historicogestacaoneonatal
     */
    public function getCodigohistorico()
    {
        return $this->codigohistorico;
    }

    /**
     * Set codigomedicamento
     *
     * @param \AppBundle\Entity\Medicamentos $codigomedicamento
     *
     * @return Medicamentosusados
     */
    public function setCodigomedicamento(\AppBundle\Entity\Medicamentos $codigomedicamento = null)
    {
        $this->codigomedicamento = $codigomedicamento;

        return $this;
    }

    /**
     * Get codigomedicamento
     *
     * @return \AppBundle\Entity\Medicamentos
     */
    public function getCodigomedicamento()
    {
        return $this->codigomedicamento;
    }
}

