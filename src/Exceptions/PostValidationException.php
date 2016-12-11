<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 14.09.16
 * Time: 14:57
 */

namespace RonasIT\Support\Exceptions;

use Exception;

class PostValidationException extends Exception
{
    protected $data = [];

    public function setData($data) {
        $this->data = $data;

        return $this;
    }

    public function getData() {
        return $this->data;
    }
}