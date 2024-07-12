<?php
/**
 * 
 * Template Name: Landing Page
 * 
 */
include 'header-landing.php'; ?>

<section class="pb-14 sm:pb-20 lg:pb-24 2xl:pb-[120px]" id="about-us">
  <div class="container flex justify-center items-center max-lg:flex-wrap gap-16">
    <div class="w-full lg:w-1/2 [&_p]:text-neutral-500">
      <picture class="[&_img]:rounded-tl-[100px] [&_img]:rounded-br-[100px] max-lg:[&_img]:w-full">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/about-us-block-img.jpg" alt="About Us Feature Image" width="615" height="614" loading="lazy">
      </picture>
      <div class="flex justify-center mt-5 gap-6 max-sm:flex-wrap max-sm:justify-start">
        <div class="">
          <i class="icon-quote text-5xl lg:text-[63px] text-primary/[40%]"></i>
        </div>
        <div class="[&_p]:italic text-lg">
          <p>“Our philosophy is to improve total well-being through personalized patient care.”</p>
          <strong class="font-lead font-bold uppercase text-base text-primary">- Iris Netzer-Greenfield, L.Ac.</strong>
        </div>
      </div>
    </div>
    <div class="w-full lg:w-1/2 [&_p]:text-neutral-500">
      <div class="flex items-center gap-2 uppercase text-primary [&_h2]:h6 [&_h2]:mb-0">
        <span class="w-5 h-3 bg-gradient-to-r from-primary to-primary/[0.06] rounded-tl-lg rounded-br-lg"></span>
        <h2>About Us</h2>
        <span class="w-5 h-3 bg-gradient-to-r from-primary/[0.06] to-primary rounded-tr-lg rounded-bl-lg"></span>
      </div>
      <div class="relative pt-5 pb-6 mb-5 [&_h2]:font-semibold before:absolute before:w-[166px] before:h-[2px] before:bottom-0 before:bg-gradient-to-l from-primary/[0.06%] to-primary">
        <h2>Our <span class="text-primary">Approach</span></h2>
      </div>
      <p>Transforming lives, one needle at a time, We make every individual feel special.  Provide very good one on one service.  We also accept Blue Cross and Aetna plans. Personalized care.  boutique office setting. focus on female health</p>
      <div class="relative flex flex-col justify-center items-center">
        <picture class="w-full pt-4 pb-12 md:pb-14 2xl:pb-16 [&_img]:w-full">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/our-approach-block-img.jpg" alt="Our Approach Feature Image" width="588" height="319" loading="lazy">
        </picture>
        <div class="max-lg:w-full lg:max-w-[545px] relative pt-7 lg:pt-9 px-12 md:px-14 lg:px-16 pb-7 md:pb-9 lg:pb-11 -mt-24 md:-mt-36 lg:-mt-40 bg-white before:absolute before:inset-0 before:bg-gradient-to-r before:from-primary/[0.02%] before:to-primary-200/[0.02%] border-primary/[0.14%] before:z-[-1] rounded-tr-[65px] rounded-bl-[65px] shadow-lg border text-center">
          <h3>A place of integrity and care.</h3>
          <div class="pt-8 flex justify-between max-sm:gap-20 items-center max-sm:flex-wrap max-sm:justify-center max-sm:gap-y-6">
            <div class="flex max-sm:flex-wrap max-sm:justify-center max-sm:gap-y-6 gap-2 items-center relative group">
              <a href="tel:2129918680" class="stretched-link">
                <span><i class="icon-phone border-[0.815px] border-primary bg-transparent rounded-full p-2 lg:p-3 group-hover:bg-primary group-hover:text-white transition-all"></i></span>
              </a>
              <div class="[&_p]:mb-0 group-hover:text-primary transition-all text-left">
                <p>FREE CONSULTATION!</p>
                <strong class="font-lead text-[20px] text-primary leading-8 tracking-[0.4px] group-hover:text-black transition-all">(212) 991-8680</strong>
              </div>
            </div>
            <div class="">
              <a href="#" class="btn btn-primary">Book now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Section {About Us} -->

<section class="bg-primary/10 py-10 md:py-16 lg:py-20 border-l-[3px] border-primary" id="sevices">
  <div class="container">
    <div class="flex items-center gap-2 uppercase text-primary [&_h2]:h6 [&_h2]:mb-0">
      <span class="w-5 h-3 bg-gradient-to-r from-primary to-primary/[0.06] rounded-tl-lg rounded-br-lg"></span>
      <h2>Our services</h2>
      <span class="w-5 h-3 bg-gradient-to-r from-primary/[0.06] to-primary rounded-tr-lg rounded-bl-lg"></span>
    </div>
    <div class="swiper services-slider">
      <div class="flex flex-col md:flex-row gap-y-5 justify-between [&_h3]:h2 pb-10">
        <h3>Services Specializing <span class="text-primary">in Woman’s Health</span></h3>
        <div class="flex gap-4">
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
      <div class="swiper-wrapper">
        <div class=" swiper-slide h-auto">
          <div class="h-full flex flex-col justify-between items-end bg-white rounded-lg box-shadow">
            <div class="pt-8 px-5 [&_h4]:mb-3">
              <div class="text-primary bg-primary/10 rounded-full size-[50px] flex justify-center 
              items-center mb-4">
                <i class="icon-lady-user text-4xl"></i>
              </div>
              <h4>Woman’s Health</h4>
              <p>A woman’s body transforms through many hormonal cycles in the course of a lifetime.</p>
            </div>
            <picture class="w-full [&_img]:w-full">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/swiper-slider-img-01.jpg" alt="Slider Image" width="588" height="319" loading="lazy">
            </picture>
          </div>
        </div>
        <div class=" swiper-slide h-auto">
          <div class="h-full flex flex-col justify-between items-end bg-white rounded-lg box-shadow">
            <div class="pt-8 px-5 [&_h4]:mb-3">
              <div class="text-primary bg-primary/10 rounded-full size-[50px] flex justify-center 
              items-center mb-4">
                <i class="icon-lady-user text-4xl"></i>
              </div>
              <h4>Infertility</h4>
              <p>Acupuncture is an effective therapy for those facing infertility challenges.</p>
            </div>
            <picture class="w-full [&_img]:w-full">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/swiper-slider-img-02.jpg" alt="Slider Image" width="588" height="319" loading="lazy">
            </picture>
          </div>
        </div>
        <div class=" swiper-slide h-auto">
          <div class="h-full flex flex-col justify-between items-end bg-white rounded-lg box-shadow">
            <div class="pt-8 px-5 [&_h4]:mb-3">
              <div class="text-primary bg-primary/10 rounded-full size-[50px] flex justify-center 
              items-center mb-4">
                <i class="icon-lady-user text-4xl"></i>
              </div>
              <h4>Pain Management</h4>
              <p>Pain may be alleviated by stimulating specific points by needling or applying pressure.</p>
            </div>
            <picture class="w-full [&_img]:w-full">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/swiper-slider-img-03.jpg" alt="Slider Image" width="588" height="319" loading="lazy">
            </picture>
          </div>
        </div>
      </div>
      <!-- /Slider Wrapper -->
    </div>
    <div class="flex justify-center items-center pt-6 md:pt-8 lg:pt-12">
      <a href="#" class="btn btn-primary js-has-smooth">Book now</a>
    </div>
  </div>
</section>
<!-- /Section {Our Services} -->

<section class="relative py-10 md:py-12 lg:py-14 xl:py-20 bg-gradient-primary" id="benifits">
  <div class="container">
    <div class="flex flex-wrap gap-y-6 md:-mx-4">
      <div class="w-full lg:w-[54%] xl:w-1/2 md:px-4 xl:max-w-[620px]">
        <div class="block-content text-white mb-6 md:mb-8 lg:mb-[42px] [&_p]:text-base [&_p]:leading-[30px] [&_p]:capitalize">
          <div class="text-white [&_span]:uppercase [&_span]:h6 [&_span]:font-lead [&_span]:font-semibold [&_span]:leading-[30px] mb-2 md:mb-3 lg:mb-4">
            <span class="relative z-[1] px-[29px] before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-5 before:h-3 before:bg-gradient-to-r before:from-white before:to-white/[0.06] before:rounded-tl-lg before:rounded-br-lg after:absolute after:top-1/2 after:-translate-y-1/2 after:right-0 after:w-5 after:h-3 after:bg-gradient-to-r after:from-white/[0.06] after:to-white after:rounded-tr-lg after:rounded-bl-lg">Benefits</span>
          </div>
          <h2 class="normal-case mb-4 lg:mb-6">Here are a few reasons why people choose Acupunture Remedies</h2>
          <p>Discover the transformative benefits of acupuncture, an ancient healing practice that offers a wide range of health and wellness advantages. Our acupuncture treatments are designed to address various physical and emotional concerns, promoting overall well-being and balance. </p>
        </div>
        <div class="flex flex-wrap md:-mx-3 lg:-mx-2 xl:-mx-3">
          <div class="w-full md:w-1/2 md:px-3 lg:px-2 xl:px-3">
            <div class="relative w-full min-h-[54px] flex items-center py-[7px] px-4 lg:px-2 xl:px-4 z-10 mb-4 sm:mb-5 md:mb-6 xl:mb-7 before:absolute before:top-0 before:left-0 before:h-full before:w-0.5 before:bg-white before:opacity-20 before:z-0 after:absolute after:top-0 after:left-0 after:h-full after:w-full after:z-[-1] after:bg-gradient-to-r after:from-white after:to-primary after:opacity-10">
              <div class="pr-4 icon lg:pr-2 xl:pr-4 text-white text-4xl">
                <i class="icon-thumbs-up"></i>
              </div>
              <span class="opacity-90 text-white text-base font-semibold leading-[30px]">Mental Clarity and Focus</span>
            </div>
          </div>
          <div class="w-full md:w-1/2 md:px-3 lg:px-2 xl:px-3">
            <div class="relative w-full min-h-[54px] flex items-center py-[7px] px-4 lg:px-2 xl:px-4 z-10 mb-4 sm:mb-5 md:mb-6 xl:mb-7 before:absolute before:top-0 before:left-0 before:h-full before:w-0.5 before:bg-white before:opacity-20 before:z-0 after:absolute after:top-0 after:left-0 after:h-full after:w-full after:z-[-1] after:bg-gradient-to-r after:from-white after:to-primary after:opacity-10">
              <div class="pr-4 icon lg:pr-2 xl:pr-4 text-white text-4xl">
                <i class="icon-clock"></i>
              </div>
              <span class="opacity-90 text-white text-base font-semibold leading-[30px]">Fertility Support</span>
            </div>
          </div>
          <div class="w-full md:w-1/2 md:px-3 lg:px-2 xl:px-3">
            <div class="relative w-full min-h-[54px] flex items-center py-[7px] px-4 lg:px-2 xl:px-4 z-10 mb-4 sm:mb-5 md:mb-6 xl:mb-7 before:absolute before:top-0 before:left-0 before:h-full before:w-0.5 before:bg-white before:opacity-20 before:z-0 after:absolute after:top-0 after:left-0 after:h-full after:w-full after:z-[-1] after:bg-gradient-to-r after:from-white after:to-primary after:opacity-10">
              <div class="pr-4 icon lg:pr-2 xl:pr-4 text-white text-4xl">
                <i class="icon-cup"></i>
              </div>
              <span class="opacity-90 text-white text-base font-semibold leading-[30px]">Increased Energy</span>
            </div>
          </div>
          <div class="w-full md:w-1/2 md:px-3 lg:px-2 xl:px-3">
            <div class="relative w-full min-h-[54px] flex items-center py-[7px] px-4 lg:px-2 xl:px-4 z-10 mb-4 sm:mb-5 md:mb-6 xl:mb-7 before:absolute before:top-0 before:left-0 before:h-full before:w-0.5 before:bg-white before:opacity-20 before:z-0 after:absolute after:top-0 after:left-0 after:h-full after:w-full after:z-[-1] after:bg-gradient-to-r after:from-white after:to-primary after:opacity-10">
              <div class="pr-4 icon lg:pr-2 xl:pr-4 text-white text-4xl">
                <i class="icon-helping-hand"></i>
              </div>
              <span class="opacity-90 text-white text-base font-semibold leading-[30px]">Quicker Recovery</span>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-[46%] xl:w-1/2 md:px-4">
        <div class="relative h-full w-full [&_img]:object-cover">
          <picture class="h-full w-full [&_img]:h-full [&_img]:w-full">
            <img class="rounded-tr-[120px] rounded-bl-[120px]" src="<?php echo get_theme_file_uri(); ?>/assets/images/benefits-img.png" alt="Massage" width="624" height="512" />
          </picture>
          <div class="bg-white rounded-tl-[40px] rounded-tr-[5px] rounded-bl-[40px] rounded-br-[5px] shadow inline-block absolute top-auto bottom-[14px] right-[14px]">
            <div class="flex gap-2 items-center relative group py-3 lg:py-[15px] px-3 sm:pr-4 md:pr-5 lg:pr-6 xl:pr-7 md:pl-4 xl:pl-5">
              <a href="tel:2129918680" class="stretched-link">
                <span>
                  <i class="icon-phone border-[0.815px] border-primary bg-transparent rounded-full p-3 group-hover:bg-primary group-hover:text-white transition-all"></i>
                </span>
              </a>
              <div class="[&_p]:mb-0 group-hover:text-primary transition-all text-sm">
                <p>FREE CONSULTATION!</p>
                <strong class="font-lead text-[20px] text-primary leading-8 tracking-[0.4px] group-hover:text-black transition-all">(212) 991-8680 </strong>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Section {Benefits} -->

<section class="py-10 md:py-12 lg:py-14 xl:py-[120px]" id="faqs">
  <div class="container">
    <div class="max-w-[1188px] mx-auto">
      <div class="[&_p]:text-ss-dark-100 [&_p]:text-base [&_p]:leading-[25px] mb-8 lg:text-center text-start">
        <div class="[&_span]:uppercase [&_span]:text-primary mb-[14px] [&_span]:h6 [&_span]:font-semibold [&_span]:leading-[30px] [&_span]:font-lead">
          <span class="relative z-[1] px-[29px] before:absolute before:top-1/2 before:-translate-y-1/2 before:left-0 before:w-5 before:h-3 before:bg-gradient-to-r before:from-primary before:to-primary/[0.06] before:rounded-tl-lg before:rounded-br-lg after:absolute after:top-1/2 after:-translate-y-1/2 after:right-0 after:w-5 after:h-3 after:bg-gradient-to-r after:from-primary after:to-primary/[0.06] after:rounded-tr-lg after:rounded-bl-lg">faq’s</span>
        </div>
        <h2 class="mb-4">Frequently Asked <span class="text-primary">Questions</span></h2>
        <p>Below are some of our appointment FAQs.</p>
      </div>
      <div class="accordion md:-mx-4 mb-8 lg:mb-10 xl:mb-[50px]">
        <div class="w-full md:px-4">
          <div class="space-y-4 lg:space-y-6">
            <div class="accordion-item relative bg-white rounded-[10px] border border-ss-dark-100/20 transition-all [&.itemActive]:border-transparent [&.itemActive]:shadow itemActive">
              <button class="accordionBtn accordion-btn active">
                1. Arrival Time
              </button>
              <div class="accordionBody px-4 pb-4 lg:pb-[34px] max-w-[990px] lg:pl-12 text-ss-dark-100/[8] [&_p]:text-base [&_p]:leading-7 last-of-type:[&_p]:mb-0">
                <p class="mb-0">For your first appointment we ask you to complete the patient intake form (Online). Please try to arrive 5-minutes before your appointment to ensure a timely start and full treatment.</p>
              </div><!-- /.accordionBody -->
            </div> <!-- /.accordion-item -->
            <div class="accordion-item relative bg-white rounded-[10px] border border-ss-dark-100/20 transition-all [&.itemActive]:border-transparent [&.itemActive]:shadow">
              <button class="accordionBtn accordion-btn">
                2. How long is a treatment?
              </button>
              <div class="accordionBody hidden pb-4 lg:pb-[34px] max-w-[990px] lg:pl-12 text-ss-dark-100/[8] [&_p]:text-base [&_p]:leading-7 last-of-type:[&_p]:mb-0">
                <p class="mb-0">
                  Your first visit will take approximately one hour. If you have limited time, please inform us before your appointment begins and we will adjust the length of your treatment accordingly. For subsequent visits, please allow 45-minutes.
                </p>
              </div><!-- /.accordionBody -->
            </div> <!-- /.accordion-item -->
            <div class="accordion-item relative bg-white rounded-[10px] border border-ss-dark-100/20 transition-all [&.itemActive]:border-transparent [&.itemActive]:shadow">
              <button class="accordionBtn accordion-btn">
                3. How do I prepare before treatment?
              </button>
              <div class="accordionBody hidden pb-4 lg:pb-[34px] max-w-[990px] lg:pl-12 text-ss-dark-100/8 [&_p]:text-base [&_p]:leading-7 last-of-type:[&_p]:mb-0">
                <p>Prior to your arrival, be sure you’re NOT coming in on an empty stomach. A light meal beforehand is recommended.</p>
                <p>There is no dress code at our office, come as you are. Should your session require any disrobing, you will be draped where necessary and with your utmost comfort in mind.</p>
                <p>Acupuncture promotes relaxation and does so by reducing the heart rate. If you are planning exercise and acupuncture on the same day, we would recommend the order of exercise first followed by acupuncture. The reverse order may be counter-intuitive.</p>
              </div><!-- /.accordionBody -->
            </div> <!-- /.accordion-item -->
            <div class="accordion-item relative bg-white rounded-[10px] border border-ss-dark-100/20 transition-all [&.itemActive]:border-transparent [&.itemActive]:shadow">
              <button class="accordionBtn accordion-btn">
                4. What if I need to cancel?
              </button>
              <div class="accordionBody hidden pb-4 lg:pb-[34px] max-w-[990px] lg:pl-12 text-ss-dark-100/[8] [&_p]:text-base [&_p]:leading-7 last-of-type:[&_p]:mb-0">
                <p class="mb-0">As a courtesy to our staff and other patients, please allow 24-hours notice for cancellations and rescheduling. Missed appointments or cancellations that occur less than 24- hours before the scheduled appointment are subject to a fee of $100 or one docked session.</p>
              </div><!-- /.accordionBody -->
            </div> <!-- /.accordion-item -->
          </div>
        </div>
      </div> <!-- /Accordion -->
      <div class="btn-group flex flex-col sm:flex-row items-center justify-center gap-6 sm:gap-y-0 sm:gap-x-8 lg:gap-x-10">
        <div>
          <a href="#" class="btn btn-primary uppercase">Call today</a>
        </div>
        <div class="flex gap-2 items-center relative group">
          <a href="tel:2129918680" class="stretched-link">
            <span><i class="icon-phone border-[0.815px] border-primary bg-transparent rounded-full p-3 group-hover:bg-primary group-hover:text-white transition-all"></i></span>
          </a>
          <div class="[&_p]:mb-0 group-hover:text-primary transition-all text-sm">
            <p>FREE CONSULTATION!</p>
            <strong class="font-lead text-[20px] text-primary leading-8 tracking-[0.4px] group-hover:text-black transition-all">(212) 991-8680 </strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /Section {FAQ} -->

<section class="bg-black/[0.03] py-10 md:py-16 lg:py-20" id="reviews">
  <div class="container">
    <div class="flex items-center gap-2 uppercase text-primary [&_h2]:h6 [&_h2]:mb-0">
      <span class="w-5 h-3 bg-gradient-to-r from-primary to-primary/[0.06] rounded-tl-lg rounded-br-lg"></span>
      <h2>testimonials</h2>
      <span class="w-5 h-3 bg-gradient-to-r from-primary/[0.06] to-primary rounded-tr-lg rounded-bl-lg"></span>
    </div>
    <div class="swiper testimonials-slider">
      <div class="flex flex-col md:flex-row gap-y-5 justify-between [&_h3]:h2 pb-10">
        <h3>What Our <span class="text-primary">Clients Say</span></h3>
        <div class="flex gap-4">
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
      <div class="swiper-wrapper">
        <div class="swiper-slide h-auto pr-5">
          <div class="h-full pl-8 pt-9 pb-7 pr-4 bg-white rounded-lg box-shadow w-full">
            <div class="flex justify-between items-center">
              <span class="capitalize text-[22px]">Sara Boesen</span>
              <div class="relative px-4 py-3 bg-primary rounded-tl-[5px] rounded-bl-[5px] shadow mb-6 -mr-[34px] flex items-center justify-center">
                <picture class="absolute bottom-[-17px] right-0 z-[-1]">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon.png" alt="Icon">
                </picture>
                <ul class="text-sm flex gap-1 justify-center items-center text-ss-yellow">
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                </ul>
              </div>
            </div>
            <div class="slide-read-more">
              <p>I highly recommend this practice! From booking my initial appointment to seeing both Kim & Karen to Iris easing my insurance-related concerns (and resolving them with the utmost understanding and compassion), Acupuncture Remedies knows how to treat their patients with kindness. The treatments have been wonderful, and I genuinely look forward to my ongoing healing journey there.</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide h-auto pr-5">
          <div class="h-full pl-8 pt-9 pb-7 pr-4 bg-white rounded-lg box-shadow w-full">
            <div class="flex justify-between items-center">
              <span class="capitalize text-[22px]">Robin Shah</span>
              <div class="relative px-4 py-3 bg-primary rounded-tl-[5px] rounded-bl-[5px] shadow mb-6 -mr-[34px] flex items-center justify-center">
                <picture class="absolute bottom-[-17px] right-0 z-[-1]">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon.png" alt="Icon">
                </picture>
                <ul class="text-sm flex gap-1 justify-center items-center text-ss-yellow">
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                </ul>
              </div>
            </div>
            <div class="slide-read-more">
              <p>I cannot say enough wonderful things about Karen! I was fairly new to acupuncture, and she helped me find peace, relaxation and hope during my pregnancy journey. She always checked in with me, catered the session to my specific needs and made acupuncture feel like a warm, safe space for my physical and mental health. Thank you for everything Karen!</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide h-auto pr-5">
          <div class="h-full pl-8 pt-9 pb-7 pr-4 bg-white rounded-lg box-shadow w-full">
            <div class="flex justify-between items-center">
              <span class="capitalize text-[22px]">Nicole Reiner</span>
              <div class="relative px-4 py-3 bg-primary rounded-tl-[5px] rounded-bl-[5px] shadow mb-6 -mr-[34px] flex items-center justify-center">
                <picture class="absolute bottom-[-17px] right-0 z-[-1]">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon.png" alt="Icon">
                </picture>
                <ul class="text-sm flex gap-1 justify-center items-center text-ss-yellow">
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                </ul>
              </div>
            </div>
            <div class="slide-read-more">
              <p>I've been coming to acupuncture remedies weekly for a year and I've had a wonderful experience. Kim, Karen, Iris, and everyone else on the team is extremely supportive - they really listen to your needs and concerns and ensure you are feeling comfortable throughout the process. Highly recommend!</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide h-auto pr-5">
          <div class="h-full pl-8 pt-9 pb-7 pr-4 bg-white rounded-lg box-shadow w-full">
            <div class="flex justify-between items-center">
              <span class="capitalize text-[22px]">Elise Henn</span>
              <div class="relative px-4 py-3 bg-primary rounded-tl-[5px] rounded-bl-[5px] shadow mb-6 -mr-[34px] flex items-center justify-center">
                <picture class="absolute bottom-[-17px] right-0 z-[-1]">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon.png" alt="Icon">
                </picture>
                <ul class="text-sm flex gap-1 justify-center items-center text-ss-yellow">
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                </ul>
              </div>
            </div>
            <div class="slide-read-more">
              <p>Karen is absolutely amazing! This was my first time doing acupuncture and entering with some nerves around needles, Karen immediately welcomed me with warm and comforting energy. A handful of sessions with Karen is 100% the reason why I was able to run a half marathon with tendonitis!</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide h-auto pr-5">
          <div class="h-full pl-8 pt-9 pb-7 pr-4 bg-white rounded-lg box-shadow w-full">
            <div class="flex justify-between items-center">
              <span class="capitalize text-[22px]">Katiria Sxinas</span>
              <div class="relative px-4 py-3 bg-primary rounded-tl-[5px] rounded-bl-[5px] shadow mb-6 -mr-[34px] flex items-center justify-center">
                <picture class="absolute bottom-[-17px] right-0 z-[-1]">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon.png" alt="Icon">
                </picture>
                <ul class="text-sm flex gap-1 justify-center items-center text-ss-yellow">
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                </ul>
              </div>
            </div>
            <div class="slide-read-more">
              <p>I've been coming to Acupuncture remedies now for about 8 months and it's been a blessing in disguise. I had horrible lower back pain where I could barely move along with bad allergies and asthma for years. Both I can finally say are almost non-existent. I've seen Iris the most and she's been amazing in understanding my issues and even recommending great herbal pills to go along with my treatments. The next issue I'm tackling is my PMS. I'm positive that I'll see similar results! Iris thank you and your staff for your great service and treatment!</p>
            </div>
          </div>
        </div>
        <div class="swiper-slide h-auto pr-5">
          <div class="h-full pl-8 pt-9 pb-7 pr-4 bg-white rounded-lg box-shadow w-full">
            <div class="flex justify-between items-center">
              <span class="capitalize text-[22px]">Lauren Castellanos</span>
              <div class="relative px-4 py-3 bg-primary rounded-tl-[5px] rounded-bl-[5px] shadow mb-6 -mr-[34px] flex items-center justify-center">
                <picture class="absolute bottom-[-17px] right-0 z-[-1]">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon.png" alt="Icon">
                </picture>
                <ul class="text-sm flex gap-1 justify-center items-center text-ss-yellow">
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                </ul>
              </div>
            </div>
            <div class="slide-read-more">
              <p>Acupuncture was recommended to me while I was trying to conceive. I had never tried it before but was happy to give anything a try that may help me get pregnant. Working in a new neighborhood I searched for an acupuncture practice and came across Acupuncture Remedies. Right around the corner with a focus in fertility, it was fate! I saw Iris on my first visit and was immediately comfortable. She talked me through how the treatment would go and was very kind and considerate. I began going once a week and after 3 months (and some help from the fertility doctor) I was pregnant! I have seen Iris, Kim and Marcy in my time here and all are amazing. I always leave feeling relaxed and with an overall better energy. I had many that helped me achieve my dream of being a mom and there is no question the team at Acupuncture Remedies was a part of that. I am very lucky to have found this practice and I can say with absolute certainty that whether it is fertility treatment, pain or anything else this team will do their best to help you.</p>
            </div>
            <button class="group slide-read-more-button read-more-button text-primary-100 hover:text-primary-100/80 mt-4 transition-all">
              <span class="inline group-[.read-more]:hidden">Read More</span>
              <span class="hidden group-[.read-more]:inline">Read Less</span>
            </button>
          </div>
        </div>
        <div class="swiper-slide h-auto pr-5">
          <div class="h-full pl-8 pt-9 pb-7 pr-4 bg-white rounded-lg box-shadow w-full">
            <div class="flex justify-between items-center">
              <span class="capitalize text-[22px]">Emily Klug</span>
              <div class="relative px-4 py-3 bg-primary rounded-tl-[5px] rounded-bl-[5px] shadow mb-6 -mr-[34px] flex items-center justify-center">
                <picture class="absolute bottom-[-17px] right-0 z-[-1]">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon.png" alt="Icon">
                </picture>
                <ul class="text-sm flex gap-1 justify-center items-center text-ss-yellow">
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                  <li> <i class="icon-star"></i></li>
                </ul>
              </div>
            </div>
            <div class="slide-read-more">
              <p>As someone new to acupuncture, Iris immediately put me at ease with her friendly, warm and welcoming nature. She took the time to talk with me about what I was hoping to improve through acupuncture and was very knowledgeable. I'm onto my sixth visit and am feeling great and loving it! Jennifer has also been very informative and has shared her knowledge of Chinese medicine, which I knew very little about and am now quite interested in. I always leave feeling centered and like the sessions have been very beneficial. Would highly recommend.</p>
            </div>
            <button class="group slide-read-more-button read-more-button text-primary-100 hover:text-primary-100/80 mt-4 transition-all">
              <span class="inline group-[.read-more]:hidden">Read More</span>
              <span class="hidden group-[.read-more]:inline">Read Less</span>
            </button>
          </div>
        </div>
        <!-- /Slider Wrapper -->

      </div>
      <div class="flex justify-center items-center pt-6 md:pt-8 lg:pt-12">
        <a href="#" class="btn btn-primary js-has-smooth">Book now</a>
      </div>
    </div>
  </div>
</section>
<!-- /Section {Testimonials} -->

<?php
include 'footer-landing.php';
