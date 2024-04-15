<?php

/**
 * MesDates File Doc Comment
 * 
 * PHP version 8
 * 
 * @category MesDates
 * @package  MesDates
 * @author   Author <tom.vesleau1@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/ 
 */

namespace UPJV;



/**
 * MesDates Class Doc Comment
 * 
 * Class MesDates
 * 
 * @category MesDates
 * @package  MesDates
 * @author   Author <tom.vesleau1@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 * @return   void 
 */

class MesDates
{

    /**
     * Encoder la date
     * 
     * @return bool
     */
    public function demain()
    {
        $demain = new \DateTime();
        $demain->add(new \DateInterval('P1D'));
        $reponse = ['demain' => $demain->format("d-m-Y")];
        return json_encode($reponse);
    }
}