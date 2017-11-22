<?php

namespace AppBundle\Entity;

/**
 * Doen�as
 */
class Doencas
{
    /**
     * @var integer
     */
    private $codigodoenca;

    /**
     * @var string
     */
    private $nomedoencaagudaoucronica;

    /**
     * @var \AppBundle\Entity\Historicogestacaoneonatal
     */
    private $codigohistorico;


    /**
     * Get codigodoenca
     *
     * @return integer
     */
    public function getCodigodoenca()
    {
        return $this->codigodoenca;
    }

    /**
     * Set nomedoencaagudaoucronica
     *
     * @param string $nomedoencaagudaoucronica
     *
     * @return Doen�as
     */
    public function setNomedoencaagudaoucronica($nomedoencaagudaoucronica)
    {
        $this->nomedoencaagudaoucronica = $nomedoencaagudaoucronica;

        return $this;
    }

    /**
     * Get nomedoencaagudaoucronica
     *
     * @return string
     */
    public function getNomedoencaagudaoucronica()
    {
        return $this->nomedoencaagudaoucronica;
    }

    /**
     * Set codigohistorico
     *
     * @param \AppBundle\Entity\Historicogestacaoneonatal $codigohistorico
     *
     * @return Doen�as
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

