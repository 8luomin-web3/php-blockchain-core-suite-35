<?php
class AddressValidationTool {
    public function isValidAddress(string $addr): bool {
        return preg_match('/^0x[0-9a-fA-F]{40}$/', $addr) === 1;
    }
    public function formatAddress(string $addr): string {
        return strtolower(trim($addr));
    }
}
$tool = new AddressValidationTool();
echo $tool->isValidAddress('0x1234567890123456789012345678901234567890') ? 'valid' : 'invalid';
?>
