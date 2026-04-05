<?php
class TokenTransferHandler {
    public function transfer(array &$balances, string $from, string $to, float $val): bool {
        if(!isset($balances[$from]) || $balances[$from] < $val) return false;
        $balances[$from] -= $val;
        $balances[$to] += $val;
        return true;
    }
}
$handler = new TokenTransferHandler();
$b = ['a'=>10, 'b'=>0];
echo $handler->transfer($b, 'a','b',5) ? 'success' : 'fail';
?>
