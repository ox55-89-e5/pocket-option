<?php
// Called at top of every page.
// Required vars: $title, $description, $canonical
// Optional vars: $og_title, $og_description, $og_type, $keywords
$og_title = $og_title ?? $title;
$og_description = $og_description ?? $description;
$og_type = $og_type ?? 'website';
$keywords = $keywords ?? 'Pocket Option, бинарные опционы, торговля бинарными опционами, демо счет, промокоды Pocket Option, скачать Pocket Option';
$SITE_URL = 'https://pocketoption-po.com';
$SITE_NAME = 'Pocket Option';

$organization_schema = json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'Organization',
  'name' => 'Pocket Option',
  'url' => $SITE_URL,
  'logo' => $SITE_URL . '/logo.png',
  'sameAs' => ['https://t.me/pocketoption'],
  'contactPoint' => [
    '@type' => 'ContactPoint',
    'email' => 'support@pocketoption.com',
    'contactType' => 'customer support',
    'availableLanguage' => 'Russian',
  ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Language" content="ru">
  <title><?= htmlspecialchars($title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($description) ?>">
  <meta name="keywords" content="<?= htmlspecialchars($keywords) ?>">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
  <!-- OpenGraph -->
  <meta property="og:type" content="<?= htmlspecialchars($og_type) ?>">
  <meta property="og:locale" content="ru_RU">
  <meta property="og:url" content="<?= htmlspecialchars($canonical) ?>">
  <meta property="og:site_name" content="<?= $SITE_NAME ?>">
  <meta property="og:title" content="<?= htmlspecialchars($og_title) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($og_description) ?>">
  <meta property="og:image" content="<?= $SITE_URL ?>/og-image.jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($og_title) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($og_description) ?>">
  <!-- CSS -->
  <link rel="stylesheet" href="/css/globals.css">
  <link rel="stylesheet" href="/css/components.css">
  <?php if (!empty($extra_css)): ?>
  <link rel="stylesheet" href="<?= $extra_css ?>">
  <?php endif; ?>
  <!-- Organization Schema -->
  <script type="application/ld+json"><?= $organization_schema ?></script>
  <?php if (!empty($page_schema)): ?>
  <script type="application/ld+json"><?= $page_schema ?></script>
  <?php endif; ?>
</head>
<body>
