<?php

namespace AppBundle\Entity;

/**
 * Medicamentos
 */
class Medicamentos
{
    /**
     * @var integer
     */
    private $codigomedicamento;

    /**
     * @var string
     */
    private $nomemedicamento;


    /**
     * Get codigomedicamento
     *
     * @return integer
     */
    public function getCodigomedicamento()
    {
        return $this->codigomedicamento;
    }

    /**
     * Set nomemedicamento
     *
     * @param string $nomemedicamento
     *
     * @return Medicamentos
     */
    public function setNomemedicamento($nomemedicamento)
    {
        $this->nomemedicamento = $nomemedicamento;

        return $this;
    }

    /**
     * Get nomemedicamento
     *
     * @return string
     */
    public function getNomemedicamento()
    {
        return $this->nomemedicamento;
    }
}

