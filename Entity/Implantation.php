<?php

namespace Live\Entity;

use Live\Traits\EntityTrait;

class Implantation {

    use EntityTrait;

    private string $address;
    private string $country;

    public function __construct(string $address, string $country) {
        $this->id = 10;
        $this->name = 'mon name';
        $this->address = $address;
        $this->country = $country;
    }

    /**
     * Set the implantation address
     * @param string $address
     */
    public function setAddress(string $address): void {
        $this->address = $address;
    }

    /**
     * Return the implantation address
     * @return string
     */
    public function getAddress(): string {
        return $this->address;
    }

    /**
     * Return the implantation country
     * @return string
     */
    public function getCountry(): string {
        return $this->country;
    }

    /**
     * Set the implantation country
     * @param string $country
     */
    public function setCountry(string $country): void {
        $this->country = $country;
    }
}