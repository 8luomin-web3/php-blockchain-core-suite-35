<?php
class IPFSLinkGenerator {
    public function generateCid(string $data): string {
        $hash = hash('sha256', $data);
        return 'Qm'.substr(base64_encode(hex2bin($hash)), 0, 46);
    }
    public function getIpfsUrl(string $cid): string {
        return "https://ipfs.io/ipfs/$cid";
    }
}
$ipfs = new IPFSLinkGenerator();
echo $ipfs->getIpfsUrl($ipfs->generateCid('metadata'));
?>
