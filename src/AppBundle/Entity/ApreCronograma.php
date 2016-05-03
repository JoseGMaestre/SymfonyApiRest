<?php

namespace AppBundle\Entity;

/**
 * ApreCronograma
 */
class ApreCronograma
{
    /**
     * @var string
     */
    private $croAno;

    /**
     * @var string
     */
    private $croLapso;

    /**
     * @var string
     */
    private $croSeccion;

    /**
     * @var integer
     */
    private $croIdmateria;

    /**
     * @var integer
     */
    private $croIdtemaAEvaluar;

    /**
     * @var integer
     */
    private $croIdsubtema;

    /**
     * @var integer
     */
    private $croIdevaluacion;

    /**
     * @var string
     */
    private $croStatus;

    /**
     * @var \DateTime
     */
    private $croFechaIni;

    /**
     * @var \DateTime
     */
    private $croFechaFin;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var string
     */
    private $croTema;

    /**
     * @var integer
     */
    private $croId;


    /**
     * Set croAno
     *
     * @param string $croAno
     *
     * @return ApreCronograma
     */
    public function setCroAno($croAno)
    {
        $this->croAno = $croAno;

        return $this;
    }

    /**
     * Get croAno
     *
     * @return string
     */
    public function getCroAno()
    {
        return $this->croAno;
    }

    /**
     * Set croLapso
     *
     * @param string $croLapso
     *
     * @return ApreCronograma
     */
    public function setCroLapso($croLapso)
    {
        $this->croLapso = $croLapso;

        return $this;
    }

    /**
     * Get croLapso
     *
     * @return string
     */
    public function getCroLapso()
    {
        return $this->croLapso;
    }

    /**
     * Set croSeccion
     *
     * @param string $croSeccion
     *
     * @return ApreCronograma
     */
    public function setCroSeccion($croSeccion)
    {
        $this->croSeccion = $croSeccion;

        return $this;
    }

    /**
     * Get croSeccion
     *
     * @return string
     */
    public function getCroSeccion()
    {
        return $this->croSeccion;
    }

    /**
     * Set croIdmateria
     *
     * @param integer $croIdmateria
     *
     * @return ApreCronograma
     */
    public function setCroIdmateria($croIdmateria)
    {
        $this->croIdmateria = $croIdmateria;

        return $this;
    }

    /**
     * Get croIdmateria
     *
     * @return integer
     */
    public function getCroIdmateria()
    {
        return $this->croIdmateria;
    }

    /**
     * Set croIdtemaAEvaluar
     *
     * @param integer $croIdtemaAEvaluar
     *
     * @return ApreCronograma
     */
    public function setCroIdtemaAEvaluar($croIdtemaAEvaluar)
    {
        $this->croIdtemaAEvaluar = $croIdtemaAEvaluar;

        return $this;
    }

    /**
     * Get croIdtemaAEvaluar
     *
     * @return integer
     */
    public function getCroIdtemaAEvaluar()
    {
        return $this->croIdtemaAEvaluar;
    }

    /**
     * Set croIdsubtema
     *
     * @param integer $croIdsubtema
     *
     * @return ApreCronograma
     */
    public function setCroIdsubtema($croIdsubtema)
    {
        $this->croIdsubtema = $croIdsubtema;

        return $this;
    }

    /**
     * Get croIdsubtema
     *
     * @return integer
     */
    public function getCroIdsubtema()
    {
        return $this->croIdsubtema;
    }

    /**
     * Set croIdevaluacion
     *
     * @param integer $croIdevaluacion
     *
     * @return ApreCronograma
     */
    public function setCroIdevaluacion($croIdevaluacion)
    {
        $this->croIdevaluacion = $croIdevaluacion;

        return $this;
    }

    /**
     * Get croIdevaluacion
     *
     * @return integer
     */
    public function getCroIdevaluacion()
    {
        return $this->croIdevaluacion;
    }

    /**
     * Set croStatus
     *
     * @param string $croStatus
     *
     * @return ApreCronograma
     */
    public function setCroStatus($croStatus)
    {
        $this->croStatus = $croStatus;

        return $this;
    }

    /**
     * Get croStatus
     *
     * @return string
     */
    public function getCroStatus()
    {
        return $this->croStatus;
    }

    /**
     * Set croFechaIni
     *
     * @param \DateTime $croFechaIni
     *
     * @return ApreCronograma
     */
    public function setCroFechaIni($croFechaIni)
    {
        $this->croFechaIni = $croFechaIni;

        return $this;
    }

    /**
     * Get croFechaIni
     *
     * @return \DateTime
     */
    public function getCroFechaIni()
    {
        return $this->croFechaIni;
    }

    /**
     * Set croFechaFin
     *
     * @param \DateTime $croFechaFin
     *
     * @return ApreCronograma
     */
    public function setCroFechaFin($croFechaFin)
    {
        $this->croFechaFin = $croFechaFin;

        return $this;
    }

    /**
     * Get croFechaFin
     *
     * @return \DateTime
     */
    public function getCroFechaFin()
    {
        return $this->croFechaFin;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return ApreCronograma
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set croTema
     *
     * @param string $croTema
     *
     * @return ApreCronograma
     */
    public function setCroTema($croTema)
    {
        $this->croTema = $croTema;

        return $this;
    }

    /**
     * Get croTema
     *
     * @return string
     */
    public function getCroTema()
    {
        return $this->croTema;
    }

    /**
     * Get croId
     *
     * @return integer
     */
    public function getCroId()
    {
        return $this->croId;
    }
}

