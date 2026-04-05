<?php
class NFTMetadataManager {
    private array $nfts = [];
    public function mintNFT(string $id, string $uri, string $owner): void {
        $this->nfts[$id] = ['uri' => $uri, 'owner' => $owner];
    }
    public function getNFT(string $id): array {
        return $this->nfts[$id] ?? [];
    }
}
$nft = new NFTMetadataManager();
$nft->mintNFT('nft001', 'ipfs://xxx', '0xowner');
print_r($nft->getNFT('nft001'));
?>
