import type { Metadata } from 'next';
import ArticleLayout from '@/components/ArticleLayout';

const SITE_URL = 'https://pocoptrade.com';

export const metadata: Metadata = {
  title: 'Партнёрская программа Pocket Option — как зарабатывать на рефералах',
  description:
    'Как работает партнёрская программа Pocket Option: условия, комиссии, способы привлечения трейдеров и вывода заработанного.',
  alternates: { canonical: `${SITE_URL}/affiliate` },
  openGraph: {
    title: 'Партнёрская программа Pocket Option',
    description: 'Зарабатывайте на привлечении трейдеров в Pocket Option.',
    url: `${SITE_URL}/affiliate`,
    locale: 'ru_RU',
    type: 'article',
  },
};

export default function AffiliatePage() {
  return (
    <ArticleLayout
      title="Как зарабатывать на партнёрской программе Pocket Option?"
      slug="/affiliate"
      breadcrumbs={[
        { label: 'Главная', href: '/' },
        { label: 'FAQ', href: '/faq' },
        { label: 'Партнёрская программа' },
      ]}
    >
      <p>
        Партнёрская программа Pocket Option позволяет зарабатывать, привлекая новых
        трейдеров на платформу. За каждого реферала, который торгует реальными деньгами,
        партнёр получает комиссионные.
      </p>

      <h2>Условия партнёрской программы</h2>
      <ul>
        <li>Комиссия до <strong>80% от спреда</strong> реферала пожизненно</li>
        <li>Реферальная ссылка генерируется в личном кабинете</li>
        <li>Статистика в реальном времени</li>
        <li>Вывод заработка теми же способами, что и торговые прибыли</li>
      </ul>

      <h2>Как начать</h2>
      <ol>
        <li>Зарегистрируйтесь на платформе</li>
        <li>Перейдите в раздел «Партнёрам» в личном кабинете</li>
        <li>Получите уникальную реферальную ссылку</li>
        <li>Делитесь ссылкой в блоге, YouTube, соцсетях или среди знакомых</li>
      </ol>

      <h2>Сколько можно заработать</h2>
      <p>
        Заработок зависит от активности привлечённых трейдеров. Активный партнёр с
        аудиторией может зарабатывать от нескольких сотен до тысяч долларов в месяц.
      </p>
    </ArticleLayout>
  );
}
