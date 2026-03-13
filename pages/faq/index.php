<?php
$SITE_URL = 'https://pocketoption-po.com';
$title = 'FAQ по Pocket Option — ответы на вопросы о торговле, депозитах, безопасности';
$description = 'Полные ответы на часто задаваемые вопросы о платформе Pocket Option: регистрация, депозит, вывод средств, промокоды, безопасность, мобильное приложение.';
$canonical = $SITE_URL . '/faq/';
$og_type = 'website';

$faq_categories = [
  [
    'title' => 'Регистрация и вход',
    'items' => [
      ['q' => 'Как зарегистрироваться в Pocket Option?', 'href' => '/registration/', 'icon' => '📋'],
      ['q' => 'Что делать, если забыл пароль?', 'href' => '/recovery-password/', 'icon' => '🔑'],
      ['q' => 'Можно ли торговать без верификации?', 'href' => '/verification/', 'icon' => '🪪'],
    ],
  ],
  [
    'title' => 'Пополнение и вывод средств',
    'items' => [
      ['q' => 'Как пополнить счет и какой минимальный депозит?', 'href' => '/deposit/', 'icon' => '💳'],
      ['q' => 'Как вывести деньги с Pocket Option на карту?', 'href' => '/withdraw/', 'icon' => '🟢'],
      ['q' => 'Есть ли комиссия за вывод и какие лимиты?', 'href' => '/withdrawal-fees/', 'icon' => '🟦'],
    ],
  ],
  [
    'title' => 'Мобильное приложение',
    'items' => [
      ['q' => 'Где скачать приложение Pocket Option на iPhone и Android?', 'href' => '/download-app/', 'icon' => '📱'],
      ['q' => 'Какие отзывы о мобильном приложении?', 'href' => '/app-reviews/', 'icon' => '⭐'],
      ['q' => 'Что такое веб-версия платформы?', 'href' => '/web-version/', 'icon' => '🌐'],
    ],
  ],
  [
    'title' => 'Бонусы и промокоды',
    'items' => [
      ['q' => 'Какой бонус дают за регистрацию?', 'href' => '/bonus/', 'icon' => '🎁'],
      ['q' => 'Как активировать промокоды?', 'href' => '/activate-promocode/', 'icon' => '🏷️'],
      ['q' => 'Что такое кешбэк и как его получить?', 'href' => '/cashback/', 'icon' => '🔄'],
      ['q' => 'Дают ли бонус без депозита?', 'href' => '/no-deposit-bonus/', 'icon' => '💎'],
    ],
  ],
  [
    'title' => 'Торговля и обучение',
    'items' => [
      ['q' => 'Какие стратегии торговли работают?', 'href' => '/strategies/', 'icon' => '⚡'],
      ['q' => 'Где пройти обучение трейдингу?', 'href' => '/training/', 'icon' => '🎓'],
      ['q' => 'С чего начать новичку на платформе?', 'href' => '/beginner/', 'icon' => '🚀'],
      ['q' => 'Как торговать в плюс?', 'href' => '/plus-trading/', 'icon' => '📈'],
      ['q' => 'Какие индикаторы доступны?', 'href' => '/indicators/', 'icon' => '📊'],
      ['q' => 'Что такое AI Mode?', 'href' => '/aimode/', 'icon' => '🤖'],
      ['q' => 'Как работает копирование сделок?', 'href' => '/copy-trading/', 'icon' => '👥'],
    ],
  ],
  [
    'title' => 'Репутация и безопасность',
    'items' => [
      ['q' => 'Где почитать отзывы о платформе?', 'href' => '/reviews/', 'icon' => '🔍'],
      ['q' => 'Есть ли у Pocket Option лицензия?', 'href' => '/license/', 'icon' => '📄'],
      ['q' => 'Почему Pocket Option в черном списке ЦБ?', 'href' => '/blacklist/', 'icon' => '⚠️'],
      ['q' => 'Насколько безопасна платформа?', 'href' => '/safety/', 'icon' => '🔒'],
    ],
  ],
  [
    'title' => 'Технические вопросы',
    'items' => [
      ['q' => 'Почему Pocket Option не работает сегодня и где найти зеркало сайта?', 'href' => '/mirror/', 'icon' => '🟢'],
    ],
  ],
  [
    'title' => 'Дополнительные возможности',
    'items' => [
      ['q' => 'Как участвовать в турнирах?', 'href' => '/tournaments/', 'icon' => '🏆'],
      ['q' => 'Как зарабатывать на партнёрской программе?', 'href' => '/affiliate/', 'icon' => '🤝'],
      ['q' => 'Как связаться с поддержкой на русском?', 'href' => '/support/', 'icon' => '💬'],
      ['q' => 'Как включить двухфакторную защиту?', 'href' => '/2fa/', 'icon' => '🔐'],
      ['q' => 'Где найти историю операций?', 'href' => '/history/', 'icon' => '📋'],
      ['q' => 'Сколько ждать верификацию?', 'href' => '/wait-verification/', 'icon' => '⏳'],
    ],
  ],
];

$total_questions = array_sum(array_map(fn($c) => count($c['items']), $faq_categories));

$faq_entities = [];
foreach ($faq_categories as $cat) {
  foreach ($cat['items'] as $item) {
    $faq_entities[] = ['@type' => 'Question', 'name' => $item['q'], 'acceptedAnswer' => ['@type' => 'Answer', 'text' => $item['q']]];
  }
}
$page_schema = json_encode(['@context' => 'https://schema.org', '@type' => 'FAQPage', 'mainEntity' => $faq_entities], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

require_once dirname(__DIR__, 2) . '/includes/head.php';
require_once dirname(__DIR__, 2) . '/includes/header.php';
?>

<style>
.faq-hero { background: linear-gradient(160deg, #0d1528 0%, #0a0e1a 60%); padding: 72px 0 56px; text-align: center; }
.faq-hero-content { max-width: 620px; margin: 0 auto; display: flex; flex-direction: column; gap: 16px; }
.faq-hero-title { font-size: 2.6rem; font-weight: 900; line-height: 1.1; color: #fff; letter-spacing: -0.02em; }
.faq-hero-subtext { font-size: 1rem; color: #6eb3ff; line-height: 1.6; }
.faq-sections { display: flex; flex-direction: column; gap: 48px; }
.faq-cat-title { font-size: 1.25rem; font-weight: 700; color: #fff; margin-bottom: 16px; }
.question-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; }
.question-card { display: flex; align-items: center; gap: 12px; padding: 14px 16px; background: #0f1a2e; border: 1px solid rgba(30,144,255,0.18); border-radius: 10px; text-decoration: none; color: #d3e4ff; font-size: 0.9rem; font-weight: 500; line-height: 1.35; transition: background 0.18s ease, border-color 0.18s ease, color 0.18s ease; }
.question-card:hover { background: #16273f; border-color: rgba(30,144,255,0.45); color: #fff; }
.card-icon { font-size: 1.25rem; flex-shrink: 0; width: 28px; text-align: center; }
.faq-stats-section { padding: 40px 0; border-top: 1px solid rgba(30,144,255,0.12); }
.faq-stats-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: 0; max-width: 360px; background: #0c1829; border: 1px solid rgba(30,144,255,0.2); border-radius: 14px; overflow: hidden; }
.faq-stat-item { display: flex; flex-direction: column; align-items: center; padding: 24px 16px; border-right: 1px solid rgba(30,144,255,0.12); }
.faq-stat-item:last-child { border-right: none; }
.faq-stat-value { font-size: 1.6rem; font-weight: 900; color: #1e90ff; line-height: 1; }
.faq-stat-label { font-size: 0.78rem; color: #7a9bc4; margin-top: 6px; text-align: center; }
@media (max-width: 900px) { .question-grid { grid-template-columns: repeat(2,1fr); } }
@media (max-width: 560px) {
  .faq-hero-title { font-size: 1.9rem; }
  .question-grid { grid-template-columns: 1fr; }
  .faq-stats-grid { grid-template-columns: repeat(2,1fr); max-width: 260px; }
  .faq-stat-item:nth-child(2) { border-right: none; }
  .faq-stat-item:nth-child(3) { border-top: 1px solid rgba(30,144,255,0.12); }
  .faq-stat-item:nth-child(4) { border-top: 1px solid rgba(30,144,255,0.12); border-right: none; }
}
</style>

<section class="faq-hero">
  <div class="container">
    <div class="faq-hero-content">
      <h1 class="faq-hero-title">Часто задаваемые вопросы</h1>
      <p class="faq-hero-subtext">
        Ответы на все вопросы о платформе Pocket Option — от регистрации до вывода прибыли
      </p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="faq-sections">
      <?php foreach ($faq_categories as $cat): ?>
      <div class="faq-cat">
        <h2 class="faq-cat-title"><?= htmlspecialchars($cat['title']) ?></h2>
        <div class="question-grid">
          <?php foreach ($cat['items'] as $item): ?>
          <a href="<?= htmlspecialchars($item['href']) ?>" class="question-card">
            <span class="card-icon"><?= $item['icon'] ?></span>
            <span><?= htmlspecialchars($item['q']) ?></span>
          </a>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="faq-stats-section">
  <div class="container">
    <div class="faq-stats-grid">
      <div class="faq-stat-item">
        <span class="faq-stat-value"><?= $total_questions ?></span>
        <span class="faq-stat-label">ответ</span>
      </div>
      <div class="faq-stat-item">
        <span class="faq-stat-value">24/7</span>
        <span class="faq-stat-label">поддержка</span>
      </div>
      <div class="faq-stat-item">
        <span class="faq-stat-value">100%</span>
        <span class="faq-stat-label">честно</span>
      </div>
      <div class="faq-stat-item">
        <span class="faq-stat-value">2026</span>
        <span class="faq-stat-label">актуально</span>
      </div>
    </div>
  </div>
</section>

<?php require_once dirname(__DIR__, 2) . '/includes/footer.php'; ?>
