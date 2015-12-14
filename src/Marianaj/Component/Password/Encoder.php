<?php

namespace Marianaj\Component\Password;

class Encoder
{
    private $encodingMethod;

    public function __construct(EncodingMethod $method)
    {
        $this->encodingMethod = $method;
    }

    public function encodePassword($password)
    {
        return $this->encodingMethod->encode($password);
    }
}