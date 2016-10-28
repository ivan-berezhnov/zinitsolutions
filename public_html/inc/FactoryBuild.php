<?php


/**
 * Class FactoryBuild
 */
class FactoryBuild {
    /**
     * @param \Robot $robotPrototype
     * @param $quantity
     */

    public $make;

    public function make( Robot $robotPrototype, $quantity ) {
        
    }

    /**
     * @param \Robot $robot
     *
     * @return mixed
     */
    public function getPower( Robot $robot ) {

        return $robot->getPowerRobot();
    }

    /**
     * @param \Robot $robotPrototype
     * @param $power
     */
    public function turnOff( Robot $robotPrototype, $power ) {

    }
}
