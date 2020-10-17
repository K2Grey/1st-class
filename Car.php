<?php

// Car.php

class Car
{
    /**
     * @var integer
     */
    private $nbWheels;

    /**
     * @var integer
     */
    private $currentSpeed;

    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $nbSeats;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var integer
     */
    private $energyLevel;

    /**
     * Car constructor.
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     */
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    /**
     * @return string
     */
    public function forward(): string
    {
        $this->currentSpeed = 50;

        return "Go !";
    }

    /**
     * @return string
     */
    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed -= 5;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    /**
     * @return string
     */
    public function start(): string
    {
        $this->currentSpeed = 0;

        return $this->getColor() . ' car starts...';
    }

    /**
     * @return int
     */
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    /**
     * @return int
     */
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return int
     */
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    /**
     * @return string
     */
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * @return int
     */
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
}
