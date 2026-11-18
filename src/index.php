<?php
$pdo = new PDO(
    'mysql:host=db;dbname=seminars;charset=utf8mb4',
    'app',
    'app',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$upcoming = $pdo->query(
    "SELECT * FROM seminars WHERE starts_at >= NOW() ORDER BY starts_at ASC"
)->fetchAll(PDO::FETCH_ASSOC);

$past = $pdo->query(
    "SELECT * FROM seminars WHERE starts_at < NOW() ORDER BY starts_at DESC"
)->fetchAll(PDO::FETCH_ASSOC);

function e($text) {
    return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stochastik Rhein-Main - Seminars</title>
    <style>
        body { font-family: sans-serif; max-width: 700px; margin: 0 auto; padding: 16px; }
        article { border: 1px solid #ccc; border-radius: 6px; padding: 12px; margin-bottom: 12px; }
        h3 { margin: 4px 0; }
        .meta { color: #555; font-size: 0.9em; }
    </style>
</head>
<body>
    <h1>Seminars</h1>

    <h2>Upcoming</h2>
    <?php if (empty($upcoming)): ?>
        <p>No upcoming seminars.</p>
    <?php endif; ?>
    <?php foreach ($upcoming as $s): ?>
        <article>
            <div class="meta"><?= e($s['type']) ?></div>
            <h3><?= e($s['title']) ?></h3>
            <div class="meta">
                <?= e($s['speaker']) ?><br>
                <?= date('d M Y, H:i', strtotime($s['starts_at'])) ?> | <?= e($s['location']) ?>
            </div>
            <p><?= e($s['abstract']) ?></p>
        </article>
    <?php endforeach; ?>

    <h2>Archive</h2>
    <?php foreach ($past as $s): ?>
        <article>
            <div class="meta"><?= e($s['type']) ?></div>
            <h3><?= e($s['title']) ?></h3>
            <div class="meta">
                <?= e($s['speaker']) ?><br>
                <?= date('d M Y, H:i', strtotime($s['starts_at'])) ?> | <?= e($s['location']) ?>
            </div>
        </article>
    <?php endforeach; ?>
</body>
</html>