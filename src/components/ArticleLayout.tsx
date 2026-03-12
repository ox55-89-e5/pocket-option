import Link from 'next/link';
import styles from './ArticleLayout.module.css';
import { ctaLinks } from '@/lib/ctaLinks';

const SITE_URL = 'https://pocoptrade.com';

interface Breadcrumb {
  label: string;
  href?: string;
}

interface ArticleLayoutProps {
  title: string;
  description?: string;
  breadcrumbs: Breadcrumb[];
  slug: string;
  children: React.ReactNode;
}

export default function ArticleLayout({ title, description, breadcrumbs, slug, children }: ArticleLayoutProps) {
  const cta = ctaLinks[slug] ?? null;

  const breadcrumbSchema = {
    '@context': 'https://schema.org',
    '@type': 'BreadcrumbList',
    itemListElement: breadcrumbs.map((crumb, i) => ({
      '@type': 'ListItem',
      position: i + 1,
      name: crumb.label,
      item: crumb.href ? `${SITE_URL}${crumb.href}` : undefined,
    })),
  };

  const articleSchema = {
    '@context': 'https://schema.org',
    '@type': 'Article',
    headline: title,
    ...(description ? { description } : {}),
    url: `${SITE_URL}${slug}`,
    inLanguage: 'ru',
    publisher: {
      '@type': 'Organization',
      name: 'Pocket Option',
      url: SITE_URL,
    },
    breadcrumb: {
      '@type': 'BreadcrumbList',
      itemListElement: breadcrumbs.map((crumb, i) => ({
        '@type': 'ListItem',
        position: i + 1,
        name: crumb.label,
        item: crumb.href ? `${SITE_URL}${crumb.href}` : undefined,
      })),
    },
  };

  return (
    <>
      <script
        type="application/ld+json"
        dangerouslySetInnerHTML={{ __html: JSON.stringify(breadcrumbSchema) }}
      />
      <script
        type="application/ld+json"
        dangerouslySetInnerHTML={{ __html: JSON.stringify(articleSchema) }}
      />
      <section className={styles.hero}>
        <div className="container">
          <nav className={styles.breadcrumb} aria-label="Breadcrumb">
            {breadcrumbs.map((crumb, i) => (
              <span key={i} className={styles.breadcrumbItem}>
                {crumb.href ? (
                  <Link href={crumb.href} className={styles.breadcrumbLink}>
                    {crumb.label}
                  </Link>
                ) : (
                  <span className={styles.breadcrumbCurrent}>{crumb.label}</span>
                )}
                {i < breadcrumbs.length - 1 && (
                  <span className={styles.breadcrumbSep}>/</span>
                )}
              </span>
            ))}
          </nav>
          <h1 className={styles.heroTitle}>{title}</h1>
          {cta && (
            <a href={cta.href} className={`btn btn-primary ${styles.heroCta}`}>
              {cta.label}
            </a>
          )}
        </div>
      </section>

      <section className="section">
        <div className="container">
          <div className={styles.layout}>
            <article className={styles.article}>
              {children}
              {cta && (
                <div className={styles.articleCta}>
                  <a href={cta.href} className="btn btn-primary">
                    {cta.label}
                  </a>
                </div>
              )}
            </article>
            <aside className={styles.sidebar}>
              <div className={styles.sidebarCard}>
                <h3 className={styles.sidebarTitle}>Быстрый старт</h3>
                <ul className={styles.sidebarList}>
                  <li><Link href="/registration">Регистрация</Link></li>
                  <li><Link href="/deposit">Пополнение счёта</Link></li>
                  <li><Link href="/bonus">Бонусы и промокоды</Link></li>
                  <li><Link href="/strategies">Стратегии торговли</Link></li>
                  <li><Link href="/withdraw">Вывод средств</Link></li>
                </ul>
              </div>
              <div className={styles.sidebarCard}>
                <h3 className={styles.sidebarTitle}>Популярные статьи</h3>
                <ul className={styles.sidebarList}>
                  <li><Link href="/copy-trading">Копирование сделок</Link></li>
                  <li><Link href="/verification">Верификация аккаунта</Link></li>
                  <li><Link href="/cashback">Кешбэк программа</Link></li>
                  <li><Link href="/license">Лицензия Pocket Option</Link></li>
                  <li><Link href="/support">Служба поддержки</Link></li>
                </ul>
              </div>
              {cta && (
                <div className={styles.sideboxCta}>
                  <p>{title}</p>
                  <a
                    href={cta.href}
                    className="btn btn-primary"
                    style={{ width: '100%', textAlign: 'center' }}
                  >
                    {cta.label}
                  </a>
                </div>
              )}
              {!cta && (
                <div className={styles.sideboxCta}>
                  <p>Начните торговать с демо-счётом 10 000$</p>
                  <a
                    href="/lk"
                    className="btn btn-primary"
                    style={{ width: '100%', textAlign: 'center' }}
                  >
                    Открыть демо-счёт
                  </a>
                </div>
              )}
            </aside>
          </div>
        </div>
      </section>
    </>
  );
}
