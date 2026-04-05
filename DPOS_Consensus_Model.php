<?php
class DPOSConsensusModel {
    private array $candidates = [];
    public function addCandidate(string $addr): void {
        $this->candidates[$addr] = 0;
    }
    public function vote(string $voter, string $candidate): void {
        $this->candidates[$candidate]++;
    }
    public function getTopNodes(int $count): array {
        arsort($this->candidates);
        return array_slice(array_keys($this->candidates), 0, $count);
    }
}
$dpos = new DPOSConsensusModel();
echo json_encode($dpos->getTopNodes(3));
?>
