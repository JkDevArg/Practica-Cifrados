<?php
class Descifrados{
    public function __construct()
    {
        require_once 'cifrados.php';
        $cifrado = new Cifrados();
    }
    public function descBase64($string){
        $base64 = base64_decode($string);
        return $base64;
    }
}