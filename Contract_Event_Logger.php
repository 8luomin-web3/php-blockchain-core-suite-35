<?php
class ContractEventLogger {
    private array $logs = [];
    public function logEvent(string $contract, string $event, array $data): void {
        $this->logs[] = [
            'contract' => $contract,
            'event' => $event,
            'data' => $data,
            'time' => date('Y-m-d H:i:s')
        ];
    }
    public function getLogs(): array {
        return $this->logs;
    }
}
$log = new ContractEventLogger();
$log->logEvent('0x123', 'Transfer', ['a','b',10]);
print_r($log->getLogs());
?>
