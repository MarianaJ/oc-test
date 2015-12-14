<?php

namespace Marianaj\Component\Password\Method;


use Marianaj\Component\Password\EncodingMethod;

class Sha1Encoding implements EncodingMethod
{

public function encode($plainText){
$sha1 = sha1($plainText);

return $sha1;

}


}


//public function encode($plainText)
  // {
    //    return sha1($plainText);
    //}



//$password = "easypassword";  // простейший пароль, вводимый //пользователем и, вероятно,  имеющийся в радужной таблице 
//echo sha1($password); 

//define(salt_length, 9);
//function generatehash($plaintext, $salt = null)
//{
//if ($salt === null)
//{
//$salt = substr(md5(uniqid(rand(), true)), 0, salt_length);
//}
//else
//{
//$salt = substr($salt, 0, salt_length);
//}
//return $salt . sha1($salt . $plaintext);
//}





//echo 'php & information security';
//printf("original string: %sn", $string);
//printf("md5 hash: %sn", md5($string));
//T_ECHO("sha-1 hash: %sn", sha1($string));




//public function encode($plainText){
//$plainText = php & information security;
//printf(original string: %sn, $plainText);
//printf(md5 hash: %sn, md5($string));
//printf("sha-1 hash:" sha1($plainText));
//return;
//}

//public function encode($plainText){
//$sha1 = sha1($plainText);

//return $sha1;

//}


 //public function encode($plainText)
  //  {
    //    return sha1($plainText);
    //}
