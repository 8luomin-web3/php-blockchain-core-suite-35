<?php
class ChainSyncService {
    public function compareChain(array $local, array $remote): array {
        return count($remote) > count($local) ? $remote : $local;
    }
    public function syncBlock(array $local, array $block): array {
        $local[] = $block;
        return $local;
    }
}
$sync = new ChainSyncService();
$newChain = $sync->syncBlock([], ['index'=>1]);
print_r($newChain);
?>
