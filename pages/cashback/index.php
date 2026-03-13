<?php
$SITE_URL = 'https://pocketoption-po.com';
$title = 'Кешбэк Pocket Option: как получить и условия программы 2026';
$description = 'Что такое кешбэк в Pocket Option и как его получить: процент возврата по статусам, инструкция активации, условия вывода и сравнение с бонусами.';
$canonical = $SITE_URL . '/cashback/';
$og_type = 'article';

require_once dirname(__DIR__, 2) . '/includes/head.php';
require_once dirname(__DIR__, 2) . '/includes/header.php';

$article_title = 'Что такое кешбэк и как его получить в Pocket Option?';
$article_description = $description;
$article_slug = '/cashback/';
$breadcrumbs = [
  ['label' => 'Главная', 'href' => '/'],
  ['label' => 'FAQ', 'href' => '/faq/'],
  ['label' => 'Кешбэк'],
];
ob_start();
?>
<p>Кешбэк — возврат части торговых затрат. В Pocket Option программа построена на обороте: вы получаете процент от суммы всех сделок за период <strong>независимо от их исхода</strong>. Деньги зачисляются на отдельный кошелёк и доступны для вывода или новой торговли без отыгрышей.</p>

<h2>Правила начисления кешбэка</h2>
<p>Программа доступна всем верифицированным клиентам после активации. Процент возврата привязан к статусу в системе лояльности.</p>

<h3>Процент возврата для разных статусов</h3>
<table>
  <thead><tr><th>Статус</th><th>Оборот</th><th>Кешбэк</th></tr></thead>
  <tbody>
    <tr><td>Новый</td><td>—</td><td>5%</td></tr>
    <tr><td>Silver</td><td>100 000 руб.</td><td>7%</td></tr>
    <tr><td>Gold</td><td>Повышенный оборот</td><td>10%</td></tr>
    <tr><td>VIP</td><td>Максимальный оборот</td><td>15%</td></tr>
  </tbody>
</table>

<div class="notice">💡 <strong>Пример:</strong> Трейдер с рангом Gold при обороте 200 000 рублей за месяц получает 20 000 рублей кешбэком.</div>

<h2>Инструкция по активации кешбэка</h2>
<div class="step"><strong><span class="step-num">1</span>Войдите в личный кабинет</strong></div>
<div class="step"><strong><span class="step-num">2</span>Перейдите в раздел «Бонусы и акции»</strong></div>
<div class="step"><strong><span class="step-num">3</span>Нажмите «Активировать» в карточке кешбэка</strong></div>
<div class="step"><strong><span class="step-num">4</span>Подтвердите действие</strong><p style="margin-top:10px;margin-bottom:0">Выплаты поступают еженедельно.</p></div>

<h2>Условия вывода кешбэка</h2>
<ul>
  <li>Вывод на карту, электронный кошелёк или криптовалюту</li>
  <li>Использование для новых позиций</li>
  <li>Накопление на балансе</li>
</ul>

<h2>Преимущества кешбэка перед бонусами</h2>
<ul>
  <li>Нет норм по обороту для разблокировки</li>
  <li>Процент начисляется даже с убыточных контрактов</li>
  <li>Выплаты идут регулярно</li>
  <li>Средства не сгорают</li>
</ul>

<div class="faq-list">
  <details class="faq-item"><summary>Учитываются ли убыточные сделки при начислении?</summary><div class="faq-answer">Да, программа учитывает объём средств, а не результат. Убыточные позиции идут в зачёт наравне с прибыльными.</div></details>
  <details class="faq-item"><summary>Работает ли кешбэк в мобильном приложении?</summary><div class="faq-answer">Да, функционал реализован в iOS и Android.</div></details>
  <details class="faq-item"><summary>Как часто происходят выплаты кешбэка?</summary><div class="faq-answer">Расчётный период — одна неделя. В некоторых акциях используется ежемесячный цикл.</div></details>
  <details class="faq-item"><summary>Есть ли срок действия у начисленного кешбэка?</summary><div class="faq-answer">Нет, деньги хранятся бессрочно. Можно копить или выводить частями.</div></details>
</div>
<?php
$article_content = ob_get_clean();
require_once dirname(__DIR__, 2) . '/includes/article-layout.php';
require_once dirname(__DIR__, 2) . '/includes/footer.php';
