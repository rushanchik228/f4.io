<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Здесь логика регистрации
    echo "Обработка регистрации для пользователя: " . htmlspecialchars($username);
}
?>