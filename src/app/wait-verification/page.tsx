import type { Metadata } from 'next';
import ArticleLayout from '@/components/ArticleLayout';

const SITE_URL = 'https://pocoptrade.com';

export const metadata: Metadata = {
  title: 'Сколько ждать верификацию на Pocket Option — сроки и статусы',
  description:
    'Сколько времени занимает верификация аккаунта на Pocket Option, какие статусы бывают и что делать если верификация затянулась.',
  alternates: { canonical: `${SITE_URL}/wait-verification` },
  openGraph: {
    title: 'Ожидание верификации Pocket Option',
    description: 'Сроки верификации аккаунта на Pocket Option и что делать при задержке.',
    url: `${SITE_URL}/wait-verification`,
    locale: 'ru_RU',
    type: 'article',
  },
};

export default function WaitVerificationPage() {
  return (
    <ArticleLayout
      title="Сколько ждать верификацию на Pocket Option?"
      slug="/wait-verification"
      breadcrumbs={[
        { label: 'Главная', href: '/' },
        { label: 'FAQ', href: '/faq' },
        { label: 'Ожидание верификации' },
      ]}
    >
      <p>
        Верификация аккаунта на Pocket Option обычно занимает от <strong>нескольких часов
        до 3 рабочих дней</strong>. В период высокой нагрузки срок может увеличиться.
      </p>

      <h2>Статусы верификации</h2>
      <ul>
        <li><strong>На рассмотрении</strong> — документы получены, ожидайте проверки</li>
        <li><strong>Требуются дополнительные документы</strong> — проверьте email</li>
        <li><strong>Отклонено</strong> — загрузите документы повторно</li>
        <li><strong>Подтверждено</strong> — верификация пройдена</li>
      </ul>

      <h2>Как ускорить верификацию</h2>
      <ul>
        <li>Убедитесь, что документы читаемые и не обрезаны</li>
        <li>Фото в хорошем освещении, без бликов</li>
        <li>Загружайте актуальные документы (срок действия не истёк)</li>
        <li>Для подтверждения адреса подойдут счета за коммунальные услуги не старше 3 месяцев</li>
      </ul>

      <h2>Что делать если верификация затянулась</h2>
      <p>
        Если прошло более 3 рабочих дней без ответа, напишите в службу поддержки.
        Укажите email аккаунта и дату загрузки документов.
      </p>

      <div className="notice">
        💡 Торговать на демо-счёте можно без верификации. Верификация обязательна
        только для вывода реальных средств.
      </div>
    </ArticleLayout>
  );
}
