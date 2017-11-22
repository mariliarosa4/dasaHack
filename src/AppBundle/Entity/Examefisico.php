<?php

namespace AppBundle\Entity;

/**
 * Examefisico
 */
class Examefisico
{
    /**
     * @var integer
     */
    private $codigoexamefisico;

    /**
     * @var boolean
     */
    private $olhosalterado;

    /**
     * @var string
     */
    private $olhosalteradodescricao;

    /**
     * @var boolean
     */
    private $narizalterado;

    /**
     * @var string
     */
    private $narizalteradods;

    /**
     * @var boolean
     */
    private $bocaalterado;

    /**
     * @var string
     */
    private $bocaalteradods;

    /**
     * @var boolean
     */
    private $pescocoalterado;

    /**
     * @var string
     */
    private $pescocoalteradods;

    /**
     * @var boolean
     */
    private $toraxalterado;

    /**
     * @var string
     */
    private $toraxalteradods;

    /**
     * @var boolean
     */
    private $abdomenalterado;

    /**
     * @var string
     */
    private $abdomenalteradods;

    /**
     * @var boolean
     */
    private $genitaliaalterado;

    /**
     * @var string
     */
    private $genitaliaalteradods;

    /**
     * @var boolean
     */
    private $colunaalterado;

    /**
     * @var string
     */
    private $colunaalteradods;

    /**
     * @var boolean
     */
    private $membrossuperioresalterado;

    /**
     * @var string
     */
    private $membrossuperioresalteradods;

    /**
     * @var boolean
     */
    private $membrosinferioresalterado;

    /**
     * @var string
     */
    private $membrosinferioresalteradods;

    /**
     * @var boolean
     */
    private $peleefanerosalterado;

    /**
     * @var string
     */
    private $peleefanerosalteradods;

    /**
     * @var boolean
     */
    private $exameneurologico;

    /**
     * @var float
     */
    private $peso;

    /**
     * @var boolean
     */
    private $pesoalterado;

    /**
     * @var float
     */
    private $estatura;

    /**
     * @var float
     */
    private $distintercinterna;

    /**
     * @var float
     */
    private $distintercexterna;

    /**
     * @var float
     */
    private $compmao;

    /**
     * @var float
     */
    private $compdedomedio;

    /**
     * @var float
     */
    private $perimetrocefalico;

    /**
     * @var boolean
     */
    private $perimetrocefalicoalterado;

    /**
     * @var boolean
     */
    private $distintercexternaalterado;

    /**
     * @var boolean
     */
    private $compmaoalterado;

    /**
     * @var boolean
     */
    private $compdedomedioalterado;

    /**
     * @var boolean
     */
    private $pesodescricaoalterado;

    /**
     * @var boolean
     */
    private $estaturadescricaoalterado;

    /**
     * @var string
     */
    private $perimetrocefalicodescricaoalterado;

    /**
     * @var string
     */
    private $distintercinternadescricaoalterado;

    /**
     * @var string
     */
    private $compdedomediodescricaoalterado;

    /**
     * @var string
     */
    private $compmaodescricaoalterado;

    /**
     * @var string
     */
    private $aspectogeral;

    /**
     * @var boolean
     */
    private $cranioefacealterado;

    /**
     * @var string
     */
    private $cranioefacealteradodescricao;

    /**
     * @var string
     */
    private $distintercexternadescricaoalterado;

    /**
     * @var boolean
     */
    private $estaturaalterado;

    /**
     * @var integer
     */
    private $distintercinternaalterado;

    /**
     * @var boolean
     */
    private $cranioalterado;

    /**
     * @var string
     */
    private $cranioalteradodescricao;

    /**
     * @var \AppBundle\Entity\Identificacao
     */
    private $codigoidentificacao;


    /**
     * Get codigoexamefisico
     *
     * @return integer
     */
    public function getCodigoexamefisico()
    {
        return $this->codigoexamefisico;
    }

    /**
     * Set olhosalterado
     *
     * @param boolean $olhosalterado
     *
     * @return Examefisico
     */
    public function setOlhosalterado($olhosalterado)
    {
        $this->olhosalterado = $olhosalterado;

        return $this;
    }

    /**
     * Get olhosalterado
     *
     * @return boolean
     */
    public function getOlhosalterado()
    {
        return $this->olhosalterado;
    }

    /**
     * Set olhosalteradodescricao
     *
     * @param string $olhosalteradodescricao
     *
     * @return Examefisico
     */
    public function setOlhosalteradodescricao($olhosalteradodescricao)
    {
        $this->olhosalteradodescricao = $olhosalteradodescricao;

        return $this;
    }

    /**
     * Get olhosalteradodescricao
     *
     * @return string
     */
    public function getOlhosalteradodescricao()
    {
        return $this->olhosalteradodescricao;
    }

    /**
     * Set narizalterado
     *
     * @param boolean $narizalterado
     *
     * @return Examefisico
     */
    public function setNarizalterado($narizalterado)
    {
        $this->narizalterado = $narizalterado;

        return $this;
    }

    /**
     * Get narizalterado
     *
     * @return boolean
     */
    public function getNarizalterado()
    {
        return $this->narizalterado;
    }

    /**
     * Set narizalteradods
     *
     * @param string $narizalteradods
     *
     * @return Examefisico
     */
    public function setNarizalteradods($narizalteradods)
    {
        $this->narizalteradods = $narizalteradods;

        return $this;
    }

    /**
     * Get narizalteradods
     *
     * @return string
     */
    public function getNarizalteradods()
    {
        return $this->narizalteradods;
    }

    /**
     * Set bocaalterado
     *
     * @param boolean $bocaalterado
     *
     * @return Examefisico
     */
    public function setBocaalterado($bocaalterado)
    {
        $this->bocaalterado = $bocaalterado;

        return $this;
    }

    /**
     * Get bocaalterado
     *
     * @return boolean
     */
    public function getBocaalterado()
    {
        return $this->bocaalterado;
    }

    /**
     * Set bocaalteradods
     *
     * @param string $bocaalteradods
     *
     * @return Examefisico
     */
    public function setBocaalteradods($bocaalteradods)
    {
        $this->bocaalteradods = $bocaalteradods;

        return $this;
    }

    /**
     * Get bocaalteradods
     *
     * @return string
     */
    public function getBocaalteradods()
    {
        return $this->bocaalteradods;
    }

    /**
     * Set pescocoalterado
     *
     * @param boolean $pescocoalterado
     *
     * @return Examefisico
     */
    public function setPescocoalterado($pescocoalterado)
    {
        $this->pescocoalterado = $pescocoalterado;

        return $this;
    }

    /**
     * Get pescocoalterado
     *
     * @return boolean
     */
    public function getPescocoalterado()
    {
        return $this->pescocoalterado;
    }

    /**
     * Set pescocoalteradods
     *
     * @param string $pescocoalteradods
     *
     * @return Examefisico
     */
    public function setPescocoalteradods($pescocoalteradods)
    {
        $this->pescocoalteradods = $pescocoalteradods;

        return $this;
    }

    /**
     * Get pescocoalteradods
     *
     * @return string
     */
    public function getPescocoalteradods()
    {
        return $this->pescocoalteradods;
    }

    /**
     * Set toraxalterado
     *
     * @param boolean $toraxalterado
     *
     * @return Examefisico
     */
    public function setToraxalterado($toraxalterado)
    {
        $this->toraxalterado = $toraxalterado;

        return $this;
    }

    /**
     * Get toraxalterado
     *
     * @return boolean
     */
    public function getToraxalterado()
    {
        return $this->toraxalterado;
    }

    /**
     * Set toraxalteradods
     *
     * @param string $toraxalteradods
     *
     * @return Examefisico
     */
    public function setToraxalteradods($toraxalteradods)
    {
        $this->toraxalteradods = $toraxalteradods;

        return $this;
    }

    /**
     * Get toraxalteradods
     *
     * @return string
     */
    public function getToraxalteradods()
    {
        return $this->toraxalteradods;
    }

    /**
     * Set abdomenalterado
     *
     * @param boolean $abdomenalterado
     *
     * @return Examefisico
     */
    public function setAbdomenalterado($abdomenalterado)
    {
        $this->abdomenalterado = $abdomenalterado;

        return $this;
    }

    /**
     * Get abdomenalterado
     *
     * @return boolean
     */
    public function getAbdomenalterado()
    {
        return $this->abdomenalterado;
    }

    /**
     * Set abdomenalteradods
     *
     * @param string $abdomenalteradods
     *
     * @return Examefisico
     */
    public function setAbdomenalteradods($abdomenalteradods)
    {
        $this->abdomenalteradods = $abdomenalteradods;

        return $this;
    }

    /**
     * Get abdomenalteradods
     *
     * @return string
     */
    public function getAbdomenalteradods()
    {
        return $this->abdomenalteradods;
    }

    /**
     * Set genitaliaalterado
     *
     * @param boolean $genitaliaalterado
     *
     * @return Examefisico
     */
    public function setGenitaliaalterado($genitaliaalterado)
    {
        $this->genitaliaalterado = $genitaliaalterado;

        return $this;
    }

    /**
     * Get genitaliaalterado
     *
     * @return boolean
     */
    public function getGenitaliaalterado()
    {
        return $this->genitaliaalterado;
    }

    /**
     * Set genitaliaalteradods
     *
     * @param string $genitaliaalteradods
     *
     * @return Examefisico
     */
    public function setGenitaliaalteradods($genitaliaalteradods)
    {
        $this->genitaliaalteradods = $genitaliaalteradods;

        return $this;
    }

    /**
     * Get genitaliaalteradods
     *
     * @return string
     */
    public function getGenitaliaalteradods()
    {
        return $this->genitaliaalteradods;
    }

    /**
     * Set colunaalterado
     *
     * @param boolean $colunaalterado
     *
     * @return Examefisico
     */
    public function setColunaalterado($colunaalterado)
    {
        $this->colunaalterado = $colunaalterado;

        return $this;
    }

    /**
     * Get colunaalterado
     *
     * @return boolean
     */
    public function getColunaalterado()
    {
        return $this->colunaalterado;
    }

    /**
     * Set colunaalteradods
     *
     * @param string $colunaalteradods
     *
     * @return Examefisico
     */
    public function setColunaalteradods($colunaalteradods)
    {
        $this->colunaalteradods = $colunaalteradods;

        return $this;
    }

    /**
     * Get colunaalteradods
     *
     * @return string
     */
    public function getColunaalteradods()
    {
        return $this->colunaalteradods;
    }

    /**
     * Set membrossuperioresalterado
     *
     * @param boolean $membrossuperioresalterado
     *
     * @return Examefisico
     */
    public function setMembrossuperioresalterado($membrossuperioresalterado)
    {
        $this->membrossuperioresalterado = $membrossuperioresalterado;

        return $this;
    }

    /**
     * Get membrossuperioresalterado
     *
     * @return boolean
     */
    public function getMembrossuperioresalterado()
    {
        return $this->membrossuperioresalterado;
    }

    /**
     * Set membrossuperioresalteradods
     *
     * @param string $membrossuperioresalteradods
     *
     * @return Examefisico
     */
    public function setMembrossuperioresalteradods($membrossuperioresalteradods)
    {
        $this->membrossuperioresalteradods = $membrossuperioresalteradods;

        return $this;
    }

    /**
     * Get membrossuperioresalteradods
     *
     * @return string
     */
    public function getMembrossuperioresalteradods()
    {
        return $this->membrossuperioresalteradods;
    }

    /**
     * Set membrosinferioresalterado
     *
     * @param boolean $membrosinferioresalterado
     *
     * @return Examefisico
     */
    public function setMembrosinferioresalterado($membrosinferioresalterado)
    {
        $this->membrosinferioresalterado = $membrosinferioresalterado;

        return $this;
    }

    /**
     * Get membrosinferioresalterado
     *
     * @return boolean
     */
    public function getMembrosinferioresalterado()
    {
        return $this->membrosinferioresalterado;
    }

    /**
     * Set membrosinferioresalteradods
     *
     * @param string $membrosinferioresalteradods
     *
     * @return Examefisico
     */
    public function setMembrosinferioresalteradods($membrosinferioresalteradods)
    {
        $this->membrosinferioresalteradods = $membrosinferioresalteradods;

        return $this;
    }

    /**
     * Get membrosinferioresalteradods
     *
     * @return string
     */
    public function getMembrosinferioresalteradods()
    {
        return $this->membrosinferioresalteradods;
    }

    /**
     * Set peleefanerosalterado
     *
     * @param boolean $peleefanerosalterado
     *
     * @return Examefisico
     */
    public function setPeleefanerosalterado($peleefanerosalterado)
    {
        $this->peleefanerosalterado = $peleefanerosalterado;

        return $this;
    }

    /**
     * Get peleefanerosalterado
     *
     * @return boolean
     */
    public function getPeleefanerosalterado()
    {
        return $this->peleefanerosalterado;
    }

    /**
     * Set peleefanerosalteradods
     *
     * @param string $peleefanerosalteradods
     *
     * @return Examefisico
     */
    public function setPeleefanerosalteradods($peleefanerosalteradods)
    {
        $this->peleefanerosalteradods = $peleefanerosalteradods;

        return $this;
    }

    /**
     * Get peleefanerosalteradods
     *
     * @return string
     */
    public function getPeleefanerosalteradods()
    {
        return $this->peleefanerosalteradods;
    }

    /**
     * Set exameneurologico
     *
     * @param boolean $exameneurologico
     *
     * @return Examefisico
     */
    public function setExameneurologico($exameneurologico)
    {
        $this->exameneurologico = $exameneurologico;

        return $this;
    }

    /**
     * Get exameneurologico
     *
     * @return boolean
     */
    public function getExameneurologico()
    {
        return $this->exameneurologico;
    }

    /**
     * Set peso
     *
     * @param float $peso
     *
     * @return Examefisico
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
     * Set pesoalterado
     *
     * @param boolean $pesoalterado
     *
     * @return Examefisico
     */
    public function setPesoalterado($pesoalterado)
    {
        $this->pesoalterado = $pesoalterado;

        return $this;
    }

    /**
     * Get pesoalterado
     *
     * @return boolean
     */
    public function getPesoalterado()
    {
        return $this->pesoalterado;
    }

    /**
     * Set estatura
     *
     * @param float $estatura
     *
     * @return Examefisico
     */
    public function setEstatura($estatura)
    {
        $this->estatura = $estatura;

        return $this;
    }

    /**
     * Get estatura
     *
     * @return float
     */
    public function getEstatura()
    {
        return $this->estatura;
    }

    /**
     * Set distintercinterna
     *
     * @param float $distintercinterna
     *
     * @return Examefisico
     */
    public function setDistintercinterna($distintercinterna)
    {
        $this->distintercinterna = $distintercinterna;

        return $this;
    }

    /**
     * Get distintercinterna
     *
     * @return float
     */
    public function getDistintercinterna()
    {
        return $this->distintercinterna;
    }

    /**
     * Set distintercexterna
     *
     * @param float $distintercexterna
     *
     * @return Examefisico
     */
    public function setDistintercexterna($distintercexterna)
    {
        $this->distintercexterna = $distintercexterna;

        return $this;
    }

    /**
     * Get distintercexterna
     *
     * @return float
     */
    public function getDistintercexterna()
    {
        return $this->distintercexterna;
    }

    /**
     * Set compmao
     *
     * @param float $compmao
     *
     * @return Examefisico
     */
    public function setCompmao($compmao)
    {
        $this->compmao = $compmao;

        return $this;
    }

    /**
     * Get compmao
     *
     * @return float
     */
    public function getCompmao()
    {
        return $this->compmao;
    }

    /**
     * Set compdedomedio
     *
     * @param float $compdedomedio
     *
     * @return Examefisico
     */
    public function setCompdedomedio($compdedomedio)
    {
        $this->compdedomedio = $compdedomedio;

        return $this;
    }

    /**
     * Get compdedomedio
     *
     * @return float
     */
    public function getCompdedomedio()
    {
        return $this->compdedomedio;
    }

    /**
     * Set perimetrocefalico
     *
     * @param float $perimetrocefalico
     *
     * @return Examefisico
     */
    public function setPerimetrocefalico($perimetrocefalico)
    {
        $this->perimetrocefalico = $perimetrocefalico;

        return $this;
    }

    /**
     * Get perimetrocefalico
     *
     * @return float
     */
    public function getPerimetrocefalico()
    {
        return $this->perimetrocefalico;
    }

    /**
     * Set perimetrocefalicoalterado
     *
     * @param boolean $perimetrocefalicoalterado
     *
     * @return Examefisico
     */
    public function setPerimetrocefalicoalterado($perimetrocefalicoalterado)
    {
        $this->perimetrocefalicoalterado = $perimetrocefalicoalterado;

        return $this;
    }

    /**
     * Get perimetrocefalicoalterado
     *
     * @return boolean
     */
    public function getPerimetrocefalicoalterado()
    {
        return $this->perimetrocefalicoalterado;
    }

    /**
     * Set distintercexternaalterado
     *
     * @param boolean $distintercexternaalterado
     *
     * @return Examefisico
     */
    public function setDistintercexternaalterado($distintercexternaalterado)
    {
        $this->distintercexternaalterado = $distintercexternaalterado;

        return $this;
    }

    /**
     * Get distintercexternaalterado
     *
     * @return boolean
     */
    public function getDistintercexternaalterado()
    {
        return $this->distintercexternaalterado;
    }

    /**
     * Set compmaoalterado
     *
     * @param boolean $compmaoalterado
     *
     * @return Examefisico
     */
    public function setCompmaoalterado($compmaoalterado)
    {
        $this->compmaoalterado = $compmaoalterado;

        return $this;
    }

    /**
     * Get compmaoalterado
     *
     * @return boolean
     */
    public function getCompmaoalterado()
    {
        return $this->compmaoalterado;
    }

    /**
     * Set compdedomedioalterado
     *
     * @param boolean $compdedomedioalterado
     *
     * @return Examefisico
     */
    public function setCompdedomedioalterado($compdedomedioalterado)
    {
        $this->compdedomedioalterado = $compdedomedioalterado;

        return $this;
    }

    /**
     * Get compdedomedioalterado
     *
     * @return boolean
     */
    public function getCompdedomedioalterado()
    {
        return $this->compdedomedioalterado;
    }

    /**
     * Set pesodescricaoalterado
     *
     * @param boolean $pesodescricaoalterado
     *
     * @return Examefisico
     */
    public function setPesodescricaoalterado($pesodescricaoalterado)
    {
        $this->pesodescricaoalterado = $pesodescricaoalterado;

        return $this;
    }

    /**
     * Get pesodescricaoalterado
     *
     * @return boolean
     */
    public function getPesodescricaoalterado()
    {
        return $this->pesodescricaoalterado;
    }

    /**
     * Set estaturadescricaoalterado
     *
     * @param boolean $estaturadescricaoalterado
     *
     * @return Examefisico
     */
    public function setEstaturadescricaoalterado($estaturadescricaoalterado)
    {
        $this->estaturadescricaoalterado = $estaturadescricaoalterado;

        return $this;
    }

    /**
     * Get estaturadescricaoalterado
     *
     * @return boolean
     */
    public function getEstaturadescricaoalterado()
    {
        return $this->estaturadescricaoalterado;
    }

    /**
     * Set perimetrocefalicodescricaoalterado
     *
     * @param string $perimetrocefalicodescricaoalterado
     *
     * @return Examefisico
     */
    public function setPerimetrocefalicodescricaoalterado($perimetrocefalicodescricaoalterado)
    {
        $this->perimetrocefalicodescricaoalterado = $perimetrocefalicodescricaoalterado;

        return $this;
    }

    /**
     * Get perimetrocefalicodescricaoalterado
     *
     * @return string
     */
    public function getPerimetrocefalicodescricaoalterado()
    {
        return $this->perimetrocefalicodescricaoalterado;
    }

    /**
     * Set distintercinternadescricaoalterado
     *
     * @param string $distintercinternadescricaoalterado
     *
     * @return Examefisico
     */
    public function setDistintercinternadescricaoalterado($distintercinternadescricaoalterado)
    {
        $this->distintercinternadescricaoalterado = $distintercinternadescricaoalterado;

        return $this;
    }

    /**
     * Get distintercinternadescricaoalterado
     *
     * @return string
     */
    public function getDistintercinternadescricaoalterado()
    {
        return $this->distintercinternadescricaoalterado;
    }

    /**
     * Set compdedomediodescricaoalterado
     *
     * @param string $compdedomediodescricaoalterado
     *
     * @return Examefisico
     */
    public function setCompdedomediodescricaoalterado($compdedomediodescricaoalterado)
    {
        $this->compdedomediodescricaoalterado = $compdedomediodescricaoalterado;

        return $this;
    }

    /**
     * Get compdedomediodescricaoalterado
     *
     * @return string
     */
    public function getCompdedomediodescricaoalterado()
    {
        return $this->compdedomediodescricaoalterado;
    }

    /**
     * Set compmaodescricaoalterado
     *
     * @param string $compmaodescricaoalterado
     *
     * @return Examefisico
     */
    public function setCompmaodescricaoalterado($compmaodescricaoalterado)
    {
        $this->compmaodescricaoalterado = $compmaodescricaoalterado;

        return $this;
    }

    /**
     * Get compmaodescricaoalterado
     *
     * @return string
     */
    public function getCompmaodescricaoalterado()
    {
        return $this->compmaodescricaoalterado;
    }

    /**
     * Set aspectogeral
     *
     * @param string $aspectogeral
     *
     * @return Examefisico
     */
    public function setAspectogeral($aspectogeral)
    {
        $this->aspectogeral = $aspectogeral;

        return $this;
    }

    /**
     * Get aspectogeral
     *
     * @return string
     */
    public function getAspectogeral()
    {
        return $this->aspectogeral;
    }

    /**
     * Set cranioefacealterado
     *
     * @param boolean $cranioefacealterado
     *
     * @return Examefisico
     */
    public function setCranioefacealterado($cranioefacealterado)
    {
        $this->cranioefacealterado = $cranioefacealterado;

        return $this;
    }

    /**
     * Get cranioefacealterado
     *
     * @return boolean
     */
    public function getCranioefacealterado()
    {
        return $this->cranioefacealterado;
    }

    /**
     * Set cranioefacealteradodescricao
     *
     * @param string $cranioefacealteradodescricao
     *
     * @return Examefisico
     */
    public function setCranioefacealteradodescricao($cranioefacealteradodescricao)
    {
        $this->cranioefacealteradodescricao = $cranioefacealteradodescricao;

        return $this;
    }

    /**
     * Get cranioefacealteradodescricao
     *
     * @return string
     */
    public function getCranioefacealteradodescricao()
    {
        return $this->cranioefacealteradodescricao;
    }

    /**
     * Set distintercexternadescricaoalterado
     *
     * @param string $distintercexternadescricaoalterado
     *
     * @return Examefisico
     */
    public function setDistintercexternadescricaoalterado($distintercexternadescricaoalterado)
    {
        $this->distintercexternadescricaoalterado = $distintercexternadescricaoalterado;

        return $this;
    }

    /**
     * Get distintercexternadescricaoalterado
     *
     * @return string
     */
    public function getDistintercexternadescricaoalterado()
    {
        return $this->distintercexternadescricaoalterado;
    }

    /**
     * Set estaturaalterado
     *
     * @param boolean $estaturaalterado
     *
     * @return Examefisico
     */
    public function setEstaturaalterado($estaturaalterado)
    {
        $this->estaturaalterado = $estaturaalterado;

        return $this;
    }

    /**
     * Get estaturaalterado
     *
     * @return boolean
     */
    public function getEstaturaalterado()
    {
        return $this->estaturaalterado;
    }

    /**
     * Set distintercinternaalterado
     *
     * @param integer $distintercinternaalterado
     *
     * @return Examefisico
     */
    public function setDistintercinternaalterado($distintercinternaalterado)
    {
        $this->distintercinternaalterado = $distintercinternaalterado;

        return $this;
    }

    /**
     * Get distintercinternaalterado
     *
     * @return integer
     */
    public function getDistintercinternaalterado()
    {
        return $this->distintercinternaalterado;
    }

    /**
     * Set cranioalterado
     *
     * @param boolean $cranioalterado
     *
     * @return Examefisico
     */
    public function setCranioalterado($cranioalterado)
    {
        $this->cranioalterado = $cranioalterado;

        return $this;
    }

    /**
     * Get cranioalterado
     *
     * @return boolean
     */
    public function getCranioalterado()
    {
        return $this->cranioalterado;
    }

    /**
     * Set cranioalteradodescricao
     *
     * @param string $cranioalteradodescricao
     *
     * @return Examefisico
     */
    public function setCranioalteradodescricao($cranioalteradodescricao)
    {
        $this->cranioalteradodescricao = $cranioalteradodescricao;

        return $this;
    }

    /**
     * Get cranioalteradodescricao
     *
     * @return string
     */
    public function getCranioalteradodescricao()
    {
        return $this->cranioalteradodescricao;
    }

    /**
     * Set codigoidentificacao
     *
     * @param \AppBundle\Entity\Identificacao $codigoidentificacao
     *
     * @return Examefisico
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

