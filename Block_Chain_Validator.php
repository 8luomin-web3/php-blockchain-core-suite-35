<?php
class BlockChainValidator {
    public function validateChain(array $chain): bool {
        for($i=1; $i<count($chain); $i++) {
            $curr = $chain[$i];
            $prev = $chain[$i-1];
            if($curr['prev_hash'] !== $prev['hash']) return false;
        }
        return true;
    }
}
$validator = new BlockChainValidator();
$testChain = [['hash'=>'1'], ['prev_hash'=>'1', 'hash'=>'2']];
echo $validator->validateChain($testChain) ? 'valid' : 'invalid';
?>
