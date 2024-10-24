<?php
$jsonFile = 'items.json';

if (file_exists($jsonFile)) {
    $items = json_decode(file_get_contents($jsonFile), true);
} else {
    $items = [];
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itens Cadastrados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Itens à Venda</h1>

    <div class="item-grid">
        <?php if (count($items) > 0): ?>
            <?php foreach ($items as $item): ?>
                <div class="card">
                    <div class="image-gallery">
                        <?php foreach ($item['images'] as $image): ?>
                            <img src="<?php echo $image; ?>" alt="Imagem do <?php echo $item['name']; ?>">
                        <?php endforeach; ?>
                    </div>
                    <h2><?php echo $item['name']; ?></h2>
                    <p><?php echo $item['description']; ?></p>
                    <p>Preço: R$ <?php echo number_format($item['price'], 2, ',', '.'); ?></p>
                    <button onclick="window.location.href='mailto:contato@exemplo.com?subject=Interesse%20em%20<?php echo urlencode($item['name']); ?>'">Contate-nos</button>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Nenhum item cadastrado.</p>
        <?php endif; ?>
    </div>
</body>
</html>
