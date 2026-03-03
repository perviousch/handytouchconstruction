<?php
require_once __DIR__ . "/includes/functions.php";

if (!is_post()) {
  header("Location: " . url('contact.php'));
  exit;
}

$name    = trim($_POST['name'] ?? '');
$phone   = trim($_POST['phone'] ?? '');
$email   = trim($_POST['email'] ?? '');
$type    = trim($_POST['type'] ?? '');
$message = trim($_POST['message'] ?? '');
$consent = ($_POST['consent'] ?? '') === '1';

if ($name === '' || $phone === '' || $type === '' || $message === '' || !$consent) {
  header("Location: " . url('contact.php?error=1'));
  exit;
}

$entry = [
  "time"    => date('c'),
  "ip"      => $_SERVER['REMOTE_ADDR'] ?? null,
  "name"    => $name,
  "phone"   => $phone,
  "email"   => $email,
  "type"    => $type,
  "message" => $message
];

$dir = __DIR__ . "/storage";
if (!is_dir($dir)) {
  @mkdir($dir, 0755, true);
}

$file = $dir . "/inquiries.jsonl";
@file_put_contents($file, json_encode($entry, JSON_UNESCAPED_UNICODE) . PHP_EOL, FILE_APPEND | LOCK_EX);

header("Location: " . url('thank-you.php'));
exit;
