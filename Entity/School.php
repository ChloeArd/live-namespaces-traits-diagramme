<?php

namespace Live\Entity;

use Live\Traits\EntityTrait;

class School {

    use EntityTrait;

    private Implantation $implantation;
    private string $director;

    /**
     * School constructor.
     * @param Implantation $implantation
     * @param string $director
     */
    public function __construct(Implantation $implantation, string $director) {
        $this->implantation = $implantation;
        $this->director = $director;
    }

    /**
     * Set the implantation
     * @param Implantation $implantation
     */
    public function setImplantation(Implantation $implantation): void {
        $this->implantation = $implantation;
    }

    /**
     * Return the school implantation
     * @return Implantation
     */
    public function getImplantation(): Implantation {
        return $this->implantation;
    }

    /**
     * Return the school director
     * @return string
     */
    public function getDirector(): string {
        return $this->director;
    }

    /**
     * Set the school director
     * @param string $dirlo
     */
    public function setDirector(string $dirlo) {
        $this->director = $dirlo;
    }
}
