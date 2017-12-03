<?php

namespace AppBundle\Entity;

/**
 * Modality
 */
class Modality
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nameEquip;

    /**
     * @var string
     */
    private $installedRoom;

    /**
     * @var \DateTime
     */
    private $aquisitionDate;

    /**
     * @var string
     */
    private $serialNumber;

    /**
     * @var string
     */
    private $vendor;

    /**
     * @var \DateTime
     */
    private $installationDate;

    /**
     * @var \DateTime
     */
    private $tubeInstallation;

    /**
     * @var string
     */
    private $stationAeTitle;

    /**
     * @var \AppBundle\Entity\Unit
     */
    private $idUnit;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nameEquip
     *
     * @param string $nameEquip
     *
     * @return Modality
     */
    public function setNameEquip($nameEquip)
    {
        $this->nameEquip = $nameEquip;

        return $this;
    }

    /**
     * Get nameEquip
     *
     * @return string
     */
    public function getNameEquip()
    {
        return $this->nameEquip;
    }

    /**
     * Set installedRoom
     *
     * @param string $installedRoom
     *
     * @return Modality
     */
    public function setInstalledRoom($installedRoom)
    {
        $this->installedRoom = $installedRoom;

        return $this;
    }

    /**
     * Get installedRoom
     *
     * @return string
     */
    public function getInstalledRoom()
    {
        return $this->installedRoom;
    }

    /**
     * Set aquisitionDate
     *
     * @param \DateTime $aquisitionDate
     *
     * @return Modality
     */
    public function setAquisitionDate($aquisitionDate)
    {
        $this->aquisitionDate = $aquisitionDate;

        return $this;
    }

    /**
     * Get aquisitionDate
     *
     * @return \DateTime
     */
    public function getAquisitionDate()
    {
        return $this->aquisitionDate;
    }

    /**
     * Set serialNumber
     *
     * @param string $serialNumber
     *
     * @return Modality
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;

        return $this;
    }

    /**
     * Get serialNumber
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Set vendor
     *
     * @param string $vendor
     *
     * @return Modality
     */
    public function setVendor($vendor)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Get vendor
     *
     * @return string
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Set installationDate
     *
     * @param \DateTime $installationDate
     *
     * @return Modality
     */
    public function setInstallationDate($installationDate)
    {
        $this->installationDate = $installationDate;

        return $this;
    }

    /**
     * Get installationDate
     *
     * @return \DateTime
     */
    public function getInstallationDate()
    {
        return $this->installationDate;
    }

    /**
     * Set tubeInstallation
     *
     * @param \DateTime $tubeInstallation
     *
     * @return Modality
     */
    public function setTubeInstallation($tubeInstallation)
    {
        $this->tubeInstallation = $tubeInstallation;

        return $this;
    }

    /**
     * Get tubeInstallation
     *
     * @return \DateTime
     */
    public function getTubeInstallation()
    {
        return $this->tubeInstallation;
    }

    /**
     * Set stationAeTitle
     *
     * @param string $stationAeTitle
     *
     * @return Modality
     */
    public function setStationAeTitle($stationAeTitle)
    {
        $this->stationAeTitle = $stationAeTitle;

        return $this;
    }

    /**
     * Get stationAeTitle
     *
     * @return string
     */
    public function getStationAeTitle()
    {
        return $this->stationAeTitle;
    }

    /**
     * Set idUnit
     *
     * @param \AppBundle\Entity\Unit $idUnit
     *
     * @return Modality
     */
    public function setIdUnit(\AppBundle\Entity\Unit $idUnit = null)
    {
        $this->idUnit = $idUnit;

        return $this;
    }

    /**
     * Get idUnit
     *
     * @return \AppBundle\Entity\Unit
     */
    public function getIdUnit()
    {
        return $this->idUnit;
    }
}

