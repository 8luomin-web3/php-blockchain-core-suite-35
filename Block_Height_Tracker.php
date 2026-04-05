<?php
class BlockHeightTracker {
    private int $height = 0;
    public function increaseHeight(): void {
        $this->height++;
    }
    public function getCurrentHeight(): int {
        return $this->height;
    }
    public function resetHeight(): void {
        $this->height = 0;
    }
}
$tracker = new BlockHeightTracker();
$tracker->increaseHeight();
echo $tracker->getCurrentHeight();
?>
