<?php require_once __DIR__ . '/links.php'; ?>
<header class="header">
  <div class="container header-inner">
    <!-- Logo -->
    <a href="/" class="header-logo">Pocket<span class="header-logo-dot">.</span>Option</a>

    <!-- Desktop nav -->
    <nav class="header-nav" aria-label="Основная навигация">
      <a href="/app/" class="nav-link">Приложение</a>
      <a href="/promo/" class="nav-link">Промокоды</a>
      <a href="/cabinet/" class="nav-link">Личный кабинет</a>
      <a href="/faq/" class="nav-link">FAQ</a>
    </nav>

    <!-- Desktop CTA buttons -->
    <div class="header-cta">
      <a href="/lk/" class="btn btn-outline btn-sm" target="_blank" rel="noopener noreferrer">Вход</a>
      <a href="/signup/" class="btn btn-primary btn-sm" target="_blank" rel="noopener noreferrer">Регистрация</a>
    </div>

    <!-- Burger button -->
    <button class="burger" id="burger-btn" aria-label="Открыть меню" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>

  <!-- Mobile menu -->
  <div class="mobile-menu" id="mobile-menu">
    <nav>
      <a href="/app/" class="mobile-link">Приложение</a>
      <a href="/promo/" class="mobile-link">Промокоды</a>
      <a href="/cabinet/" class="mobile-link">Личный кабинет</a>
      <a href="/faq/" class="mobile-link">FAQ</a>
    </nav>
    <div class="mobile-cta">
      <a href="/lk/" class="btn btn-outline" target="_blank" rel="noopener noreferrer">Вход</a>
      <a href="/signup/" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Регистрация</a>
    </div>
  </div>
</header>
<main>
