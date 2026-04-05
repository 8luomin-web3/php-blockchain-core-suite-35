<?php
class RSAKeyPairGenerator {
    public function generateKeyPair(): array {
        $config = ['private_key_bits' => 2048];
        $res = openssl_pkey_new($config);
        openssl_pkey_export($res, $private);
        $public = openssl_pkey_get_details($res)['key'];
        return ['private' => $private, 'public' => $public];
    }
}
$rsa = new RSAKeyPairGenerator();
print_r($rsa->generateKeyPair());
?>
