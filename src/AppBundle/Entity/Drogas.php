<?php

namespace AppBundle\Entity;

/**
 * Drogas
 */
class Drogas
{
    /**
     * @var integer
     */
    private $codigodrogas;

    /**
     * @var string
     */
    private $nomedroga;


    /**
     * Get codigodrogas
     *
     * @return integer
     */
    public function getCodigodrogas()
    {
        return $this->codigodrogas;
    }

    /**
     * Set nomedroga
     *
     * @param string $nomedroga
     *
     * @return Drogas
     */
    public function setNomedroga($nomedroga)
    {
        $this->nomedroga = $nomedroga;

        return $this;
    }

    /**
     * Get nomedroga
     *
     * @return string
     */
    public function getNomedroga()
    {
        return $this->nomedroga;
    }
}

