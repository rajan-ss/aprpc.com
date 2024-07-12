</main>

<footer class="site-footer relative before:bg-black/90 before:absolute before:top-0 before:bottom-0 before:right-0 before:left-0 before:z-[1]" style="background-image: url('../images/footer-bg.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat;">
  <div class="container flex max-lg:flex-col relative z-[2] py-14" id="contact-us">
    <div class="lg:w-1/2">
      <picture>
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/site-footer.logo.png" alt="Site Footer Logo" width="339" height="93" loading="lazy">
      </picture>
      <div class="text-ss-gray text-lg leading-[1.66] pb-6 [&_p]:mb-0 border-b border-b-solid border-b-white/15 lg:w-5/6">
        <p>Rated by Time Out New York one of the top 10 acupuncture practices in New York City.</p>
      </div>
      <div class="flex flex-wrap pt-6">
        <div class="*:text-white [&_h5]:font-base [&_h5]:mb-1 [&_h5]:mt-[10px] [&_h5]:leading-normal font-lead sm:w-1/2">
          <h5>Reach Us Through</h5>
          <div class="space-y-[22px] *:text-white">
            <a href="tel:2129918680" class="flex items-center group hover:text-white">
              <span class="flex justify-center items-center size-[51px] bg-white/10 bprder border-solid border-white/10 rounded-full mr-[14px] group-hover:bg-white transition ease-in duration-150">
                <i class="icon-footer-phone group-hover:text-primary"></i>
              </span>
              (212) 991-8680
            </a>
            <a href="mailto:info@aprpc.com" class="flex items-center group hover:text-white">
              <span class="flex justify-center items-center size-[51px] bg-white/10 bprder border-solid border-white/10 rounded-full mr-[14px] group-hover:bg-white transition ease-in duration-150">
                <i class="icon-footer-mail group-hover:text-primary"></i>
              </span>
              Info@Aprpc.Com
            </a>
            <a href="https://maps.app.goo.gl/g1mQCAm8RPzRX2gd6" class="flex items-center group hover:text-white">
              <span class="flex justify-center items-center size-[51px] bg-white/10 bprder border-solid border-white/10 rounded-full mr-[14px] group-hover:bg-white transition ease-in duration-150">
                <i class="icon-marker group-hover:text-primary"></i>
              </span>
              <span>
                201 East 56th Street,
                <span class="block">
                  2nd Floor New York, NY 10022
                </span>
              </span>
            </a>
          </div>
        </div>
        <div class="text-white [&_h5]:font-base [&_h5]:leading-normal sm:w-1/2 max-sm:mt-4">
          <h5>Available on</h5>
          <div class="flex">
            <a href="https://www.facebook.com/acupunctureremedies" class="flex items-center justify-center mr-2 size-[51px] bg-white/10 bprder border-solid border-white/10 rounded-full group">
              <i class="icon-facebook text-white group-hover:text-primary"></i>
            </a>
            <a href="https://www.instagram.com/acupunctureremedies/" class="flex items-center justify-center mr-2 size-[51px] bg-white/10 bprder border-solid border-white/10 rounded-full group">
              <i class="icon-twitter text-white group-hover:text-primary"></i>
            </a>
            <a href="https://www.instagram.com/acupunctureremedies/" class="flex items-center justify-center mr-2 size-[51px] bg-white/10 bprder border-solid border-white/10 rounded-full group">
              <i class="icon-instagram text-white group-hover:text-primary"></i>
            </a>
            <!-- <a href="tel:2129918680" class="flex items-center justify-center mr-2 size-[51px] bg-white/10 bprder border-solid border-white/10 rounded-full group">
                <i class="icon-youtube text-white group-hover:text-primary"></i>
            </a> -->
          </div>
        </div>
      </div>
    </div>
    <div class="max-lg:mt-8 lg:w-1/2 px-9 pb-10 pt-12 bg-white relative lg:absolute lg:-top-12 right-0 z-[2] shadow-black/20 shadow-[0px_6px_34px_0px] rounded-xl before:absolute before:top-0 before:left-1/2 before:-translate-x-1/2 before:w-52 before:h-3 before:rounded-b-full before:bg-primary-100 [&_h2]:text-[40px] [&_h2]:text-ss-gray-900">
      <h2>Contact <span class="text-primary">Us</span></h2>

      <div>
        <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax=true]'); ?>
      </div>
    </div>
  </div>
  <div class="relative z-[2] bg-primary py-5 text-ss-gray font-lead [&_p]:w-fit [&_p]:mx-auto [&_p]:mb-0 text-center">
    <p>
      &copy; <?php echo date('Y'); ?> <span class="uppercase">ACUPUNCTURE REMEDIES</span>&trade; - All Rights Reserved.
    </p>
  </div>
</footer>

<div class="sticky-footer">
  <a href="tel:2129918680" class="btn btn-primary btn-block">(212) 991-8680</a>
</div>
<!-- /Sticky Footer -->

</div> <!-- /.site-wrapper -->

<?php wp_footer(); ?>
</body>

</html>