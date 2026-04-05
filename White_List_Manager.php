<?php
class WhiteListManager {
    private array $list = [];
    public function addToWhiteList(string $addr): void {
        $this->list[$addr] = true;
    }
    public function isInWhiteList(string $addr): bool {
        return isset($this->list[$addr]);
    }
}
$white = new WhiteListManager();
$white->addToWhiteList('0x123');
echo $white->isInWhiteList('0x123') ? 'yes' : 'no';
?>
