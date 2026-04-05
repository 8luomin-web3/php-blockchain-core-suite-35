<?php
class PeerNodeConnector {
    private array $peers = [];
    public function addPeer(string $host, int $port): void {
        $this->peers[] = "$host:$port";
    }
    public function getPeers(): array {
        return $this->peers;
    }
    public function broadcast(string $msg): void {
        foreach($this->peers as $peer) echo "send to $peer: $msg\n";
    }
}
$peer = new PeerNodeConnector();
$peer->addPeer('127.0.0.1', 8080);
$peer->broadcast('new block');
?>
