<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Usuarios;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\JsonResponse;
use DateTime;
use AppBundle\Entity\Modality;
use AppBundle\Entity\Exam;

class RESTController extends Controller {

    public $em;
    public $error = null;

    public function __construct() {
        $this->logControle = new LogController();
    }

    /**
     * @Route("/salvarDados")
     */
    public function salvarDadosAction(Request $request) {
        $this->em = $this->getDoctrine()->getManager();
        if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
            $data = json_decode($request->getContent(), true);
            $request->request->replace(is_array($data) ? $data : array());
            $this->logControle->log("JSON Request : " . print_r($data, true));
//            try {
            $newExam = new Exam();
            $newExam->setPatientName($data['patient_name']);
            $newExam->setPatientSize($data['patient_size']);
            $newExam->setPatientSex($data['patient_sex']);
            $newExam->setDlp($data['dlp']);
            $newExam->setCtiiVal($data['ctii_val']);
            $newExam->setPatientWeight($data['patient_weight']);
            $formatBday = new \DateTime($data['patient_bday']);
            $newExam->setPatientBday($formatBday);
            $newExam->setInstitutionName($data['institution_name']);
            $newExam->setStationName($data['station_name']);
            $newExam->setStationaetitle($data['station_ae_title']);
            $newExam->setStudyInstanceUid($data['study_instance_uid']);
            $newExam->setStudyid($data['study_id']);
            $newExam->setAccessionNumber($data['accession_number']);
            $formatStudyDateTime = new \DateTime($data['study_datetime']);

            $newExam->setStudyDatetime($formatStudyDateTime);
            $newExam->setProtocolName($data['protocol_name']);
            $newExam->setOperatorName($data['operator_name']);
            $newExam->setKvp($data['kvp']);
            $newExam->setSliceThickness($data['slice_thickness']);
            $newExam->setTubeAngle($data['tube_angle']);
            $newExam->setExposureCurrent($data['exposure_current']);
            $newExam->setExposureTime($data['exposure_time']);
            $newExam->setExposure($data['exposure']);
            $newExam->setDlp($data['dlp']);
            $newExam->setCtiiVal($data['ctii_val']);
            $newExam->setEftDose($data['eft_dose']);
            $newExam->setSsde($data['ssde']);
            $formatCalibrationDate = new \DateTime($data['calibration_date']);
            $newExam->setCalibrationDate($formatCalibrationDate);
            $newExam->setManufacturing($data['manufacturing']);
            $newExam->setNumberOfImages($data['number_of_images']);
            $newExam->setNumberOfSeries($data['number_of_series']);
            $newExam->setBodyRegion($data['body_region']);
            $newExam->setModalityType($data['modality_type']);
            $newExam->setAcquisitionType($data['acquisition_type']);
            $newExam->setPitchfactor($data['pitch_factor']);
            $newExam->setCollimation($data['collimation']);
            $this->logControle->log("teste");
           
                $novo = $this->getDoctrine()
                        ->getRepository('AppBundle:Modality')
                        ->findOneBy(array('stationAeTitle' => "'" . $data['station_ae_title'] . "'"));
           
            $this->logControle->log(print_r($novo, true));
            $newExam->setIdModality($novo);
            $this->em->persist($newExam);
            $this->em->flush();
            $retornoRequest = array(
                "sucesso" => true
            );
//            } catch (Exception $e) {
//                   $this->logControle->log("erro".$e);
//                $retornoRequest = array(
//                    "sucesso" => false
//                );
//            }
        } else {
            $retornoRequest = array(
                "sucesso" => false
            );
        }
        $this->logControle->log("Response : " . print_r($retornoRequest, true));
        return new JsonResponse($retornoRequest);
    }

}
