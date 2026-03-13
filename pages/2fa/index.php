<?php
$SITE_URL = 'https://pocketoption-po.com';
$title = 'Двухфакторная аутентификация Pocket Option — как включить 2FA';
$description = 'Как включить и настроить двухфакторную аутентификацию (2FA) на Pocket Option для защиты аккаунта.';
$canonical = $SITE_URL . '/2fa/';
$og_type = 'article';

require_once dirname(__DIR__, 2) . '/includes/head.php';
require_once dirname(__DIR__, 2) . '/includes/header.php';

$article_title = 'Как включить двухфакторную защиту на Pocket Option?';
$article_description = $description;
$article_slug = '/2fa/';
$breadcrumbs = [
  ['label' => 'Главная', 'href' => '/'],
  ['label' => 'FAQ', 'href' => '/faq/'],
  ['label' => 'Двухфакторная аутентификация'],
];
ob_start();
?>
<p>Двухфакторная аутентификация (2FA) — дополнительный уровень защиты аккаунта. Даже если злоумышленник узнает ваш пароль, войти без кода из приложения или SMS не получится.</p>

<h2>Как включить 2FA</h2>
<ol>
  <li>Войдите в личный кабинет Pocket Option</li>
  <li>Перейдите в «Настройки» → «Безопасность»</li>
  <li>Нажмите «Включить 2FA»</li>
  <li>Выберите метод: приложение (Google Authenticator) или SMS</li>
  <li>Отсканируйте QR-код или введите секретный ключ в приложение</li>
  <li>Введите код подтверждения для активации</li>
</ol>

<h2>Рекомендуемые приложения для 2FA</h2>
<ul>
  <li>Google Authenticator (iOS / Android)</li>
  <li>Authy — с резервным копированием кодов</li>
  <li>Microsoft Authenticator</li>
</ul>

<div class="notice">💡 Сохраните резервные коды в безопасном месте. Если потеряете доступ к приложению 2FA без резервных кодов, восстановление аккаунта займёт время.</div>

<h2>Что делать если потерял доступ к 2FA</h2>
<p>Обратитесь в службу поддержки. Потребуется пройти верификацию личности для подтверждения владения аккаунтом.</p>
<?php
$article_content = ob_get_clean();
require_once dirname(__DIR__, 2) . '/includes/article-layout.php';
require_once dirname(__DIR__, 2) . '/includes/footer.php';
