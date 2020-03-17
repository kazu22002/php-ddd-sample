<?php
/**
 * Created by PhpStorm.
 * User: kazu22002
 * Date: 2019-11-17
 * Time: 10:02
 */

namespace App\Domain;


interface Domainable
{
    /**
     * @return mixed
     */
    public function toDomain();
}
