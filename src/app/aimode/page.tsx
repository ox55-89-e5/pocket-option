import type { Metadata } from 'next';
import ArticleLayout from '@/components/ArticleLayout';

const SITE_URL = 'https://pocoptrade.com';

export const metadata: Metadata = {
  title: 'AI Mode на Pocket Option — что такое и как работает',
  description:
    'Что такое AI Mode на Pocket Option: автоматические торговые сигналы на основе искусственного интеллекта, как включить и использовать.',
  alternates: { canonical: `${SITE_URL}/aimode` },
  openGraph: {
    title: 'AI Mode Pocket Option',
    description: 'Торговые сигналы на основе ИИ в Pocket Option — что это и как работает.',
    url: `${SITE_URL}/aimode`,
    locale: 'ru_RU',
    type: 'article',
  },
};

export default function AiModePage() {
  return (
    <ArticleLayout
      title="Что такое AI Mode на Pocket Option?"
      slug="/aimode"
      breadcrumbs={[
        { label: 'Главная', href: '/' },
        { label: 'FAQ', href: '/faq' },
        { label: 'AI Mode' },
      ]}
    >
      <p>
        AI Mode — встроенный инструмент Pocket Option, который анализирует рынок с помощью
        алгоритмов машинного обучения и предоставляет торговые сигналы в реальном времени.
      </p>

      <h2>Как работает AI Mode</h2>
      <p>
        Система анализирует исторические данные, паттерны цены и технические индикаторы.
        На основе анализа генерируются сигналы с прогнозом направления движения актива
        и вероятностью исхода.
      </p>

      <h2>Как включить AI Mode</h2>
      <ol>
        <li>Войдите в торговый терминал</li>
        <li>Найдите кнопку «AI» или «AI Mode» в панели инструментов</li>
        <li>Выберите актив и таймфрейм</li>
        <li>Получайте сигналы и принимайте торговые решения</li>
      </ol>

      <h2>Важные предупреждения</h2>
      <div className="notice">
        ⚠️ AI Mode предоставляет вспомогательные сигналы, а не гарантии прибыли.
        Всегда сочетайте сигналы с собственным анализом и управлением рисками.
      </div>

      <h2>Для кого подходит</h2>
      <p>
        AI Mode полезен как новичкам (помогает ориентироваться на рынке), так и
        опытным трейдерам (дополнительное подтверждение торговых идей).
      </p>
    </ArticleLayout>
  );
}
