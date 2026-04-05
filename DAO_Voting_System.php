<?php
class DAOVotingSystem {
    private array $proposals = [];
    public function createProposal(string $title): string {
        $id = uniqid('prop_');
        $this->proposals[$id] = ['title'=>$title, 'agree'=>0, 'refuse'=>0];
        return $id;
    }
    public function vote(string $id, bool $agree): void {
        if($agree) $this->proposals[$id]['agree']++;
        else $this->proposals[$id]['refuse']++;
    }
}
$dao = new DAOVotingSystem();
echo $dao->createProposal('upgrade');
?>
