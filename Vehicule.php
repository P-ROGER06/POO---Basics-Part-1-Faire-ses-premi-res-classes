<?php

class Vehicule
{
    private string $color;

    private int $currentSpeed;

    private int $nbSeats;

    private int $nbWheels;

    private string $fuelType;

    private int $energyLevel;


    public function __construct(string $color, int $nbSeats, string $fuelType)

    {

        $this->color = $color;

        $this->nbSeats = $nbSeats;

        $this->fuelType = $fuelType;
    }


    public function forward(): string

    {

        $this->currentSpeed;

        return "Go !";
    }


    public function brake(): string

    {

        $sentence = "";

        while ($this->currentSpeed > 0) {

            $this->currentSpeed--;

            $sentence .= "Brake !!!";
        }


        $sentence .= "I'm stopped !";

        return $sentence;
    }


    public function getCurrentSpeed(): int

    {

        return $this->currentSpeed;
    }


    public function setCurrentSpeed(int $currentSpeed): void

    {

        if ($currentSpeed >= 0) {

            $this->currentSpeed = $currentSpeed;
        }
    }


    public function getColor(): string

    {

        return $this->color;
    }


    public function setColor(string $color): void

    {

        $this->color = $color;
    }


    public function getNbSeats(): int

    {

        return $this->nbSeats;
    }


    public function setNbSeats(int $nbSeats): void

    {

        $this->nbSeats = $nbSeats;
    }


    public function getNbWheels(): int

    {

        return $this->nbWheels;
    }


    public function setNbWheels(int $nbWheels): void

    {

        $this->nbWheels = $nbWheels;
    }


    public function getFuelType(): string

    {

        return $this->fuelType;
    }


    public function setFuelType(string $fuelType): void

    {

        $this->fuelType = $fuelType;
    }
    
    public function getEnergyLevel(): int

    {

        return $this->energyLevel;
    }


    public function setEnergyLevel(int $energyLevel): void

    {

        $this->energyLevel = $energyLevel;
    }


}
