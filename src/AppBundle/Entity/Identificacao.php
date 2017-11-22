<?php

namespace AppBundle\Entity;

/**
 * Identificacao
 */
class Identificacao
{
    /**
     * @var integer
     */
    private $codigoidentificacao;

    /**
     * @var string
     */
    private $nomesobrenome;

    /**
     * @var string
     */
    private $sexo;

    /**
     * @var \DateTime
     */
    private $datadenascimento;

    /**
     * @var string
     */
    private $motivodaconsulta;

    /**
     * @var string
     */
    private $endereco;

    /**
     * @var string
     */
    private $localdeatendimento;

    /**
     * @var \DateTime
     */
    private $datadeatendimento;

    /**
     * @var string
     */
    private $etnia;


    /**
     * Get codigoidentificacao
     *
     * @return integer
     */
    public function getCodigoidentificacao()
    {
        return $this->codigoidentificacao;
    }

    /**
     * Set nomesobrenome
     *
     * @param string $nomesobrenome
     *
     * @return Identificacao
     */
    public function setNomesobrenome($nomesobrenome)
    {
        $this->nomesobrenome = $nomesobrenome;

        return $this;
    }

    /**
     * Get nomesobrenome
     *
     * @return string
     */
    public function getNomesobrenome()
    {
        return $this->nomesobrenome;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Identificacao
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set datadenascimento
     *
     * @param \DateTime $datadenascimento
     *
     * @return Identificacao
     */
    public function setDatadenascimento($datadenascimento)
    {
        $this->datadenascimento = $datadenascimento;

        return $this;
    }

    /**
     * Get datadenascimento
     *
     * @return \DateTime
     */
    public function getDatadenascimento()
    {
        return $this->datadenascimento;
    }

    /**
     * Set motivodaconsulta
     *
     * @param string $motivodaconsulta
     *
     * @return Identificacao
     */
    public function setMotivodaconsulta($motivodaconsulta)
    {
        $this->motivodaconsulta = $motivodaconsulta;

        return $this;
    }

    /**
     * Get motivodaconsulta
     *
     * @return string
     */
    public function getMotivodaconsulta()
    {
        return $this->motivodaconsulta;
    }

    /**
     * Set endereco
     *
     * @param string $endereco
     *
     * @return Identificacao
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * Get endereco
     *
     * @return string
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set localdeatendimento
     *
     * @param string $localdeatendimento
     *
     * @return Identificacao
     */
    public function setLocaldeatendimento($localdeatendimento)
    {
        $this->localdeatendimento = $localdeatendimento;

        return $this;
    }

    /**
     * Get localdeatendimento
     *
     * @return string
     */
    public function getLocaldeatendimento()
    {
        return $this->localdeatendimento;
    }

    /**
     * Set datadeatendimento
     *
     * @param \DateTime $datadeatendimento
     *
     * @return Identificacao
     */
    public function setDatadeatendimento($datadeatendimento)
    {
        $this->datadeatendimento = $datadeatendimento;

        return $this;
    }

    /**
     * Get datadeatendimento
     *
     * @return \DateTime
     */
    public function getDatadeatendimento()
    {
        return $this->datadeatendimento;
    }

    /**
     * Set etnia
     *
     * @param string $etnia
     *
     * @return Identificacao
     */
    public function setEtnia($etnia)
    {
        $this->etnia = $etnia;

        return $this;
    }

    /**
     * Get etnia
     *
     * @return string
     */
    public function getEtnia()
    {
        return $this->etnia;
    }
}

