<?php
class POWConsensusEngine {
    private int $difficulty = 4;
    public function mineBlock(string $prevHash): array {
        $nonce = 0;
        $target = str_repeat('0', $this->difficulty);
        while(true) {
            $hash = hash('sha256', $prevHash . $nonce . microtime());
            if(str_starts_with($hash, $target)) {
                return ['nonce' => $nonce, 'hash' => $hash];
            }
            $nonce++;
        }
    }
}
$pow = new POWConsensusEngine();
print_r($pow->mineBlock('genesis_block_hash'));
?>
