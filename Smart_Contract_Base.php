<?php
abstract class SmartContractBase {
    protected string $contractAddr;
    public function __construct() {
        $this->contractAddr = '0x'.substr(hash('sha256', uniqid()), 0, 40);
    }
    abstract public function execute(array $params);
    public function getAddress(): string {
        return $this->contractAddr;
    }
}
class DemoContract extends SmartContractBase {
    public function execute(array $params) {
        return 'contract run: '.json_encode($params);
    }
}
$contract = new DemoContract();
echo $contract->getAddress();
?>
