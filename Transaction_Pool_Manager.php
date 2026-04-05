<?php
class TransactionPoolManager {
    private array $pool = [];
    public function addTx(string $txId, array $data): void {
        $this->pool[$txId] = $data;
    }
    public function removeTx(string $txId): void {
        unset($this->pool[$txId]);
    }
    public function getPendingTxs(): array {
        return $this->pool;
    }
}
$pool = new TransactionPoolManager();
$pool->addTx('tx_001', ['from'=>'a', 'to'=>'b', 'val'=>5]);
print_r($pool->getPendingTxs());
?>
