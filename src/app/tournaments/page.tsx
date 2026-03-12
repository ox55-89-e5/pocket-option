import type { Metadata } from 'next';
import ArticleLayout from '@/components/ArticleLayout';

const SITE_URL = 'https://pocoptrade.com';

export const metadata: Metadata = {
  title: 'Турниры на Pocket Option — как участвовать и выигрывать',
  description:
    'Как принять участие в турнирах Pocket Option: условия, призовые фонды, стратегии для победы в соревнованиях трейдеров.',
  alternates: { canonical: `${SITE_URL}/tournaments` },
  openGraph: {
    title: 'Турниры Pocket Option',
    description: 'Соревнования трейдеров с реальными призами на Pocket Option.',
    url: `${SITE_URL}/tournaments`,
    locale: 'ru_RU',
    type: 'article',
  },
};

export default function TournamentsPage() {
  return (
    <ArticleLayout
      title="Как участвовать в турнирах на Pocket Option?"
      description="Как принять участие в турнирах Pocket Option: условия, призовые фонды, стратегии для победы в соревнованиях трейдеров."
      slug="/tournaments"
      breadcrumbs={[
        { label: 'Главная', href: '/' },
        { label: 'FAQ', href: '/faq' },
        { label: 'Турниры' },
      ]}
    >
      <p>
        Pocket Option регулярно проводит турниры для трейдеров с реальными призовыми
        фондами. Это возможность соревноваться с другими участниками и выиграть
        дополнительные средства.
      </p>

      <h2>Виды турниров</h2>
      <ul>
        <li><strong>Бесплатные турниры</strong> — участие без взноса, небольшие призы</li>
        <li><strong>Платные турниры</strong> — взнос от $5–10, крупные призовые фонды</li>
        <li><strong>Командные турниры</strong> — торговля в паре с партнёром</li>
      </ul>

      <h2>Как принять участие</h2>
      <ol>
        <li>Войдите в личный кабинет</li>
        <li>Перейдите в раздел «Турниры»</li>
        <li>Выберите подходящий турнир и нажмите «Участвовать»</li>
        <li>Оплатите взнос (для платных) или подтвердите участие</li>
        <li>Торгуйте в период турнира — цель набрать максимальный баланс</li>
      </ol>

      <h2>Стратегии для турниров</h2>
      <p>
        В турнирах побеждает тот, кто набрал наибольший баланс, а не наибольшую
        доходность. Допускается агрессивная торговля — в турнире нет риска потерять
        реальные деньги сверх взноса.
      </p>
    </ArticleLayout>
  );
}
