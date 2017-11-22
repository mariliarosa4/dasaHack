<?php

namespace AppBundle\Entity;

/**
 * Examesrealizados
 */
class Examesrealizados
{
    /**
     * @var integer
     */
    private $codigoexamerealizado;

    /**
     * @var string
     */
    private $resultadoexame;

    /**
     * @var boolean
     */
    private $examealterado;

    /**
     * @var integer
     */
    private $idadeatualpaciente;

    /**
     * @var \DateTime
     */
    private $dataexame;

    /**
     * @var string
     */
    private $examealteradods;

    /**
     * @var \AppBundle\Entity\Listaexames
     */
    private $codigoexame;

    /**
     * @var \AppBundle\Entity\Identificacao
     */
    private $codigoidentificacao;


    /**
     * Get codigoexamerealizado
     *
     * @return integer
     */
    public function getCodigoexamerealizado()
    {
        return $this->codigoexamerealizado;
    }

    /**
     * Set resultadoexame
     *
     * @param string $resultadoexame
     *
     * @return Examesrealizados
     */
    public function setResultadoexame($resultadoexame)
    {
        $this->resultadoexame = $resultadoexame;

        return $this;
    }

    /**
     * Get resultadoexame
     *
     * @return string
     */
    public function getResultadoexame()
    {
        return $this->resultadoexame;
    }

    /**
     * Set examealterado
     *
     * @param boolean $examealterado
     *
     * @return Examesrealizados
     */
    public function setExamealterado($examealterado)
    {
        $this->examealterado = $examealterado;

        return $this;
    }

    /**
     * Get examealterado
     *
     * @return boolean
     */
    public function getExamealterado()
    {
        return $this->examealterado;
    }

    /**
     * Set idadeatualpaciente
     *
     * @param integer $idadeatualpaciente
     *
     * @return Examesrealizados
     */
    public function setIdadeatualpaciente($idadeatualpaciente)
    {
        $this->idadeatualpaciente = $idadeatualpaciente;

        return $this;
    }

    /**
     * Get idadeatualpaciente
     *
     * @return integer
     */
    public function getIdadeatualpaciente()
    {
        return $this->idadeatualpaciente;
    }

    /**
     * Set dataexame
     *
     * @param \DateTime $dataexame
     *
     * @return Examesrealizados
     */
    public function setDataexame($dataexame)
    {
        $this->dataexame = $dataexame;

        return $this;
    }

    /**
     * Get dataexame
     *
     * @return \DateTime
     */
    public function getDataexame()
    {
        return $this->dataexame;
    }

    /**
     * Set examealteradods
     *
     * @param string $examealteradods
     *
     * @return Examesrealizados
     */
    public function setExamealteradods($examealteradods)
    {
        $this->examealteradods = $examealteradods;

        return $this;
    }

    /**
     * Get examealteradods
     *
     * @return string
     */
    public function getExamealteradods()
    {
        return $this->examealteradods;
    }

    /**
     * Set codigoexame
     *
     * @param \AppBundle\Entity\Listaexames $codigoexame
     *
     * @return Examesrealizados
     */
    public function setCodigoexame(\AppBundle\Entity\Listaexames $codigoexame = null)
    {
        $this->codigoexame = $codigoexame;

        return $this;
    }

    /**
     * Get codigoexame
     *
     * @return \AppBundle\Entity\Listaexames
     */
    public function getCodigoexame()
    {
        return $this->codigoexame;
    }

    /**
     * Set codigoidentificacao
     *
     * @param \AppBundle\Entity\Identificacao $codigoidentificacao
     *
     * @return Examesrealizados
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

