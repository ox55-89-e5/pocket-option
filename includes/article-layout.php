<?php
/**
 * Article layout template.
 * Required vars: $article_title, $article_slug, $breadcrumbs, $article_content
 * Optional vars: $article_description
 *
 * $breadcrumbs = array of ['label' => '...', 'href' => '...'] (href optional for last item)
 */

require_once __DIR__ . '/cta-links.php';

$cta = get_cta($article_slug);

// JSON-LD schemas
$breadcrumb_items = [];
foreach ($breadcrumbs as $i => $crumb) {
  $item = ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $crumb['label']];
  if (!empty($crumb['href'])) $item['item'] = SITE_URL . $crumb['href'];
  $breadcrumb_items[] = $item;
}

$breadcrumb_schema = json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'BreadcrumbList',
  'itemListElement' => $breadcrumb_items,
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$article_schema_data = [
  '@context' => 'https://schema.org',
  '@type' => 'Article',
  'headline' => $article_title,
  'url' => SITE_URL . $article_slug,
  'inLanguage' => 'ru',
  'publisher' => ['@type' => 'Organization', 'name' => 'Pocket Option', 'url' => SITE_URL],
  'breadcrumb' => ['@type' => 'BreadcrumbList', 'itemListElement' => $breadcrumb_items],
];
if (!empty($article_description)) $article_schema_data['description'] = $article_description;
$article_schema = json_encode($article_schema_data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
?>
<script type="application/ld+json"><?= $breadcrumb_schema ?></script>
<script type="application/ld+json"><?= $article_schema ?></script>

<!-- Hero -->
<section class="article-hero">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <?php foreach ($breadcrumbs as $i => $crumb): ?>
      <span class="breadcrumb-item">
        <?php if (!empty($crumb['href'])): ?>
          <a href="<?= htmlspecialchars($crumb['href']) ?>" class="breadcrumb-link"><?= htmlspecialchars($crumb['label']) ?></a>
        <?php else: ?>
          <span class="breadcrumb-current"><?= htmlspecialchars($crumb['label']) ?></span>
        <?php endif; ?>
        <?php if ($i < count($breadcrumbs) - 1): ?>
          <span class="breadcrumb-sep">/</span>
        <?php endif; ?>
      </span>
      <?php endforeach; ?>
    </nav>
    <h1 class="article-hero-title"><?= htmlspecialchars($article_title) ?></h1>
    <?php if ($cta): ?>
    <a href="<?= htmlspecialchars($cta['href']) ?>" class="btn btn-primary article-hero-cta"><?= htmlspecialchars($cta['label']) ?></a>
    <?php endif; ?>
  </div>
</section>

<!-- Content -->
<section class="section">
  <div class="container">
    <div class="article-layout">
      <!-- Article body -->
      <article class="article-body">
        <?= $article_content ?>
        <?php if ($cta): ?>
        <div class="article-bottom-cta">
          <a href="<?= htmlspecialchars($cta['href']) ?>" class="btn btn-primary"><?= htmlspecialchars($cta['label']) ?></a>
        </div>
        <?php endif; ?>
      </article>

      <!-- Sidebar -->
      <aside class="article-sidebar">
        <div class="sidebar-card">
          <h3 class="sidebar-title">Быстрый старт</h3>
          <ul class="sidebar-list">
            <li><a href="/registration/">Регистрация</a></li>
            <li><a href="/deposit/">Пополнение счёта</a></li>
            <li><a href="/bonus/">Бонусы и промокоды</a></li>
            <li><a href="/strategies/">Стратегии торговли</a></li>
            <li><a href="/withdraw/">Вывод средств</a></li>
          </ul>
        </div>
        <div class="sidebar-card">
          <h3 class="sidebar-title">Популярные статьи</h3>
          <ul class="sidebar-list">
            <li><a href="/copy-trading/">Копирование сделок</a></li>
            <li><a href="/verification/">Верификация аккаунта</a></li>
            <li><a href="/cashback/">Кешбэк программа</a></li>
            <li><a href="/license/">Лицензия Pocket Option</a></li>
            <li><a href="/support/">Служба поддержки</a></li>
          </ul>
        </div>
        <?php if ($cta): ?>
        <div class="sidebar-cta">
          <p><?= htmlspecialchars($article_title) ?></p>
          <a href="<?= htmlspecialchars($cta['href']) ?>" class="btn btn-primary" style="width:100%;text-align:center"><?= htmlspecialchars($cta['label']) ?></a>
        </div>
        <?php else: ?>
        <div class="sidebar-cta">
          <p>Начните торговать с демо-счётом 10 000$</p>
          <a href="/lk/" class="btn btn-primary" style="width:100%;text-align:center">Открыть демо-счёт</a>
        </div>
        <?php endif; ?>
      </aside>
    </div>
  </div>
</section>
