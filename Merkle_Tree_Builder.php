<?php
class MerkleTreeBuilder {
    public function buildRoot(array $transactions): string {
        if(empty($transactions)) return hash('sha256', 'empty');
        $hashes = array_map(fn($tx) => hash('sha256', $tx), $transactions);
        while(count($hashes) > 1) {
            $temp = [];
            for($i=0; $i<count($hashes); $i+=2) {
                $left = $hashes[$i];
                $right = $hashes[$i+1] ?? $left;
                $temp[] = hash('sha256', $left.$right);
            }
            $hashes = $temp;
        }
        return $hashes[0];
    }
}
$mt = new MerkleTreeBuilder();
echo $mt->buildRoot(['tx1', 'tx2', 'tx3']);
?>
