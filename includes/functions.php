<?php
// includes/functions.php

function e(string $value): string {
  return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function is_post(): bool {
  return ($_SERVER['REQUEST_METHOD'] ?? '') === 'POST';
}

function base_url(): string {
  static $base = null;
  if ($base !== null) {
    return $base;
  }

  $script = $_SERVER['SCRIPT_NAME'] ?? '';
  $dir = str_replace('\\', '/', dirname($script));
  if ($dir === '/' || $dir === '\\' || $dir === '.') {
    $base = '';
    return $base;
  }

  $base = rtrim($dir, '/');
  return $base;
}

function url(string $path = ''): string {
  if ($path === '') {
    return base_url() !== '' ? base_url() . '/' : '/';
  }

  $normalized = '/' . ltrim($path, '/');
  return base_url() . $normalized;
}
