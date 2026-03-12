'use client';

import { useState } from 'react';
import Link from 'next/link';
import styles from './Header.module.css';

const navLinks = [
  { label: 'Приложение', href: '/app' },
  { label: 'Промокоды', href: '/promo' },
  { label: 'Личный кабинет', href: '/cabinet' },
  { label: 'FAQ', href: '/faq' },
];

export default function Header() {
  const [open, setOpen] = useState(false);

  return (
    <header className={styles.header}>
      <div className={`container ${styles.inner}`}>
        {/* Logo */}
        <Link href="/" className={styles.logo}>
          Pocket<span className={styles.logoDot}>.</span>Option
        </Link>

        {/* Desktop nav */}
        <nav className={styles.nav} aria-label="Основная навигация">
          {navLinks.map((link) => (
            <Link key={link.href} href={link.href} className={styles.navLink}>
              {link.label}
            </Link>
          ))}
        </nav>

        {/* Desktop CTA buttons */}
        <div className={styles.cta}>
          <a
            href="https://pocoptrade.com/login"
            className="btn btn-outline btn-sm"
            target="_blank"
            rel="noopener noreferrer"
          >
            Вход
          </a>
          <a
            href="https://pocoptrade.com/register"
            className="btn btn-primary btn-sm"
            target="_blank"
            rel="noopener noreferrer"
          >
            Регистрация
          </a>
        </div>

        {/* Burger */}
        <button
          className={`${styles.burger} ${open ? styles.burgerOpen : ''}`}
          onClick={() => setOpen(!open)}
          aria-label="Открыть меню"
          aria-expanded={open}
        >
          <span />
          <span />
          <span />
        </button>
      </div>

      {/* Mobile menu */}
      {open && (
        <div className={styles.mobileMenu}>
          <nav>
            {navLinks.map((link) => (
              <Link
                key={link.href}
                href={link.href}
                className={styles.mobileLink}
                onClick={() => setOpen(false)}
              >
                {link.label}
              </Link>
            ))}
          </nav>
          <div className={styles.mobileCta}>
            <a
              href="https://pocoptrade.com/login"
              className="btn btn-outline"
              target="_blank"
              rel="noopener noreferrer"
              onClick={() => setOpen(false)}
            >
              Вход
            </a>
            <a
              href="https://pocoptrade.com/register"
              className="btn btn-primary"
              target="_blank"
              rel="noopener noreferrer"
              onClick={() => setOpen(false)}
            >
              Регистрация
            </a>
          </div>
        </div>
      )}
    </header>
  );
}
