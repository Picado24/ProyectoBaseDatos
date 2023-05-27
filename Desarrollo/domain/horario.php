<?php 

class Horario{

	private $id;
	private $horaInicio;
	private $horaFinal;
	private $medicoid;
	private $horariodiaid;



	/**
	 * Get the value of id
	 */ 
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Set the value of id
	 *
	 * @return  self
	 */ 
	public function setId($id)
	{
		$this->id = $id;

		return $this;
	}

	/**
	 * Get the value of horaInicio
	 */ 
	public function getHoraInicio()
	{
		return $this->horaInicio;
	}

	/**
	 * Set the value of horaInicio
	 *
	 * @return  self
	 */ 
	public function setHoraInicio($horaInicio)
	{
		$this->horaInicio = $horaInicio;

		return $this;
	}

	/**
	 * Get the value of horaFinal
	 */ 
	public function getHoraFinal()
	{
		return $this->horaFinal;
	}

	/**
	 * Set the value of horaFinal
	 *
	 * @return  self
	 */ 
	public function setHoraFinal($horaFinal)
	{
		$this->horaFinal = $horaFinal;

		return $this;
	}

	/**
	 * Get the value of medicoid
	 */ 
	public function getMedicoid()
	{
		return $this->medicoid;
	}

	/**
	 * Set the value of medicoid
	 *
	 * @return  self
	 */ 
	public function setMedicoid($medicoid)
	{
		$this->medicoid = $medicoid;

		return $this;
	}

	/**
	 * Get the value of horariodiaid
	 */ 
	public function getHorariodiaid()
	{
		return $this->horariodiaid;
	}

	/**
	 * Set the value of horariodiaid
	 *
	 * @return  self
	 */ 
	public function setHorariodiaid($horariodiaid)
	{
		$this->horariodiaid = $horariodiaid;

		return $this;
	}
}


?>