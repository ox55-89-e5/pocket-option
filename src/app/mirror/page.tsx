import type { Metadata } from 'next';
import ArticleLayout from '@/components/ArticleLayout';

const SITE_URL = 'https://pocoptrade.com';

export const metadata: Metadata = {
  title: 'Зеркало Pocket Option — рабочие ссылки для входа на сайт',
  description:
    'Почему Pocket Option не работает и как найти рабочее зеркало сайта для входа в аккаунт.',
  alternates: { canonical: `${SITE_URL}/mirror` },
  openGraph: {
    title: 'Зеркало Pocket Option',
    description: 'Как найти рабочее зеркало Pocket Option если основной сайт заблокирован.',
    url: `${SITE_URL}/mirror`,
    locale: 'ru_RU',
    type: 'article',
  },
};

export default function MirrorPage() {
  return (
    <ArticleLayout
      title="Почему Pocket Option не работает и как найти зеркало?"
      slug="/mirror"
      breadcrumbs={[
        { label: 'Главная', href: '/' },
        { label: 'FAQ', href: '/faq' },
        { label: 'Зеркало сайта' },
      ]}
    >
      <p>
        Иногда пользователи из России сталкиваются с проблемами доступа к Pocket Option
        из-за блокировок провайдеров. В таких случаях помогает использование зеркала сайта
        или VPN.
      </p>

      <h2>Почему сайт может не открываться</h2>
      <ul>
        <li>Блокировка со стороны интернет-провайдера</li>
        <li>Технические работы на сервере</li>
        <li>Региональные ограничения</li>
        <li>Проблемы с DNS</li>
      </ul>

      <h2>Как получить доступ к платформе</h2>
      <ol>
        <li>Используйте официальное мобильное приложение — оно часто работает даже при блокировке сайта</li>
        <li>Обратитесь в службу поддержки для получения актуального зеркала</li>
        <li>Используйте VPN-сервис для обхода блокировок</li>
        <li>Попробуйте изменить DNS на 8.8.8.8 (Google) или 1.1.1.1 (Cloudflare)</li>
      </ol>

      <div className="notice">
        ⚠️ Используйте только официальные зеркала, полученные через поддержку платформы.
        Сторонние «зеркала» могут быть фишинговыми сайтами.
      </div>

      <h2>Мобильное приложение как альтернатива</h2>
      <p>
        Официальное приложение Pocket Option для iOS и Android работает независимо от
        блокировок сайта и является самым надёжным способом доступа к платформе.
      </p>
    </ArticleLayout>
  );
}
