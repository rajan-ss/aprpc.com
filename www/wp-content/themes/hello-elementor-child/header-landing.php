<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>


  <div class="site-wrapper">
    <div class="absolute top-0 left-0 right-0 z-10 md:pt-12 lg:pt-16 bg-gradient-to-l from-white  lg:to-black/[1.25%] to-black md:pb-6">
      <header class="site-header max-lg:py-4">
        <div class="container flex justify-between items-center">
          <picture class="max-w-40 md:max-w-52 lg:max-w-[288px]">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/header-logo.png" alt="Header Logo" width="288" height="79" loading="lazy">
          </picture>
          <div class="flex gap-2 items-center relative group">
            <a href="tel:2129918680" class="stretched-link">
              <span><i class="icon-phone border-[0.815px] border-primary bg-transparent rounded-full p-2 lg:p-3 group-hover:bg-primary group-hover:text-white transition-all"></i></span>
            </a>
            <div class="[&_p]:mb-0 group-hover:text-primary transition-all text-sm max-md:hidden">
              <p>FREE CONSULTATION!</p>
              <strong class="font-lead text-[20px] text-primary leading-8 tracking-[0.4px] group-hover:text-black transition-all">(212) 991-8680</strong>
            </div>
          </div>
        </div>
      </header>
      <!-- /Header -->
    </div>

    <main class="site-content">
      <section class="relative pt-48 lg:pt-52 2xl:pt-[264px] pb-[208px] 2xl:pb-[264px] bg-[url('../images/hero-bg-img.jpg')] bg-no-repeat bg-right max-lg:bg-none z-[1] before:absolute before:inset-0 before:bg-gradient-to-t lg:before:bg-gradient-to-r from-black from-[1.47%] via-black via-[53%] sm:via-[49%] md:via-[39%] lg:via-[34.48%] to-[63%] md:to-[53%] lg:to-[100%] lg:before:right-[30%] max-md:before:right-[-30px] before:z-[-1] text-white">
        <div class="container relative z-[-2] lg:hidden pb-3 md:pb-6">
          <picture>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/hero-image.jpg" width="933" height="835" alt="Hero Image" loading="lazy">
          </picture>
        </div>
        <div class="container">
          <div class="relative max-w-80 sm:max-w-96 md:max-w-[29.1rem] lg:max-w-[725px] before:absolute before:left-0 before:z-[-1] before:w-[137px] before:h-32 before:bg-primary/[24%] before:rounded-tr-[66px] before:rounded-bl-[66px] before:-ml-7 [&_p]:pt-[14px] [&_p]:pb-10">
            <span class="text-primary font-lead text-base font-semibold leading-8 uppercase tracking-[1px]">Acupuncture Treatments</span>
            <h1><span class="font-normal">Experience the</span> Healing Power of Acupuncture</h1>
            <p>Restore balance, reduce pain, and enhance well-being.</p>
            <a href="tel:2129918680" class="btn btn-primary">call today</a>
          </div>
        </div>
      </section>
      <!-- /Hero -->
      <section class="banner-form -mt-[95px] relative z-[1] max-lg:mx-5">
        <div class="container">
          <div class="flex flex-wrap -mx-5 justify-between items-center pt-8 pb-9 lg:pb-5 pr-4 lg:pr-14 pl-4 bg-white rounded-tr-[65px] rounded-bl-[65px] shadow">
            <div class="w-full lg:w-[28%] px-5">
              <div class="[&_h2]:relative [&_h2]:h6 [&_h2]:pl-3 [&_h2]:text-primary [&_h2]:uppercase [&_h2]:font-bold [&_h2]:before:absolute [&_h2]:before:inset-0 [&_h2]:before:top-[-3px] [&_h2]:before:w-8 [&_h2]:before:h-8 [&_h2]:before:bg-primary/20 [&_h2]:before:rounded-full">
                <h2>GET A FREE CONSULTATION!</h2>
                <p>Ready to begin your healing journey?</p>
              </div>
            </div>
            <div class="w-full lg:w-[70%] px-5">
              <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax=true]'); ?>
            </div>
          </div>
        </div>
      </section>