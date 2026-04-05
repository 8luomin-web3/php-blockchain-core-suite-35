<?php
class ChainForkResolver {
    public function resolveFork(array ...$chains): array {
        $longest = [];
        foreach($chains as $c) {
            if(count($c) > count($longest)) $longest = $c;
        }
        return $longest;
    }
}
$resolver = new ChainForkResolver();
print_r($resolver->resolveFork([1,2], [1,2,3]));
?>
