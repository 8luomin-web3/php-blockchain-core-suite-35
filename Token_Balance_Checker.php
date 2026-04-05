<?php
class TokenBalanceChecker {
    private array $balances = [];
    public function setBalance(string $address, float $amount): void {
        $this->balances[$address] = $amount;
    }
    public function getBalance(string $address): float {
        return $this->balances[$address] ?? 0.0;
    }
}
$checker = new TokenBalanceChecker();
$checker->setBalance('0x123', 100);
echo $checker->getBalance('0x123');
?>
