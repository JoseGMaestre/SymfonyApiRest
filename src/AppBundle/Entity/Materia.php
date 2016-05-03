<?php

namespace AppBundle\Entity;

/**
 * Materia
 */
class Materia {
	/**
	 * @var string
	 */
	private $materia;

	/**
	 * @var string
	 */
	private $cal;

	/**
	 * @var integer
	 */
	private $id;

	/**
	 * Set materia
	 *
	 * @param string $materia
	 *
	 * @return Materia
	 */
	public function setMateria($materia) {
		$this->materia = $materia;

		return $this;
	}

	/**
	 * Get materia
	 *
	 * @return string
	 */
	public function getMateria() {
		return $this->materia;
	}

	/**
	 * Set cal
	 *
	 * @param string $cal
	 *
	 * @return Materia
	 */
	public function setCal($cal) {
		$this->cal = $cal;

		return $this;
	}

	/**
	 * Get cal
	 *
	 * @return string
	 */
	public function getCal() {
		return $this->cal;
	}

	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}
}
