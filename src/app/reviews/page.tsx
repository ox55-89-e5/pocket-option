import type { Metadata } from 'next';
import ArticleLayout from '@/components/ArticleLayout';

const SITE_URL = 'https://pocoptrade.com';

export const metadata: Metadata = {
  title: 'Отзывы о Pocket Option — реальные мнения трейдеров',
  description:
    'Реальные отзывы о платформе Pocket Option от трейдеров: плюсы и минусы, надёжность, вывод средств, техподдержка.',
  alternates: { canonical: `${SITE_URL}/reviews` },
  openGraph: {
    title: 'Отзывы о Pocket Option',
    description: 'Что говорят реальные пользователи о платформе Pocket Option.',
    url: `${SITE_URL}/reviews`,
    locale: 'ru_RU',
    type: 'article',
  },
};

export default function ReviewsPage() {
  return (
    <ArticleLayout
      title="Где почитать отзывы о платформе Pocket Option?"
      slug="/reviews"
      breadcrumbs={[
        { label: 'Главная', href: '/' },
        { label: 'FAQ', href: '/faq' },
        { label: 'Отзывы' },
      ]}
    >
      <p>
        Отзывы о Pocket Option можно найти на независимых площадках: Trustpilot, Forex Peace Army,
        тематических форумах и в магазинах приложений. Общая оценка платформы — положительная.
      </p>

      <h2>Что хвалят в отзывах</h2>
      <ul>
        <li>Низкий порог входа — минимальный депозит $5</li>
        <li>Быстрый вывод средств (1–3 рабочих дня)</li>
        <li>Удобный интерфейс и мобильное приложение</li>
        <li>Большой выбор активов для торговли</li>
        <li>Демо-счёт без ограничений по времени</li>
      </ul>

      <h2>На что жалуются</h2>
      <ul>
        <li>Задержки верификации в пиковые периоды</li>
        <li>Спреды выше среднерыночных на некоторых активах</li>
        <li>Платформа не лицензирована в РФ (ЦБ РФ)</li>
      </ul>

      <h2>Как отличить реальные отзывы от накрученных</h2>
      <p>
        Смотрите на детализированные отзывы с конкретными суммами и датами операций.
        Общие фразы без деталей чаще всего ненастоящие. Проверяйте несколько независимых
        источников.
      </p>
    </ArticleLayout>
  );
}
