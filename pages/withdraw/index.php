<?php
require_once dirname(__DIR__, 2) . '/includes/links.php';
$title = 'Как вывести деньги с Pocket Option на карту — инструкция 2026';
$description = 'Пошаговая инструкция по выводу средств с Pocket Option на банковскую карту. Лимиты, комиссии, причины задержек и чек-лист перед выводом.';
$canonical = SITE_URL . '/withdraw/';
$og_type = 'article';
require_once dirname(__DIR__, 2) . '/includes/head.php';
require_once dirname(__DIR__, 2) . '/includes/header.php';
$article_title = 'Как вывести деньги с Pocket Option на карту';
$article_description = $description;
$article_slug = '/withdraw/';
$breadcrumbs = [['label' => 'Главная', 'href' => '/'], ['label' => 'FAQ', 'href' => '/faq/'], ['label' => 'Вывод средств']];
ob_start();
?>
<p>Трейдеры, которые заработали на платформе, часто интересуются процедурой вывода средств. Процесс перевода прибыли на банковскую карту в Pocket Option прозрачный, но нужно учитывать нюансы.</p>

<h2>Инструкция по выводу на карту</h2>
<div class="step"><strong><span class="step-num">1</span>Проверка баланса и бонусов</strong><p style="margin-top:10px;margin-bottom:0">Если активирован приветственный бонус, его нужно отыграть согласно условиям.</p></div>
<div class="step"><strong><span class="step-num">2</span>Раздел вывода средств</strong><p style="margin-top:10px;margin-bottom:0">В личном кабинете нажмите «Вывод средств» (Withdraw) в панели баланса.</p></div>
<div class="step"><strong><span class="step-num">3</span>Выбор платёжной системы</strong><p style="margin-top:10px;margin-bottom:0">Для вывода на карту выбирайте Visa/Mastercard.</p></div>
<div class="step"><strong><span class="step-num">4</span>Заполнение реквизитов</strong><p style="margin-top:10px;margin-bottom:0">Укажите сумму и номер карты. Карта должна принадлежать вам.</p></div>
<div class="step"><strong><span class="step-num">5</span>Подтверждение операции</strong><p style="margin-top:10px;margin-bottom:0">Проверьте данные и подтвердите запрос. Заявка уходит в обработку.</p></div>

<h2>Лимиты и комиссии</h2>
<table>
  <thead><tr><th>Параметр</th><th>Значение</th></tr></thead>
  <tbody>
    <tr><td>Минимальная сумма</td><td>от 500 рублей (или эквивалент)</td></tr>
    <tr><td>Максимум без верификации</td><td>до 10 000 рублей суммарно</td></tr>
    <tr><td>Комиссия Pocket Option</td><td>0%</td></tr>
    <tr><td>Срок зачисления</td><td>от минут до 3 рабочих дней</td></tr>
  </tbody>
</table>

<h2>Причины задержек выплат</h2>
<ul>
  <li><strong>Не отыгран бонус.</strong> Проверьте условия в личном кабинете.</li>
  <li><strong>Не пройдена верификация.</strong> При превышении лимита система запросит документы.</li>
  <li><strong>Ошибка в реквизитах.</strong> Неверная цифра номера карты приведёт к возврату.</li>
</ul>

<div class="notice">✅ <strong>Чек-лист перед выводом:</strong> Баланс позволяет снять нужную сумму, бонусы отыграны, верификация пройдена, реквизиты введены верно.</div>

<div class="faq-list">
  <details class="faq-item"><summary>Сколько времени занимает вывод?</summary><div class="faq-answer">От 1 минуты до 3 рабочих дней. Электронные кошельки — до 2 часов, банковские карты — дольше.</div></details>
  <details class="faq-item"><summary>Почему пришло меньше, чем запрашивал?</summary><div class="faq-answer">Разница — комиссия банка за входящий перевод из-за рубежа или конвертация валюты. Pocket Option отправляет средства в полном объёме.</div></details>
</div>
<?php
require_once dirname(__DIR__, 2) . '/includes/links.php';
$article_content = ob_get_clean();
require_once dirname(__DIR__, 2) . '/includes/article-layout.php';
require_once dirname(__DIR__, 2) . '/includes/footer.php';
