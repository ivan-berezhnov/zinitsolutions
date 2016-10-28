<?php


/**
 * Class Robot
 */
class Robot {
    protected $power = 10;


    /**
     * Set power for Robot.
     *
     * @param $setPower
     */
    public function setPowerRobot( $setPower ) {
        $this->power = $setPower;
    }

    /**
     * Get power
     *
     * @return mixed
     */
    public function getPowerRobot() {
       return $this->power;
    }
}

/**
 * Class RobotOne
 */
class RobotOne extends Robot {
}

/**
 * Class RobotTwo
 */
class RobotTwo extends Robot {
}
