import Link from 'next/link';
import styles from './Footer.module.css';

const navLinks = [
  { label: 'Главная', href: '/' },
  { label: 'Приложение', href: '/app' },
  { label: 'Промокоды', href: '/promo' },
  { label: 'FAQ', href: '/faq' },
  { label: 'Личный кабинет', href: '/cabinet' },
];

const infoLinks = [
  { label: 'О платформе', href: '/#about' },
  { label: 'Партнёрская программа', href: '/cabinet#partner' },
  { label: 'Контакты', href: '/cabinet#support' },
  { label: 'Поддержка', href: '/faq' },
];

export default function Footer() {
  return (
    <footer className={styles.footer}>
      <div className={`container ${styles.inner}`}>
        {/* Top grid */}
        <div className={styles.grid}>
          {/* Brand */}
          <div className={styles.brand}>
            <Link href="/" className={styles.logo}>
              Pocket<span className={styles.logoDot}>.</span>Option
            </Link>
            <p className={styles.brandText}>
              Информационный ресурс о платформе Pocket Option для трейдеров.
            </p>
          </div>

          {/* Navigation */}
          <div className={styles.col}>
            <h4 className={styles.colTitle}>Навигация</h4>
            <ul>
              {navLinks.map((link) => (
                <li key={link.href}>
                  <Link href={link.href} className={styles.footerLink}>
                    {link.label}
                  </Link>
                </li>
              ))}
            </ul>
          </div>

          {/* Info */}
          <div className={styles.col}>
            <h4 className={styles.colTitle}>Информация</h4>
            <ul>
              {infoLinks.map((link) => (
                <li key={link.href}>
                  <Link href={link.href} className={styles.footerLink}>
                    {link.label}
                  </Link>
                </li>
              ))}
            </ul>
          </div>

          {/* Support */}
          <div className={styles.col}>
            <h4 className={styles.colTitle}>Поддержка</h4>
            <ul>
              <li>
                <a href="mailto:support@pocketoption.com" className={styles.footerLink}>
                  support@pocketoption.com
                </a>
              </li>
              <li>
                <span className={styles.footerText}>Онлайн-чат 24/7</span>
              </li>
              <li>
                <a
                  href="https://t.me/pocketoption"
                  className={styles.footerLink}
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  Telegram
                </a>
              </li>
            </ul>
          </div>
        </div>

        {/* Disclaimer */}
        <div className={styles.disclaimer}>
          <p>
            <strong>Предупреждение о рисках:</strong> Торговля бинарными опционами сопряжена с
            высоким риском потери капитала. Не инвестируйте средства, которые вы не можете
            позволить себе потерять. Данный сайт не является официальным ресурсом платформы Pocket
            Option и не осуществляет приём платежей или торговые операции.
          </p>
        </div>

        {/* Bottom */}
        <div className={styles.bottom}>
          <p>© 2026 Pocket Option Guide. Все права защищены.</p>
        </div>
      </div>
    </footer>
  );
}
