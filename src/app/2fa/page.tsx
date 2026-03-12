import type { Metadata } from 'next';
import ArticleLayout from '@/components/ArticleLayout';

const SITE_URL = 'https://pocoptrade.com';

export const metadata: Metadata = {
  title: 'Двухфакторная аутентификация Pocket Option — как включить 2FA',
  description:
    'Как включить и настроить двухфакторную аутентификацию (2FA) на Pocket Option для защиты аккаунта.',
  alternates: { canonical: `${SITE_URL}/2fa` },
  openGraph: {
    title: 'Двухфакторная аутентификация Pocket Option',
    description: 'Защитите свой аккаунт Pocket Option с помощью 2FA.',
    url: `${SITE_URL}/2fa`,
    locale: 'ru_RU',
    type: 'article',
  },
};

export default function TwoFaPage() {
  return (
    <ArticleLayout
      title="Как включить двухфакторную защиту на Pocket Option?"
      description="Как включить и настроить двухфакторную аутентификацию (2FA) на Pocket Option для защиты аккаунта."
      slug="/2fa"
      breadcrumbs={[
        { label: 'Главная', href: '/' },
        { label: 'FAQ', href: '/faq' },
        { label: 'Двухфакторная аутентификация' },
      ]}
    >
      <p>
        Двухфакторная аутентификация (2FA) — дополнительный уровень защиты аккаунта.
        Даже если злоумышленник узнает ваш пароль, войти без кода из приложения
        или SMS не получится.
      </p>

      <h2>Как включить 2FA</h2>
      <ol>
        <li>Войдите в личный кабинет Pocket Option</li>
        <li>Перейдите в «Настройки» → «Безопасность»</li>
        <li>Нажмите «Включить 2FA»</li>
        <li>Выберите метод: приложение (Google Authenticator) или SMS</li>
        <li>Отсканируйте QR-код или введите секретный ключ в приложение</li>
        <li>Введите код подтверждения для активации</li>
      </ol>

      <h2>Рекомендуемые приложения для 2FA</h2>
      <ul>
        <li>Google Authenticator (iOS / Android)</li>
        <li>Authy — с резервным копированием кодов</li>
        <li>Microsoft Authenticator</li>
      </ul>

      <div className="notice">
        💡 Сохраните резервные коды в безопасном месте. Если потеряете доступ к
        приложению 2FA без резервных кодов, восстановление аккаунта займёт время.
      </div>

      <h2>Что делать если потерял доступ к 2FA</h2>
      <p>
        Обратитесь в службу поддержки. Потребуется пройти верификацию личности для
        подтверждения владения аккаунтом.
      </p>
    </ArticleLayout>
  );
}
