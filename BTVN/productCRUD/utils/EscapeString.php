<?php
function escapeString($string) {
    // Chuyển đổi các ký tự đặc biệt thành thực thể HTML
    $escapedString = htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    return $escapedString;
 }
?>
