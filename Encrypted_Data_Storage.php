<?php
class EncryptedDataStorage {
    private string $key;
    public function __construct() {
        $this->key = substr(hash('sha256', 'blockchain'), 0, 16);
    }
    public function encrypt(string $data): string {
        return openssl_encrypt($data, 'AES-128-ECB', $this->key);
    }
    public function decrypt(string $data): string {
        return openssl_decrypt($data, 'AES-128-ECB', $this->key);
    }
}
$store = new EncryptedDataStorage();
echo $store->encrypt('chain data');
?>
