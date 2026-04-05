<?php
class CrossChainMessagePasser {
    public function createMessage(string $fromChain, string $toChain, string $data): array {
        return [
            'from' => $fromChain, 'to' => $toChain,
            'data' => $data, 'id' => uniqid('msg_')
        ];
    }
    public function sendMessage(array $msg): string {
        return "sent cross chain msg: {$msg['id']}";
    }
}
$cross = new CrossChainMessagePasser();
echo $cross->sendMessage($cross->createMessage('eth', 'bsc', 'transfer'));
?>
