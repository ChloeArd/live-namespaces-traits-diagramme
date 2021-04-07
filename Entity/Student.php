<?php

namespace Live\Entity;

use Live\Traits\EntityTrait;

class Student {

    use EntityTrait;

    private string $firstName;

    /**
     * Student constructor.
     * @param $firstname
     */
    public function __construct($firstName) {
        $this->firstName = $firstName;
    }

    /**
     * Simply says hello.
     */
    public  function hello() {
        echo "Hello From entity student file<br>";
    }

    /**
     * Return the first name
     * @return string
     */
    public function getFirstname(): string {
        return $this->firstName;
    }

    /**
     * Set the first name.
     * @param string $firstName
     */
    public function setFirstName(string $firstName){
        $this->firstName = $firstName;
    }
}