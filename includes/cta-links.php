<?php
/**
 * CTA button mapping: page slug → [href, label]
 * Redirects are handled by .htaccess:
 *   /signup/ → https://po-fcm.com/ru/register/
 *   /lk/     → https://po-fcm.com/ru/register/
 *   /aff/    → https://cleveraff.com/
 */
$cta_links = [
  '/registration/'       => ['href' => '/signup/',   'label' => 'Зарегистрироваться'],
  '/recovery-password/'  => ['href' => '/lk/',       'label' => 'Войти в кабинет'],
  '/verification/'       => ['href' => '/signup/',   'label' => 'Пройти верификацию'],
  '/deposit/'            => ['href' => '/signup/',   'label' => 'Пополнить счёт'],
  '/withdraw/'           => ['href' => '/signup/',   'label' => 'Вывести средства'],
  '/withdrawal-fees/'    => ['href' => '/signup/',   'label' => 'Перейти к выводу'],
  '/download-app/'       => ['href' => '/lk/',       'label' => 'Скачать приложение'],
  '/app/'                => ['href' => '/download/', 'label' => 'Скачать приложение'],
  '/app-reviews/'        => ['href' => '/lk/',       'label' => 'Открыть платформу'],
  '/web-version/'        => ['href' => '/lk/',       'label' => 'Открыть веб-версию'],
  '/bonus/'              => ['href' => '/lk/',       'label' => 'Получить бонус'],
  '/activate-promocode/' => ['href' => '/lk/',       'label' => 'Активировать промокод'],
  '/cashback/'           => ['href' => '/lk/',       'label' => 'Получить кешбэк'],
  '/no-deposit-bonus/'   => ['href' => '/lk/',       'label' => 'Получить бонус'],
  '/strategies/'         => ['href' => '/lk/',       'label' => 'Попробовать на демо'],
  '/training/'           => ['href' => '/lk/',       'label' => 'Начать обучение'],
  '/beginner/'           => ['href' => '/lk/',       'label' => 'Открыть демо-счёт'],
  '/plus-trading/'       => ['href' => '/lk/',       'label' => 'Торговать в плюс'],
  '/indicators/'         => ['href' => '/lk/',       'label' => 'Попробовать индикаторы'],
  '/aimode/'             => ['href' => '/lk/',       'label' => 'Попробовать AI Mode'],
  '/copy-trading/'       => ['href' => '/lk/',       'label' => 'Копировать сделки'],
  '/reviews/'            => ['href' => '/lk/',       'label' => 'Открыть платформу'],
  '/license/'            => ['href' => '/lk/',       'label' => 'Открыть платформу'],
  '/blacklist/'          => ['href' => '/lk/',       'label' => 'Открыть платформу'],
  '/safety/'             => ['href' => '/lk/',       'label' => 'Открыть платформу'],
  '/mirror/'             => ['href' => '/lk/',       'label' => 'Войти в кабинет'],
  '/tournaments/'        => ['href' => '/lk/',       'label' => 'Войти в кабинет для турниров'],
  '/affiliate/'          => ['href' => '/aff/',      'label' => 'Стать партнёром'],
  '/support/'            => ['href' => '/lk/',       'label' => 'Связаться с поддержкой'],
  '/2fa/'                => ['href' => '/lk/',       'label' => 'Включить 2FA'],
  '/history/'            => ['href' => '/lk/',       'label' => 'Открыть историю'],
  '/wait-verification/'  => ['href' => '/lk/',       'label' => 'Проверить статус'],
];

function get_cta(string $slug): ?array {
  global $cta_links;
  return $cta_links[$slug] ?? null;
}
