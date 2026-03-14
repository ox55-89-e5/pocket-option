<?php
require_once dirname(__DIR__, 2) . '/includes/links.php';
$title = 'Служба поддержки Pocket Option: как связаться на русском 24/7';
$description = 'Как связаться с поддержкой Pocket Option на русском: онлайн-чат, email, Telegram. Время ответа, восстановление доступа и решение частых проблем.';
$canonical = SITE_URL . '/support/';
$og_type = 'article';
require_once dirname(__DIR__, 2) . '/includes/head.php';
require_once dirname(__DIR__, 2) . '/includes/header.php';
$article_title = 'Как связаться с поддержкой на русском в Pocket Option';
$article_description = $description;
$article_slug = '/support/';
$breadcrumbs = [['label' => 'Главная', 'href' => '/'], ['label' => 'FAQ', 'href' => '/faq/'], ['label' => 'Поддержка']];
ob_start();
?>
<p>Зависшие сделки, не зачисленный депозит, проблемы с верификацией, забытый пароль — с такими вопросами трейдеры обращаются в поддержку. Рассмотрим все каналы связи.</p>

<h2>Онлайн-чат на сайте и в приложении</h2>
<p>Самый быстрый способ — встроенный чат. Нажмите на иконку чата в правом нижнем углу. Время ответа — <strong>в течение 1–5 минут</strong>. Русскоязычные операторы доступны 24/7.</p>

<h3>Что писать в чат</h3>
<ul>
  <li>Укажите email аккаунта или ID</li>
  <li>Опишите проблему конкретно</li>
  <li>Приложите скриншоты при ошибках</li>
</ul>

<h2>Электронная почта support@pocketoption.com</h2>
<p>Email подходит для сложных случаев: оспаривание вывода, восстановление доступа, жалобы. Время ответа: <strong>от 4 до 24 часов</strong>.</p>

<div class="notice">💡 Не создавайте несколько одинаковых запросов — это перегружает очередь. Для срочных вопросов используйте чат.</div>

<h2>Сравнение каналов связи</h2>
<table>
  <thead><tr><th>Канал</th><th>Время ответа</th><th>Для чего</th></tr></thead>
  <tbody>
    <tr><td>Онлайн-чат</td><td>1–5 минут</td><td>Технические вопросы</td></tr>
    <tr><td>Email</td><td>4–24 часа</td><td>Вывод средств, верификация</td></tr>
    <tr><td>Telegram-бот</td><td>5–30 минут</td><td>Проверка статусов</td></tr>
  </tbody>
</table>

<div class="faq-list">
  <details class="faq-item"><summary>Можно ли решить вопрос с верификацией через чат?</summary><div class="faq-answer">Операторы чата могут сообщить статус и требования к документам. Документы загружаются через личный кабинет.</div></details>
  <details class="faq-item"><summary>Снимают ли деньги за обращение в поддержку?</summary><div class="faq-answer">Нет, все консультации бесплатны. Если кто-то требует оплату — это мошенники.</div></details>
</div>
<?php
require_once dirname(__DIR__, 2) . '/includes/links.php';
$article_content = ob_get_clean();
require_once dirname(__DIR__, 2) . '/includes/article-layout.php';
require_once dirname(__DIR__, 2) . '/includes/footer.php';
