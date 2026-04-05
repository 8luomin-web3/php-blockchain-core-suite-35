<?php
class NodeStatusMonitor {
    public function getNodeInfo(): array {
        return [
            'cpu' => sys_getloadavg()[0],
            'memory' => memory_get_usage(),
            'time' => date('Y-m-d H:i:s')
        ];
    }
    public function isNodeHealthy(): bool {
        return $this->getNodeInfo()['cpu'] < 80;
    }
}
$monitor = new NodeStatusMonitor();
print_r($monitor->getNodeInfo());
?>
