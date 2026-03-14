<?php
require_once dirname(__DIR__, 2) . '/includes/links.php';
$title = 'История сделок Pocket Option — как посмотреть и скачать';
$description = 'Как просмотреть историю сделок и транзакций в Pocket Option: где найти раздел, как фильтровать операции и скачать отчёт.';
$canonical = SITE_URL . '/history/';
$og_type = 'article';

require_once dirname(__DIR__, 2) . '/includes/head.php';
require_once dirname(__DIR__, 2) . '/includes/header.php';

$article_title = 'Как посмотреть историю сделок в Pocket Option?';
$article_description = $description;
$article_slug = '/history/';
$breadcrumbs = [
  ['label' => 'Главная', 'href' => '/'],
  ['label' => 'FAQ', 'href' => '/faq/'],
  ['label' => 'История сделок'],
];
ob_start();
?>
<p>История сделок — важный инструмент для анализа торговой активности. В Pocket Option все операции фиксируются в реальном времени и доступны для изучения в любой момент.</p>

<h2>Где найти историю сделок</h2>
<ol>
  <li>Войдите в личный кабинет</li>
  <li>Перейдите в раздел «История» или «Транзакции»</li>
  <li>Выберите нужный период и тип операций</li>
</ol>

<h2>Что содержит история</h2>
<ul>
  <li>Все торговые сделки с результатами</li>
  <li>Операции по вводу и выводу средств</li>
  <li>Начисления бонусов и кешбэка</li>
  <li>Даты, суммы, активы и направление каждой сделки</li>
</ul>

<h2>Фильтры и экспорт</h2>
<p>История поддерживает фильтрацию по дате, типу операции и активу. Данные можно экспортировать в CSV для анализа в Excel или Google Sheets.</p>

<div class="notice">💡 Анализ истории сделок помогает выявить слабые места в торговой стратегии и улучшить результаты.</div>
<?php
require_once dirname(__DIR__, 2) . '/includes/links.php';
$article_content = ob_get_clean();
require_once dirname(__DIR__, 2) . '/includes/article-layout.php';
require_once dirname(__DIR__, 2) . '/includes/footer.php';
