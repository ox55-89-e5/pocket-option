<?php
require_once dirname(__DIR__, 2) . '/includes/links.php';
$title = 'Личный кабинет Pocket Option — вход, настройки, безопасность';
$description = 'Личный кабинет Pocket Option: вход через email или Google, верификация, пополнение и вывод, двухфакторная аутентификация. Управляйте счётом 24/7.';
$canonical = SITE_URL . '/cabinet/';
$og_type = 'website';

$page_schema = json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'WebPage',
  'name' => 'Личный кабинет Pocket Option',
  'url' => SITE_URL . '/cabinet/',
  'description' => 'Управление торговым аккаунтом Pocket Option: вход, верификация, пополнение и вывод средств.',
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$cabinet_features = [
  ['icon' => '✅', 'text' => 'Верификация аккаунта (паспорт + селфи)'],
  ['icon' => '💳', 'text' => 'Пополнение счёта — 10+ способов оплаты'],
  ['icon' => '💸', 'text' => 'Вывод средств за 1 минуту — 2 часа'],
  ['icon' => '🛡️', 'text' => 'Двухфакторная аутентификация (2FA)'],
  ['icon' => '📋', 'text' => 'История операций и сделок'],
  ['icon' => '⚙️', 'text' => 'Настройки профиля — 20+ языков интерфейса'],
  ['icon' => '🤝', 'text' => 'Партнёрская программа — до 80% комиссии'],
  ['icon' => '🔔', 'text' => 'Управление уведомлениями'],
];

$login_methods = [
  ['icon' => '📧', 'title' => 'Email и пароль', 'desc' => 'Стандартный вход. Используйте надёжный пароль из букв, цифр и символов.'],
  ['icon' => '🔵', 'title' => 'Через Google', 'desc' => 'Быстрый вход в один клик через аккаунт Google. Пароль не нужен.'],
  ['icon' => '👆', 'title' => 'Биометрия', 'desc' => 'Face ID или Touch ID в мобильном приложении для мгновенного входа.'],
];

$security_steps = [
  ['step' => '1', 'title' => 'Установите Google Authenticator', 'desc' => 'Скачайте приложение Google Authenticator из App Store или Google Play бесплатно.'],
  ['step' => '2', 'title' => 'Перейдите в настройки безопасности', 'desc' => 'Личный кабинет → Настройки → Безопасность → Двухфакторная аутентификация.'],
  ['step' => '3', 'title' => 'Отсканируйте QR-код', 'desc' => 'Откройте Google Authenticator, нажмите «+» и отсканируйте QR-код с экрана.'],
  ['step' => '4', 'title' => 'Введите код подтверждения', 'desc' => 'Введите 6-значный код из приложения для завершения настройки 2FA.'],
];

require_once dirname(__DIR__, 2) . '/includes/head.php';
require_once dirname(__DIR__, 2) . '/includes/header.php';
?>

<style>
.cab-hero { background: linear-gradient(160deg, #0d1528 0%, #0a0e1a 60%); padding: 96px 0 80px; position: relative; overflow: hidden; }
.cab-hero::before { content: ''; position: absolute; top: -200px; right: -200px; width: 600px; height: 600px; background: radial-gradient(circle, rgba(30,144,255,0.07) 0%, transparent 70%); pointer-events: none; }
.cab-hero-content { max-width: 720px; display: flex; flex-direction: column; gap: 24px; }
.cab-hero-title { font-size: 2.8rem; font-weight: 900; line-height: 1.1; color: #fff; letter-spacing: -0.02em; }
.cab-hero-subtext { font-size: 1.1rem; color: #d3e4ff; line-height: 1.65; max-width: 580px; }
.cab-hero-btns { display: flex; flex-wrap: wrap; gap: 14px; }
/* Login methods */
.method-title { font-size: 1.05rem; font-weight: 700; color: #fff; margin-bottom: 8px; }
.method-desc { font-size: 0.92rem; color: #d3e4ff; line-height: 1.6; }
/* Features */
.cab-features-section { background: linear-gradient(180deg, #0a0e1a 0%, #0c1220 100%); }
.cab-features-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: center; }
.cab-features-text { display: flex; flex-direction: column; gap: 24px; }
.cab-features-desc { font-size: 1rem; color: #d3e4ff; line-height: 1.65; }
.cab-features-list { display: flex; flex-direction: column; gap: 10px; }
.cab-features-item { display: flex; align-items: center; gap: 10px; font-size: 0.96rem; color: #eaf1ff; padding: 8px 12px; background: rgba(30,144,255,0.06); border-radius: 6px; border: 1px solid rgba(30,144,255,0.12); }
.cab-feature-icon { font-size: 1.1rem; flex-shrink: 0; }
/* Dashboard */
.cab-features-visual { display: flex; justify-content: center; }
.dashboard { background: #0f1a2a; border: 1px solid rgba(30,144,255,0.25); border-radius: 20px; padding: 28px; width: 100%; max-width: 340px; display: flex; flex-direction: column; gap: 24px; box-shadow: 0 24px 64px rgba(0,0,0,0.5); }
.dash-header { display: flex; justify-content: space-between; align-items: center; }
.dash-title { font-size: 0.9rem; font-weight: 700; color: #d3e4ff; text-transform: uppercase; letter-spacing: 0.05em; }
.dash-dot { width: 8px; height: 8px; border-radius: 50%; background: #22c55e; }
.dash-balance { display: flex; flex-direction: column; gap: 4px; }
.dash-bal-label { font-size: 0.78rem; color: rgba(211,228,255,0.5); text-transform: uppercase; letter-spacing: 0.06em; }
.dash-bal-value { font-size: 2.2rem; font-weight: 900; color: #fff; letter-spacing: -0.02em; }
.dash-bal-change { font-size: 0.85rem; color: #22c55e; font-weight: 600; }
.dash-stats { display: grid; grid-template-columns: repeat(3,1fr); gap: 12px; background: rgba(30,144,255,0.06); border-radius: 10px; padding: 14px; }
.dash-stat { display: flex; flex-direction: column; align-items: center; gap: 2px; }
.dash-stat-val { font-size: 1.15rem; font-weight: 800; color: #1e90ff; }
.dash-stat-label { font-size: 0.7rem; color: rgba(211,228,255,0.5); text-align: center; }
.dash-actions { display: grid; grid-template-columns: 1fr 1fr; gap: 10px; }
.dash-btn { display: block; background: #1e90ff; color: #fff; text-align: center; text-decoration: none; padding: 10px; border-radius: 8px; font-size: 0.85rem; font-weight: 700; }
.dash-btn-secondary { background: transparent; border: 1.5px solid rgba(30,144,255,0.4); color: #1e90ff; }
/* Verification */
.ver-title { font-size: 1.05rem; font-weight: 700; color: #fff; margin-bottom: 16px; }
.ver-card-pro { border-color: rgba(30,144,255,0.4) !important; background: rgba(30,144,255,0.04) !important; }
.ver-note { margin-top: 24px; font-size: 0.9rem; color: #d3e4ff; padding: 14px 20px; background: rgba(30,144,255,0.07); border-left: 3px solid #1e90ff; border-radius: 0 6px 6px 0; }
/* Security */
.cab-sec-section { background: linear-gradient(180deg, #0a0e1a 0%, #0c1220 100%); }
.sec-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 48px; align-items: start; }
.sec-steps { display: flex; flex-direction: column; gap: 0; }
.sec-step { display: flex; gap: 20px; padding: 20px 0; border-bottom: 1px solid rgba(30,144,255,0.1); }
.sec-step:last-child { border-bottom: none; }
.sec-step-num { width: 36px; height: 36px; border-radius: 50%; background: #1e90ff; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 0.9rem; font-weight: 800; flex-shrink: 0; margin-top: 2px; }
.sec-step-title { font-size: 1rem; font-weight: 700; color: #fff; }
.sec-step-desc { font-size: 0.9rem; color: #d3e4ff; line-height: 1.6; margin-top: 4px; }
.sec-card-title { font-size: 1.05rem; font-weight: 700; color: #fff; margin-bottom: 16px; }
.sec-card-desc { font-size: 0.92rem; color: #d3e4ff; line-height: 1.6; }
/* Partner */
.partner-title { font-size: 1.05rem; font-weight: 700; color: #fff; margin-bottom: 8px; }
.partner-desc { font-size: 0.92rem; color: #d3e4ff; line-height: 1.6; }
/* Support */
.cab-support-section { background: linear-gradient(180deg, #0a0e1a 0%, #0c1220 100%); }
.support-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: center; }
.support-text { display: flex; flex-direction: column; gap: 24px; }
.support-desc { font-size: 1rem; color: #d3e4ff; line-height: 1.65; }
.support-card-title { font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 20px; }
.support-btns { display: flex; flex-direction: column; gap: 12px; }
/* CTA */
.cab-cta-section { background: linear-gradient(160deg, #0c1829 0%, #0a0e1a 100%); }
.cab-cta-box { text-align: center; max-width: 600px; margin: 0 auto; display: flex; flex-direction: column; align-items: center; gap: 20px; }
.cab-cta-title { font-size: 2rem; font-weight: 800; color: #fff; }
.cab-cta-text { font-size: 1rem; color: #d3e4ff; }
@media (max-width: 1100px) { .cab-features-grid { grid-template-columns: 1fr; gap: 40px; } .cab-features-visual { display: none; } .sec-grid { grid-template-columns: 1fr; gap: 40px; } .support-grid { grid-template-columns: 1fr; gap: 40px; } }
@media (max-width: 480px) { .cab-hero-title { font-size: 2rem; } .cab-hero-btns { flex-direction: column; align-items: stretch; } .cab-cta-title { font-size: 1.55rem; } }
</style>

<!-- HERO -->
<section class="cab-hero">
  <div class="container">
    <div class="cab-hero-content">
      <span class="badge">Управление аккаунтом</span>
      <h1 class="cab-hero-title">Личный кабинет Pocket Option</h1>
      <p class="cab-hero-subtext">Управляйте счётом, настраивайте безопасность и отслеживайте статистику</p>
      <div class="cab-hero-btns">
        <a href="/lk/" class="btn btn-primary btn-lg" target="_blank" rel="noopener noreferrer">Войти в кабинет</a>
        <a href="/signup/" class="btn btn-outline btn-lg" target="_blank" rel="noopener noreferrer">Регистрация</a>
      </div>
    </div>
  </div>
</section>

<!-- LOGIN METHODS -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="accent-line"></div>
      <h2 class="section-title">Вход в личный кабинет</h2>
      <p class="section-subtitle">Несколько удобных способов авторизации</p>
    </div>
    <div class="grid-3">
      <?php foreach ($login_methods as $m): ?>
      <div class="card">
        <div class="icon-box"><?= $m['icon'] ?></div>
        <h3 class="method-title"><?= htmlspecialchars($m['title']) ?></h3>
        <p class="method-desc"><?= htmlspecialchars($m['desc']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="section cab-features-section">
  <div class="container">
    <div class="cab-features-grid">
      <div class="cab-features-text">
        <div class="accent-line"></div>
        <h2 class="section-title">Возможности личного кабинета</h2>
        <p class="cab-features-desc">Полный контроль над торговым аккаунтом в одном месте. От верификации до вывода средств — всё доступно 24/7.</p>
        <ul class="cab-features-list">
          <?php foreach ($cabinet_features as $f): ?>
          <li class="cab-features-item">
            <span class="cab-feature-icon"><?= $f['icon'] ?></span>
            <span><?= htmlspecialchars($f['text']) ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="cab-features-visual">
        <div class="dashboard">
          <div class="dash-header">
            <span class="dash-title">Мой кабинет</span>
            <span class="dash-dot"></span>
          </div>
          <div class="dash-balance">
            <span class="dash-bal-label">Реальный счёт</span>
            <span class="dash-bal-value">$1,250.00</span>
            <span class="dash-bal-change">+$92.00 сегодня</span>
          </div>
          <div class="dash-stats">
            <div class="dash-stat"><span class="dash-stat-val">68%</span><span class="dash-stat-label">Прибыльных</span></div>
            <div class="dash-stat"><span class="dash-stat-val">142</span><span class="dash-stat-label">Сделок</span></div>
            <div class="dash-stat"><span class="dash-stat-val">92%</span><span class="dash-stat-label">Выплата</span></div>
          </div>
          <div class="dash-actions">
            <a href="/deposit/" class="dash-btn">Пополнить</a>
            <a href="/withdraw/" class="dash-btn dash-btn-secondary">Вывести</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- VERIFICATION -->
<section class="section" id="verification">
  <div class="container">
    <div class="section-header">
      <div class="accent-line"></div>
      <h2 class="section-title">Верификация аккаунта</h2>
      <p class="section-subtitle">Пройдите верификацию, чтобы снять ограничения и увеличить лимит вывода</p>
    </div>
    <div class="grid-2">
      <div class="card">
        <div class="icon-box">🚫</div>
        <h3 class="ver-title">Без верификации</h3>
        <ul class="checklist">
          <li>Лимит вывода: 1 000$ в сутки</li>
          <li>Базовый доступ к платформе</li>
          <li>Все торговые функции доступны</li>
        </ul>
      </div>
      <div class="card ver-card-pro">
        <div class="icon-box">✅</div>
        <h3 class="ver-title">После верификации</h3>
        <ul class="checklist">
          <li>Лимит вывода: до 50 000$ в сутки</li>
          <li>Приоритетная поддержка</li>
          <li>Доступ к эксклюзивным акциям</li>
          <li>Ускоренная обработка выводов</li>
        </ul>
      </div>
    </div>
    <p class="ver-note">Для верификации: Личный кабинет → Верификация → загрузите фото паспорта и сделайте селфи. Обычно занимает 5 минут — 2 часа.</p>
  </div>
</section>

<!-- 2FA SECURITY -->
<section class="section cab-sec-section" id="security">
  <div class="container">
    <div class="section-header">
      <div class="accent-line"></div>
      <h2 class="section-title">Безопасность аккаунта</h2>
      <p class="section-subtitle">Настройте двухфакторную аутентификацию для защиты от несанкционированного входа</p>
    </div>
    <div class="sec-grid">
      <div class="sec-steps">
        <?php foreach ($security_steps as $s): ?>
        <div class="sec-step">
          <div class="sec-step-num"><?= $s['step'] ?></div>
          <div>
            <h3 class="sec-step-title"><?= htmlspecialchars($s['title']) ?></h3>
            <p class="sec-step-desc"><?= htmlspecialchars($s['desc']) ?></p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
      <div>
        <div class="card">
          <div class="icon-box">🛡️</div>
          <h3 class="sec-card-title">Что защищает 2FA?</h3>
          <ul class="checklist">
            <li>Защита от взлома даже при утечке пароля</li>
            <li>Подтверждение выводов средств</li>
            <li>Вход с новых устройств</li>
            <li>Изменение настроек аккаунта</li>
          </ul>
        </div>
        <div class="card" style="margin-top:20px">
          <div class="icon-box">📱</div>
          <h3 class="sec-card-title">Google Authenticator</h3>
          <p class="sec-card-desc">Генерирует одноразовые 6-значные коды каждые 30 секунд. Работает без интернета. Рекомендуемое приложение для 2FA.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PARTNER PROGRAM -->
<section class="section" id="partner">
  <div class="container">
    <div class="section-header">
      <div class="accent-line"></div>
      <h2 class="section-title">Партнёрская программа</h2>
      <p class="section-subtitle">Зарабатывайте до 80% комиссии от привлечённых трейдеров</p>
    </div>
    <div class="grid-3">
      <div class="card">
        <div class="icon-box">💰</div>
        <h3 class="partner-title">До 80% комиссии</h3>
        <p class="partner-desc">Один из самых высоких процентов среди партнёрских программ брокеров. Чем больше активных трейдеров — тем выше ваш процент.</p>
      </div>
      <div class="card">
        <div class="icon-box">📊</div>
        <h3 class="partner-title">Детальная статистика</h3>
        <p class="partner-desc">Отслеживайте клики, регистрации, депозиты и комиссии в режиме реального времени в личном кабинете партнёра.</p>
      </div>
      <div class="card">
        <div class="icon-box">💸</div>
        <h3 class="partner-title">Ежемесячные выплаты</h3>
        <p class="partner-desc">Комиссии выплачиваются ежемесячно на счёт Pocket Option или любым удобным способом без комиссии.</p>
      </div>
    </div>
  </div>
</section>

<!-- SUPPORT -->
<section class="section cab-support-section" id="support">
  <div class="container">
    <div class="support-grid">
      <div class="support-text">
        <div class="accent-line"></div>
        <h2 class="section-title">Поддержка 24/7</h2>
        <p class="support-desc">Профессиональная помощь на 12 языках в любое время суток. Среднее время ответа — 25 секунд.</p>
        <ul class="checklist">
          <li>Онлайн-чат — ответ за 25 секунд</li>
          <li>Email: support@pocketoption.com</li>
          <li>Telegram-канал с обновлениями</li>
          <li>База знаний с обучающими материалами</li>
          <li>Поддержка на 12 языках</li>
        </ul>
      </div>
      <div>
        <div class="card">
          <h3 class="support-card-title">Связаться с поддержкой</h3>
          <div class="support-btns">
            <a href="https://pocketoption-po.com" class="btn btn-primary" target="_blank" rel="noopener noreferrer">💬 Онлайн-чат</a>
            <a href="mailto:support@pocketoption.com" class="btn btn-outline">✉️ Email</a>
            <a href="/faq/" class="btn btn-outline">📖 FAQ</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="section cab-cta-section">
  <div class="container">
    <div class="cab-cta-box">
      <h2 class="cab-cta-title">Войдите в личный кабинет</h2>
      <p class="cab-cta-text">Управляйте счётом, пополняйте и выводите средства, настраивайте безопасность</p>
      <a href="/lk/" class="btn btn-primary btn-lg" target="_blank" rel="noopener noreferrer">Войти в кабинет</a>
    </div>
  </div>
</section>

<?php require_once dirname(__DIR__, 2) . '/includes/footer.php'; ?>
