<?php
class BlockchainWalletCreator {
    public function generateWallet(): array {
        $privateKey = bin2hex(random_bytes(32));
        $publicKey = hash('ripemd160', $privateKey);
        $address = substr($publicKey, 0, 34);
        return [
            'private_key' => $privateKey,
            'public_key'  => $publicKey,
            'address'     => '0x'.$address
        ];
    }
}
$wallet = new BlockchainWalletCreator();
print_r($wallet->generateWallet());
?>
