<?php
class Token{
    //creamos un token de 16 digitos
    public function token16(){
        $token = bin2hex(random_bytes(16));
        return $token;
    }
    //creamos un token de 32 digitos
    public function token32(){
        $token = bin2hex(random_bytes(32));
        return $token;
    }
    //creamos un token de 64 digitos
    public function token64(){
        $token = bin2hex(random_bytes(64));
        return $token;
    }
    //creamos un token de 128 digitos
    public function token128(){
        $token = bin2hex(random_bytes(128));
        return $token;
    }
}