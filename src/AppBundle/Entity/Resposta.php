<?php

namespace AppBundle\Entity;

/**
 * Resposta
 */
class Resposta
{
    /**
     * @var integer
     */
    private $idResposta;

    /**
     * @var integer
     */
    private $nota;

    /**
     * @var string
     */
    private $accessionNumber;

    /**
     * @var \DateTime
     */
    private $timestampResposta;

    /**
     * @var \AppBundle\Entity\Pergunta
     */
    private $idPergunta;


    /**
     * Get idResposta
     *
     * @return integer
     */
    public function getIdResposta()
    {
        return $this->idResposta;
    }

    /**
     * Set nota
     *
     * @param integer $nota
     *
     * @return Resposta
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return integer
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set accessionNumber
     *
     * @param string $accessionNumber
     *
     * @return Resposta
     */
    public function setAccessionNumber($accessionNumber)
    {
        $this->accessionNumber = $accessionNumber;

        return $this;
    }

    /**
     * Get accessionNumber
     *
     * @return string
     */
    public function getAccessionNumber()
    {
        return $this->accessionNumber;
    }

    /**
     * Set timestampResposta
     *
     * @param \DateTime $timestampResposta
     *
     * @return Resposta
     */
    public function setTimestampResposta($timestampResposta)
    {
        $this->timestampResposta = $timestampResposta;

        return $this;
    }

    /**
     * Get timestampResposta
     *
     * @return \DateTime
     */
    public function getTimestampResposta()
    {
        return $this->timestampResposta;
    }

    /**
     * Set idPergunta
     *
     * @param \AppBundle\Entity\Pergunta $idPergunta
     *
     * @return Resposta
     */
    public function setIdPergunta(\AppBundle\Entity\Pergunta $idPergunta = null)
    {
        $this->idPergunta = $idPergunta;

        return $this;
    }

    /**
     * Get idPergunta
     *
     * @return \AppBundle\Entity\Pergunta
     */
    public function getIdPergunta()
    {
        return $this->idPergunta;
    }
}

