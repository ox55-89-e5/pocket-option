<?php
require_once dirname(__DIR__, 2) . '/includes/links.php';
$title = 'Индикаторы Pocket Option — какие есть и как использовать';
$description = 'Какие технические индикаторы доступны на Pocket Option: RSI, MACD, Bollinger Bands и другие. Как выбрать и применять в торговле.';
$canonical = SITE_URL . '/indicators/';
$og_type = 'article';

require_once dirname(__DIR__, 2) . '/includes/head.php';
require_once dirname(__DIR__, 2) . '/includes/header.php';

$article_title = 'Какие индикаторы есть на Pocket Option?';
$article_description = $description;
$article_slug = '/indicators/';
$breadcrumbs = [
  ['label' => 'Главная', 'href' => '/'],
  ['label' => 'FAQ', 'href' => '/faq/'],
  ['label' => 'Индикаторы'],
];
ob_start();
?>
<p>Pocket Option предоставляет богатый набор технических индикаторов для анализа рынка. Они помогают определить тренд, момент входа и выхода из сделки.</p>

<h2>Популярные индикаторы на платформе</h2>
<ul>
  <li><strong>RSI (Индекс относительной силы)</strong> — определяет перекупленность и перепроданность актива</li>
  <li><strong>MACD</strong> — сигналы на пересечении линий, определяет смену тренда</li>
  <li><strong>Bollinger Bands</strong> — волатильность и уровни поддержки/сопротивления</li>
  <li><strong>Stochastic Oscillator</strong> — сигналы разворота в зонах перекупленности</li>
  <li><strong>Moving Average (MA)</strong> — направление тренда</li>
  <li><strong>Alligator</strong> — определяет наличие тренда</li>
</ul>

<h2>Как добавить индикатор на график</h2>
<ol>
  <li>Откройте торговый терминал</li>
  <li>Нажмите на кнопку «Индикаторы» в верхней панели</li>
  <li>Выберите нужный индикатор из списка</li>
  <li>Настройте параметры и нажмите «Применить»</li>
</ol>

<div class="notice">💡 Не перегружайте график слишком большим количеством индикаторов — это затрудняет анализ. Начните с 1–2 инструментов.</div>
<?php
require_once dirname(__DIR__, 2) . '/includes/links.php';
$article_content = ob_get_clean();
require_once dirname(__DIR__, 2) . '/includes/article-layout.php';
require_once dirname(__DIR__, 2) . '/includes/footer.php';
