<?php

require_once 'cifrados.php';
require_once 'token.php';

$cifrado = new Cifrados();
$token = new Token();

// guardamos en una variable un string
$string = 'JkDevArg';
$key = '1234567890123456';

//ciframos en sha256
$sha256 = $cifrado->sha256($string);
echo 'sha256: ' . $sha256 . '<br>';
//ciframos en sha512
$sha512 = $cifrado->sha512($string);
echo 'sha512: ' . $sha512 . '<br>';
//ciframos en md5
$md5 = $cifrado->md5($string);
echo 'md5: ' . $md5 . '<br>';
//ciframos en base64
$base64 = $cifrado->base64($string);
echo 'base64: ' . $base64 . '<br>';
//ciframos en bcrypt
$bcrypt = $cifrado->bcrypt($string);
echo 'bcrypt: ' . $bcrypt . '<br>';
//ciframos en aes-256-cbc
$aes256 = $cifrado->aes256($string, $key);
echo 'AES-256-CBC: ' . $aes256 . '<br>';
//cifrado generado en aes-256-cbc
$aes256_imp = $cifrado->aes256_imp($string, $key);
echo 'AES-256-CBC Generado: ' . $aes256_imp . '<br>';
echo '<hr>';
//generamos un token de 16 digitos y lo ciframos en sha256
$token16 = $token->token16();
$sha256_token16 = $cifrado->sha256($token16);
echo 'token16: ' . $token16 . '<br>';
echo 'sha256_token16: ' . $sha256_token16 . '<br>';
//generamos un token de 32 digitos y lo ciframos en sha256
$token32 = $token->token32();
$sha256_token32 = $cifrado->sha256($token32);
echo 'token32: ' . $token32 . '<br>';
echo 'sha256_token32: ' . $sha256_token32 . '<br>';
//generamos un token de 64 digitos y lo ciframos en sha256
$token64 = $token->token64();
$sha256_token64 = $cifrado->sha256($token64);
echo 'token64: ' . $token64 . '<br>';
echo 'sha256_token64: ' . $sha256_token64 . '<br>';
//generamos un token de 128 digitos y lo ciframos en sha256
$token128 = $token->token128();
$sha256_token128 = $cifrado->sha256($token128);
echo 'token128: ' . $token128 . '<br>';
echo 'sha256_token128: ' . $sha256_token128 . '<br>';