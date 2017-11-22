<?php

namespace AppBundle\Entity;

/**
 * Listaexames
 */
class Listaexames
{
    /**
     * @var integer
     */
    private $codigoexame;

    /**
     * @var string
     */
    private $nomeexame;


    /**
     * Get codigoexame
     *
     * @return integer
     */
    public function getCodigoexame()
    {
        return $this->codigoexame;
    }

    /**
     * Set nomeexame
     *
     * @param string $nomeexame
     *
     * @return Listaexames
     */
    public function setNomeexame($nomeexame)
    {
        $this->nomeexame = $nomeexame;

        return $this;
    }

    /**
     * Get nomeexame
     *
     * @return string
     */
    public function getNomeexame()
    {
        return $this->nomeexame;
    }
}

