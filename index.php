<?php get_header(); ?>

    <main>
      <section class="banner">
        <img class="banner__background" src="<?php echo get_template_directory_uri(); ?>/assets/images/bg-pattern-intro-desktop.svg" alt="banner-bg">
        <div class="banner__inner container">
          <h1 class="banner__title"><?php echo $GLOBALS['blogr']['banner_title'] ?></h1>
          <p class="banner__subtitle big-text"><?php echo $GLOBALS['blogr']['banner_subtitle'] ?></p>

          <div class="banner__btns">
            <button class="btn"><?php echo $GLOBALS['blogr']['banner_btn_one'] ?></button>
            <button class="btn empty"><?php echo $GLOBALS['blogr']['banner_btn_two'] ?></button>
          </div>
        </div>
      </section>

      <section class="editor">
        <h2 class="editor-title"><?php echo $GLOBALS['blogr']['section_one_title'] ?></h2>
        <img class="editor-mobile" src="<?php echo $GLOBALS['blogr']['section_one_mobile_image'] ?>" alt="">
        <div class="editor__inner container">
          
          <div class="editor__inner-text">
            <p class="editor__title-title"><?php echo $GLOBALS['blogr']['section_one_1_subtitle'] ?></p>
            <p class="editor-title__subtitle"><?php echo $GLOBALS['blogr']['section_one_1_paragraph'] ?></p>
              
              <p class="editor__title-title"><?php echo $GLOBALS['blogr']['section_one_2_subtitle'] ?></p>
              <p class="editor-title__subtitle"><?php echo $GLOBALS['blogr']['section_one_2_paragraph'] ?></p>
          </div>
        </div>
        <img class="editor-non-mobile" src="<?php echo $GLOBALS['blogr']['section_one_image'] ?>" alt="">
      </section>
      
      <div class="phones-image">
        <img src="<?php echo $GLOBALS['blogr']['section_two_image'] ?>" alt="" class="phone-photo">
      </div>

      <section class="phone">
        <div class="container">
          <div class="phone__text">
            <h3><?php echo $GLOBALS['blogr']['section_two_title'] ?></h3>
            <p><?php echo $GLOBALS['blogr']['section_two_1_subtitle'] ?></p>
          </div>
        </div>
      </section>

      <section class="laptop">
        <div class="laptop__inner container">
          <img src="<?php echo $GLOBALS['blogr']['section_three_image'] ?>" alt="laptop" class="laptop-non-mobile">
          <img src="<?php echo $GLOBALS['blogr']['section_three_mobile_image'] ?>" alt="laptop" class="laptop-mobile">

          <div class="laptop__inner-text">
            <p class="laptop-title__title"><?php echo $GLOBALS['blogr']['section_three_1_subtitle'] ?></p>
            <p class="laptop-title__subtitle"><?php echo $GLOBALS['blogr']['section_three_1_paragraph'] ?></p>

            <p class="laptop-title__title"><?php echo $GLOBALS['blogr']['section_three_2_subtitle'] ?></p>
            <p class="laptop-title__subtitle"><?php echo $GLOBALS['blogr']['section_three_2_paragraph'] ?></p>
          </div>
        </div>
      </section>
    </main>

<?php get_footer(); ?>
