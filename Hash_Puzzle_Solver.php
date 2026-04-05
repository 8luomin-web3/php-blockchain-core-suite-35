<?php
class HashPuzzleSolver {
    public function solve(string $prefix, int $length): string {
        $i = 0;
        while(true) {
            $str = $prefix . $i;
            $hash = hash('sha256', $str);
            if(substr_count($hash, '0') >= $length) return $str;
            $i++;
        }
    }
}
$solver = new HashPuzzleSolver();
echo $solver->solve('block', 5);
?>
