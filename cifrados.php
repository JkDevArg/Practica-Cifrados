<?php

class Cifrados{
    //cifrado en sha256
    public function sha256($string){
        $sha256 = hash('sha256', $string);
        return $sha256;
    }
    //cifrado en sha512
    public function sha512($string){
        $sha512 = hash('sha512', $string);
        return $sha512;
    }
    //cifrado en md5
    public function md5($string){
        $md5 = hash('md5', $string);
        return $md5;
    }
    //cifrado en base64
    public function base64($string){
        $base64 = base64_encode($string);
        return $base64;
    }
    //cifrado en bcrypt
    public function bcrypt($string){
        $bcrypt = password_hash($string, PASSWORD_BCRYPT);
        return $bcrypt;
    }
    //cifrado en aes-256-cbc
    public function aes256($string, $key){
        $iv = random_bytes(16);
        $encrypted = openssl_encrypt($string, 'AES-256-CBC', $key, 0, $iv);
        $encrypted = base64_encode($encrypted);
        return $encrypted;
    }
    //cifrado generado en aes-256-cbc
    public function aes256_imp($string, $key){
        $iv = random_bytes(16);
        $encrypted = openssl_encrypt($string, 'AES-256-CBC', $key, OPENSSL_RAW_DATA, $iv);
        $encrypted = base64_encode($encrypted);
        return $encrypted;
    }
}