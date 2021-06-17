<?php

namespace Calendar\Controller;

use Calendar\Model\LeapYear;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class LeapYearController
 */
class LeapYearController
{
    /**
     * @param $year
     * @return string
     */
    public function index($year)
    {
        $leapYear = new LeapYear();
        if ($leapYear->isLeapYear($year)) {
            return 'Yep, this is a leap year!';
        }

        return 'Nope, this is not a leap year.';
    }
}

