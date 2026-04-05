<?php
class MultiSigWallet {
    private array $signers = [];
    private int $required = 2;
    public function addSigner(string $addr): void {
        $this->signers[] = $addr;
    }
    public function approveTx(array $approvals): bool {
        return count(array_intersect($approvals, $this->signers)) >= $this->required;
    }
}
$wallet = new MultiSigWallet();
$wallet->addSigner('0x1');
echo $wallet->approveTx(['0x1']) ? 'ok' : 'no';
?>
