<?php
class BlockRewardDistributor {
    private float $reward = 10;
    public function distribute(string $miner, array &$balances): void {
        $balances[$miner] = ($balances[$miner] ?? 0) + $this->reward;
    }
}
$distribute = new BlockRewardDistributor();
$b = [];
$distribute->distribute('0xminer', $b);
print_r($b);
?>
