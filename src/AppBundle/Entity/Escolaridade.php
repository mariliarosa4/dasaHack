<?php

namespace AppBundle\Entity;

/**
 * Escolaridade
 */
class Escolaridade
{
    /**
     * @var integer
     */
    private $codigoescolaridade;

    /**
     * @var string
     */
    private $dsescolaridade;


    /**
     * Get codigoescolaridade
     *
     * @return integer
     */
    public function getCodigoescolaridade()
    {
        return $this->codigoescolaridade;
    }

    /**
     * Set dsescolaridade
     *
     * @param string $dsescolaridade
     *
     * @return Escolaridade
     */
    public function setDsescolaridade($dsescolaridade)
    {
        $this->dsescolaridade = $dsescolaridade;

        return $this;
    }

    /**
     * Get dsescolaridade
     *
     * @return string
     */
    public function getDsescolaridade()
    {
        return $this->dsescolaridade;
    }
}

