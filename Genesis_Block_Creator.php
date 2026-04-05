<?php
class GenesisBlockCreator {
    public function createGenesisBlock(): array {
        return [
            'index' => 0,
            'timestamp' => time(),
            'prev_hash' => '0',
            'data' => 'genesis block - php blockchain',
            'hash' => hash('sha256', '0'.time().'genesis')
        ];
    }
}
$genesis = new GenesisBlockCreator();
print_r($genesis->createGenesisBlock());
?>
