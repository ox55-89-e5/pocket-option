import type { Metadata } from 'next';
import ArticleLayout from '@/components/ArticleLayout';

const SITE_URL = 'https://pocoptrade.com';

export const metadata: Metadata = {
  title: 'История операций на Pocket Option — как найти и скачать',
  description:
    'Где найти историю сделок и операций на Pocket Option, как скачать отчёт и что делать если операция не отображается.',
  alternates: { canonical: `${SITE_URL}/history` },
  openGraph: {
    title: 'История операций Pocket Option',
    description: 'Как найти историю сделок и операций на Pocket Option.',
    url: `${SITE_URL}/history`,
    locale: 'ru_RU',
    type: 'article',
  },
};

export default function HistoryPage() {
  return (
    <ArticleLayout
      title="Где найти историю операций на Pocket Option?"
      description="Где найти историю сделок и операций на Pocket Option, как скачать отчёт и что делать если операция не отображается."
      slug="/history"
      breadcrumbs={[
        { label: 'Главная', href: '/' },
        { label: 'FAQ', href: '/faq' },
        { label: 'История операций' },
      ]}
    >
      <p>
        История всех сделок, депозитов и выводов хранится в личном кабинете Pocket Option.
        Данные доступны за всё время использования аккаунта.
      </p>

      <h2>Где найти историю сделок</h2>
      <ol>
        <li>Войдите в личный кабинет</li>
        <li>Перейдите в раздел «История» или «Сделки»</li>
        <li>Выберите период и тип операций (сделки, депозиты, выводы)</li>
      </ol>

      <h2>Что видно в истории</h2>
      <ul>
        <li>Дата и время каждой сделки</li>
        <li>Актив и направление (вверх/вниз)</li>
        <li>Сумма инвестиции и результат</li>
        <li>Все пополнения и выводы средств</li>
      </ul>

      <h2>Как скачать выписку</h2>
      <p>
        В разделе истории есть кнопка экспорта в CSV или PDF. Выписка пригодится для
        анализа торговли или налоговой отчётности.
      </p>

      <h2>Операция не отображается</h2>
      <p>
        Если недавняя операция не видна, подождите несколько минут — данные обновляются
        с небольшой задержкой. Если проблема не исчезла, обратитесь в поддержку с
        указанием времени и суммы операции.
      </p>
    </ArticleLayout>
  );
}
