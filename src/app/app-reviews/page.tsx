import type { Metadata } from 'next';
import ArticleLayout from '@/components/ArticleLayout';

const SITE_URL = 'https://pocoptrade.com';

export const metadata: Metadata = {
  title: 'Отзывы о мобильном приложении Pocket Option — iOS и Android',
  description:
    'Реальные отзывы пользователей о мобильном приложении Pocket Option: удобство, скорость, функционал на iPhone и Android.',
  alternates: { canonical: `${SITE_URL}/app-reviews` },
  openGraph: {
    title: 'Отзывы о приложении Pocket Option',
    description: 'Что говорят трейдеры о мобильном приложении Pocket Option.',
    url: `${SITE_URL}/app-reviews`,
    locale: 'ru_RU',
    type: 'article',
  },
};

export default function AppReviewsPage() {
  return (
    <ArticleLayout
      title="Какие отзывы о мобильном приложении Pocket Option?"
      description="Реальные отзывы пользователей о мобильном приложении Pocket Option: удобство, скорость, функционал на iPhone и Android."
      slug="/app-reviews"
      breadcrumbs={[
        { label: 'Главная', href: '/' },
        { label: 'FAQ', href: '/faq' },
        { label: 'Отзывы о приложении' },
      ]}
    >
      <p>
        Мобильное приложение Pocket Option доступно на iOS и Android. Пользователи в целом
        оценивают его положительно: удобный интерфейс, быстрое исполнение сделок и
        возможность торговать в любом месте.
      </p>

      <h2>Рейтинг в магазинах приложений</h2>
      <p>
        В App Store приложение имеет оценку <strong>4.2 из 5</strong>, в Google Play —
        <strong> 4.0 из 5</strong>. Большинство положительных отзывов отмечают стабильность
        работы и удобство интерфейса.
      </p>

      <h2>Что хвалят пользователи</h2>
      <ul>
        <li>Быстрое открытие и закрытие позиций</li>
        <li>Полный функционал как на десктопе</li>
        <li>Push-уведомления о результатах сделок</li>
        <li>Демо-счёт без ограничений</li>
      </ul>

      <h2>На что жалуются</h2>
      <ul>
        <li>Редкие зависания при нестабильном интернете</li>
        <li>Иногда долгая загрузка графиков</li>
        <li>Некоторые функции недоступны без обновления</li>
      </ul>

      <div className="notice">
        💡 Для лучшей работы приложения убедитесь, что у вас установлена последняя версия
        из официального магазина.
      </div>
    </ArticleLayout>
  );
}
