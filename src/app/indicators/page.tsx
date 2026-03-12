import type { Metadata } from 'next';
import ArticleLayout from '@/components/ArticleLayout';

const SITE_URL = 'https://pocoptrade.com';

export const metadata: Metadata = {
  title: 'Индикаторы на Pocket Option — какие доступны и как использовать',
  description:
    'Полный список индикаторов технического анализа на платформе Pocket Option: RSI, MACD, Bollinger Bands, скользящие средние и другие.',
  alternates: { canonical: `${SITE_URL}/indicators` },
  openGraph: {
    title: 'Индикаторы Pocket Option',
    description: 'Какие индикаторы доступны на платформе Pocket Option и как их применять.',
    url: `${SITE_URL}/indicators`,
    locale: 'ru_RU',
    type: 'article',
  },
};

export default function IndicatorsPage() {
  return (
    <ArticleLayout
      title="Какие индикаторы доступны на Pocket Option?"
      slug="/indicators"
      breadcrumbs={[
        { label: 'Главная', href: '/' },
        { label: 'FAQ', href: '/faq' },
        { label: 'Индикаторы' },
      ]}
    >
      <p>
        Pocket Option предлагает более <strong>100 индикаторов</strong> технического анализа.
        Они помогают определять тренды, уровни входа и выхода, а также силу движения цены.
      </p>

      <h2>Популярные индикаторы</h2>
      <ul>
        <li><strong>RSI</strong> — индекс относительной силы, определяет перекупленность/перепроданность</li>
        <li><strong>MACD</strong> — схождение/расхождение скользящих средних</li>
        <li><strong>Bollinger Bands</strong> — полосы волатильности</li>
        <li><strong>Скользящие средние (MA, EMA)</strong> — сглаживание ценового тренда</li>
        <li><strong>Stochastic</strong> — осциллятор для определения разворотов</li>
        <li><strong>ATR</strong> — средний истинный диапазон, мера волатильности</li>
      </ul>

      <h2>Как добавить индикатор на график</h2>
      <ol>
        <li>Откройте торговый терминал</li>
        <li>Нажмите на иконку индикаторов (fx) в верхней панели</li>
        <li>Выберите нужный из списка или найдите через поиск</li>
        <li>Настройте параметры и нажмите «Применить»</li>
      </ol>

      <h2>Советы по использованию</h2>
      <p>
        Не используйте слишком много индикаторов одновременно — это создаёт «шум».
        Оптимально: 2–3 индикатора, дополняющих друг друга.
      </p>
    </ArticleLayout>
  );
}
