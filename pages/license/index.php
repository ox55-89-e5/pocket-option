<?php
$SITE_URL = 'https://pocoptrade.com';
$title = 'Лицензия Pocket Option — регуляция и надёжность брокера';
$description = 'Лицензия и регуляция Pocket Option: IFMRRC, Mwali International Services Authority. Насколько надёжна платформа и как проверить лицензию.';
$canonical = $SITE_URL . '/license/';
$og_type = 'article';

require_once dirname(__DIR__, 2) . '/includes/head.php';
require_once dirname(__DIR__, 2) . '/includes/header.php';

$article_title = 'Лицензия и регуляция Pocket Option';
$article_description = $description;
$article_slug = '/license/';
$breadcrumbs = [
  ['label' => 'Главная', 'href' => '/'],
  ['label' => 'FAQ', 'href' => '/faq/'],
  ['label' => 'Лицензия'],
];
ob_start();
?>
<p>Pocket Option работает с 2017 года. Вопрос о лицензии — один из первых, которые задают начинающие трейдеры при выборе платформы для торговли бинарными опционами.</p>

<h2>Регуляция Pocket Option</h2>
<p>Компания Gembell Limited, управляющая Pocket Option, имеет лицензию <strong>Mwali International Services Authority (MISA)</strong> — регулятор Коморских островов. Номер лицензии: BFX2021085.</p>
<p>Дополнительно платформа является членом <strong>IFMRRC</strong> (Международный финансовый рынок и Регуляторный центр) — организации по разрешению финансовых споров.</p>

<h2>Что даёт лицензия трейдеру</h2>
<ul>
  <li>Обязательное соблюдение стандартов честной торговли</li>
  <li>Возможность подать жалобу в IFMRRC при спорах</li>
  <li>Раздельное хранение средств клиентов и компании</li>
</ul>

<h2>Ограничения для российских трейдеров</h2>
<p>Pocket Option входит в чёрный список Банка России, так как не имеет российской лицензии ЦБ РФ. Это не означает мошенничество, но означает, что при спорах нельзя обратиться в российские регуляторные органы.</p>

<div class="notice">💡 Перед началом торговли убедитесь, что понимаете правовой статус платформы в вашей стране. Торговля ведётся на собственный риск.</div>
<?php
$article_content = ob_get_clean();
require_once dirname(__DIR__, 2) . '/includes/article-layout.php';
require_once dirname(__DIR__, 2) . '/includes/footer.php';
