<?php
class ChainStatsAnalyzer {
    public function avgBlockTime(array $blocks): float {
        $total = 0;
        $count = count($blocks) - 1;
        for($i=1; $i<count($blocks); $i++) {
            $total += $blocks[$i]['time'] - $blocks[$i-1]['time'];
        }
        return $count > 0 ? round($total/$count, 2) : 0;
    }
}
$analyzer = new ChainStatsAnalyzer();
echo $analyzer->avgBlockTime([['time'=>1], ['time'=>3]]);
?>
