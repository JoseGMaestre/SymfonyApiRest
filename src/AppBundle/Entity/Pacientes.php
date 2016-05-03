<?php

namespace AppBundle\Entity;

/**
 * Pacientes
 */
class Pacientes
{
    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apellido;

    /**
     * @var string
     */
    private $teleHab;

    /**
     * @var string
     */
    private $teleOtro;

    /**
     * @var string
     */
    private $teleOfi;

    /**
     * @var \DateTime
     */
    private $fecNac;

    /**
     * @var string
     */
    private $sexo;

    /**
     * @var string
     */
    private $referencia;

    /**
     * @var string
     */
    private $obs1;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $pwd;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $usuario;

    /**
     * @var string
     */
    private $cedula;


    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Pacientes
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Pacientes
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set teleHab
     *
     * @param string $teleHab
     *
     * @return Pacientes
     */
    public function setTeleHab($teleHab)
    {
        $this->teleHab = $teleHab;

        return $this;
    }

    /**
     * Get teleHab
     *
     * @return string
     */
    public function getTeleHab()
    {
        return $this->teleHab;
    }

    /**
     * Set teleOtro
     *
     * @param string $teleOtro
     *
     * @return Pacientes
     */
    public function setTeleOtro($teleOtro)
    {
        $this->teleOtro = $teleOtro;

        return $this;
    }

    /**
     * Get teleOtro
     *
     * @return string
     */
    public function getTeleOtro()
    {
        return $this->teleOtro;
    }

    /**
     * Set teleOfi
     *
     * @param string $teleOfi
     *
     * @return Pacientes
     */
    public function setTeleOfi($teleOfi)
    {
        $this->teleOfi = $teleOfi;

        return $this;
    }

    /**
     * Get teleOfi
     *
     * @return string
     */
    public function getTeleOfi()
    {
        return $this->teleOfi;
    }

    /**
     * Set fecNac
     *
     * @param \DateTime $fecNac
     *
     * @return Pacientes
     */
    public function setFecNac($fecNac)
    {
        $this->fecNac = $fecNac;

        return $this;
    }

    /**
     * Get fecNac
     *
     * @return \DateTime
     */
    public function getFecNac()
    {
        return $this->fecNac;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Pacientes
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
     * Set referencia
     *
     * @param string $referencia
     *
     * @return Pacientes
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set obs1
     *
     * @param string $obs1
     *
     * @return Pacientes
     */
    public function setObs1($obs1)
    {
        $this->obs1 = $obs1;

        return $this;
    }

    /**
     * Get obs1
     *
     * @return string
     */
    public function getObs1()
    {
        return $this->obs1;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Pacientes
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     *
     * @return Pacientes
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get pwd
     *
     * @return string
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Pacientes
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return Pacientes
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Get cedula
     *
     * @return string
     */
    public function getCedula()
    {
        return $this->cedula;
    }
}

