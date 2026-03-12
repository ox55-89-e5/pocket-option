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

type FaqItem = { q: string; href: string; icon: string };
type FaqCategory = { title: string; items: FaqItem[] };

const faqCategories: FaqCategory[] = [
  {
    title: 'Регистрация и вход',
    items: [
      { q: 'Как зарегистрироваться в Pocket Option?', href: '/registration', icon: '📋' },
      { q: 'Что делать, если забыл пароль?', href: '/recovery-password', icon: '🔑' },
      { q: 'Можно ли торговать без верификации?', href: '/verification', icon: '🪪' },
    ],
  },
  {
    title: 'Пополнение и вывод средств',
    items: [
      { q: 'Как пополнить счет и какой минимальный депозит?', href: '/deposit', icon: '💳' },
      { q: 'Как вывести деньги с Pocket Option на карту?', href: '/withdraw', icon: '🟢' },
      { q: 'Есть ли комиссия за вывод и какие лимиты?', href: '/withdrawal-fees', icon: '🟦' },
    ],
  },
  {
    title: 'Мобильное приложение',
    items: [
      { q: 'Где скачать приложение Pocket Option на iPhone и Android?', href: '/download-app', icon: '📱' },
      { q: 'Какие отзывы о мобильном приложении?', href: '/app-reviews', icon: '⭐' },
      { q: 'Что такое веб-версия платформы?', href: '/web-version', icon: '🌐' },
    ],
  },
  {
    title: 'Бонусы и промокоды',
    items: [
      { q: 'Какой бонус дают за регистрацию?', href: '/bonus', icon: '🎁' },
      { q: 'Как активировать промокоды?', href: '/activate-promocode', icon: '🏷️' },
      { q: 'Что такое кешбэк и как его получить?', href: '/cashback', icon: '🔄' },
      { q: 'Дают ли бонус без депозита?', href: '/no-deposit-bonus', icon: '💎' },
    ],
  },
  {
    title: 'Торговля и обучение',
    items: [
      { q: 'Какие стратегии торговли работают?', href: '/strategies', icon: '⚡' },
      { q: 'Где пройти обучение трейдингу?', href: '/training', icon: '🎓' },
      { q: 'С чего начать новичку на платформе?', href: '/beginner', icon: '🚀' },
      { q: 'Как торговать в плюс?', href: '/plus-trading', icon: '📈' },
      { q: 'Какие индикаторы доступны?', href: '/indicators', icon: '📊' },
      { q: 'Что такое AI Mode?', href: '/aimode', icon: '🤖' },
      { q: 'Как работает копирование сделок?', href: '/copy-trading', icon: '👥' },
    ],
  },
  {
    title: 'Репутация и безопасность',
    items: [
      { q: 'Где почитать отзывы о платформе?', href: '/reviews', icon: '🔍' },
      { q: 'Есть ли у Pocket Option лицензия?', href: '/license', icon: '📄' },
      { q: 'Почему Pocket Option в черном списке ЦБ?', href: '/blacklist', icon: '⚠️' },
      { q: 'Насколько безопасна платформа?', href: '/safety', icon: '🔒' },
    ],
  },
  {
    title: 'Технические вопросы',
    items: [
      { q: 'Почему Pocket Option не работает сегодня и где найти зеркало сайта?', href: '/mirror', icon: '🟢' },
    ],
  },
  {
    title: 'Дополнительные возможности',
    items: [
      { q: 'Как участвовать в турнирах?', href: '/tournaments', icon: '🏆' },
      { q: 'Как зарабатывать на партнёрской программе?', href: '/affiliate', icon: '🤝' },
      { q: 'Как связаться с поддержкой на русском?', href: '/support', icon: '💬' },
      { q: 'Как включить двухфакторную защиту?', href: '/2fa', icon: '🔐' },
      { q: 'Где найти историю операций?', href: '/history', icon: '📋' },
      { q: 'Сколько ждать верификацию?', href: '/wait-verification', icon: '⏳' },
    ],
  },
];

const totalQuestions = faqCategories.reduce((sum, cat) => sum + cat.items.length, 0);

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
            <h1 className={styles.heroTitle}>Часто задаваемые вопросы</h1>
            <p className={styles.heroSubtext}>
              Ответы на все вопросы о платформе Pocket Option — от регистрации до вывода прибыли
            </p>
          </div>
        </div>
      </section>

      <section className="section">
        <div className="container">
          <div className={styles.faqSections}>
            {faqCategories.map((cat) => (
              <div key={cat.title} className={styles.faqCat}>
                <h2 className={styles.catTitle}>{cat.title}</h2>
                <div className={styles.questionGrid}>
                  {cat.items.map((item) => (
                    <Link key={item.href + item.q} href={item.href} className={styles.questionCard}>
                      <span className={styles.cardIcon}>{item.icon}</span>
                      <span className={styles.questionText}>{item.q}</span>
                    </Link>
                  ))}
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>

      <section className={styles.statsSection}>
        <div className="container">
          <div className={styles.statsGrid}>
            <div className={styles.statItem}>
              <span className={styles.statValue}>{totalQuestions}</span>
              <span className={styles.statLabel}>ответ</span>
            </div>
            <div className={styles.statItem}>
              <span className={styles.statValue}>24/7</span>
              <span className={styles.statLabel}>поддержка</span>
            </div>
            <div className={styles.statItem}>
              <span className={styles.statValue}>100%</span>
              <span className={styles.statLabel}>честно</span>
            </div>
            <div className={styles.statItem}>
              <span className={styles.statValue}>2026</span>
              <span className={styles.statLabel}>актуально</span>
            </div>
          </div>
        </div>
      </section>
    </>
  );
}
