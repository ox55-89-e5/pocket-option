import type { Metadata } from 'next';
import Link from 'next/link';
import styles from './page.module.css';

const SITE_URL = 'https://pocoptrade.com';

export const metadata: Metadata = {
  title: 'FAQ по Pocket Option — ответы на вопросы о торговле, депозитах, безопасности',
  description:
    'Полные ответы на часто задаваемые вопросы о платформе Pocket Option: регистрация, депозит, вывод средств, промокоды, безопасность, мобильное приложение.',
  alternates: { canonical: `${SITE_URL}/faq` },
  openGraph: {
    title: 'FAQ Pocket Option — ответы на вопросы о торговле',
    description:
      'Ответы на вопросы о регистрации, депозите, выводе средств, промокодах и безопасности Pocket Option.',
    url: `${SITE_URL}/faq`,
    locale: 'ru_RU',
    type: 'website',
  },
};

type FaqItem = { q: string; href: string };
type FaqCategory = { title: string; icon: string; items: FaqItem[] };

const faqCategories: FaqCategory[] = [
  {
    title: 'Регистрация и вход',
    icon: '👤',
    items: [
      { q: 'Как зарегистрироваться в Pocket Option?', href: '/registration' },
      { q: 'Что делать, если забыл пароль?', href: '/recovery-password' },
      { q: 'Можно ли торговать без верификации?', href: '/verification' },
      { q: 'Сколько времени занимает верификация?', href: '/verification' },
    ],
  },
  {
    title: 'Пополнение и вывод средств',
    icon: '💳',
    items: [
      { q: 'Как пополнить счет и какой минимальный депозит?', href: '/deposit' },
      { q: 'Как вывести деньги с Pocket Option на карту?', href: '/withdraw' },
      { q: 'Есть ли комиссия за вывод и какие лимиты?', href: '/withdrawal-fees' },
    ],
  },
  {
    title: 'Мобильное приложение',
    icon: '📱',
    items: [
      { q: 'Где скачать приложение Pocket Option на iPhone и Android?', href: '/download-app' },
      { q: 'Что такое веб-версия платформы?', href: '/download-app' },
    ],
  },
  {
    title: 'Бонусы и промокоды',
    icon: '🎁',
    items: [
      { q: 'Какой бонус дают за регистрацию?', href: '/bonus' },
      { q: 'Как активировать промокоды?', href: '/activate-promocode' },
      { q: 'Что такое кешбэк и как его получить?', href: '/cashback' },
      { q: 'Дают ли бонус без депозита?', href: '/no-deposit-bonus' },
    ],
  },
  {
    title: 'Торговля и обучение',
    icon: '📊',
    items: [
      { q: 'Какие стратегии торговли работают?', href: '/strategies' },
      { q: 'Как торговать в плюс на Pocket Option?', href: '/plus-trading' },
      { q: 'Как работает копирование сделок?', href: '/copy-trading' },
    ],
  },
  {
    title: 'Репутация и безопасность',
    icon: '🔒',
    items: [
      { q: 'Есть ли у Pocket Option лицензия?', href: '/license' },
      { q: 'Почему Pocket Option в черном списке ЦБ?', href: '/license' },
    ],
  },
  {
    title: 'Технические вопросы',
    icon: '⚙️',
    items: [
      { q: 'Как связаться с поддержкой на русском?', href: '/support' },
    ],
  },
  {
    title: 'Дополнительные возможности',
    icon: '🚀',
    items: [
      { q: 'Как участвовать в турнирах?', href: '/promo' },
      { q: 'Как зарабатывать на партнерской программе?', href: '/cabinet' },
    ],
  },
];

const jsonLd = {
  '@context': 'https://schema.org',
  '@type': 'FAQPage',
  mainEntity: faqCategories.flatMap((cat) =>
    cat.items.map((item) => ({
      '@type': 'Question',
      name: item.q,
      acceptedAnswer: {
        '@type': 'Answer',
        text: item.q,
      },
    })),
  ),
};

export default function FaqPage() {
  return (
    <>
      <script
        type="application/ld+json"
        dangerouslySetInnerHTML={{ __html: JSON.stringify(jsonLd) }}
      />

      <section className={styles.hero}>
        <div className="container">
          <div className={styles.heroContent}>
            <span className="badge">База знаний</span>
            <h1 className={styles.heroTitle}>FAQ по платформе Pocket Option</h1>
            <p className={styles.heroSubtext}>
              Ответы на самые популярные вопросы о торговле, депозитах и безопасности
            </p>
          </div>
        </div>
      </section>

      <nav className={styles.catNav} aria-label="Категории FAQ">
        <div className="container">
          <div className={styles.catList}>
            {faqCategories.map((cat) => (
              <a
                key={cat.title}
                href={`#${encodeURIComponent(cat.title)}`}
                className={styles.catLink}
              >
                <span>{cat.icon}</span>
                <span>{cat.title}</span>
              </a>
            ))}
          </div>
        </div>
      </nav>

      <section className="section">
        <div className="container">
          <div className={styles.faqSections}>
            {faqCategories.map((cat) => (
              <div
                key={cat.title}
                id={encodeURIComponent(cat.title)}
                className={styles.faqCat}
              >
                <div className={styles.catHeader}>
                  <span className={styles.catIcon}>{cat.icon}</span>
                  <h2 className={styles.catTitle}>{cat.title}</h2>
                </div>
                <div className={styles.questionList}>
                  {cat.items.map((item) => (
                    <Link key={item.q} href={item.href} className={styles.questionLink}>
                      <span className={styles.questionText}>{item.q}</span>
                      <span className={styles.questionArrow}>→</span>
                    </Link>
                  ))}
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      <section className={`section ${styles.contactSection}`}>
        <div className="container">
          <div className={styles.contactBox}>
            <h2 className={styles.contactTitle}>Не нашли ответ?</h2>
            <p className={styles.contactText}>
              Служба поддержки Pocket Option работает 24/7 на 12 языках. Среднее время ответа —
              25 секунд.
            </p>
            <div className={styles.contactBtns}>
              <a href="mailto:support@pocketoption.com" className="btn btn-outline">
                ✉️ support@pocketoption.com
              </a>
              <a
                href="https://pocoptrade.com"
                className="btn btn-primary"
                target="_blank"
                rel="noopener noreferrer"
              >
                Онлайн-чат 24/7
              </a>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}
