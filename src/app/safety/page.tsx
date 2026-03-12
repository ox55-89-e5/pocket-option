import type { Metadata } from 'next';
import ArticleLayout from '@/components/ArticleLayout';

const SITE_URL = 'https://pocoptrade.com';

export const metadata: Metadata = {
  title: 'Насколько безопасна платформа Pocket Option — защита средств',
  description:
    'Анализ безопасности Pocket Option: защита данных, хранение средств, SSL-шифрование, двухфакторная аутентификация и политика вывода.',
  alternates: { canonical: `${SITE_URL}/safety` },
  openGraph: {
    title: 'Безопасность Pocket Option',
    description: 'Насколько надёжна и безопасна торговая платформа Pocket Option.',
    url: `${SITE_URL}/safety`,
    locale: 'ru_RU',
    type: 'article',
  },
};

export default function SafetyPage() {
  return (
    <ArticleLayout
      title="Насколько безопасна платформа Pocket Option?"
      description="Анализ безопасности Pocket Option: защита данных, хранение средств, SSL-шифрование, двухфакторная аутентификация и политика вывода."
      slug="/safety"
      breadcrumbs={[
        { label: 'Главная', href: '/' },
        { label: 'FAQ', href: '/faq' },
        { label: 'Безопасность' },
      ]}
    >
      <p>
        Pocket Option использует стандартные меры безопасности для защиты аккаунтов
        и средств пользователей. Платформа работает с 2017 года и обслуживает миллионы
        трейдеров по всему миру.
      </p>

      <h2>Технические меры защиты</h2>
      <ul>
        <li>SSL-шифрование всех передаваемых данных</li>
        <li>Двухфакторная аутентификация (2FA)</li>
        <li>Верификация личности (KYC) перед выводом</li>
        <li>Защита от брутфорс-атак на аккаунт</li>
      </ul>

      <h2>Хранение средств</h2>
      <p>
        Средства клиентов хранятся на отдельных счетах, не смешиваясь со средствами
        компании. Это стандартная практика сегрегации клиентских активов.
      </p>

      <h2>Как защитить свой аккаунт</h2>
      <ul>
        <li>Включите двухфакторную аутентификацию</li>
        <li>Используйте уникальный надёжный пароль</li>
        <li>Не передавайте данные третьим лицам</li>
        <li>Выходите из аккаунта на общих устройствах</li>
      </ul>

      <div className="notice">
        💡 Pocket Option не запрашивает пароль или полные данные карты через чат или email.
        Если кто-то просит эти данные — это мошенники.
      </div>
    </ArticleLayout>
  );
}
