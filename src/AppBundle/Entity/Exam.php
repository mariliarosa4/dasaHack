<?php

namespace AppBundle\Entity;

/**
 * Exam
 */
class Exam
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $patientName;

    /**
     * @var string
     */
    private $patientId;

    /**
     * @var float
     */
    private $patientSize;

    /**
     * @var float
     */
    private $patientWeight;

    /**
     * @var string
     */
    private $patientSex;

    /**
     * @var integer
     */
    private $patientAge;

    /**
     * @var \DateTime
     */
    private $patientBday;

    /**
     * @var string
     */
    private $institutionName;

    /**
     * @var string
     */
    private $stationName;

    /**
     * @var string
     */
    private $stationAeTitle;

    /**
     * @var string
     */
    private $studyInstanceUid;

    /**
     * @var string
     */
    private $studyId;

    /**
     * @var string
     */
    private $accessionNumber;

    /**
     * @var \DateTime
     */
    private $studyDatetime;

    /**
     * @var string
     */
    private $protocolName;

    /**
     * @var string
     */
    private $operatorName;

    /**
     * @var float
     */
    private $kvp;

    /**
     * @var float
     */
    private $sliceThickness;

    /**
     * @var float
     */
    private $tubeAngle;

    /**
     * @var string
     */
    private $exposureCurrent;

    /**
     * @var string
     */
    private $exposureTime;

    /**
     * @var string
     */
    private $exposure;

    /**
     * @var float
     */
    private $dlp;

    /**
     * @var float
     */
    private $ctiiVal;

    /**
     * @var float
     */
    private $eftDose;

    /**
     * @var float
     */
    private $ssde;

    /**
     * @var \DateTime
     */
    private $calibrationDate;

    /**
     * @var string
     */
    private $manufacturing;

    /**
     * @var float
     */
    private $numberOfImages;

    /**
     * @var float
     */
    private $numberOfSeries;

    /**
     * @var string
     */
    private $bodyRegion;

    /**
     * @var string
     */
    private $modalityType;

    /**
     * @var string
     */
    private $acquisitionType;

    /**
     * @var float
     */
    private $pitchFactor;

    /**
     * @var float
     */
    private $collimation;

    /**
     * @var \AppBundle\Entity\Modality
     */
    private $idModality;


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
     * Set patientName
     *
     * @param string $patientName
     *
     * @return Exam
     */
    public function setPatientName($patientName)
    {
        $this->patientName = $patientName;

        return $this;
    }

    /**
     * Get patientName
     *
     * @return string
     */
    public function getPatientName()
    {
        return $this->patientName;
    }

    /**
     * Set patientId
     *
     * @param string $patientId
     *
     * @return Exam
     */
    public function setPatientId($patientId)
    {
        $this->patientId = $patientId;

        return $this;
    }

    /**
     * Get patientId
     *
     * @return string
     */
    public function getPatientId()
    {
        return $this->patientId;
    }

    /**
     * Set patientSize
     *
     * @param float $patientSize
     *
     * @return Exam
     */
    public function setPatientSize($patientSize)
    {
        $this->patientSize = $patientSize;

        return $this;
    }

    /**
     * Get patientSize
     *
     * @return float
     */
    public function getPatientSize()
    {
        return $this->patientSize;
    }

    /**
     * Set patientWeight
     *
     * @param float $patientWeight
     *
     * @return Exam
     */
    public function setPatientWeight($patientWeight)
    {
        $this->patientWeight = $patientWeight;

        return $this;
    }

    /**
     * Get patientWeight
     *
     * @return float
     */
    public function getPatientWeight()
    {
        return $this->patientWeight;
    }

    /**
     * Set patientSex
     *
     * @param string $patientSex
     *
     * @return Exam
     */
    public function setPatientSex($patientSex)
    {
        $this->patientSex = $patientSex;

        return $this;
    }

    /**
     * Get patientSex
     *
     * @return string
     */
    public function getPatientSex()
    {
        return $this->patientSex;
    }

    /**
     * Set patientAge
     *
     * @param integer $patientAge
     *
     * @return Exam
     */
    public function setPatientAge($patientAge)
    {
        $this->patientAge = $patientAge;

        return $this;
    }

    /**
     * Get patientAge
     *
     * @return integer
     */
    public function getPatientAge()
    {
        return $this->patientAge;
    }

    /**
     * Set patientBday
     *
     * @param \DateTime $patientBday
     *
     * @return Exam
     */
    public function setPatientBday($patientBday)
    {
        $this->patientBday = $patientBday;

        return $this;
    }

    /**
     * Get patientBday
     *
     * @return \DateTime
     */
    public function getPatientBday()
    {
        return $this->patientBday;
    }

    /**
     * Set institutionName
     *
     * @param string $institutionName
     *
     * @return Exam
     */
    public function setInstitutionName($institutionName)
    {
        $this->institutionName = $institutionName;

        return $this;
    }

    /**
     * Get institutionName
     *
     * @return string
     */
    public function getInstitutionName()
    {
        return $this->institutionName;
    }

    /**
     * Set stationName
     *
     * @param string $stationName
     *
     * @return Exam
     */
    public function setStationName($stationName)
    {
        $this->stationName = $stationName;

        return $this;
    }

    /**
     * Get stationName
     *
     * @return string
     */
    public function getStationName()
    {
        return $this->stationName;
    }

    /**
     * Set stationAeTitle
     *
     * @param string $stationAeTitle
     *
     * @return Exam
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
     * Set studyInstanceUid
     *
     * @param string $studyInstanceUid
     *
     * @return Exam
     */
    public function setStudyInstanceUid($studyInstanceUid)
    {
        $this->studyInstanceUid = $studyInstanceUid;

        return $this;
    }

    /**
     * Get studyInstanceUid
     *
     * @return string
     */
    public function getStudyInstanceUid()
    {
        return $this->studyInstanceUid;
    }

    /**
     * Set studyId
     *
     * @param string $studyId
     *
     * @return Exam
     */
    public function setStudyId($studyId)
    {
        $this->studyId = $studyId;

        return $this;
    }

    /**
     * Get studyId
     *
     * @return string
     */
    public function getStudyId()
    {
        return $this->studyId;
    }

    /**
     * Set accessionNumber
     *
     * @param string $accessionNumber
     *
     * @return Exam
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
     * Set studyDatetime
     *
     * @param \DateTime $studyDatetime
     *
     * @return Exam
     */
    public function setStudyDatetime($studyDatetime)
    {
        $this->studyDatetime = $studyDatetime;

        return $this;
    }

    /**
     * Get studyDatetime
     *
     * @return \DateTime
     */
    public function getStudyDatetime()
    {
        return $this->studyDatetime;
    }

    /**
     * Set protocolName
     *
     * @param string $protocolName
     *
     * @return Exam
     */
    public function setProtocolName($protocolName)
    {
        $this->protocolName = $protocolName;

        return $this;
    }

    /**
     * Get protocolName
     *
     * @return string
     */
    public function getProtocolName()
    {
        return $this->protocolName;
    }

    /**
     * Set operatorName
     *
     * @param string $operatorName
     *
     * @return Exam
     */
    public function setOperatorName($operatorName)
    {
        $this->operatorName = $operatorName;

        return $this;
    }

    /**
     * Get operatorName
     *
     * @return string
     */
    public function getOperatorName()
    {
        return $this->operatorName;
    }

    /**
     * Set kvp
     *
     * @param float $kvp
     *
     * @return Exam
     */
    public function setKvp($kvp)
    {
        $this->kvp = $kvp;

        return $this;
    }

    /**
     * Get kvp
     *
     * @return float
     */
    public function getKvp()
    {
        return $this->kvp;
    }

    /**
     * Set sliceThickness
     *
     * @param float $sliceThickness
     *
     * @return Exam
     */
    public function setSliceThickness($sliceThickness)
    {
        $this->sliceThickness = $sliceThickness;

        return $this;
    }

    /**
     * Get sliceThickness
     *
     * @return float
     */
    public function getSliceThickness()
    {
        return $this->sliceThickness;
    }

    /**
     * Set tubeAngle
     *
     * @param float $tubeAngle
     *
     * @return Exam
     */
    public function setTubeAngle($tubeAngle)
    {
        $this->tubeAngle = $tubeAngle;

        return $this;
    }

    /**
     * Get tubeAngle
     *
     * @return float
     */
    public function getTubeAngle()
    {
        return $this->tubeAngle;
    }

    /**
     * Set exposureCurrent
     *
     * @param string $exposureCurrent
     *
     * @return Exam
     */
    public function setExposureCurrent($exposureCurrent)
    {
        $this->exposureCurrent = $exposureCurrent;

        return $this;
    }

    /**
     * Get exposureCurrent
     *
     * @return string
     */
    public function getExposureCurrent()
    {
        return $this->exposureCurrent;
    }

    /**
     * Set exposureTime
     *
     * @param string $exposureTime
     *
     * @return Exam
     */
    public function setExposureTime($exposureTime)
    {
        $this->exposureTime = $exposureTime;

        return $this;
    }

    /**
     * Get exposureTime
     *
     * @return string
     */
    public function getExposureTime()
    {
        return $this->exposureTime;
    }

    /**
     * Set exposure
     *
     * @param string $exposure
     *
     * @return Exam
     */
    public function setExposure($exposure)
    {
        $this->exposure = $exposure;

        return $this;
    }

    /**
     * Get exposure
     *
     * @return string
     */
    public function getExposure()
    {
        return $this->exposure;
    }

    /**
     * Set dlp
     *
     * @param float $dlp
     *
     * @return Exam
     */
    public function setDlp($dlp)
    {
        $this->dlp = $dlp;

        return $this;
    }

    /**
     * Get dlp
     *
     * @return float
     */
    public function getDlp()
    {
        return $this->dlp;
    }

    /**
     * Set ctiiVal
     *
     * @param float $ctiiVal
     *
     * @return Exam
     */
    public function setCtiiVal($ctiiVal)
    {
        $this->ctiiVal = $ctiiVal;

        return $this;
    }

    /**
     * Get ctiiVal
     *
     * @return float
     */
    public function getCtiiVal()
    {
        return $this->ctiiVal;
    }

    /**
     * Set eftDose
     *
     * @param float $eftDose
     *
     * @return Exam
     */
    public function setEftDose($eftDose)
    {
        $this->eftDose = $eftDose;

        return $this;
    }

    /**
     * Get eftDose
     *
     * @return float
     */
    public function getEftDose()
    {
        return $this->eftDose;
    }

    /**
     * Set ssde
     *
     * @param float $ssde
     *
     * @return Exam
     */
    public function setSsde($ssde)
    {
        $this->ssde = $ssde;

        return $this;
    }

    /**
     * Get ssde
     *
     * @return float
     */
    public function getSsde()
    {
        return $this->ssde;
    }

    /**
     * Set calibrationDate
     *
     * @param \DateTime $calibrationDate
     *
     * @return Exam
     */
    public function setCalibrationDate($calibrationDate)
    {
        $this->calibrationDate = $calibrationDate;

        return $this;
    }

    /**
     * Get calibrationDate
     *
     * @return \DateTime
     */
    public function getCalibrationDate()
    {
        return $this->calibrationDate;
    }

    /**
     * Set manufacturing
     *
     * @param string $manufacturing
     *
     * @return Exam
     */
    public function setManufacturing($manufacturing)
    {
        $this->manufacturing = $manufacturing;

        return $this;
    }

    /**
     * Get manufacturing
     *
     * @return string
     */
    public function getManufacturing()
    {
        return $this->manufacturing;
    }

    /**
     * Set numberOfImages
     *
     * @param float $numberOfImages
     *
     * @return Exam
     */
    public function setNumberOfImages($numberOfImages)
    {
        $this->numberOfImages = $numberOfImages;

        return $this;
    }

    /**
     * Get numberOfImages
     *
     * @return float
     */
    public function getNumberOfImages()
    {
        return $this->numberOfImages;
    }

    /**
     * Set numberOfSeries
     *
     * @param float $numberOfSeries
     *
     * @return Exam
     */
    public function setNumberOfSeries($numberOfSeries)
    {
        $this->numberOfSeries = $numberOfSeries;

        return $this;
    }

    /**
     * Get numberOfSeries
     *
     * @return float
     */
    public function getNumberOfSeries()
    {
        return $this->numberOfSeries;
    }

    /**
     * Set bodyRegion
     *
     * @param string $bodyRegion
     *
     * @return Exam
     */
    public function setBodyRegion($bodyRegion)
    {
        $this->bodyRegion = $bodyRegion;

        return $this;
    }

    /**
     * Get bodyRegion
     *
     * @return string
     */
    public function getBodyRegion()
    {
        return $this->bodyRegion;
    }

    /**
     * Set modalityType
     *
     * @param string $modalityType
     *
     * @return Exam
     */
    public function setModalityType($modalityType)
    {
        $this->modalityType = $modalityType;

        return $this;
    }

    /**
     * Get modalityType
     *
     * @return string
     */
    public function getModalityType()
    {
        return $this->modalityType;
    }

    /**
     * Set acquisitionType
     *
     * @param string $acquisitionType
     *
     * @return Exam
     */
    public function setAcquisitionType($acquisitionType)
    {
        $this->acquisitionType = $acquisitionType;

        return $this;
    }

    /**
     * Get acquisitionType
     *
     * @return string
     */
    public function getAcquisitionType()
    {
        return $this->acquisitionType;
    }

    /**
     * Set pitchFactor
     *
     * @param float $pitchFactor
     *
     * @return Exam
     */
    public function setPitchFactor($pitchFactor)
    {
        $this->pitchFactor = $pitchFactor;

        return $this;
    }

    /**
     * Get pitchFactor
     *
     * @return float
     */
    public function getPitchFactor()
    {
        return $this->pitchFactor;
    }

    /**
     * Set collimation
     *
     * @param float $collimation
     *
     * @return Exam
     */
    public function setCollimation($collimation)
    {
        $this->collimation = $collimation;

        return $this;
    }

    /**
     * Get collimation
     *
     * @return float
     */
    public function getCollimation()
    {
        return $this->collimation;
    }

    /**
     * Set idModality
     *
     * @param \AppBundle\Entity\Modality $idModality
     *
     * @return Exam
     */
    public function setIdModality(\AppBundle\Entity\Modality $idModality = null)
    {
        $this->idModality = $idModality;

        return $this;
    }

    /**
     * Get idModality
     *
     * @return \AppBundle\Entity\Modality
     */
    public function getIdModality()
    {
        return $this->idModality;
    }
}

