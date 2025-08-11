<?php

class Segurity
{
    public static function criptografia(string|int|float $text): string
    {
        $nonce = random_bytes(SODIUM_CRYPTO_BOX_NONCEBYTES);

        $key = base64_decode($_ENV['CRYPTO_KEY']);

        $crypto = sodium_crypto_secretbox($text, $nonce, $key);

        return base64_encode($nonce . $crypto);
    }

    public static function descriptografia(string $crypto): string|int|float
    {
        $bytes = base64_decode($crypto);

        $nonce = substr($bytes, 0, SODIUM_CRYPTO_BOX_NONCEBYTES);

        $text = substr($bytes, SODIUM_CRYPTO_BOX_NONCEBYTES);

        $key = base64_decode($_ENV['CRYPTO_KEY']);

        return sodium_crypto_secretbox_open($text, $nonce, $key);
    }
}