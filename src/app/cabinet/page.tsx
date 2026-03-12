import type { Metadata } from 'next';
import Link from 'next/link';
import styles from './page.module.css';

const SITE_URL = 'https://pocoptrade.com';

export const metadata: Metadata = {
  title: 'Личный кабинет Pocket Option — вход, настройки, безопасность',
  description:
    'Личный кабинет Pocket Option: вход через email или Google, верификация, пополнение и вывод, двухфакторная аутентификация. Управляйте счётом 24/7.',
  alternates: {
    canonical: `${SITE_URL}/cabinet`,
  },
  openGraph: {
    title: 'Личный кабинет Pocket Option — вход и управление счётом',
    description: 'Вход в личный кабинет Pocket Option. Верификация, вывод, 2FA, история сделок.',
    url: `${SITE_URL}/cabinet`,
    locale: 'ru_RU',
    type: 'website',
  },
};

const jsonLd = {
  '@context': 'https://schema.org',
  '@type': 'WebPage',
  name: 'Личный кабинет Pocket Option',
  url: `${SITE_URL}/cabinet`,
  description:
    'Управление торговым аккаунтом Pocket Option: вход, верификация, пополнение и вывод средств.',
};

const cabinetFeatures = [
  { icon: '✅', text: 'Верификация аккаунта (паспорт + селфи)' },
  { icon: '💳', text: 'Пополнение счёта — 10+ способов оплаты' },
  { icon: '💸', text: 'Вывод средств за 1 минуту — 2 часа' },
  { icon: '🛡️', text: 'Двухфакторная аутентификация (2FA)' },
  { icon: '📋', text: 'История операций и сделок' },
  { icon: '⚙️', text: 'Настройки профиля — 20+ языков интерфейса' },
  { icon: '🤝', text: 'Партнёрская программа — до 80% комиссии' },
  { icon: '🔔', text: 'Управление уведомлениями' },
];

const loginMethods = [
  {
    icon: '📧',
    title: 'Email и пароль',
    desc: 'Стандартный вход. Используйте надёжный пароль из букв, цифр и символов.',
  },
  {
    icon: '🔵',
    title: 'Через Google',
    desc: 'Быстрый вход в один клик через аккаунт Google. Пароль не нужен.',
  },
  {
    icon: '👆',
    title: 'Биометрия',
    desc: 'Face ID или Touch ID в мобильном приложении для мгновенного входа.',
  },
];

const securitySteps = [
  {
    step: '1',
    title: 'Установите Google Authenticator',
    desc: 'Скачайте приложение Google Authenticator из App Store или Google Play бесплатно.',
  },
  {
    step: '2',
    title: 'Перейдите в настройки безопасности',
    desc: 'Личный кабинет → Настройки → Безопасность → Двухфакторная аутентификация.',
  },
  {
    step: '3',
    title: 'Отсканируйте QR-код',
    desc: 'Откройте Google Authenticator, нажмите «+» и отсканируйте QR-код с экрана.',
  },
  {
    step: '4',
    title: 'Введите код подтверждения',
    desc: 'Введите 6-значный код из приложения для завершения настройки 2FA.',
  },
];

export default function CabinetPage() {
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
            <span className="badge">Управление аккаунтом</span>
            <h1 className={styles.heroTitle}>Личный кабинет Pocket Option</h1>
            <p className={styles.heroSubtext}>
              Управляйте счётом, настраивайте безопасность и отслеживайте статистику
            </p>
            <div className={styles.heroBtns}>
              <a
                href="https://pocoptrade.com/login"
                className="btn btn-primary btn-lg"
                target="_blank"
                rel="noopener noreferrer"
              >
                Войти в кабинет
              </a>
              <a
                href="https://pocoptrade.com/register"
                className="btn btn-outline btn-lg"
                target="_blank"
                rel="noopener noreferrer"
              >
                Регистрация
              </a>
            </div>
          </div>
        </div>
      </section>

      {/* ── LOGIN METHODS ── */}
      <section className="section">
        <div className="container">
          <div className="section-header">
            <div className="accent-line" />
            <h2 className="section-title">Вход в личный кабинет</h2>
            <p className="section-subtitle">
              Несколько удобных способов авторизации
            </p>
          </div>
          <div className="grid-3">
            {loginMethods.map((m) => (
              <div key={m.title} className="card">
                <div className="icon-box">{m.icon}</div>
                <h3 className={styles.methodTitle}>{m.title}</h3>
                <p className={styles.methodDesc}>{m.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* ── CABINET FEATURES ── */}
      <section className={`section ${styles.featuresSection}`}>
        <div className="container">
          <div className={styles.featuresGrid}>
            <div className={styles.featuresText}>
              <div className="accent-line" />
              <h2 className="section-title">Возможности личного кабинета</h2>
              <p className={styles.featuresDesc}>
                Полный контроль над торговым аккаунтом в одном месте. От верификации до вывода
                средств — всё доступно 24/7.
              </p>
              <ul className={styles.featuresList}>
                {cabinetFeatures.map((f) => (
                  <li key={f.text} className={styles.featuresItem}>
                    <span className={styles.featureIcon}>{f.icon}</span>
                    <span>{f.text}</span>
                  </li>
                ))}
              </ul>
            </div>
            <div className={styles.featuresVisual}>
              {/* Dashboard mockup */}
              <div className={styles.dashboard}>
                <div className={styles.dashHeader}>
                  <span className={styles.dashTitle}>Мой кабинет</span>
                  <span className={styles.dashDot} />
                </div>
                <div className={styles.dashBalance}>
                  <span className={styles.dashBalLabel}>Реальный счёт</span>
                  <span className={styles.dashBalValue}>$1,250.00</span>
                  <span className={styles.dashBalChange}>+$92.00 сегодня</span>
                </div>
                <div className={styles.dashStats}>
                  <div className={styles.dashStat}>
                    <span className={styles.dashStatVal}>68%</span>
                    <span className={styles.dashStatLabel}>Прибыльных</span>
                  </div>
                  <div className={styles.dashStat}>
                    <span className={styles.dashStatVal}>142</span>
                    <span className={styles.dashStatLabel}>Сделок</span>
                  </div>
                  <div className={styles.dashStat}>
                    <span className={styles.dashStatVal}>92%</span>
                    <span className={styles.dashStatLabel}>Выплата</span>
                  </div>
                </div>
                <div className={styles.dashActions}>
                  <Link href="/deposit" className={styles.dashBtn}>Пополнить</Link>
                  <Link href="/withdraw" className={`${styles.dashBtn} ${styles.dashBtnSecondary}`}>Вывести</Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* ── VERIFICATION ── */}
      <section className="section" id="verification">
        <div className="container">
          <div className="section-header">
            <div className="accent-line" />
            <h2 className="section-title">Верификация аккаунта</h2>
            <p className="section-subtitle">
              Пройдите верификацию, чтобы снять ограничения и увеличить лимит вывода
            </p>
          </div>
          <div className="grid-2">
            <div className="card">
              <div className="icon-box">🚫</div>
              <h3 className={styles.verTitle}>Без верификации</h3>
              <ul className="checklist">
                <li>Лимит вывода: 1 000$ в сутки</li>
                <li>Базовый доступ к платформе</li>
                <li>Все торговые функции доступны</li>
              </ul>
            </div>
            <div className={`card ${styles.verCardPro}`}>
              <div className="icon-box">✅</div>
              <h3 className={styles.verTitle}>После верификации</h3>
              <ul className="checklist">
                <li>Лимит вывода: до 50 000$ в сутки</li>
                <li>Приоритетная поддержка</li>
                <li>Доступ к эксклюзивным акциям</li>
                <li>Ускоренная обработка выводов</li>
              </ul>
            </div>
          </div>
          <p className={styles.verNote}>
            Для верификации: Личный кабинет → Верификация → загрузите фото паспорта и сделайте
            селфи. Обычно занимает 5 минут — 2 часа.
          </p>
        </div>
      </section>

      {/* ── 2FA SECURITY ── */}
      <section className={`section ${styles.secSection}`} id="security">
        <div className="container">
          <div className="section-header">
            <div className="accent-line" />
            <h2 className="section-title">Безопасность аккаунта</h2>
            <p className="section-subtitle">
              Настройте двухфакторную аутентификацию для защиты от несанкционированного входа
            </p>
          </div>
          <div className={styles.secGrid}>
            <div className={styles.secSteps}>
              {securitySteps.map((s) => (
                <div key={s.step} className={styles.secStep}>
                  <div className={styles.secStepNum}>{s.step}</div>
                  <div className={styles.secStepContent}>
                    <h3 className={styles.secStepTitle}>{s.title}</h3>
                    <p className={styles.secStepDesc}>{s.desc}</p>
                  </div>
                </div>
              ))}
            </div>
            <div className={styles.secInfo}>
              <div className="card">
                <div className="icon-box">🛡️</div>
                <h3 className={styles.secCardTitle}>Что защищает 2FA?</h3>
                <ul className="checklist">
                  <li>Защита от взлома даже при утечке пароля</li>
                  <li>Подтверждение выводов средств</li>
                  <li>Вход с новых устройств</li>
                  <li>Изменение настроек аккаунта</li>
                </ul>
              </div>
              <div className="card" style={{ marginTop: '20px' }}>
                <div className="icon-box">📱</div>
                <h3 className={styles.secCardTitle}>Google Authenticator</h3>
                <p className={styles.secCardDesc}>
                  Генерирует одноразовые 6-значные коды каждые 30 секунд. Работает без
                  интернета. Рекомендуемое приложение для 2FA.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* ── PARTNER PROGRAM ── */}
      <section className="section" id="partner">
        <div className="container">
          <div className="section-header">
            <div className="accent-line" />
            <h2 className="section-title">Партнёрская программа</h2>
            <p className="section-subtitle">
              Зарабатывайте до 80% комиссии от привлечённых трейдеров
            </p>
          </div>
          <div className="grid-3">
            <div className="card">
              <div className="icon-box">💰</div>
              <h3 className={styles.partnerTitle}>До 80% комиссии</h3>
              <p className={styles.partnerDesc}>
                Один из самых высоких процентов среди партнёрских программ брокеров. Чем больше
                активных трейдеров — тем выше ваш процент.
              </p>
            </div>
            <div className="card">
              <div className="icon-box">📊</div>
              <h3 className={styles.partnerTitle}>Детальная статистика</h3>
              <p className={styles.partnerDesc}>
                Отслеживайте клики, регистрации, депозиты и комиссии в режиме реального
                времени в личном кабинете партнёра.
              </p>
            </div>
            <div className="card">
              <div className="icon-box">💸</div>
              <h3 className={styles.partnerTitle}>Ежемесячные выплаты</h3>
              <p className={styles.partnerDesc}>
                Комиссии выплачиваются ежемесячно на счёт Pocket Option или любым удобным
                способом без комиссии.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* ── SUPPORT ── */}
      <section className={`section ${styles.supportSection}`} id="support">
        <div className="container">
          <div className={styles.supportGrid}>
            <div className={styles.supportText}>
              <div className="accent-line" />
              <h2 className="section-title">Поддержка 24/7</h2>
              <p className={styles.supportDesc}>
                Профессиональная помощь на 12 языках в любое время суток. Среднее время ответа
                — 25 секунд.
              </p>
              <ul className="checklist">
                <li>Онлайн-чат — ответ за 25 секунд</li>
                <li>Email: support@pocketoption.com</li>
                <li>Telegram-канал с обновлениями</li>
                <li>База знаний с обучающими материалами</li>
                <li>Поддержка на 12 языках</li>
              </ul>
            </div>
            <div className={styles.supportActions}>
              <div className="card">
                <h3 className={styles.supportCardTitle}>Связаться с поддержкой</h3>
                <div className={styles.supportBtns}>
                  <a
                    href="https://pocoptrade.com"
                    className="btn btn-primary"
                    target="_blank"
                    rel="noopener noreferrer"
                  >
                    💬 Онлайн-чат
                  </a>
                  <a
                    href="mailto:support@pocketoption.com"
                    className="btn btn-outline"
                  >
                    ✉️ Email
                  </a>
                  <Link href="/faq" className="btn btn-outline">
                    📖 FAQ
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* ── CTA ── */}
      <section className={`section ${styles.ctaSection}`}>
        <div className="container">
          <div className={styles.ctaBox}>
            <h2 className={styles.ctaTitle}>Войдите в личный кабинет</h2>
            <p className={styles.ctaText}>
              Управляйте счётом, пополняйте и выводите средства, настраивайте безопасность
            </p>
            <a
              href="https://pocoptrade.com/login"
              className="btn btn-primary btn-lg"
              target="_blank"
              rel="noopener noreferrer"
            >
              Войти в кабинет
            </a>
          </div>
        </div>
      </section>
    </>
  );
}
