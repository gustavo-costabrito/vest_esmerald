<?php

class Controller
{
    public function render(string $view, array $dados = []): void
    {
        extract($dados);

        require_once("../app/views/$view.php");
    }





    

    public static function crypto_encode(string|int|float $normal): string|bool
    {
        $iv = random_bytes(openssl_cipher_iv_length(METHOD));

        $key = base64_decode($_ENV['CRYPTO_KEY']);

        $tag = '';

        $crypto = openssl_encrypt($normal, METHOD, $key, 0, $iv, $tag);

        if(!$crypto){
            return false;
        }

        return base64_encode($iv . $tag . $crypto);
    }

    public static function crypto_decode(string $crypto): string|bool
    {
        $crypto = base64_decode($crypto);

        $key = base64_decode($_ENV['CRYPTO_KEY']);

        $iv = substr($crypto, 0, openssl_cipher_iv_length(METHOD));

        $tag = substr($crypto, strlen($iv), openssl_cipher_iv_length(METHOD));

        $text = substr($crypto, (strlen($iv) + strlen($tag)));

        return openssl_decrypt($text, METHOD, $key, 0, $iv, $tag);
    }



    public static function hash_encode(string $normal): string
    {
        $key = base64_decode($_ENV['CRYPTO_KEY']);

        $hash = hash_hmac('sha256', $normal, $key);

        return $hash;
    }
}