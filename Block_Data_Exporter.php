<?php
class BlockDataExporter {
    public function exportToJson(array $block, string $path): bool {
        return file_put_contents($path, json_encode($block, JSON_PRETTY_PRINT)) !== false;
    }
    public function importFromJson(string $path): array {
        return json_decode(file_get_contents($path), true) ?? [];
    }
}
$exporter = new BlockDataExporter();
echo $exporter->exportToJson(['id'=>1], 'block.json') ? 'ok' : 'err';
?>
