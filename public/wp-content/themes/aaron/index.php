<!--
TODO: – Add title
– Add keywords & description
- Run https://realfavicongenerator.net/ for favicons, tile & touchicons
– Run https://realfavicongenerator.net/social for og image & info
- Edit privacy info
- Create E-mail-address datenschutz@
– Host fonts locally with https://google-webfonts-helper.herokuapp.com/fonts
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title><?php echo get_the_title();?></title>
    <link rel="stylesheet" href="/style.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/images/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri();?>/images/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/images/safari-pinned-tab.svg" color="#5bbad5">
    <?php wp_head();?>
  </head>
  <body>
    <?php wp_body_open();?>
    <header class="flex flex-col">
      <div class="flex justify-between">
        <a href="/"><h1><span>Aaron G. Miller</span> | Choreographer</h1></a>
        <nav class="flex">
          <button id="hamburger">
            <div class="line"></div>
            <div class="line"></div>
          </button>
          <ul class="menu mobile-hidden" id="nav">
            <li><a href="#workshops">Workshops</a></li>
            <li><a href="#about">About Me</a></li>
            <li><a href="#news">News</a></li>
          </ul>
        </nav>
      </div>
      <div class="header-content">
        <div></div>
        <div class="header-booking">
          <h2>I believe you can dance.</h2>
          <a href="#" class="button text-white">Book Workshop</a>
        </div>
      </div>
    </header>

    <main>
      <section id="workshops">
        <div class="p-heading">
          <p class="super-headline mt-m">Find your entrance level & book a workshop with Aaron</p>
          <h2 class="section-heading mb-xl">If you never start, you will never know.</h2>
        </div>
        <div class="level flex">
          <div class="p-15">
            <div class="icon-bg">
              <img src="<?php echo get_template_directory_uri();?>./images/stretch.svg" alt='Icon showing dancer stretching her leg up to her nose.'>
            </div>
            <div class="number number-first">3</div>
            <div class="text-info-group">
              <h3 class="mt-20">As pro as you can get</h3>
              <p class="levelp mb-m">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
              </p>
              <a href="#" class="button text-white">Book Workshop</a>
            </div>
            <div  class="blockquote-container">
              <div class="flex items-center"><img src="<?php echo get_template_directory_uri();?>./images/quote.svg" alt='quote sign' class="quote"></div>
              <blockquote class="text-center p-15">Respect your talent!</blockquote>
            </div>
          </div>
          <p class='apply'>Apply for an audition now!</p>
        </div>

        <div class="level flex">
          <div class="p-15 order2">
            <div class="icon-bg">
              <img src="<?php echo get_template_directory_uri();?>./images/up.svg" alt='Icon showing dancer stretching her leg up to her nose.'>
            </div>
            <div class="number">2</div>
            <div class="text-info-group">
              <h3 class="mt-20">As pro as you can get</h3>
              <p class="levelp mb-m">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
              </p>
              <a href="#" class="button text-white">Book Workshop</a>
            </div>
            <div  class="blockquote-container">
              <div class="flex items-center"><img src="<?php echo get_template_directory_uri();?>./images/quote.svg" alt='quote sign' class="quote"></div>
              <blockquote class="text-center p-15">Thank yourself for leveling up now!</blockquote>
            </div>
          </div>
          <p class="apply">Registration now open for everybody!</p>
        </div>

        <div class="level flex">
          <div class="p-15 order3">
            <div class="icon-bg">
              <img src="<?php echo get_template_directory_uri();?>./images/rise.svg" alt='Icon showing dancer stretching her leg up to her nose.' class="quote">
            </div>
            <div class="number number-last">1</div>
            <div class="text-info-group">
              <h3 class="mt-20">As pro as you can get</h3>
              <p class="levelp mb-m">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
              </p>
              <a href="#" class="button text-white">Book Workshop</a>
            </div>
            <div class="blockquote-container">
              <div class="flex items-center"><img src="<?php echo get_template_directory_uri();?>./images/quote.svg" alt='quote sign' class="quote"></div>
              <blockquote class="text-center p-15">Fall in love with dancing!</blockquote>
            </div>
          </div>
          <p class="apply">Registration now open for everybody!</p>
        </div>
      </section>
      <section id="about">
        <div>
          <div class="img-crop">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Cheng_Tsung_Lung.jpg/800px-Cheng_Tsung_Lung.jpg?20150616132951" alt=""/>
          </div>
          <div class="p-15">
            <p class="super-headline">Why I teach</p>
            <h2 class="section-heading mb-sm">Hi, I'm Aaron!</h2>
            <p class="mb-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat itaque incidunt, nihil, recusandae autem aut perferendis reiciendis a neque veniam quibusdam animi ex tempora reprehenderit, aspernatur asperiores consequatur consectetur ipsum!</p>
            <p class="mb-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat itaque incidunt, nihil, recusandae autem aut perferendis reiciendis a neque veniam quibusdam animi ex tempora reprehenderit, aspernatur asperiores consequatur consectetur ipsum! Lorem ipsum dolor sit amet.</p>
            <a class="button">Learn more</a>
          </div>
        </div>
      </section>
      <section id="news">
        <p class="super-headline">Making waves since 2004</p>
        <h2 class="section-heading mb-sm">In the News</h2>
        <div class="articles">
          <article>
            <h3 class="p-15">Sydney Dance Festival 2022</h3>
            <div class="img-crop">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c0/Meredith_Monk_-_On_Behalf_of_Nature_-_Brooklyn_Academy_of_Music_%2815822608589%29.jpg/799px-Meredith_Monk_-_On_Behalf_of_Nature_-_Brooklyn_Academy_of_Music_%2815822608589%29.jpg?20180517142809" alt="Aaron performing at the Sydney dance festival 2022" >
            </div>
              <div class="p-15">
              <p>
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
              sed diam nonumy eirmod tempor invidunt ut labore et
              dolore magna aliquyam erat, sed diam voluptua. At vero
              eos et accusam et justo duo dolores et ea rebum. Stet
              clita kasd gubergren, no sea takimata sanctus est.
              </p>
              <a href="#" class="button text-black">Read more</a>
            </div>
          </article>

          <article>
            <h3 class="p-15">"Dance Pool" 2023 sold out!</h3>
            <div class="img-crop">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/01/DANCE_-_Grupo_de_Rua%2C_%22Inoah%2C%22_at_Brooklyn_Academy_of_Music_%2849021032627%29.jpg/800px-DANCE_-_Grupo_de_Rua%2C_%22Inoah%2C%22_at_Brooklyn_Academy_of_Music_%2849021032627%29.jpg?20191112041132" alt="Group picture of 'Dance Pool'" >
            </div>
              <div class="p-15">
              <p>
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
              sed diam nonumy eirmod tempor invidunt ut labore et
              dolore magna aliquyam erat, sed diam voluptua. At vero
              eos et accusam et justo duo dolores et ea rebum. Stet
              clita kasd gubergren, no sea takimata sanctus est.
              </p>
              <a href="#" class="button text-black">Read more</a>
            </div>
          </article>

          <article>
            <h3 class="p-15">New London Workshop Oct. 2025</h3>
            <div class="img-crop">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/34/Meredith_Monk_-_On_Behalf_of_Nature_-_Brooklyn_Academy_of_Music_%2815989693711%29.jpg/800px-Meredith_Monk_-_On_Behalf_of_Nature_-_Brooklyn_Academy_of_Music_%2815989693711%29.jpg?20180517140541" alt="Aaron at a workshop">
            </div>
              <div class="p-15">
              <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
              sed diam nonumy eirmod tempor invidunt ut labore et
              dolore magna aliquyam erat, sed diam voluptua. At vero
              eos et accusam et justo duo dolores et ea rebum. Stet
              clita kasd gubergren, no sea takimata sanctus est.
              </p>
              <a href="#" class="button text-black">Read more</a>
            </div>
          </article>
        </div>
      </section>
    </main>

    <footer class="mt-sm">
      <div class="p-15">
        <div class="footer-text">
          <h4 class="text-white">Thank you for your interest in Art!</h4>
          <p class="text-white mb-sm">© 2004 – 2023 Aaron G. Miller</p>
        </div>
        <a href="#" class="primary">Imprint & Privacy</a>
      </div>
    </footer>
    <script>
    /* document.addEventListener("DOMContentLoaded", function(event) {
    MainNav.init();
    }); */
    </script>
    <?php wp_footer();?>
  </body>
</html>

