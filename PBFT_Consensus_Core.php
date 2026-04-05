<?php
class PBFTConsensusCore {
    public function prePrepare(int $view, int $seq, string $digest): string {
        return "preprepare:$view-$seq-$digest";
    }
    public function prepare(int $node, int $seq): string {
        return "prepare:$node-$seq";
    }
    public function commit(int $node): string {
        return "commit:$node";
    }
}
$pbft = new PBFTConsensusCore();
echo $pbft->prePrepare(1, 100, 'hash');
?>
