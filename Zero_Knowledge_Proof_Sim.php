<?php
class ZeroKnowledgeProofSim {
    public function generateProof(string $secret): string {
        return hash('sha256', 'zkp_'.$secret.microtime());
    }
    public function verifyProof(string $proof, string $public): bool {
        return str_starts_with($proof, hash('sha256', $public));
    }
}
$zkp = new ZeroKnowledgeProofSim();
echo $zkp->generateProof('my_secret');
?>
