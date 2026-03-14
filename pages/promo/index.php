<?php
require_once dirname(__DIR__, 2) . '/includes/links.php';
$title = 'Промокоды Pocket Option 2026 — бонусы и кешбэк';
$description = 'Актуальные промокоды Pocket Option 2026. START100 — +100% к депозиту, CASHBACK20 — 20% кешбэк, RISKFREE3 — 3 безрисковые сделки. Активируйте прямо сейчас.';
$canonical = SITE_URL . '/promo/';
$og_type = 'website';

$page_schema = json_encode([
  '@context' => 'https://schema.org',
  '@type' => 'ItemList',
  'name' => 'Промокоды Pocket Option 2026',
  'description' => 'Список актуальных промокодов и бонусов платформы Pocket Option',
  'itemListElement' => [
    ['@type' => 'ListItem', 'position' => 1, 'name' => 'START100 — +100% к депозиту'],
    ['@type' => 'ListItem', 'position' => 2, 'name' => 'WELCOME50 — +50% к депозиту'],
    ['@type' => 'ListItem', 'position' => 3, 'name' => 'CASHBACK20 — 20% кешбэк'],
  ],
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

$promo_codes = [
  ['code' => 'START100', 'bonus' => '+100%', 'limit' => 'до 500$', 'desc' => '100% к первому депозиту', 'tag' => 'Хит'],
  ['code' => 'WELCOME50', 'bonus' => '+50%', 'limit' => 'Без лимита', 'desc' => 'Без максимального лимита', 'tag' => ''],
  ['code' => 'DEMO100', 'bonus' => '100$ на демо', 'limit' => 'Демо-счёт', 'desc' => 'На демо-счёт', 'tag' => ''],
  ['code' => 'CASHBACK20', 'bonus' => '20% кешбэк', 'limit' => 'Еженедельно', 'desc' => 'Возврат проигранных средств еженедельно', 'tag' => 'Популярный'],
  ['code' => 'RISKFREE3', 'bonus' => '3 фрибета', 'limit' => 'до 50$ / сделка', 'desc' => 'До 50$ за каждую безрисковую сделку', 'tag' => ''],
  ['code' => 'WEEKLY10', 'bonus' => '+10%', 'limit' => 'Еженедельно', 'desc' => 'Еженедельный бонус к депозиту', 'tag' => ''],
  ['code' => 'TOURNAMENT50', 'bonus' => '50$', 'limit' => 'Турниры', 'desc' => 'Для участия в турнирах', 'tag' => ''],
];

$promo_faq = [
  ['q' => 'Можно ли применить несколько промокодов одновременно?', 'a' => 'Нет, одновременно можно использовать только один активный бонус. Однако после отыгрывания первого промокода вы можете активировать следующий.'],
  ['q' => 'Сгорает ли бонус, если не отыграть за 7 дней?', 'a' => 'Да, большинство бонусов имеют срок действия 7-30 дней. Бонус и нотыгранная его часть аннулируются по истечении срока. Уточняйте условия конкретного промокода.'],
  ['q' => 'Что такое вейджер x3?', 'a' => 'Вейджер x3 означает, что прежде чем вывести бонусные средства, нужно совершить сделки на сумму, в 3 раза превышающую размер бонуса. Например, бонус 100$ → нужно торговать на 300$.'],
  ['q' => 'Работает ли START100 при повторном депозите?', 'a' => 'Нет, START100 — приветственный бонус на первый депозит. Для повторных пополнений используйте WEEKLY10 или CASHBACK20.'],
  ['q' => 'Можно ли получить промокод без депозита?', 'a' => 'DEMO100 зачисляет 100$ на демо-счёт без депозита. Для реального счёта бонусы без депозита предоставляются в рамках специальных акций — следите за Telegram-каналом.'],
];

require_once dirname(__DIR__, 2) . '/includes/head.php';
require_once dirname(__DIR__, 2) . '/includes/header.php';
?>

<style>
.promo-hero { background: linear-gradient(160deg, #0d1528 0%, #0a0e1a 60%); padding: 96px 0 80px; }
.promo-hero-content { max-width: 720px; display: flex; flex-direction: column; gap: 20px; }
.promo-hero-title { font-size: 2.8rem; font-weight: 900; line-height: 1.1; color: #fff; letter-spacing: -0.02em; }
.promo-hero-subtext { font-size: 1.1rem; color: #d3e4ff; line-height: 1.65; max-width: 580px; }
/* Cards (mobile) */
.promo-cards { display: none; grid-template-columns: 1fr; gap: 16px; }
.promo-card { display: flex; flex-direction: column; gap: 14px; }
.promo-card-top { display: flex; align-items: center; gap: 10px; flex-wrap: wrap; }
.promo-card-body { display: flex; gap: 24px; }
.promo-label { display: block; font-size: 0.75rem; color: rgba(211,228,255,0.55); text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 2px; }
.promo-value { display: block; font-size: 1.3rem; font-weight: 800; color: #1e90ff; }
.promo-limit { display: block; font-size: 0.92rem; color: #eaf1ff; font-weight: 600; }
.promo-desc { font-size: 0.9rem; color: #d3e4ff; }
/* Alt section */
.alt-section { background: linear-gradient(180deg, #0a0e1a 0%, #0c1220 100%); }
/* Bonus cards */
.bonus-title { font-size: 1.1rem; font-weight: 700; color: #fff; margin-bottom: 12px; }
.bonus-desc { font-size: 0.93rem; color: #d3e4ff; line-height: 1.65; margin-bottom: 16px; }
.bonus-details { display: flex; gap: 20px; margin-bottom: 20px; }
.bonus-details span { font-size: 0.82rem; color: rgba(211,228,255,0.6); background: rgba(30,144,255,0.08); border: 1px solid rgba(30,144,255,0.18); border-radius: 4px; padding: 3px 10px; }
/* Cashback */
.cashback-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: center; }
.cashback-text { display: flex; flex-direction: column; gap: 24px; }
.cashback-desc { font-size: 1rem; color: #d3e4ff; line-height: 1.65; }
.cashback-visual { display: flex; justify-content: center; }
.cashback-card { background: #0f1a2a; border: 1px solid rgba(30,144,255,0.22); border-radius: 20px; padding: 36px; display: flex; flex-direction: column; gap: 24px; min-width: 280px; box-shadow: 0 16px 48px rgba(0,0,0,0.35); }
.cashback-amount { display: flex; align-items: baseline; gap: 8px; }
.cashback-percent { font-size: 3.5rem; font-weight: 900; color: #1e90ff; line-height: 1; }
.cashback-word { font-size: 1.2rem; font-weight: 700; color: #eaf1ff; }
.cashback-calc { display: flex; flex-direction: column; gap: 10px; }
.calc-row { display: flex; justify-content: space-between; font-size: 0.9rem; color: #d3e4ff; padding: 6px 0; border-bottom: 1px solid rgba(30,144,255,0.1); }
.calc-green { color: #22c55e; font-weight: 700; }
.calc-total { font-weight: 700; color: #fff; border-bottom: none; padding-top: 10px; }
/* Risk free */
.rf-desc { font-size: 1.05rem; color: #d3e4ff; max-width: 640px; margin-bottom: 0; }
.rf-card { display: flex; flex-direction: column; gap: 12px; }
.rf-num { font-size: 2rem; font-weight: 900; color: rgba(30,144,255,0.3); line-height: 1; }
.rf-title { font-size: 1.05rem; font-weight: 700; color: #fff; }
.rf-text { font-size: 0.92rem; color: #d3e4ff; line-height: 1.6; }
/* Steps */
.step-card { display: flex; flex-direction: column; gap: 12px; align-items: flex-start; }
.step-num { width: 40px; height: 40px; border-radius: 50%; background: #1e90ff; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 1rem; font-weight: 800; flex-shrink: 0; }
.step-text { font-size: 0.97rem; color: #eaf1ff; font-weight: 500; }
/* Conditions */
.cond-title { font-size: 1.05rem; font-weight: 700; color: #fff; margin-bottom: 10px; }
.cond-desc { font-size: 0.93rem; color: #d3e4ff; line-height: 1.65; }
@media (max-width: 1100px) { .cashback-grid { grid-template-columns: 1fr; gap: 40px; } }
@media (max-width: 768px) { .table-wrapper { display: none; } .promo-cards { display: grid; } }
@media (max-width: 480px) { .promo-hero-title { font-size: 2rem; } .cashback-visual { display: none; } }
</style>

<!-- HERO -->
<section class="promo-hero">
  <div class="container">
    <div class="promo-hero-content">
      <span class="badge">Актуально в 2026</span>
      <h1 class="promo-hero-title">Промокоды и бонусы Pocket Option 2026</h1>
      <p class="promo-hero-subtext">Увеличьте депозит до 100%, получайте кешбэк до 20% и безрисковые сделки</p>
    </div>
  </div>
</section>

<!-- PROMO TABLE -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="accent-line"></div>
      <h2 class="section-title">Все промокоды 2026</h2>
      <p class="section-subtitle">Проверенные коды, которые работают прямо сейчас</p>
    </div>

    <!-- Mobile cards -->
    <div class="promo-cards">
      <?php foreach ($promo_codes as $p): ?>
      <div class="card card-2 promo-card">
        <div class="promo-card-top">
          <span class="promo-code"><?= htmlspecialchars($p['code']) ?></span>
          <?php if ($p['tag']): ?><span class="badge"><?= htmlspecialchars($p['tag']) ?></span><?php endif; ?>
        </div>
        <div class="promo-card-body">
          <div>
            <span class="promo-label">Бонус</span>
            <span class="promo-value"><?= htmlspecialchars($p['bonus']) ?></span>
          </div>
          <div>
            <span class="promo-label">Лимит</span>
            <span class="promo-limit"><?= htmlspecialchars($p['limit']) ?></span>
          </div>
        </div>
        <p class="promo-desc"><?= htmlspecialchars($p['desc']) ?></p>
        <a href="/signup/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Активировать</a>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Desktop table -->
    <div class="table-wrapper">
      <table>
        <thead>
          <tr>
            <th>Промокод</th>
            <th>Бонус</th>
            <th>Описание</th>
            <th>Лимит</th>
            <th>Действие</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($promo_codes as $p): ?>
          <tr>
            <td>
              <span class="promo-code"><?= htmlspecialchars($p['code']) ?></span>
              <?php if ($p['tag']): ?> <span class="badge"><?= htmlspecialchars($p['tag']) ?></span><?php endif; ?>
            </td>
            <td><strong style="color:#1e90ff"><?= htmlspecialchars($p['bonus']) ?></strong></td>
            <td><?= htmlspecialchars($p['desc']) ?></td>
            <td><?= htmlspecialchars($p['limit']) ?></td>
            <td><a href="/signup/" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Активировать</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- BEGINNER BONUSES -->
<section class="section alt-section">
  <div class="container">
    <div class="section-header">
      <div class="accent-line"></div>
      <h2 class="section-title">Для новичков</h2>
      <p class="section-subtitle">Приветственные бонусы для новых трейдеров</p>
    </div>
    <div class="grid-2">
      <div class="card">
        <div class="icon-box">🎯</div>
        <h3 class="bonus-title">START100 — +100% к первому депозиту</h3>
        <p class="bonus-desc">Самый популярный бонус для новичков. Внесите депозит и получите 100% сверху — до 500$. Торгуйте удвоенной суммой с первого дня.</p>
        <div class="bonus-details"><span>Вейджер: x3</span><span>Срок: 30 дней</span></div>
        <a href="/signup/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Использовать START100</a>
      </div>
      <div class="card">
        <div class="icon-box">💎</div>
        <h3 class="bonus-title">WELCOME50 — +50% без максимального лимита</h3>
        <p class="bonus-desc">Бонус 50% без ограничения суммы. Подходит для крупных депозитов: внесите 1000$ и получите дополнительные 500$ на торговлю.</p>
        <div class="bonus-details"><span>Вейджер: x3</span><span>Срок: 30 дней</span></div>
        <a href="/signup/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Использовать WELCOME50</a>
      </div>
    </div>
  </div>
</section>

<!-- CASHBACK -->
<section class="section">
  <div class="container">
    <div class="cashback-grid">
      <div class="cashback-text">
        <div class="accent-line"></div>
        <h2 class="section-title">Кешбэк CASHBACK20</h2>
        <p class="cashback-desc">Возврат до 20% убытков каждую неделю. Торгуйте уверенно, зная, что часть проигрышей вернётся на ваш счёт автоматически.</p>
        <ul class="checklist">
          <li>Применяется к убыточным сделкам за неделю</li>
          <li>Начисляется автоматически каждый понедельник</li>
          <li>Максимальный размер кешбэка не ограничен</li>
          <li>Можно совмещать с другими акциями</li>
        </ul>
        <a href="/signup/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Активировать CASHBACK20</a>
      </div>
      <div class="cashback-visual">
        <div class="cashback-card">
          <div class="cashback-amount">
            <span class="cashback-percent">20%</span>
            <span class="cashback-word">кешбэк</span>
          </div>
          <div class="cashback-calc">
            <div class="calc-row"><span>Убыток за неделю</span><span>-500$</span></div>
            <div class="calc-row"><span>Кешбэк (20%)</span><span class="calc-green">+100$</span></div>
            <div class="calc-row calc-total"><span>Реальный убыток</span><span>-400$</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- RISK FREE -->
<section class="section alt-section">
  <div class="container">
    <div class="section-header">
      <div class="accent-line"></div>
      <h2 class="section-title">Безрисковые сделки RISKFREE3</h2>
      <p class="rf-desc">3 сделки без риска потери — до 50$ за каждую. Если сделка закрывается в минус, ставка возвращается на счёт.</p>
    </div>
    <div class="grid-3">
      <div class="card rf-card">
        <div class="rf-num">01</div>
        <h3 class="rf-title">Открываете сделку</h3>
        <p class="rf-text">Торгуйте любым из 150+ активов. Ставка до 50$ застрахована промокодом.</p>
      </div>
      <div class="card rf-card">
        <div class="rf-num">02</div>
        <h3 class="rf-title">Сделка закрылась в минус</h3>
        <p class="rf-text">Ставка автоматически возвращается на ваш счёт. Вы ничего не потеряли.</p>
      </div>
      <div class="card rf-card">
        <div class="rf-num">03</div>
        <h3 class="rf-title">3 попытки</h3>
        <p class="rf-text">У вас 3 безрисковые сделки. Используйте их для тестирования стратегий.</p>
      </div>
    </div>
  </div>
</section>

<!-- HOW TO ACTIVATE -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="accent-line"></div>
      <h2 class="section-title">Как активировать промокод</h2>
    </div>
    <div class="grid-4">
      <div class="card step-card"><div class="step-num">1</div><p class="step-text">Войдите в личный кабинет</p></div>
      <div class="card step-card"><div class="step-num">2</div><p class="step-text">Перейдите в раздел «Счёт»</p></div>
      <div class="card step-card"><div class="step-num">3</div><p class="step-text">Нажмите «Активировать промокод»</p></div>
      <div class="card step-card"><div class="step-num">4</div><p class="step-text">Введите код и нажмите «Применить»</p></div>
    </div>
  </div>
</section>

<!-- CONDITIONS -->
<section class="section alt-section">
  <div class="container">
    <div class="section-header">
      <div class="accent-line"></div>
      <h2 class="section-title">Условия отыгрыша</h2>
    </div>
    <div class="grid-2">
      <div class="card">
        <div class="icon-box">📋</div>
        <h3 class="cond-title">Вейджер x3</h3>
        <p class="cond-desc">Для вывода бонусных средств необходимо совершить сделки на сумму, в 3 раза превышающую размер бонуса. Пример: бонус 100$ → нужно совершить сделки на 300$.</p>
      </div>
      <div class="card">
        <div class="icon-box">⏱️</div>
        <h3 class="cond-title">Срок действия</h3>
        <p class="cond-desc">Большинство бонусов действуют 7–30 дней с момента активации. По истечении срока неотыгранный бонус аннулируется. Конкретные сроки указаны в условиях каждого промокода.</p>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <div class="accent-line"></div>
      <h2 class="section-title">Вопросы о бонусах</h2>
    </div>
    <div class="faq-list">
      <?php foreach ($promo_faq as $item): ?>
      <details class="faq-item">
        <summary><?= htmlspecialchars($item['q']) ?></summary>
        <div class="faq-answer"><?= htmlspecialchars($item['a']) ?></div>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require_once dirname(__DIR__, 2) . '/includes/footer.php'; ?>
