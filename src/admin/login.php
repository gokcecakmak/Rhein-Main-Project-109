
<?php
require __DIR__ . '/../db.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $stmt = $pdo->prepare(
        'SELECT password_hash FROM users WHERE username = ?'
    );

    $stmt->execute([$username]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password_hash'])) {
        $message = 'Login successful';
    } else {
        $message = 'Wrong username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
</head>
<body>

    <h2>Admin Login</h2>

    <?php if ($message !== ''): ?>
        <p><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>

    <form method="post">

        <label for="username">Username:</label>
        <input
            type="text"
            id="username"
            name="username"
            required
        >

        <br><br>

        <label for="password">Password:</label>
        <input
            type="password"
            id="password"
            name="password"
            required
        >

        <br><br>

        <button type="submit">Login</button>

    </form>

</body>
</html>
