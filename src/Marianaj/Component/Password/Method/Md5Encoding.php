<?php

namespace Marianaj\Component\Password\Method;


use Marianaj\Component\Password\EncodingMethod;

class Md5Encoding implements EncodingMethod
{

    public function encode($plainText)
    {
        return md5($plainText);
    }
}