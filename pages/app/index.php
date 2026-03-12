<?php
$SITE_URL = 'https://pocoptrade.com';
$title = 'Мобильное приложение Pocket Option — iOS и Android';
$description = 'Скачайте мобильное приложение Pocket Option для iOS и Android. Рейтинг 4.8★, 150 000 отзывов. Все функции торговой платформы в смартфоне.';
$canonical = $SITE_URL . '/app/';
$og_type = 'website';

$page_schema = json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'MobileApplication',
  'name' => 'Pocket Option',
  'operatingSystem' => 'iOS, Android',
  'applicationCategory' => 'FinanceApplication',
  'aggregateRating' => ['@type' => 'AggregateRating', 'ratingValue' => '4.8', 'reviewCount' => '150000'],
  'offers' => ['@type' => 'Offer', 'price' => '0', 'priceCurrency' => 'USD'],
  'description' => 'Торговля бинарными опционами на мобильном устройстве. 150+ активов, демо-счёт 10 000$.',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$features = [
  '150+ активов для торговли',
  'Демо-счёт 10 000$ без депозита',
  'Копирование сделок',
  'Push-уведомления об изменениях цен',
  'Технические индикаторы: RSI, MACD, Bollinger Bands, Volume Profile, Fibonacci',
  'Экономический календарь',
  'Биометрический вход (Face ID / Touch ID)',
  'Ландшафтный режим для iPad',
  'Виджеты на главном экране',
];

$whats_new = [
  ['icon' => '🖼️', 'title' => 'Виджеты на главном экране', 'desc' => 'Отслеживайте котировки прямо с рабочего стола смартфона без открытия приложения.'],
  ['icon' => '📺', 'title' => 'Ландшафтный режим iPad', 'desc' => 'Полноценный торговый интерфейс в горизонтальном режиме для планшетов Apple.'],
  ['icon' => '⚡', 'title' => 'Скорость загрузки графиков', 'desc' => 'Значительно улучшена скорость отрисовки графиков на слабых устройствах.'],
];

$app_faq = [
  ['q' => 'Где скачать приложение Pocket Option?', 'a' => 'Приложение доступно в App Store (iOS) и Google Play (Android). В поиске введите "Pocket Option". Загрузка и установка бесплатны.'],
  ['q' => 'Работает ли приложение на старых устройствах?', 'a' => 'Приложение поддерживает iOS 12.0 и выше, Android 5.0 и выше. Размер — около 30 МБ. Работает на большинстве устройств, выпущенных после 2015 года.'],
  ['q' => 'Чем приложение отличается от веб-версии?', 'a' => 'Функционально приложение идентично веб-версии. Дополнительно доступны: push-уведомления, биометрический вход, виджеты, оптимизированный интерфейс под сенсорные экраны.'],
  ['q' => 'Можно ли торговать на демо-счёте в приложении?', 'a' => 'Да, демо-счёт 10 000$ доступен в приложении сразу после регистрации. Переключение между реальным и демо-счётом — в один клик.'],
  ['q' => 'Как настроить push-уведомления?', 'a' => 'Перейдите в Настройки приложения → Уведомления. Можно настроить алерты на конкретные активы, изменение цены на заданный процент, результаты сделок и новые бонусы.'],
];

require_once dirname(__DIR__, 2) . '/includes/head.php';
require_once dirname(__DIR__, 2) . '/includes/header.php';
?>

<style>
.app-hero { background: linear-gradient(160deg, #0d1528 0%, #0a0e1a 60%); padding: 96px 0 80px; position: relative; overflow: hidden; }
.app-hero::before { content: ''; position: absolute; top: -160px; right: -160px; width: 520px; height: 520px; background: radial-gradient(circle, rgba(30,144,255,0.08) 0%, transparent 70%); pointer-events: none; }
.app-hero-content { max-width: 720px; display: flex; flex-direction: column; gap: 24px; }
.app-hero-title { font-size: 2.8rem; font-weight: 900; line-height: 1.1; color: #fff; letter-spacing: -0.02em; }
.app-hero-subtext { font-size: 1.1rem; color: #d3e4ff; line-height: 1.65; max-width: 580px; }
.app-hero-btns { display: flex; flex-wrap: wrap; gap: 14px; }
.store-btn { display: inline-flex; align-items: center; gap: 12px; padding: 12px 24px; }
.store-icon { font-size: 1.4rem; line-height: 1; }
.store-sub { display: block; font-size: 0.7rem; font-weight: 400; opacity: 0.85; line-height: 1; }
.store-name { display: block; font-size: 1rem; font-weight: 700; line-height: 1.3; }
/* Features */
.app-features-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: start; }
.feature-highlight { background: #0f1a2a; border: 1px solid rgba(30,144,255,0.2); border-radius: 16px; padding: 36px; display: flex; flex-direction: column; gap: 16px; }
.highlight-icon { font-size: 3rem; }
.highlight-title { font-size: 1.25rem; font-weight: 700; color: #fff; }
.highlight-text { font-size: 0.96rem; color: #d3e4ff; line-height: 1.7; }
/* Push */
.push-section { background: linear-gradient(180deg, #0a0e1a 0%, #0c1220 100%); }
.push-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: center; }
.push-visual { display: flex; flex-direction: column; gap: 12px; }
.notif-card { background: #0f1a2a; border: 1px solid rgba(30,144,255,0.22); border-radius: 12px; padding: 16px 20px; }
.notif-card-2 { transform: translateX(20px); }
.notif-card-3 { transform: translateX(10px); }
.notif-header { display: flex; justify-content: space-between; margin-bottom: 6px; }
.notif-app { font-size: 0.78rem; font-weight: 700; color: #1e90ff; }
.notif-time { font-size: 0.75rem; color: rgba(211,228,255,0.45); }
.notif-text { font-size: 0.92rem; color: #eaf1ff; }
.push-text { display: flex; flex-direction: column; gap: 24px; }
.push-desc { font-size: 1rem; color: #d3e4ff; line-height: 1.65; }
/* New */
.new-title { font-size: 1.05rem; font-weight: 700; color: #fff; margin-bottom: 8px; }
.new-desc { font-size: 0.92rem; color: #d3e4ff; line-height: 1.6; }
/* FAQ */
.app-faq-section { background: linear-gradient(180deg, #0c1220 0%, #0a0e1a 100%); }
/* CTA */
.app-cta-section { background: linear-gradient(160deg, #0c1829 0%, #0a0e1a 100%); }
.app-cta-box { text-align: center; max-width: 640px; margin: 0 auto; display: flex; flex-direction: column; align-items: center; gap: 20px; }
.app-cta-title { font-size: 2rem; font-weight: 800; color: #fff; }
.app-cta-text { font-size: 1rem; color: #d3e4ff; }
.app-cta-btns { display: flex; flex-wrap: wrap; gap: 14px; justify-content: center; }
@media (max-width: 1100px) { .app-features-grid { grid-template-columns: 1fr; gap: 32px; } .push-grid { grid-template-columns: 1fr; gap: 40px; } }
@media (max-width: 480px) { .app-hero-title { font-size: 2rem; } .app-hero-btns { flex-direction: column; align-items: stretch; } .notif-card-2, .notif-card-3 { transform: none; } .app-cta-title { font-size: 1.55rem; } .app-cta-btns { flex-direction: column; align-items: stretch; } }
</style>

<!-- HERO -->
<section class="app-hero">
  <div class="container">
    <div class="app-hero-content">
      <span class="badge">iOS & Android</span>
      <h1 class="app-hero-title">Мобильное приложение Pocket Option</h1>
      <p class="app-hero-subtext">Торгуйте бинарными опционами где угодно: полный функционал платформы в вашем смартфоне</p>
      <div class="app-hero-btns">
        <a href="/download/" class="btn btn-primary btn-lg store-btn">
          <span class="store-icon">📲</span>
          <span><span class="store-sub">Скачать приложение</span><span class="store-name">iOS & Android</span></span>
        </a>
        <a href="/demo/" class="btn btn-outline btn-lg store-btn">
          <span class="store-icon">🎮</span>
          <span><span class="store-sub">Попробовать бесплатно</span><span class="store-name">Демо-счёт</span></span>
        </a>
      </div>
      <div class="stats-row">
        <div class="stat-item"><span class="stat-value">4.8★</span><span class="stat-label">рейтинг</span></div>
        <div class="stat-item"><span class="stat-value">150 000</span><span class="stat-label">отзывов</span></div>
        <div class="stat-item"><span class="stat-value">30 МБ</span><span class="stat-label">размер</span></div>
        <div class="stat-item"><span class="stat-value">iOS & Android</span><span class="stat-label">платформы</span></div>
      </div>
    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="accent-line"></div>
      <h2 class="section-title">Возможности приложения</h2>
      <p class="section-subtitle">Всё необходимое для профессиональной торговли в кармане</p>
    </div>
    <div class="app-features-grid">
      <ul class="checklist">
        <?php foreach ($features as $f): ?>
        <li><?= htmlspecialchars($f) ?></li>
        <?php endforeach; ?>
      </ul>
      <div class="feature-highlight">
        <div class="highlight-icon">📱</div>
        <h3 class="highlight-title">Полный функционал на ходу</h3>
        <p class="highlight-text">Приложение Pocket Option — это не урезанная мобильная версия, а полноценная торговая платформа. Вы получаете те же графики, индикаторы, активы и инструменты анализа, что и в десктопной версии.</p>
        <a href="/download/" class="btn btn-primary">Начать торговать</a>
      </div>
    </div>
  </div>
</section>

<!-- PUSH NOTIFICATIONS -->
<section class="section push-section">
  <div class="container">
    <div class="push-grid">
      <div class="push-visual">
        <div class="notif-card">
          <div class="notif-header"><span class="notif-app">Pocket Option</span><span class="notif-time">сейчас</span></div>
          <p class="notif-text">📈 EUR/USD достиг целевой отметки 1.0850</p>
        </div>
        <div class="notif-card notif-card-2">
          <div class="notif-header"><span class="notif-app">Pocket Option</span><span class="notif-time">2 мин назад</span></div>
          <p class="notif-text">✅ Сделка закрыта с прибылью +92$</p>
        </div>
        <div class="notif-card notif-card-3">
          <div class="notif-header"><span class="notif-app">Pocket Option</span><span class="notif-time">5 мин назад</span></div>
          <p class="notif-text">🎁 Новый бонус: промокод CASHBACK20</p>
        </div>
      </div>
      <div class="push-text">
        <div class="accent-line"></div>
        <h2 class="section-title">Push-уведомления</h2>
        <p class="push-desc">Настройте персональные алерты и никогда не пропустите важные события на рынке. Приложение уведомит вас мгновенно.</p>
        <ul class="checklist">
          <li>Алерты на изменение цен выбранных активов</li>
          <li>Уведомления о закрытии сделок</li>
          <li>Новые бонусы и промокоды</li>
          <li>Важные новости экономического календаря</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- WHAT'S NEW -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="accent-line"></div>
      <h2 class="section-title">Что нового в приложении</h2>
      <p class="section-subtitle">Последние обновления платформы</p>
    </div>
    <div class="grid-3">
      <?php foreach ($whats_new as $item): ?>
      <div class="card">
        <div class="icon-box"><?= $item['icon'] ?></div>
        <h3 class="new-title"><?= htmlspecialchars($item['title']) ?></h3>
        <p class="new-desc"><?= htmlspecialchars($item['desc']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section app-faq-section">
  <div class="container">
    <div class="section-header">
      <div class="accent-line"></div>
      <h2 class="section-title">Вопросы о приложении</h2>
    </div>
    <div class="faq-list">
      <?php foreach ($app_faq as $item): ?>
      <details class="faq-item">
        <summary><?= htmlspecialchars($item['q']) ?></summary>
        <div class="faq-answer"><?= htmlspecialchars($item['a']) ?></div>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section app-cta-section">
  <div class="container">
    <div class="app-cta-box">
      <h2 class="app-cta-title">Скачайте приложение прямо сейчас</h2>
      <p class="app-cta-text">Бесплатно. Демо-счёт 10 000$. Без регистрации — в два тапа.</p>
      <div class="app-cta-btns">
        <a href="/download/" class="btn btn-primary btn-lg">📲 Скачать приложение</a>
        <a href="/demo/" class="btn btn-outline btn-lg">🎮 Открыть демо-счёт</a>
      </div>
    </div>
  </div>
</section>

<?php require_once dirname(__DIR__, 2) . '/includes/footer.php'; ?>
