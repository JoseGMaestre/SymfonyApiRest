<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Materia;
use FOS\RestBundle\Controller\Annotations\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MateriasController extends Controller {

/**
 * @return array
 * @view
 *
 */
	public function getMateriasAction() {

		$materia = $this->getDoctrine()->getRepository('AppBundle:Materia')
			->findAll();
		return array('materia' => $materia);

	}

/**
 * @param Materia $materia
 * @return View|array
 * @view
 * @ParamConverter("materia",class="AppBundle:Materia")
 *
 */
	public function getMateriaAction(Materia $materia) {

		return array('materia' => $materia);
	}

}
