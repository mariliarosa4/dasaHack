<?php

namespace AppBundle\Entity;

/**
 * Historicogestacaoneonatal
 */
class Historicogestacaoneonatal
{
    /**
     * @var integer
     */
    private $codigohistorico;

    /**
     * @var boolean
     */
    private $ultrasonografias;

    /**
     * @var boolean
     */
    private $prenatal;

    /**
     * @var boolean
     */
    private $ameacaaborto;

    /**
     * @var boolean
     */
    private $fumo;

    /**
     * @var string
     */
    private $localdoparto;

    /**
     * @var string
     */
    private $tipodeparto;

    /**
     * @var string
     */
    private $apresentacao;

    /**
     * @var boolean
     */
    private $doencasagudasoucronicas;

    /**
     * @var boolean
     */
    private $usodrogasilicitas;

    /**
     * @var string
     */
    private $moticocesaria;

    /**
     * @var string
     */
    private $descricaoalcool;

    /**
     * @var string
     */
    private $duracaogestacao;

    /**
     * @var string
     */
    private $descricaofumo;

    /**
     * @var boolean
     */
    private $alcool;

    /**
     * @var boolean
     */
    private $primeiromesameacaaborto;

    /**
     * @var boolean
     */
    private $segundomesameacaaborto;

    /**
     * @var boolean
     */
    private $terceiromesameacaaborto;

    /**
     * @var boolean
     */
    private $quartomesameacaaborto;

    /**
     * @var boolean
     */
    private $quintomesameacaaborto;

    /**
     * @var boolean
     */
    private $naoseimesameacaaborto;

    /**
     * @var boolean
     */
    private $exameprenatal;

    /**
     * @var integer
     */
    private $numeroameacasaborto;

    /**
     * @var float
     */
    private $pt;

    /**
     * @var float
     */
    private $apgar1;

    /**
     * @var float
     */
    private $apgar5;

    /**
     * @var integer
     */
    private $permanenciamaternidade;

    /**
     * @var boolean
     */
    private $testedaorelhinha;

    /**
     * @var float
     */
    private $pc;

    /**
     * @var boolean
     */
    private $testedopezinho;

    /**
     * @var float
     */
    private $peso;

    /**
     * @var float
     */
    private $comprimento;

    /**
     * @var boolean
     */
    private $alteracaotestedopezinho;

    /**
     * @var boolean
     */
    private $alteracaotestedaorelhinha;

    /**
     * @var string
     */
    private $descalteracaotestedopezinho;

    /**
     * @var string
     */
    private $descalteracaotestedaorelhinha;

    /**
     * @var string
     */
    private $intercorrenciaevolucaoprimeirosmeses;

    /**
     * @var boolean
     */
    private $intercorrencias;

    /**
     * @var integer
     */
    private $gesta;

    /**
     * @var integer
     */
    private $gestacaoectopica;

    /**
     * @var integer
     */
    private $para;

    /**
     * @var integer
     */
    private $cesaria;

    /**
     * @var integer
     */
    private $abortoespontaneo;

    /**
     * @var integer
     */
    private $abortoprovocado;

    /**
     * @var \AppBundle\Entity\Identificacao
     */
    private $codigoidentificacao;


    /**
     * Get codigohistorico
     *
     * @return integer
     */
    public function getCodigohistorico()
    {
        return $this->codigohistorico;
    }

    /**
     * Set ultrasonografias
     *
     * @param boolean $ultrasonografias
     *
     * @return Historicogestacaoneonatal
     */
    public function setUltrasonografias($ultrasonografias)
    {
        $this->ultrasonografias = $ultrasonografias;

        return $this;
    }

    /**
     * Get ultrasonografias
     *
     * @return boolean
     */
    public function getUltrasonografias()
    {
        return $this->ultrasonografias;
    }

    /**
     * Set prenatal
     *
     * @param boolean $prenatal
     *
     * @return Historicogestacaoneonatal
     */
    public function setPrenatal($prenatal)
    {
        $this->prenatal = $prenatal;

        return $this;
    }

    /**
     * Get prenatal
     *
     * @return boolean
     */
    public function getPrenatal()
    {
        return $this->prenatal;
    }

    /**
     * Set ameacaaborto
     *
     * @param boolean $ameacaaborto
     *
     * @return Historicogestacaoneonatal
     */
    public function setAmeacaaborto($ameacaaborto)
    {
        $this->ameacaaborto = $ameacaaborto;

        return $this;
    }

    /**
     * Get ameacaaborto
     *
     * @return boolean
     */
    public function getAmeacaaborto()
    {
        return $this->ameacaaborto;
    }

    /**
     * Set fumo
     *
     * @param boolean $fumo
     *
     * @return Historicogestacaoneonatal
     */
    public function setFumo($fumo)
    {
        $this->fumo = $fumo;

        return $this;
    }

    /**
     * Get fumo
     *
     * @return boolean
     */
    public function getFumo()
    {
        return $this->fumo;
    }

    /**
     * Set localdoparto
     *
     * @param string $localdoparto
     *
     * @return Historicogestacaoneonatal
     */
    public function setLocaldoparto($localdoparto)
    {
        $this->localdoparto = $localdoparto;

        return $this;
    }

    /**
     * Get localdoparto
     *
     * @return string
     */
    public function getLocaldoparto()
    {
        return $this->localdoparto;
    }

    /**
     * Set tipodeparto
     *
     * @param string $tipodeparto
     *
     * @return Historicogestacaoneonatal
     */
    public function setTipodeparto($tipodeparto)
    {
        $this->tipodeparto = $tipodeparto;

        return $this;
    }

    /**
     * Get tipodeparto
     *
     * @return string
     */
    public function getTipodeparto()
    {
        return $this->tipodeparto;
    }

    /**
     * Set apresentacao
     *
     * @param string $apresentacao
     *
     * @return Historicogestacaoneonatal
     */
    public function setApresentacao($apresentacao)
    {
        $this->apresentacao = $apresentacao;

        return $this;
    }

    /**
     * Get apresentacao
     *
     * @return string
     */
    public function getApresentacao()
    {
        return $this->apresentacao;
    }

    /**
     * Set doencasagudasoucronicas
     *
     * @param boolean $doencasagudasoucronicas
     *
     * @return Historicogestacaoneonatal
     */
    public function setDoencasagudasoucronicas($doencasagudasoucronicas)
    {
        $this->doencasagudasoucronicas = $doencasagudasoucronicas;

        return $this;
    }

    /**
     * Get doencasagudasoucronicas
     *
     * @return boolean
     */
    public function getDoencasagudasoucronicas()
    {
        return $this->doencasagudasoucronicas;
    }

    /**
     * Set usodrogasilicitas
     *
     * @param boolean $usodrogasilicitas
     *
     * @return Historicogestacaoneonatal
     */
    public function setUsodrogasilicitas($usodrogasilicitas)
    {
        $this->usodrogasilicitas = $usodrogasilicitas;

        return $this;
    }

    /**
     * Get usodrogasilicitas
     *
     * @return boolean
     */
    public function getUsodrogasilicitas()
    {
        return $this->usodrogasilicitas;
    }

    /**
     * Set moticocesaria
     *
     * @param string $moticocesaria
     *
     * @return Historicogestacaoneonatal
     */
    public function setMoticocesaria($moticocesaria)
    {
        $this->moticocesaria = $moticocesaria;

        return $this;
    }

    /**
     * Get moticocesaria
     *
     * @return string
     */
    public function getMoticocesaria()
    {
        return $this->moticocesaria;
    }

    /**
     * Set descricaoalcool
     *
     * @param string $descricaoalcool
     *
     * @return Historicogestacaoneonatal
     */
    public function setDescricaoalcool($descricaoalcool)
    {
        $this->descricaoalcool = $descricaoalcool;

        return $this;
    }

    /**
     * Get descricaoalcool
     *
     * @return string
     */
    public function getDescricaoalcool()
    {
        return $this->descricaoalcool;
    }

    /**
     * Set duracaogestacao
     *
     * @param string $duracaogestacao
     *
     * @return Historicogestacaoneonatal
     */
    public function setDuracaogestacao($duracaogestacao)
    {
        $this->duracaogestacao = $duracaogestacao;

        return $this;
    }

    /**
     * Get duracaogestacao
     *
     * @return string
     */
    public function getDuracaogestacao()
    {
        return $this->duracaogestacao;
    }

    /**
     * Set descricaofumo
     *
     * @param string $descricaofumo
     *
     * @return Historicogestacaoneonatal
     */
    public function setDescricaofumo($descricaofumo)
    {
        $this->descricaofumo = $descricaofumo;

        return $this;
    }

    /**
     * Get descricaofumo
     *
     * @return string
     */
    public function getDescricaofumo()
    {
        return $this->descricaofumo;
    }

    /**
     * Set alcool
     *
     * @param boolean $alcool
     *
     * @return Historicogestacaoneonatal
     */
    public function setAlcool($alcool)
    {
        $this->alcool = $alcool;

        return $this;
    }

    /**
     * Get alcool
     *
     * @return boolean
     */
    public function getAlcool()
    {
        return $this->alcool;
    }

    /**
     * Set primeiromesameacaaborto
     *
     * @param boolean $primeiromesameacaaborto
     *
     * @return Historicogestacaoneonatal
     */
    public function setPrimeiromesameacaaborto($primeiromesameacaaborto)
    {
        $this->primeiromesameacaaborto = $primeiromesameacaaborto;

        return $this;
    }

    /**
     * Get primeiromesameacaaborto
     *
     * @return boolean
     */
    public function getPrimeiromesameacaaborto()
    {
        return $this->primeiromesameacaaborto;
    }

    /**
     * Set segundomesameacaaborto
     *
     * @param boolean $segundomesameacaaborto
     *
     * @return Historicogestacaoneonatal
     */
    public function setSegundomesameacaaborto($segundomesameacaaborto)
    {
        $this->segundomesameacaaborto = $segundomesameacaaborto;

        return $this;
    }

    /**
     * Get segundomesameacaaborto
     *
     * @return boolean
     */
    public function getSegundomesameacaaborto()
    {
        return $this->segundomesameacaaborto;
    }

    /**
     * Set terceiromesameacaaborto
     *
     * @param boolean $terceiromesameacaaborto
     *
     * @return Historicogestacaoneonatal
     */
    public function setTerceiromesameacaaborto($terceiromesameacaaborto)
    {
        $this->terceiromesameacaaborto = $terceiromesameacaaborto;

        return $this;
    }

    /**
     * Get terceiromesameacaaborto
     *
     * @return boolean
     */
    public function getTerceiromesameacaaborto()
    {
        return $this->terceiromesameacaaborto;
    }

    /**
     * Set quartomesameacaaborto
     *
     * @param boolean $quartomesameacaaborto
     *
     * @return Historicogestacaoneonatal
     */
    public function setQuartomesameacaaborto($quartomesameacaaborto)
    {
        $this->quartomesameacaaborto = $quartomesameacaaborto;

        return $this;
    }

    /**
     * Get quartomesameacaaborto
     *
     * @return boolean
     */
    public function getQuartomesameacaaborto()
    {
        return $this->quartomesameacaaborto;
    }

    /**
     * Set quintomesameacaaborto
     *
     * @param boolean $quintomesameacaaborto
     *
     * @return Historicogestacaoneonatal
     */
    public function setQuintomesameacaaborto($quintomesameacaaborto)
    {
        $this->quintomesameacaaborto = $quintomesameacaaborto;

        return $this;
    }

    /**
     * Get quintomesameacaaborto
     *
     * @return boolean
     */
    public function getQuintomesameacaaborto()
    {
        return $this->quintomesameacaaborto;
    }

    /**
     * Set naoseimesameacaaborto
     *
     * @param boolean $naoseimesameacaaborto
     *
     * @return Historicogestacaoneonatal
     */
    public function setNaoseimesameacaaborto($naoseimesameacaaborto)
    {
        $this->naoseimesameacaaborto = $naoseimesameacaaborto;

        return $this;
    }

    /**
     * Get naoseimesameacaaborto
     *
     * @return boolean
     */
    public function getNaoseimesameacaaborto()
    {
        return $this->naoseimesameacaaborto;
    }

    /**
     * Set exameprenatal
     *
     * @param boolean $exameprenatal
     *
     * @return Historicogestacaoneonatal
     */
    public function setExameprenatal($exameprenatal)
    {
        $this->exameprenatal = $exameprenatal;

        return $this;
    }

    /**
     * Get exameprenatal
     *
     * @return boolean
     */
    public function getExameprenatal()
    {
        return $this->exameprenatal;
    }

    /**
     * Set numeroameacasaborto
     *
     * @param integer $numeroameacasaborto
     *
     * @return Historicogestacaoneonatal
     */
    public function setNumeroameacasaborto($numeroameacasaborto)
    {
        $this->numeroameacasaborto = $numeroameacasaborto;

        return $this;
    }

    /**
     * Get numeroameacasaborto
     *
     * @return integer
     */
    public function getNumeroameacasaborto()
    {
        return $this->numeroameacasaborto;
    }

    /**
     * Set pt
     *
     * @param float $pt
     *
     * @return Historicogestacaoneonatal
     */
    public function setPt($pt)
    {
        $this->pt = $pt;

        return $this;
    }

    /**
     * Get pt
     *
     * @return float
     */
    public function getPt()
    {
        return $this->pt;
    }

    /**
     * Set apgar1
     *
     * @param float $apgar1
     *
     * @return Historicogestacaoneonatal
     */
    public function setApgar1($apgar1)
    {
        $this->apgar1 = $apgar1;

        return $this;
    }

    /**
     * Get apgar1
     *
     * @return float
     */
    public function getApgar1()
    {
        return $this->apgar1;
    }

    /**
     * Set apgar5
     *
     * @param float $apgar5
     *
     * @return Historicogestacaoneonatal
     */
    public function setApgar5($apgar5)
    {
        $this->apgar5 = $apgar5;

        return $this;
    }

    /**
     * Get apgar5
     *
     * @return float
     */
    public function getApgar5()
    {
        return $this->apgar5;
    }

    /**
     * Set permanenciamaternidade
     *
     * @param integer $permanenciamaternidade
     *
     * @return Historicogestacaoneonatal
     */
    public function setPermanenciamaternidade($permanenciamaternidade)
    {
        $this->permanenciamaternidade = $permanenciamaternidade;

        return $this;
    }

    /**
     * Get permanenciamaternidade
     *
     * @return integer
     */
    public function getPermanenciamaternidade()
    {
        return $this->permanenciamaternidade;
    }

    /**
     * Set testedaorelhinha
     *
     * @param boolean $testedaorelhinha
     *
     * @return Historicogestacaoneonatal
     */
    public function setTestedaorelhinha($testedaorelhinha)
    {
        $this->testedaorelhinha = $testedaorelhinha;

        return $this;
    }

    /**
     * Get testedaorelhinha
     *
     * @return boolean
     */
    public function getTestedaorelhinha()
    {
        return $this->testedaorelhinha;
    }

    /**
     * Set pc
     *
     * @param float $pc
     *
     * @return Historicogestacaoneonatal
     */
    public function setPc($pc)
    {
        $this->pc = $pc;

        return $this;
    }

    /**
     * Get pc
     *
     * @return float
     */
    public function getPc()
    {
        return $this->pc;
    }

    /**
     * Set testedopezinho
     *
     * @param boolean $testedopezinho
     *
     * @return Historicogestacaoneonatal
     */
    public function setTestedopezinho($testedopezinho)
    {
        $this->testedopezinho = $testedopezinho;

        return $this;
    }

    /**
     * Get testedopezinho
     *
     * @return boolean
     */
    public function getTestedopezinho()
    {
        return $this->testedopezinho;
    }

    /**
     * Set peso
     *
     * @param float $peso
     *
     * @return Historicogestacaoneonatal
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return float
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set comprimento
     *
     * @param float $comprimento
     *
     * @return Historicogestacaoneonatal
     */
    public function setComprimento($comprimento)
    {
        $this->comprimento = $comprimento;

        return $this;
    }

    /**
     * Get comprimento
     *
     * @return float
     */
    public function getComprimento()
    {
        return $this->comprimento;
    }

    /**
     * Set alteracaotestedopezinho
     *
     * @param boolean $alteracaotestedopezinho
     *
     * @return Historicogestacaoneonatal
     */
    public function setAlteracaotestedopezinho($alteracaotestedopezinho)
    {
        $this->alteracaotestedopezinho = $alteracaotestedopezinho;

        return $this;
    }

    /**
     * Get alteracaotestedopezinho
     *
     * @return boolean
     */
    public function getAlteracaotestedopezinho()
    {
        return $this->alteracaotestedopezinho;
    }

    /**
     * Set alteracaotestedaorelhinha
     *
     * @param boolean $alteracaotestedaorelhinha
     *
     * @return Historicogestacaoneonatal
     */
    public function setAlteracaotestedaorelhinha($alteracaotestedaorelhinha)
    {
        $this->alteracaotestedaorelhinha = $alteracaotestedaorelhinha;

        return $this;
    }

    /**
     * Get alteracaotestedaorelhinha
     *
     * @return boolean
     */
    public function getAlteracaotestedaorelhinha()
    {
        return $this->alteracaotestedaorelhinha;
    }

    /**
     * Set descalteracaotestedopezinho
     *
     * @param string $descalteracaotestedopezinho
     *
     * @return Historicogestacaoneonatal
     */
    public function setDescalteracaotestedopezinho($descalteracaotestedopezinho)
    {
        $this->descalteracaotestedopezinho = $descalteracaotestedopezinho;

        return $this;
    }

    /**
     * Get descalteracaotestedopezinho
     *
     * @return string
     */
    public function getDescalteracaotestedopezinho()
    {
        return $this->descalteracaotestedopezinho;
    }

    /**
     * Set descalteracaotestedaorelhinha
     *
     * @param string $descalteracaotestedaorelhinha
     *
     * @return Historicogestacaoneonatal
     */
    public function setDescalteracaotestedaorelhinha($descalteracaotestedaorelhinha)
    {
        $this->descalteracaotestedaorelhinha = $descalteracaotestedaorelhinha;

        return $this;
    }

    /**
     * Get descalteracaotestedaorelhinha
     *
     * @return string
     */
    public function getDescalteracaotestedaorelhinha()
    {
        return $this->descalteracaotestedaorelhinha;
    }

    /**
     * Set intercorrenciaevolucaoprimeirosmeses
     *
     * @param string $intercorrenciaevolucaoprimeirosmeses
     *
     * @return Historicogestacaoneonatal
     */
    public function setIntercorrenciaevolucaoprimeirosmeses($intercorrenciaevolucaoprimeirosmeses)
    {
        $this->intercorrenciaevolucaoprimeirosmeses = $intercorrenciaevolucaoprimeirosmeses;

        return $this;
    }

    /**
     * Get intercorrenciaevolucaoprimeirosmeses
     *
     * @return string
     */
    public function getIntercorrenciaevolucaoprimeirosmeses()
    {
        return $this->intercorrenciaevolucaoprimeirosmeses;
    }

    /**
     * Set intercorrencias
     *
     * @param boolean $intercorrencias
     *
     * @return Historicogestacaoneonatal
     */
    public function setIntercorrencias($intercorrencias)
    {
        $this->intercorrencias = $intercorrencias;

        return $this;
    }

    /**
     * Get intercorrencias
     *
     * @return boolean
     */
    public function getIntercorrencias()
    {
        return $this->intercorrencias;
    }

    /**
     * Set gesta
     *
     * @param integer $gesta
     *
     * @return Historicogestacaoneonatal
     */
    public function setGesta($gesta)
    {
        $this->gesta = $gesta;

        return $this;
    }

    /**
     * Get gesta
     *
     * @return integer
     */
    public function getGesta()
    {
        return $this->gesta;
    }

    /**
     * Set gestacaoectopica
     *
     * @param integer $gestacaoectopica
     *
     * @return Historicogestacaoneonatal
     */
    public function setGestacaoectopica($gestacaoectopica)
    {
        $this->gestacaoectopica = $gestacaoectopica;

        return $this;
    }

    /**
     * Get gestacaoectopica
     *
     * @return integer
     */
    public function getGestacaoectopica()
    {
        return $this->gestacaoectopica;
    }

    /**
     * Set para
     *
     * @param integer $para
     *
     * @return Historicogestacaoneonatal
     */
    public function setPara($para)
    {
        $this->para = $para;

        return $this;
    }

    /**
     * Get para
     *
     * @return integer
     */
    public function getPara()
    {
        return $this->para;
    }

    /**
     * Set cesaria
     *
     * @param integer $cesaria
     *
     * @return Historicogestacaoneonatal
     */
    public function setCesaria($cesaria)
    {
        $this->cesaria = $cesaria;

        return $this;
    }

    /**
     * Get cesaria
     *
     * @return integer
     */
    public function getCesaria()
    {
        return $this->cesaria;
    }

    /**
     * Set abortoespontaneo
     *
     * @param integer $abortoespontaneo
     *
     * @return Historicogestacaoneonatal
     */
    public function setAbortoespontaneo($abortoespontaneo)
    {
        $this->abortoespontaneo = $abortoespontaneo;

        return $this;
    }

    /**
     * Get abortoespontaneo
     *
     * @return integer
     */
    public function getAbortoespontaneo()
    {
        return $this->abortoespontaneo;
    }

    /**
     * Set abortoprovocado
     *
     * @param integer $abortoprovocado
     *
     * @return Historicogestacaoneonatal
     */
    public function setAbortoprovocado($abortoprovocado)
    {
        $this->abortoprovocado = $abortoprovocado;

        return $this;
    }

    /**
     * Get abortoprovocado
     *
     * @return integer
     */
    public function getAbortoprovocado()
    {
        return $this->abortoprovocado;
    }

    /**
     * Set codigoidentificacao
     *
     * @param \AppBundle\Entity\Identificacao $codigoidentificacao
     *
     * @return Historicogestacaoneonatal
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

