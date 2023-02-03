<footer class="footer col14">
  <div class="container">
    <div class="footer_block footer_1 wow fadeIn" data-wow-delay="200ms">
      <div class="footer__logo"><a href="/"><img src="<?php the_field('logo','option') ?>" alt="Купить оригинальный документ онлайн без предоплаты" /></a></div>
      <button type="button" class="btn footer__btn openForm">Связаться с нами</button>
      <div class="payeer"><img src="https://a-dip.com/wp-content/themes/adip-child/assets/img/oplata-sposob.png" alt="Способы оплаты диплома онлайн"></div>
    </div>

    <div class="footer_block footer_2 wow fadeIn" data-wow-delay="400ms">
      <?php dynamic_sidebar( 'footer1' ); ?>
    </div>

    <div class="footer_block footer_3 wow fadeIn" data-wow-delay="600ms">
      <?php dynamic_sidebar( 'footer2' ); ?>
    </div>

    <div class="footer_block footer_4 wow fadeIn" data-wow-delay="800ms">
      <div class="footer__title">Контакты</div>
      <a class="footer__item" href="tel:<?php the_field('phone_link','option') ?>"><i class="fa fa-phone"></i> <?php the_field('phone','option') ?></a>
      <a class="footer__item" href="mailto:<?php the_field('email','option') ?>"><i class="fa fa-envelope"></i> <?php the_field('email','option') ?></a>
      <div class="footer__address"><?php the_field('address','option') ?></div>
      <div class="delivery"><img src="https://a-dip.com/wp-content/themes/adip-child/assets/img/dostavka-rossiya.jpg" alt="Способы доставки дипломов и документов онлайн"></div>
    </div>
  </div>

  <div class="popupBlock">
    <div class="block__popup">
      <div class="popup__box">
        <div class="closeForm"><i class="fa fa-close"></i></div>
        <div class="popup__title title okTitle">Связаться с нами</div>
        <form class="sendFeedback">
          <input type="text" name="name" placeholder="Ваше имя" required />
          <input type="tel" name="phone" placeholder="Телефон" required />
          <input type="email" name="email" placeholder="Email" required />
          <textarea type="text" name="text" placeholder="Сообщение"></textarea>
		  <div class="g-recaptcha" data-sitekey="6Lf6L3YiAAAAAMkOGLNLyTeoiCL4ALdaOZb7lKnn"></div>
          <input type="submit" class="btn" value="Отправить сообщение" />
          <span>Нажимая кнопку "Получить консультацию", я даю свое согласие на обработку моих персональных данных.</span>
        </form>
      </div>
    </div>
  </div>

  <script>
    $('.openForm').click(function(){
      $('.popupBlock').fadeIn(500);
    });
    $('.closeForm').click(function(){
      $('.popupBlock').fadeOut(500);
    });
    $('.sendFeedback').submit(function (e) {
      e.preventDefault();
      var form_data = $(this).serialize();
      $.ajax({
        type: "POST",
        url: "/wp-content/themes/doccer/php/form.php",
        data: form_data,
        success: function () {
          $('.okTitle').html('Сообщение отправлено!');
          $('.sendFeedback').html('<div class="text__ok center">Мы уже получили ваше сообщение и взяли его в работу. Мы обязательно свяжемся с вами в ближайшее время!</div>');
          $('.popupBlock').delay(3000).fadeOut(500);
          $('.openForm').attr('disabled','disabled').text('Заявка отправлена!').css('cursor','not-allowed');
        }
      });
    });
  </script>

  <script>
    var wow = new WOW( {
      boxClass:     'wow',
      animateClass: 'animated',
      offset:       0,
      mobile:       false,
      live:         true,
      callback:     function(box) {},
      scrollContainer: null }
    ); wow.init();
  </script>

<link rel="stylesheet" href="/wp-content/themes/doccer/style.min.css">

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(74816662, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/74816662" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script src="//code.jivosite.com/widget/Iejp2AlG1M" async></script>
<div class="copyright">© 2022 a-diplom.com | Все права защищены</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
