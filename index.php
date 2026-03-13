<?php
// ── ROUTER ──
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/');

// Serve static files directly
if ($uri !== '' && file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    return false;
}

// Redirect rules
$redirects = [
    '/signup'   => 'https://po-fcm.com/ru/register/',
    '/lk'       => 'https://po-fcm.com/ru/register/',
    '/aff'      => 'https://cleveraff.com/',
    '/download' => 'https://po-fcm.com/ru/register/',
    '/demo'     => 'https://po-fcm.com/ru/register/',
];

if (isset($redirects[$uri])) {
    header('Location: ' . $redirects[$uri], true, 301);
    exit;
}

// Route /page or /page/ → pages/page/index.php
if ($uri !== '' && $uri !== '/') {
    $slug = ltrim($uri, '/');
    $file = __DIR__ . '/pages/' . $slug . '/index.php';
    if (file_exists($file)) {
        require $file;
        exit;
    }
    // 404
    http_response_code(404);
    echo '<h1>404 Not Found</h1>';
    exit;
}

// ── HOMEPAGE ──
$SITE_URL = 'https://pocketoption-po.com';
$title = 'Pocket Option официальный сайт — торговля бинарными опционами';
$description = 'Pocket Option — интуитивная платформа с демо-счетом 10 000$. 150+ активов, выплата 92%. Начните торговлю бинарными опционами без вложений.';
$canonical = $SITE_URL;
$og_type = 'website';

$page_schema = json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'WebSite',
  'name' => 'Pocket Option',
  'url' => $SITE_URL,
  'description' => 'Торговля бинарными опционами. Демо-счёт 10 000$, 150+ активов, выплата 92%.',
  'potentialAction' => [
    '@type' => 'SearchAction',
    'target' => $SITE_URL . '/faq/?q={search_term_string}',
    'query-input' => 'required name=search_term_string',
  ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

require_once __DIR__ . '/includes/head.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- ── HERO ── -->
<section class="home-hero">
  <div class="container">
    <div class="hero-content">
      <span class="badge">Официальный сайт 2026</span>
      <h1 class="hero-title">Pocket Option официальный сайт</h1>
      <p class="hero-subtext">Интуитивная платформа с демо-счетом 10&nbsp;000$ — начните торговлю бинарными опционами прямо сейчас без вложений</p>
      <div class="hero-btns">
        <a href="https://pocketoption-po.com/register" class="btn btn-primary btn-lg" target="_blank" rel="noopener noreferrer">Начать торговлю</a>
        <a href="https://pocketoption-po.com/demo" class="btn btn-outline btn-lg" target="_blank" rel="noopener noreferrer">Онлайн демо</a>
      </div>
      <div class="stats-row hero-stats">
        <div class="stat-item"><span class="stat-value">2+ млн</span><span class="stat-label">трейдеров</span></div>
        <div class="stat-divider"></div>
        <div class="stat-item"><span class="stat-value">150+</span><span class="stat-label">активов</span></div>
        <div class="stat-divider"></div>
        <div class="stat-item"><span class="stat-value">0.12с</span><span class="stat-label">исполнение</span></div>
        <div class="stat-divider"></div>
        <div class="stat-item"><span class="stat-value">24/7</span><span class="stat-label">поддержка</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ── FEATURES ── -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="accent-line"></div>
      <h2 class="section-title">Pocket Option: всё для успешной торговли</h2>
      <p class="section-subtitle">Полный набор инструментов для профессиональной торговли бинарными опционами на одной платформе</p>
    </div>
    <div class="grid-4">
      <div class="card">
        <div class="icon-box">💰</div>
        <h3 class="card-title">Демо-счет 10 000$</h3>
        <p class="card-desc">Торгуйте без риска с виртуальными деньгами. Без депозита, без ограничений по времени.</p>
      </div>
      <div class="card">
        <div class="icon-box">📊</div>
        <h3 class="card-title">150+ активов</h3>
        <p class="card-desc">Валюты, акции, криптовалюта, сырьё. EUR/USD, Tesla, BTC и многое другое.</p>
      </div>
      <div class="card">
        <div class="icon-box">🔄</div>
        <h3 class="card-title">Копирование сделок</h3>
        <p class="card-desc">Копируйте успешных трейдеров автоматически. Комиссия 5% от прибыли.</p>
      </div>
      <div class="card">
        <div class="icon-box">📈</div>
        <h3 class="card-title">Выплата 92%</h3>
        <p class="card-desc">Максимальная прибыль по бинарным опционам за одну сделку.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── MOBILE APP ── -->
<section class="section app-section">
  <div class="container">
    <div class="app-grid">
      <div class="app-text">
        <div class="accent-line"></div>
        <h2 class="section-title">Мобильное приложение Pocket Option</h2>
        <p class="app-desc">Полный функционал в смартфоне. Доступно для iOS и Android. Торгуйте где угодно с теми же инструментами, что и на десктопе.</p>
        <div class="stats-row app-stats">
          <div class="stat-item"><span class="stat-value">4.8★</span><span class="stat-label">рейтинг</span></div>
          <div class="stat-item"><span class="stat-value">150 000</span><span class="stat-label">отзывов</span></div>
          <div class="stat-item"><span class="stat-value">30 МБ</span><span class="stat-label">размер</span></div>
          <div class="stat-item"><span class="stat-value">Бесплатно</span><span class="stat-label">загрузка</span></div>
        </div>
        <a href="/app/" class="btn btn-primary">Скачать приложение</a>
      </div>
      <div class="app-visual">
        <div class="phone-mock">
          <div class="phone-screen">
            <div class="phone-chart">
              <div class="chart-bar" style="height:60%"></div>
              <div class="chart-bar" style="height:80%"></div>
              <div class="chart-bar" style="height:45%"></div>
              <div class="chart-bar" style="height:90%"></div>
              <div class="chart-bar" style="height:65%"></div>
              <div class="chart-bar" style="height:75%"></div>
              <div class="chart-bar" style="height:55%"></div>
            </div>
            <div class="phone-info">
              <span class="phone-pair">EUR/USD</span>
              <span class="phone-profit">+92%</span>
            </div>
            <div class="phone-btns">
              <div class="phone-btn-up">▲ ВВЕРХ</div>
              <div class="phone-btn-down">▼ ВНИЗ</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── PROMO CODES ── -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="accent-line"></div>
      <h2 class="section-title">Промокоды и бонусы 2026</h2>
      <p class="section-subtitle">Используйте промокоды для увеличения депозита и получения кешбэка</p>
    </div>
    <div class="grid-3">
      <div class="card card-2 promo-card">
        <div class="promo-top"><span class="promo-code">START100</span><span class="badge">до 500$</span></div>
        <p class="promo-bonus">+100% к депозиту</p>
        <a href="https://pocketoption-po.com/register" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Активировать</a>
      </div>
      <div class="card card-2 promo-card">
        <div class="promo-top"><span class="promo-code">POCKET50</span><span class="badge">Без лимита</span></div>
        <p class="promo-bonus">+50% к депозиту</p>
        <a href="https://pocketoption-po.com/register" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Активировать</a>
      </div>
      <div class="card card-2 promo-card">
        <div class="promo-top"><span class="promo-code">CASHBACK20</span><span class="badge">Еженедельно</span></div>
        <p class="promo-bonus">20% кешбэк</p>
        <a href="https://pocketoption-po.com/register" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Активировать</a>
      </div>
    </div>
    <div class="all-promos">
      <a href="/promo/" class="all-link">Все промокоды →</a>
    </div>
  </div>
</section>

<!-- ── DEMO ACCOUNT ── -->
<section class="section demo-section">
  <div class="container">
    <div class="demo-box">
      <div class="demo-text">
        <div class="accent-line"></div>
        <h2 class="section-title">Демо-счет: торговля без рисков</h2>
        <p class="demo-desc">10&nbsp;000$ виртуальных средств. Все инструменты реальной платформы. Без регистрации.</p>
        <div class="demo-stat">
          <span class="demo-stat-icon">📊</span>
          <p>Трейдеры, торговавшие 3+ дня на демо, показывают результат в <strong>2.5 раза лучше</strong></p>
        </div>
        <a href="https://pocketoption-po.com/demo" class="btn btn-primary btn-lg" target="_blank" rel="noopener noreferrer">Попробовать демо</a>
      </div>
      <div class="demo-visual">
        <div class="demo-amount">
          <span class="demo-amount-label">Демо-баланс</span>
          <span class="demo-amount-value">$10,000.00</span>
          <span class="demo-amount-note">Виртуальные средства · Бесплатно</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── ASSETS ── -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="accent-line"></div>
      <h2 class="section-title">Доступные активы для торговли</h2>
      <p class="section-subtitle">Более 150 торговых инструментов в 5 категориях</p>
    </div>
    <div class="grid-5">
      <div class="card asset-card"><div class="asset-icon">💱</div><h3 class="asset-title">Валюты</h3><p class="asset-items">EUR/USD, GBP/JPY...</p></div>
      <div class="card asset-card"><div class="asset-icon">🏢</div><h3 class="asset-title">Акции</h3><p class="asset-items">Tesla, Apple, Google</p></div>
      <div class="card asset-card"><div class="asset-icon">📉</div><h3 class="asset-title">Индексы</h3><p class="asset-items">S&amp;P500, NASDAQ</p></div>
      <div class="card asset-card"><div class="asset-icon">🛢️</div><h3 class="asset-title">Сырьё</h3><p class="asset-items">нефть, золото</p></div>
      <div class="card asset-card"><div class="asset-icon">₿</div><h3 class="asset-title">Криптовалюта</h3><p class="asset-items">BTC, ETH, USDT</p></div>
    </div>
  </div>
</section>

<!-- ── DEPOSIT / WITHDRAWAL ── -->
<section class="section deposit-section">
  <div class="container">
    <div class="section-header">
      <div class="accent-line"></div>
      <h2 class="section-title">Пополнение и вывод средств</h2>
      <p class="section-subtitle">Быстрые транзакции без комиссий брокера</p>
    </div>
    <div class="deposit-grid">
      <div class="table-wrapper">
        <table>
          <thead><tr><th>Параметр</th><th>Значение</th></tr></thead>
          <tbody>
            <tr><td>Минимальный депозит</td><td><strong>10$</strong></td></tr>
            <tr><td>Минимальный вывод</td><td><strong>2$</strong></td></tr>
            <tr><td>Время вывода</td><td>1 минута — 2 часа</td></tr>
            <tr><td>Комиссия брокера</td><td><span style="color:#1e90ff">0%</span></td></tr>
            <tr><td>Суточный лимит</td><td>до 50 000$ (верифицированные)</td></tr>
          </tbody>
        </table>
      </div>
      <div class="methods">
        <h3 class="methods-title">Способы оплаты</h3>
        <div class="methods-list">
          <span class="method">Visa</span>
          <span class="method">MasterCard</span>
          <span class="method">МИР</span>
          <span class="method">Skrill</span>
          <span class="method">Neteller</span>
          <span class="method">Bitcoin</span>
          <span class="method">USDT</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── SECURITY ── -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="accent-line"></div>
      <h2 class="section-title">Безопасность и защита</h2>
      <p class="section-subtitle">Средства клиентов защищены на нескольких уровнях</p>
    </div>
    <div class="grid-4">
      <div class="card sec-card"><div class="icon-box">🔒</div><h3 class="sec-title">TLS 1.3 шифрование</h3></div>
      <div class="card sec-card"><div class="icon-box">🛡️</div><h3 class="sec-title">Двухфакторная аутентификация</h3></div>
      <div class="card sec-card"><div class="icon-box">❄️</div><h3 class="sec-title">Холодное хранение крипто</h3></div>
      <div class="card sec-card"><div class="icon-box">🏦</div><h3 class="sec-title">Сегрегированные счета клиентов</h3></div>
    </div>
  </div>
</section>

<!-- ── FAQ PREVIEW ── -->
<section class="section faq-section">
  <div class="container">
    <div class="section-header">
      <div class="accent-line"></div>
      <h2 class="section-title">Часто задаваемые вопросы</h2>
    </div>
    <div class="faq-list">
      <details class="faq-item">
        <summary>Что такое Pocket Option?</summary>
        <div class="faq-answer">Pocket Option — международная платформа для торговли бинарными опционами, основанная в 2017 году. Более 2 миллионов трейдеров по всему миру. Лицензия Mwali International Services Authority.</div>
      </details>
      <details class="faq-item">
        <summary>Как начать торговать бесплатно?</summary>
        <div class="faq-answer">Зарегистрируйтесь бесплатно, получите демо-счёт 10 000$. Никакого депозита не требуется. Торгуйте всеми 150+ активами в учебном режиме без ограничений по времени.</div>
      </details>
      <details class="faq-item">
        <summary>Какой минимальный депозит?</summary>
        <div class="faq-answer">Минимальный депозит — всего 10$. Это один из самых низких порогов входа среди всех брокеров бинарных опционов. Минимальная сумма сделки — 1$.</div>
      </details>
    </div>
    <div class="faq-more">
      <a href="/faq/" class="btn btn-outline">Все вопросы и ответы</a>
    </div>
  </div>
</section>

<style>
/* ── HOME PAGE STYLES ── */
.home-hero { background: linear-gradient(160deg, #0d1528 0%, #0a0e1a 60%); padding: 96px 0 80px; position: relative; overflow: hidden; }
.home-hero::before { content: ''; position: absolute; top: -200px; right: -200px; width: 600px; height: 600px; background: radial-gradient(circle, rgba(30,144,255,0.08) 0%, transparent 70%); pointer-events: none; }
.hero-content { max-width: 760px; display: flex; flex-direction: column; gap: 24px; }
.hero-title { font-size: 3rem; font-weight: 900; line-height: 1.1; color: #fff; letter-spacing: -0.02em; }
.hero-subtext { font-size: 1.15rem; color: #d3e4ff; line-height: 1.65; max-width: 620px; }
.hero-btns { display: flex; flex-wrap: wrap; gap: 14px; align-items: center; }
.hero-stats { padding-top: 12px; }
.stat-divider { width: 1px; height: 36px; background: rgba(30,144,255,0.2); }
.card-title { font-size: 1.05rem; font-weight: 700; color: #fff; margin-bottom: 8px; }
.card-desc { font-size: 0.92rem; color: #d3e4ff; line-height: 1.6; }
.app-section { background: linear-gradient(180deg, #0a0e1a 0%, #0c1220 100%); }
.app-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: center; }
.app-text { display: flex; flex-direction: column; gap: 24px; }
.app-desc { font-size: 1rem; color: #d3e4ff; line-height: 1.65; }
.app-stats { gap: 24px; }
.app-visual { display: flex; justify-content: center; align-items: center; }
.phone-mock { width: 240px; height: 420px; background: #111a2e; border-radius: 32px; border: 2px solid rgba(30,144,255,0.3); padding: 20px 16px; display: flex; flex-direction: column; box-shadow: 0 24px 64px rgba(0,0,0,0.5), 0 0 40px rgba(30,144,255,0.08); }
.phone-screen { flex: 1; display: flex; flex-direction: column; gap: 16px; }
.phone-chart { flex: 1; display: flex; align-items: flex-end; gap: 6px; padding: 8px 0; }
.chart-bar { flex: 1; background: linear-gradient(to top, #1e90ff, rgba(30,144,255,0.3)); border-radius: 3px 3px 0 0; }
.phone-info { display: flex; justify-content: space-between; align-items: center; }
.phone-pair { font-size: 0.85rem; font-weight: 700; color: #eaf1ff; }
.phone-profit { font-size: 0.85rem; font-weight: 700; color: #22c55e; }
.phone-btns { display: grid; grid-template-columns: 1fr 1fr; gap: 8px; }
.phone-btn-up { background: rgba(34,197,94,0.15); border: 1px solid rgba(34,197,94,0.4); color: #22c55e; padding: 8px 4px; border-radius: 6px; font-size: 0.72rem; font-weight: 700; text-align: center; }
.phone-btn-down { background: rgba(239,68,68,0.15); border: 1px solid rgba(239,68,68,0.4); color: #ef4444; padding: 8px 4px; border-radius: 6px; font-size: 0.72rem; font-weight: 700; text-align: center; }
.promo-card { display: flex; flex-direction: column; gap: 16px; }
.promo-top { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
.promo-bonus { font-size: 1.25rem; font-weight: 800; color: #fff; flex: 1; }
.all-promos { text-align: center; margin-top: 32px; }
.all-link { font-size: 1rem; font-weight: 600; color: #1e90ff; text-decoration: none; transition: color 0.2s ease; }
.all-link:hover { color: #3aa8ff; }
.demo-section { background: linear-gradient(160deg, #0c1829 0%, #0a0e1a 100%); }
.demo-box { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: center; }
.demo-text { display: flex; flex-direction: column; gap: 24px; }
.demo-desc { font-size: 1.05rem; color: #d3e4ff; line-height: 1.65; }
.demo-stat { display: flex; align-items: flex-start; gap: 12px; background: rgba(30,144,255,0.08); border: 1px solid rgba(30,144,255,0.2); border-radius: 10px; padding: 16px 20px; }
.demo-stat-icon { font-size: 1.5rem; flex-shrink: 0; }
.demo-stat p { font-size: 0.95rem; color: #eaf1ff; line-height: 1.5; }
.demo-visual { display: flex; justify-content: center; align-items: center; }
.demo-amount { background: #0f1a2a; border: 1px solid rgba(30,144,255,0.25); border-radius: 20px; padding: 40px 48px; display: flex; flex-direction: column; align-items: center; gap: 8px; box-shadow: 0 16px 48px rgba(0,0,0,0.4); }
.demo-amount-label { font-size: 0.82rem; color: #d3e4ff; text-transform: uppercase; letter-spacing: 0.08em; }
.demo-amount-value { font-size: 2.8rem; font-weight: 900; color: #1e90ff; letter-spacing: -0.02em; }
.demo-amount-note { font-size: 0.82rem; color: rgba(211,228,255,0.5); }
.asset-card { text-align: center; display: flex; flex-direction: column; align-items: center; gap: 8px; }
.asset-icon { font-size: 2rem; margin-bottom: 4px; }
.asset-title { font-size: 1rem; font-weight: 700; color: #fff; }
.asset-items { font-size: 0.82rem; color: #d3e4ff; text-align: center; }
.deposit-section { background: linear-gradient(180deg, #0a0e1a 0%, #0c1220 100%); }
.deposit-grid { display: grid; grid-template-columns: 1.4fr 1fr; gap: 40px; align-items: start; }
.methods { background: #0f1a2a; border: 1px solid rgba(30,144,255,0.18); border-radius: 12px; padding: 28px; }
.methods-title { font-size: 1rem; font-weight: 700; color: #fff; margin-bottom: 18px; }
.methods-list { display: flex; flex-wrap: wrap; gap: 10px; }
.method { background: rgba(30,144,255,0.1); border: 1px solid rgba(30,144,255,0.25); border-radius: 6px; padding: 6px 14px; font-size: 0.88rem; font-weight: 600; color: #eaf1ff; }
.sec-card { display: flex; flex-direction: column; }
.sec-title { font-size: 0.97rem; font-weight: 700; color: #fff; }
.faq-section { background: linear-gradient(180deg, #0c1220 0%, #0a0e1a 100%); }
.faq-more { text-align: center; margin-top: 36px; }
@media (max-width: 1100px) {
  .app-grid { grid-template-columns: 1fr; gap: 40px; }
  .app-visual { display: none; }
  .demo-box { grid-template-columns: 1fr; gap: 40px; }
  .deposit-grid { grid-template-columns: 1fr; }
}
@media (max-width: 480px) {
  .hero-title { font-size: 2rem; }
  .hero-subtext { font-size: 1rem; }
  .hero-btns { flex-direction: column; align-items: stretch; }
  .stat-divider { display: none; }
  .demo-amount-value { font-size: 2.2rem; }
  .demo-amount { padding: 28px 32px; }
}
</style>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
