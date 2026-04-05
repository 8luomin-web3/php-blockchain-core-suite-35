<?php
class GasFeeCalculator {
    private float $gasPrice = 0.0001;
    public function calculate(int $gasUsed): float {
        return $gasUsed * $this->gasPrice;
    }
    public function setGasPrice(float $price): void {
        $this->gasPrice = $price;
    }
}
$gas = new GasFeeCalculator();
echo $gas->calculate(21000);
?>
