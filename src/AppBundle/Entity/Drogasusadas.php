<?php

namespace AppBundle\Entity;

/**
 * Drogasusadas
 */
class Drogasusadas
{
    /**
     * @var integer
     */
    private $codigodrogausada;

    /**
     * @var string
     */
    private $drogadescricao;

    /**
     * @var boolean
     */
    private $primeiromesgestacaousodroga;

    /**
     * @var boolean
     */
    private $segundomesgestacaousodroga;

    /**
     * @var boolean
     */
    private $terceiromesgestacaousodroga;

    /**
     * @var boolean
     */
    private $quartomesgestacaousodroga;

    /**
     * @var boolean
     */
    private $quintomesgestacaousodroga;

    /**
     * @var boolean
     */
    private $sextomesgestacaousodroga;

    /**
     * @var boolean
     */
    private $setimomesgestacaousodroga;

    /**
     * @var boolean
     */
    private $oitavomesgestacaousodroga;

    /**
     * @var boolean
     */
    private $nonomesgestacaousodroga;

    /**
     * @var boolean
     */
    private $naoseimesgestacaousodroga;

    /**
     * @var \AppBundle\Entity\Drogas
     */
    private $codigodrogas;

    /**
     * @var \AppBundle\Entity\Historicogestacaoneonatal
     */
    private $codigohistorico;


    /**
     * Get codigodrogausada
     *
     * @return integer
     */
    public function getCodigodrogausada()
    {
        return $this->codigodrogausada;
    }

    /**
     * Set drogadescricao
     *
     * @param string $drogadescricao
     *
     * @return Drogasusadas
     */
    public function setDrogadescricao($drogadescricao)
    {
        $this->drogadescricao = $drogadescricao;

        return $this;
    }

    /**
     * Get drogadescricao
     *
     * @return string
     */
    public function getDrogadescricao()
    {
        return $this->drogadescricao;
    }

    /**
     * Set primeiromesgestacaousodroga
     *
     * @param boolean $primeiromesgestacaousodroga
     *
     * @return Drogasusadas
     */
    public function setPrimeiromesgestacaousodroga($primeiromesgestacaousodroga)
    {
        $this->primeiromesgestacaousodroga = $primeiromesgestacaousodroga;

        return $this;
    }

    /**
     * Get primeiromesgestacaousodroga
     *
     * @return boolean
     */
    public function getPrimeiromesgestacaousodroga()
    {
        return $this->primeiromesgestacaousodroga;
    }

    /**
     * Set segundomesgestacaousodroga
     *
     * @param boolean $segundomesgestacaousodroga
     *
     * @return Drogasusadas
     */
    public function setSegundomesgestacaousodroga($segundomesgestacaousodroga)
    {
        $this->segundomesgestacaousodroga = $segundomesgestacaousodroga;

        return $this;
    }

    /**
     * Get segundomesgestacaousodroga
     *
     * @return boolean
     */
    public function getSegundomesgestacaousodroga()
    {
        return $this->segundomesgestacaousodroga;
    }

    /**
     * Set terceiromesgestacaousodroga
     *
     * @param boolean $terceiromesgestacaousodroga
     *
     * @return Drogasusadas
     */
    public function setTerceiromesgestacaousodroga($terceiromesgestacaousodroga)
    {
        $this->terceiromesgestacaousodroga = $terceiromesgestacaousodroga;

        return $this;
    }

    /**
     * Get terceiromesgestacaousodroga
     *
     * @return boolean
     */
    public function getTerceiromesgestacaousodroga()
    {
        return $this->terceiromesgestacaousodroga;
    }

    /**
     * Set quartomesgestacaousodroga
     *
     * @param boolean $quartomesgestacaousodroga
     *
     * @return Drogasusadas
     */
    public function setQuartomesgestacaousodroga($quartomesgestacaousodroga)
    {
        $this->quartomesgestacaousodroga = $quartomesgestacaousodroga;

        return $this;
    }

    /**
     * Get quartomesgestacaousodroga
     *
     * @return boolean
     */
    public function getQuartomesgestacaousodroga()
    {
        return $this->quartomesgestacaousodroga;
    }

    /**
     * Set quintomesgestacaousodroga
     *
     * @param boolean $quintomesgestacaousodroga
     *
     * @return Drogasusadas
     */
    public function setQuintomesgestacaousodroga($quintomesgestacaousodroga)
    {
        $this->quintomesgestacaousodroga = $quintomesgestacaousodroga;

        return $this;
    }

    /**
     * Get quintomesgestacaousodroga
     *
     * @return boolean
     */
    public function getQuintomesgestacaousodroga()
    {
        return $this->quintomesgestacaousodroga;
    }

    /**
     * Set sextomesgestacaousodroga
     *
     * @param boolean $sextomesgestacaousodroga
     *
     * @return Drogasusadas
     */
    public function setSextomesgestacaousodroga($sextomesgestacaousodroga)
    {
        $this->sextomesgestacaousodroga = $sextomesgestacaousodroga;

        return $this;
    }

    /**
     * Get sextomesgestacaousodroga
     *
     * @return boolean
     */
    public function getSextomesgestacaousodroga()
    {
        return $this->sextomesgestacaousodroga;
    }

    /**
     * Set setimomesgestacaousodroga
     *
     * @param boolean $setimomesgestacaousodroga
     *
     * @return Drogasusadas
     */
    public function setSetimomesgestacaousodroga($setimomesgestacaousodroga)
    {
        $this->setimomesgestacaousodroga = $setimomesgestacaousodroga;

        return $this;
    }

    /**
     * Get setimomesgestacaousodroga
     *
     * @return boolean
     */
    public function getSetimomesgestacaousodroga()
    {
        return $this->setimomesgestacaousodroga;
    }

    /**
     * Set oitavomesgestacaousodroga
     *
     * @param boolean $oitavomesgestacaousodroga
     *
     * @return Drogasusadas
     */
    public function setOitavomesgestacaousodroga($oitavomesgestacaousodroga)
    {
        $this->oitavomesgestacaousodroga = $oitavomesgestacaousodroga;

        return $this;
    }

    /**
     * Get oitavomesgestacaousodroga
     *
     * @return boolean
     */
    public function getOitavomesgestacaousodroga()
    {
        return $this->oitavomesgestacaousodroga;
    }

    /**
     * Set nonomesgestacaousodroga
     *
     * @param boolean $nonomesgestacaousodroga
     *
     * @return Drogasusadas
     */
    public function setNonomesgestacaousodroga($nonomesgestacaousodroga)
    {
        $this->nonomesgestacaousodroga = $nonomesgestacaousodroga;

        return $this;
    }

    /**
     * Get nonomesgestacaousodroga
     *
     * @return boolean
     */
    public function getNonomesgestacaousodroga()
    {
        return $this->nonomesgestacaousodroga;
    }

    /**
     * Set naoseimesgestacaousodroga
     *
     * @param boolean $naoseimesgestacaousodroga
     *
     * @return Drogasusadas
     */
    public function setNaoseimesgestacaousodroga($naoseimesgestacaousodroga)
    {
        $this->naoseimesgestacaousodroga = $naoseimesgestacaousodroga;

        return $this;
    }

    /**
     * Get naoseimesgestacaousodroga
     *
     * @return boolean
     */
    public function getNaoseimesgestacaousodroga()
    {
        return $this->naoseimesgestacaousodroga;
    }

    /**
     * Set codigodrogas
     *
     * @param \AppBundle\Entity\Drogas $codigodrogas
     *
     * @return Drogasusadas
     */
    public function setCodigodrogas(\AppBundle\Entity\Drogas $codigodrogas = null)
    {
        $this->codigodrogas = $codigodrogas;

        return $this;
    }

    /**
     * Get codigodrogas
     *
     * @return \AppBundle\Entity\Drogas
     */
    public function getCodigodrogas()
    {
        return $this->codigodrogas;
    }

    /**
     * Set codigohistorico
     *
     * @param \AppBundle\Entity\Historicogestacaoneonatal $codigohistorico
     *
     * @return Drogasusadas
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
}

