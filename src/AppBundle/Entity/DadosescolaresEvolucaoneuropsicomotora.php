<?php

namespace AppBundle\Entity;

/**
 * DadosescolaresEvolucaoneuropsicomotora
 */
class DadosescolaresEvolucaoneuropsicomotora
{
    /**
     * @var integer
     */
    private $codigoevolucaoneuropsicomotora;

    /**
     * @var boolean
     */
    private $entrouescola;

    /**
     * @var boolean
     */
    private $repetencias;

    /**
     * @var integer
     */
    private $numerorepetencias;

    /**
     * @var float
     */
    private $sorrisosocial;

    /**
     * @var float
     */
    private $sustentoucabeca;

    /**
     * @var float
     */
    private $sustentousemapoio;

    /**
     * @var float
     */
    private $ficouempe;

    /**
     * @var float
     */
    private $engatinhou;

    /**
     * @var float
     */
    private $andou;

    /**
     * @var float
     */
    private $sons;

    /**
     * @var float
     */
    private $frases;

    /**
     * @var float
     */
    private $controleesfincteriano;

    /**
     * @var float
     */
    private $palavras;

    /**
     * @var \AppBundle\Entity\Identificacao
     */
    private $codigoidentificacao;

    /**
     * @var \AppBundle\Entity\Escolaridade
     */
    private $codigoescolaridade;


    /**
     * Get codigoevolucaoneuropsicomotora
     *
     * @return integer
     */
    public function getCodigoevolucaoneuropsicomotora()
    {
        return $this->codigoevolucaoneuropsicomotora;
    }

    /**
     * Set entrouescola
     *
     * @param boolean $entrouescola
     *
     * @return DadosescolaresEvolucaoneuropsicomotora
     */
    public function setEntrouescola($entrouescola)
    {
        $this->entrouescola = $entrouescola;

        return $this;
    }

    /**
     * Get entrouescola
     *
     * @return boolean
     */
    public function getEntrouescola()
    {
        return $this->entrouescola;
    }

    /**
     * Set repetencias
     *
     * @param boolean $repetencias
     *
     * @return DadosescolaresEvolucaoneuropsicomotora
     */
    public function setRepetencias($repetencias)
    {
        $this->repetencias = $repetencias;

        return $this;
    }

    /**
     * Get repetencias
     *
     * @return boolean
     */
    public function getRepetencias()
    {
        return $this->repetencias;
    }

    /**
     * Set numerorepetencias
     *
     * @param integer $numerorepetencias
     *
     * @return DadosescolaresEvolucaoneuropsicomotora
     */
    public function setNumerorepetencias($numerorepetencias)
    {
        $this->numerorepetencias = $numerorepetencias;

        return $this;
    }

    /**
     * Get numerorepetencias
     *
     * @return integer
     */
    public function getNumerorepetencias()
    {
        return $this->numerorepetencias;
    }

    /**
     * Set sorrisosocial
     *
     * @param float $sorrisosocial
     *
     * @return DadosescolaresEvolucaoneuropsicomotora
     */
    public function setSorrisosocial($sorrisosocial)
    {
        $this->sorrisosocial = $sorrisosocial;

        return $this;
    }

    /**
     * Get sorrisosocial
     *
     * @return float
     */
    public function getSorrisosocial()
    {
        return $this->sorrisosocial;
    }

    /**
     * Set sustentoucabeca
     *
     * @param float $sustentoucabeca
     *
     * @return DadosescolaresEvolucaoneuropsicomotora
     */
    public function setSustentoucabeca($sustentoucabeca)
    {
        $this->sustentoucabeca = $sustentoucabeca;

        return $this;
    }

    /**
     * Get sustentoucabeca
     *
     * @return float
     */
    public function getSustentoucabeca()
    {
        return $this->sustentoucabeca;
    }

    /**
     * Set sustentousemapoio
     *
     * @param float $sustentousemapoio
     *
     * @return DadosescolaresEvolucaoneuropsicomotora
     */
    public function setSustentousemapoio($sustentousemapoio)
    {
        $this->sustentousemapoio = $sustentousemapoio;

        return $this;
    }

    /**
     * Get sustentousemapoio
     *
     * @return float
     */
    public function getSustentousemapoio()
    {
        return $this->sustentousemapoio;
    }

    /**
     * Set ficouempe
     *
     * @param float $ficouempe
     *
     * @return DadosescolaresEvolucaoneuropsicomotora
     */
    public function setFicouempe($ficouempe)
    {
        $this->ficouempe = $ficouempe;

        return $this;
    }

    /**
     * Get ficouempe
     *
     * @return float
     */
    public function getFicouempe()
    {
        return $this->ficouempe;
    }

    /**
     * Set engatinhou
     *
     * @param float $engatinhou
     *
     * @return DadosescolaresEvolucaoneuropsicomotora
     */
    public function setEngatinhou($engatinhou)
    {
        $this->engatinhou = $engatinhou;

        return $this;
    }

    /**
     * Get engatinhou
     *
     * @return float
     */
    public function getEngatinhou()
    {
        return $this->engatinhou;
    }

    /**
     * Set andou
     *
     * @param float $andou
     *
     * @return DadosescolaresEvolucaoneuropsicomotora
     */
    public function setAndou($andou)
    {
        $this->andou = $andou;

        return $this;
    }

    /**
     * Get andou
     *
     * @return float
     */
    public function getAndou()
    {
        return $this->andou;
    }

    /**
     * Set sons
     *
     * @param float $sons
     *
     * @return DadosescolaresEvolucaoneuropsicomotora
     */
    public function setSons($sons)
    {
        $this->sons = $sons;

        return $this;
    }

    /**
     * Get sons
     *
     * @return float
     */
    public function getSons()
    {
        return $this->sons;
    }

    /**
     * Set frases
     *
     * @param float $frases
     *
     * @return DadosescolaresEvolucaoneuropsicomotora
     */
    public function setFrases($frases)
    {
        $this->frases = $frases;

        return $this;
    }

    /**
     * Get frases
     *
     * @return float
     */
    public function getFrases()
    {
        return $this->frases;
    }

    /**
     * Set controleesfincteriano
     *
     * @param float $controleesfincteriano
     *
     * @return DadosescolaresEvolucaoneuropsicomotora
     */
    public function setControleesfincteriano($controleesfincteriano)
    {
        $this->controleesfincteriano = $controleesfincteriano;

        return $this;
    }

    /**
     * Get controleesfincteriano
     *
     * @return float
     */
    public function getControleesfincteriano()
    {
        return $this->controleesfincteriano;
    }

    /**
     * Set palavras
     *
     * @param float $palavras
     *
     * @return DadosescolaresEvolucaoneuropsicomotora
     */
    public function setPalavras($palavras)
    {
        $this->palavras = $palavras;

        return $this;
    }

    /**
     * Get palavras
     *
     * @return float
     */
    public function getPalavras()
    {
        return $this->palavras;
    }

    /**
     * Set codigoidentificacao
     *
     * @param \AppBundle\Entity\Identificacao $codigoidentificacao
     *
     * @return DadosescolaresEvolucaoneuropsicomotora
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

    /**
     * Set codigoescolaridade
     *
     * @param \AppBundle\Entity\Escolaridade $codigoescolaridade
     *
     * @return DadosescolaresEvolucaoneuropsicomotora
     */
    public function setCodigoescolaridade(\AppBundle\Entity\Escolaridade $codigoescolaridade = null)
    {
        $this->codigoescolaridade = $codigoescolaridade;

        return $this;
    }

    /**
     * Get codigoescolaridade
     *
     * @return \AppBundle\Entity\Escolaridade
     */
    public function getCodigoescolaridade()
    {
        return $this->codigoescolaridade;
    }
}

