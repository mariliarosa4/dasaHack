<?php

namespace AppBundle\Entity;

/**
 * Ultrasonografias
 */
class Ultrasonografias
{
    /**
     * @var integer
     */
    private $codigoultrassonografias;

    /**
     * @var string
     */
    private $rastreioprimeirotrimestredsalterado;

    /**
     * @var integer
     */
    private $rastreioprimeirotrimestrequantidade;

    /**
     * @var boolean
     */
    private $rastreioprimeirotrimestre;

    /**
     * @var boolean
     */
    private $rastreioprimeirotrimestrealterado;

    /**
     * @var boolean
     */
    private $ecoobstetricaalterado;

    /**
     * @var boolean
     */
    private $ecoobstetricatrimestre;

    /**
     * @var integer
     */
    private $ecoobstetricaquantidade;

    /**
     * @var boolean
     */
    private $ecoobstetricadsalterado;

    /**
     * @var string
     */
    private $ecomorfologicadsalterado;

    /**
     * @var boolean
     */
    private $ecomorfologicatrimestre;

    /**
     * @var boolean
     */
    private $ecomorfologicaalterado;

    /**
     * @var integer
     */
    private $ecomorfologicaquantidade;

    /**
     * @var string
     */
    private $ecocardiofetaldsalterado;

    /**
     * @var boolean
     */
    private $ecocardiofetaltrimestre;

    /**
     * @var boolean
     */
    private $ecocardiofetalalterado;

    /**
     * @var integer
     */
    private $ecocardiofetalquantidade;

    /**
     * @var boolean
     */
    private $resmagfetalalterado;

    /**
     * @var boolean
     */
    private $resmagfetaltrimestre;

    /**
     * @var string
     */
    private $resmagfetaldsalterado;

    /**
     * @var integer
     */
    private $resmagfetalquantidade;

    /**
     * @var boolean
     */
    private $ecotridimensionalalterado;

    /**
     * @var string
     */
    private $ecotridimensionaldsalterado;

    /**
     * @var integer
     */
    private $ecotridimensionalquantidade;

    /**
     * @var boolean
     */
    private $ecotridimensionaltrimestre;

    /**
     * @var boolean
     */
    private $ultrasonografias;

    /**
     * @var \AppBundle\Entity\Historicogestacaoneonatal
     */
    private $codigohistorico;


    /**
     * Get codigoultrassonografias
     *
     * @return integer
     */
    public function getCodigoultrassonografias()
    {
        return $this->codigoultrassonografias;
    }

    /**
     * Set rastreioprimeirotrimestredsalterado
     *
     * @param string $rastreioprimeirotrimestredsalterado
     *
     * @return Ultrasonografias
     */
    public function setRastreioprimeirotrimestredsalterado($rastreioprimeirotrimestredsalterado)
    {
        $this->rastreioprimeirotrimestredsalterado = $rastreioprimeirotrimestredsalterado;

        return $this;
    }

    /**
     * Get rastreioprimeirotrimestredsalterado
     *
     * @return string
     */
    public function getRastreioprimeirotrimestredsalterado()
    {
        return $this->rastreioprimeirotrimestredsalterado;
    }

    /**
     * Set rastreioprimeirotrimestrequantidade
     *
     * @param integer $rastreioprimeirotrimestrequantidade
     *
     * @return Ultrasonografias
     */
    public function setRastreioprimeirotrimestrequantidade($rastreioprimeirotrimestrequantidade)
    {
        $this->rastreioprimeirotrimestrequantidade = $rastreioprimeirotrimestrequantidade;

        return $this;
    }

    /**
     * Get rastreioprimeirotrimestrequantidade
     *
     * @return integer
     */
    public function getRastreioprimeirotrimestrequantidade()
    {
        return $this->rastreioprimeirotrimestrequantidade;
    }

    /**
     * Set rastreioprimeirotrimestre
     *
     * @param boolean $rastreioprimeirotrimestre
     *
     * @return Ultrasonografias
     */
    public function setRastreioprimeirotrimestre($rastreioprimeirotrimestre)
    {
        $this->rastreioprimeirotrimestre = $rastreioprimeirotrimestre;

        return $this;
    }

    /**
     * Get rastreioprimeirotrimestre
     *
     * @return boolean
     */
    public function getRastreioprimeirotrimestre()
    {
        return $this->rastreioprimeirotrimestre;
    }

    /**
     * Set rastreioprimeirotrimestrealterado
     *
     * @param boolean $rastreioprimeirotrimestrealterado
     *
     * @return Ultrasonografias
     */
    public function setRastreioprimeirotrimestrealterado($rastreioprimeirotrimestrealterado)
    {
        $this->rastreioprimeirotrimestrealterado = $rastreioprimeirotrimestrealterado;

        return $this;
    }

    /**
     * Get rastreioprimeirotrimestrealterado
     *
     * @return boolean
     */
    public function getRastreioprimeirotrimestrealterado()
    {
        return $this->rastreioprimeirotrimestrealterado;
    }

    /**
     * Set ecoobstetricaalterado
     *
     * @param boolean $ecoobstetricaalterado
     *
     * @return Ultrasonografias
     */
    public function setEcoobstetricaalterado($ecoobstetricaalterado)
    {
        $this->ecoobstetricaalterado = $ecoobstetricaalterado;

        return $this;
    }

    /**
     * Get ecoobstetricaalterado
     *
     * @return boolean
     */
    public function getEcoobstetricaalterado()
    {
        return $this->ecoobstetricaalterado;
    }

    /**
     * Set ecoobstetricatrimestre
     *
     * @param boolean $ecoobstetricatrimestre
     *
     * @return Ultrasonografias
     */
    public function setEcoobstetricatrimestre($ecoobstetricatrimestre)
    {
        $this->ecoobstetricatrimestre = $ecoobstetricatrimestre;

        return $this;
    }

    /**
     * Get ecoobstetricatrimestre
     *
     * @return boolean
     */
    public function getEcoobstetricatrimestre()
    {
        return $this->ecoobstetricatrimestre;
    }

    /**
     * Set ecoobstetricaquantidade
     *
     * @param integer $ecoobstetricaquantidade
     *
     * @return Ultrasonografias
     */
    public function setEcoobstetricaquantidade($ecoobstetricaquantidade)
    {
        $this->ecoobstetricaquantidade = $ecoobstetricaquantidade;

        return $this;
    }

    /**
     * Get ecoobstetricaquantidade
     *
     * @return integer
     */
    public function getEcoobstetricaquantidade()
    {
        return $this->ecoobstetricaquantidade;
    }

    /**
     * Set ecoobstetricadsalterado
     *
     * @param boolean $ecoobstetricadsalterado
     *
     * @return Ultrasonografias
     */
    public function setEcoobstetricadsalterado($ecoobstetricadsalterado)
    {
        $this->ecoobstetricadsalterado = $ecoobstetricadsalterado;

        return $this;
    }

    /**
     * Get ecoobstetricadsalterado
     *
     * @return boolean
     */
    public function getEcoobstetricadsalterado()
    {
        return $this->ecoobstetricadsalterado;
    }

    /**
     * Set ecomorfologicadsalterado
     *
     * @param string $ecomorfologicadsalterado
     *
     * @return Ultrasonografias
     */
    public function setEcomorfologicadsalterado($ecomorfologicadsalterado)
    {
        $this->ecomorfologicadsalterado = $ecomorfologicadsalterado;

        return $this;
    }

    /**
     * Get ecomorfologicadsalterado
     *
     * @return string
     */
    public function getEcomorfologicadsalterado()
    {
        return $this->ecomorfologicadsalterado;
    }

    /**
     * Set ecomorfologicatrimestre
     *
     * @param boolean $ecomorfologicatrimestre
     *
     * @return Ultrasonografias
     */
    public function setEcomorfologicatrimestre($ecomorfologicatrimestre)
    {
        $this->ecomorfologicatrimestre = $ecomorfologicatrimestre;

        return $this;
    }

    /**
     * Get ecomorfologicatrimestre
     *
     * @return boolean
     */
    public function getEcomorfologicatrimestre()
    {
        return $this->ecomorfologicatrimestre;
    }

    /**
     * Set ecomorfologicaalterado
     *
     * @param boolean $ecomorfologicaalterado
     *
     * @return Ultrasonografias
     */
    public function setEcomorfologicaalterado($ecomorfologicaalterado)
    {
        $this->ecomorfologicaalterado = $ecomorfologicaalterado;

        return $this;
    }

    /**
     * Get ecomorfologicaalterado
     *
     * @return boolean
     */
    public function getEcomorfologicaalterado()
    {
        return $this->ecomorfologicaalterado;
    }

    /**
     * Set ecomorfologicaquantidade
     *
     * @param integer $ecomorfologicaquantidade
     *
     * @return Ultrasonografias
     */
    public function setEcomorfologicaquantidade($ecomorfologicaquantidade)
    {
        $this->ecomorfologicaquantidade = $ecomorfologicaquantidade;

        return $this;
    }

    /**
     * Get ecomorfologicaquantidade
     *
     * @return integer
     */
    public function getEcomorfologicaquantidade()
    {
        return $this->ecomorfologicaquantidade;
    }

    /**
     * Set ecocardiofetaldsalterado
     *
     * @param string $ecocardiofetaldsalterado
     *
     * @return Ultrasonografias
     */
    public function setEcocardiofetaldsalterado($ecocardiofetaldsalterado)
    {
        $this->ecocardiofetaldsalterado = $ecocardiofetaldsalterado;

        return $this;
    }

    /**
     * Get ecocardiofetaldsalterado
     *
     * @return string
     */
    public function getEcocardiofetaldsalterado()
    {
        return $this->ecocardiofetaldsalterado;
    }

    /**
     * Set ecocardiofetaltrimestre
     *
     * @param boolean $ecocardiofetaltrimestre
     *
     * @return Ultrasonografias
     */
    public function setEcocardiofetaltrimestre($ecocardiofetaltrimestre)
    {
        $this->ecocardiofetaltrimestre = $ecocardiofetaltrimestre;

        return $this;
    }

    /**
     * Get ecocardiofetaltrimestre
     *
     * @return boolean
     */
    public function getEcocardiofetaltrimestre()
    {
        return $this->ecocardiofetaltrimestre;
    }

    /**
     * Set ecocardiofetalalterado
     *
     * @param boolean $ecocardiofetalalterado
     *
     * @return Ultrasonografias
     */
    public function setEcocardiofetalalterado($ecocardiofetalalterado)
    {
        $this->ecocardiofetalalterado = $ecocardiofetalalterado;

        return $this;
    }

    /**
     * Get ecocardiofetalalterado
     *
     * @return boolean
     */
    public function getEcocardiofetalalterado()
    {
        return $this->ecocardiofetalalterado;
    }

    /**
     * Set ecocardiofetalquantidade
     *
     * @param integer $ecocardiofetalquantidade
     *
     * @return Ultrasonografias
     */
    public function setEcocardiofetalquantidade($ecocardiofetalquantidade)
    {
        $this->ecocardiofetalquantidade = $ecocardiofetalquantidade;

        return $this;
    }

    /**
     * Get ecocardiofetalquantidade
     *
     * @return integer
     */
    public function getEcocardiofetalquantidade()
    {
        return $this->ecocardiofetalquantidade;
    }

    /**
     * Set resmagfetalalterado
     *
     * @param boolean $resmagfetalalterado
     *
     * @return Ultrasonografias
     */
    public function setResmagfetalalterado($resmagfetalalterado)
    {
        $this->resmagfetalalterado = $resmagfetalalterado;

        return $this;
    }

    /**
     * Get resmagfetalalterado
     *
     * @return boolean
     */
    public function getResmagfetalalterado()
    {
        return $this->resmagfetalalterado;
    }

    /**
     * Set resmagfetaltrimestre
     *
     * @param boolean $resmagfetaltrimestre
     *
     * @return Ultrasonografias
     */
    public function setResmagfetaltrimestre($resmagfetaltrimestre)
    {
        $this->resmagfetaltrimestre = $resmagfetaltrimestre;

        return $this;
    }

    /**
     * Get resmagfetaltrimestre
     *
     * @return boolean
     */
    public function getResmagfetaltrimestre()
    {
        return $this->resmagfetaltrimestre;
    }

    /**
     * Set resmagfetaldsalterado
     *
     * @param string $resmagfetaldsalterado
     *
     * @return Ultrasonografias
     */
    public function setResmagfetaldsalterado($resmagfetaldsalterado)
    {
        $this->resmagfetaldsalterado = $resmagfetaldsalterado;

        return $this;
    }

    /**
     * Get resmagfetaldsalterado
     *
     * @return string
     */
    public function getResmagfetaldsalterado()
    {
        return $this->resmagfetaldsalterado;
    }

    /**
     * Set resmagfetalquantidade
     *
     * @param integer $resmagfetalquantidade
     *
     * @return Ultrasonografias
     */
    public function setResmagfetalquantidade($resmagfetalquantidade)
    {
        $this->resmagfetalquantidade = $resmagfetalquantidade;

        return $this;
    }

    /**
     * Get resmagfetalquantidade
     *
     * @return integer
     */
    public function getResmagfetalquantidade()
    {
        return $this->resmagfetalquantidade;
    }

    /**
     * Set ecotridimensionalalterado
     *
     * @param boolean $ecotridimensionalalterado
     *
     * @return Ultrasonografias
     */
    public function setEcotridimensionalalterado($ecotridimensionalalterado)
    {
        $this->ecotridimensionalalterado = $ecotridimensionalalterado;

        return $this;
    }

    /**
     * Get ecotridimensionalalterado
     *
     * @return boolean
     */
    public function getEcotridimensionalalterado()
    {
        return $this->ecotridimensionalalterado;
    }

    /**
     * Set ecotridimensionaldsalterado
     *
     * @param string $ecotridimensionaldsalterado
     *
     * @return Ultrasonografias
     */
    public function setEcotridimensionaldsalterado($ecotridimensionaldsalterado)
    {
        $this->ecotridimensionaldsalterado = $ecotridimensionaldsalterado;

        return $this;
    }

    /**
     * Get ecotridimensionaldsalterado
     *
     * @return string
     */
    public function getEcotridimensionaldsalterado()
    {
        return $this->ecotridimensionaldsalterado;
    }

    /**
     * Set ecotridimensionalquantidade
     *
     * @param integer $ecotridimensionalquantidade
     *
     * @return Ultrasonografias
     */
    public function setEcotridimensionalquantidade($ecotridimensionalquantidade)
    {
        $this->ecotridimensionalquantidade = $ecotridimensionalquantidade;

        return $this;
    }

    /**
     * Get ecotridimensionalquantidade
     *
     * @return integer
     */
    public function getEcotridimensionalquantidade()
    {
        return $this->ecotridimensionalquantidade;
    }

    /**
     * Set ecotridimensionaltrimestre
     *
     * @param boolean $ecotridimensionaltrimestre
     *
     * @return Ultrasonografias
     */
    public function setEcotridimensionaltrimestre($ecotridimensionaltrimestre)
    {
        $this->ecotridimensionaltrimestre = $ecotridimensionaltrimestre;

        return $this;
    }

    /**
     * Get ecotridimensionaltrimestre
     *
     * @return boolean
     */
    public function getEcotridimensionaltrimestre()
    {
        return $this->ecotridimensionaltrimestre;
    }

    /**
     * Set ultrasonografias
     *
     * @param boolean $ultrasonografias
     *
     * @return Ultrasonografias
     */
    public function setUltrasonografias($ultrasonografias)
    {
        $this->ultrasonografias = $ultrasonografias;

        return $this;
    }

    /**
     * Get ultrasonografias
     *
     * @return boolean
     */
    public function getUltrasonografias()
    {
        return $this->ultrasonografias;
    }

    /**
     * Set codigohistorico
     *
     * @param \AppBundle\Entity\Historicogestacaoneonatal $codigohistorico
     *
     * @return Ultrasonografias
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

