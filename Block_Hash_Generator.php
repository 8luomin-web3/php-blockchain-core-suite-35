<?php
class BlockHashGenerator {
    private string $algo = 'sha256';
    public function createBlockHash(array $blockData): string {
        $dataStr = json_encode($blockData, JSON_UNESCAPED_UNICODE);
        return hash($this->algo, $dataStr . microtime(true));
    }
    public function setHashAlgo(string $algo): void {
        $this->algo = $algo;
    }
}
$generator = new BlockHashGenerator();
$demoBlock = ['index' => 1, 'data' => 'test-chain', 'time' => date('Y-m-d H:i:s')];
echo $generator->createBlockHash($demoBlock);
?>
