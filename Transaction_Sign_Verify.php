<?php
class TransactionSignVerify {
    public function signData(string $data, string $privateKey): string {
        openssl_sign($data, $signature, $privateKey, OPENSSL_ALGO_SHA256);
        return base64_encode($signature);
    }
    public function verifySign(string $data, string $sign, string $publicKey): bool {
        $signature = base64_decode($sign);
        return openssl_verify($data, $signature, $publicKey, OPENSSL_ALGO_SHA256) === 1;
    }
}
$tsv = new TransactionSignVerify();
echo $tsv->signData('transfer 10 token', 'demo_private_key');
?>
