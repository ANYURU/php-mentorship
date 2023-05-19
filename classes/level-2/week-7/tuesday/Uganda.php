<?php
/**
 * Summary of Country
 */
class Country {
    protected $name;
    protected $population;
    public function __construct( string $name, string $population )  {
        $this->name = $name;
        $this->population = $population;
    }

    /**
     * Summary of get_name
     * @return string
     */
    public function get_name () : string {
        return $this->name;
    }

    /**
     * Summary of get_population
     * @return string
     */
    public function get_population (): string {
        return $this->population;
    }
}

class Uganda extends Country {

    public function __construct(string $name, string $population ) {
        parent::__construct( $name, $population );
    }
    const REGION = "East Africa";
    const PHYSICAL_SIZE = '40sqkm';
    const CONTINENT = 'Africa';


}