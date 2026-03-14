<?php
require_once dirname(__DIR__, 2) . '/includes/links.php';
$title = 'Восстановление пароля Pocket Option: что делать если забыл';
$description = 'Как восстановить пароль от аккаунта Pocket Option через email или телефон. Что делать если письмо не приходит, и как защитить аккаунт после смены.';
$canonical = SITE_URL . '/recovery-password/';
$og_type = 'article';

require_once dirname(__DIR__, 2) . '/includes/head.php';
require_once dirname(__DIR__, 2) . '/includes/header.php';

$article_title = 'Восстановление пароля Pocket Option';
$article_description = $description;
$article_slug = '/recovery-password/';
$breadcrumbs = [
  ['label' => 'Главная', 'href' => '/'],
  ['label' => 'FAQ', 'href' => '/faq/'],
  ['label' => 'Восстановление пароля'],
];
ob_start();
?>
<p>Потеря доступа к торговому профилю — ситуация неприятная, но поправимая. Платформа Pocket Option предлагает стандартный механизм восстановления пароля.</p>

<h2>Процедура сброса и создания нового пароля</h2>
<div class="step"><strong><span class="step-num">1</span>Переход на страницу входа</strong><p style="margin-top:10px;margin-bottom:0">Откройте официальный сайт Pocket Option или запустите приложение. Нажмите «Вход». Под полями для ввода находится ссылка «Забыли пароль?».</p></div>
<div class="step"><strong><span class="step-num">2</span>Ввод email или номера телефона</strong><p style="margin-top:10px;margin-bottom:0">Введите адрес электронной почты, к которому привязан аккаунт. После ввода нажмите «Сбросить пароль».</p></div>
<div class="step"><strong><span class="step-num">3</span>Письмо для сброса пароля</strong><p style="margin-top:10px;margin-bottom:0">В течение нескольких минут на указанный адрес придёт письмо со ссылкой. Ссылка действует 30–60 минут.</p></div>
<div class="step"><strong><span class="step-num">4</span>Требования к новому паролю</strong><p style="margin-top:10px;margin-bottom:0">Используйте не меньше 8 символов, чередуйте буквы разного регистра и цифры.</p></div>

<h2>Не пришло письмо для сброса пароля</h2>
<ul>
  <li><strong>Папка «Спам» или «Промоакции».</strong> Проверьте эти разделы.</li>
  <li><strong>Ошибка в email.</strong> Проверьте правильность введённого адреса.</li>
  <li><strong>Задержка доставки.</strong> Иногда письма идут 10–15 минут.</li>
  <li><strong>Блокировка провайдером.</strong> Запросите код через мобильную сеть или используйте VPN.</li>
</ul>

<div class="warning">⚠️ Не создавайте повторно запрос на сброс каждые 30 секунд. Это приведёт к временной блокировке. Интервал между запросами — не меньше 5–10 минут.</div>

<h2>Потеря доступа к почте и телефону</h2>
<p>Обратитесь в службу поддержки через онлайн-чат или на почту <strong>support@pocketoption.com</strong>. Подготовьте информацию, подтверждающую владение аккаунтом:</p>
<ul>
  <li>Приблизительная дата регистрации</li>
  <li>Последняя дата входа</li>
  <li>Номера сделок или скриншоты торговой истории</li>
</ul>

<div class="faq-list">
  <details class="faq-item"><summary>Что делать, если не приходит письмо для сброса пароля?</summary><div class="faq-answer">Проверьте папку «Спам». Убедитесь, что вы ввели правильный email. Если письма нет в течение 10–15 минут, запросите сброс повторно.</div></details>
  <details class="faq-item"><summary>Как восстановить пароль, если я не помню почту и телефон?</summary><div class="faq-answer">Единственный вариант — написать в службу поддержки. Вам потребуется подтвердить владение аккаунтом.</div></details>
</div>
<?php
require_once dirname(__DIR__, 2) . '/includes/links.php';
$article_content = ob_get_clean();
require_once dirname(__DIR__, 2) . '/includes/article-layout.php';
require_once dirname(__DIR__, 2) . '/includes/footer.php';
