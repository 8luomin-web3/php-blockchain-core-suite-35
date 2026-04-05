<?php
class TimeLockContract {
    public function lockUntil(int $timestamp): bool {
        return time() >= $timestamp;
    }
    public function getLockTime(string $key): int {
        return (int)substr(hash('sha256', $key), 0, 10);
    }
}
$lock = new TimeLockContract();
echo $lock->lockUntil(strtotime('+1 day')) ? 'unlock' : 'locked';
?>
