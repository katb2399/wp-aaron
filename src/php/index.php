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
        <?php
            $workshop = new WP_Query(array('category_name' => 'Workshops', 'order' => 'ASC'));
            if ($workshop -> have_posts()) :
              while ($workshop -> have_posts()) :
                $workshop -> the_post();
        ?>
        <div class="level flex" id="level-<?php echo get_post_custom_values('workshop-id')[0]?>">
          <div class="p-15
            <?php
              if(get_post_custom_values('workshop-id')[0] == 2) { echo 'order2'; }
              else if(get_post_custom_values('workshop-id')[0] == 3) { echo 'order3'; }
            ?>">
            <div class="icon-bg">
              <?php the_post_thumbnail(); ?>
            </div>
            <div class="number
              <?php
                if(get_post_custom_values("workshop-level")[0] == 3) { echo 'number-first'; }
                if(get_post_custom_values("workshop-level")[0] == 1) { echo 'number-last'; }
              ?>">
              <?php echo get_post_custom_values("workshop-level")[0]; ?>
            </div>
            <div class="text-info-group">
            <h3 class="mt-20"><?php the_title(); ?></h3>
            <div class="levelp mb-m">
              <?php the_content(); ?>
            </div>
            <a href="<?php the_permalink(); ?>" class="button text-white">Book Workshop</a>
            </div>
            <div  class="blockquote-container">
              <div class="flex items-center"><img src="<?php echo get_template_directory_uri();?>/images/quote.svg" alt='quote sign' class="quote"></div>
              <blockquote class="text-center p-15"><?php echo get_post_custom_values("workshop-slogan")[0]; ?></blockquote>
            </div>
          </div>
          <p class='apply'><?php echo get_post_custom_values("workshop-text")[0]; ?></p>
        </div>
        <?php
              endwhile;
            endif;
        ?>

      </section>
      <section id="about">
      <?php
            $about_me = new WP_Query(array('category_name' => 'About me', 'order' => 'ASC'));
            if ($about_me -> have_posts()) :
              while ($about_me -> have_posts()) :
                $about_me -> the_post();
        ?>
        <div>
          <div class="img-crop">
            <?php the_post_thumbnail();?>
          </div>
          <div class="p-15">
            <p class="super-headline"><?php echo get_post_custom_values('hero-sub-heading')[0] ?></p>
            <h2 class="section-heading mb-sm"><?php  the_title(); ?></h2>
            <div class="mb-sm"><?php echo the_content(); ?></div>
            <a class="button">Learn more</a>
          </div>
        </div>
        <?php
              endwhile;
            endif;
        ?>
      </section>

      <section id="news">
        <p class="super-headline">Making waves since 2004</p>
        <h2 class="section-heading mb-sm">In the News</h2>
        <div class="articles">
          <?php
            $news_query = new WP_Query(array('category_name' => 'news ', 'order' => 'ASC'));
            if ($news_query->have_posts()) :
              while ($news_query->have_posts()) :
                $news_query->the_post();
          ?>
          <article>
            <h3 class="p-15"><?php the_title(); ?></h3>
            <div class="img-crop">
              `<?php	the_post_thumbnail(); ?>
            </div>
              <div class="p-15">
              <p><?php the_excerpt(); ?></p>
              <a href="#" class="button text-black">Read more</a>
            </div>
          </article>
          <?php
              endwhile;
            endif;
          ?>
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

