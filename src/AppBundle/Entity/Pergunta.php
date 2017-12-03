<?php

namespace AppBundle\Entity;

/**
 * Pergunta
 */
class Pergunta
{
    /**
     * @var integer
     */
    private $idPergunta;

    /**
     * @var string
     */
    private $descricaoPergunta;

    /**
     * @var integer
     */
    private $ordem;


    /**
     * Get idPergunta
     *
     * @return integer
     */
    public function getIdPergunta()
    {
        return $this->idPergunta;
    }

    /**
     * Set descricaoPergunta
     *
     * @param string $descricaoPergunta
     *
     * @return Pergunta
     */
    public function setDescricaoPergunta($descricaoPergunta)
    {
        $this->descricaoPergunta = $descricaoPergunta;

        return $this;
    }

    /**
     * Get descricaoPergunta
     *
     * @return string
     */
    public function getDescricaoPergunta()
    {
        return $this->descricaoPergunta;
    }

    /**
     * Set ordem
     *
     * @param integer $ordem
     *
     * @return Pergunta
     */
    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;

        return $this;
    }

    /**
     * Get ordem
     *
     * @return integer
     */
    public function getOrdem()
    {
        return $this->ordem;
    }
}

