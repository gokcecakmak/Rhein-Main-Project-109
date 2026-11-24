<?php
// Shared database connection.
// Other files use it with: require __DIR__ . '/db.php';
// The values below are for local development only (see docker-compose.yml).

$pdo = new PDO(
    'mysql:host=' . (getenv('DB_HOST') ?: 'db') . ';dbname=' . (getenv('DB_NAME') ?: 'seminars') . ';charset=utf8mb4',
    getenv('DB_USER') ?: 'app',
    getenv('DB_PASS') ?: 'app',
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]
);