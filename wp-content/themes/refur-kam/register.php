<?php
/**
 * Template Name: Registration Form
 *
 * @package refur
 */

get_header(); ?>

<div id="primary" class="content-area col-xs-12">
  <main id="main" class="site-main" role="main">

    <article id="registration-form">
      <header class="entry-header">
        <?php the_title(sprintf('<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h1>'); ?>
      </header><!-- .entry-header -->
      <div class="entry-content">
        <form method="post">
          <p>
            Po vyplnení registračného formulára bude Vaša žiadosť spracovaná administrátorom fóra.
            V prípade, že Vaša žiadosť bude akceptovaná, obdržíte prihlasovacie meno a heslo na
            Vami zadanú emailovú adresu.
          </p>
          <div class="form-group">
            <label for="name">Meno</label>
            <input type="text" class="form-control" id="name"
                   placeholder="Vaše krstné meno">
          </div>

          <div class="form-group">
            <label for="surename">Priezvisko</label>
            <input type="text" class="form-control" id="surenaname"
                   placeholder="Vaše priezvisko">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email"
                   placeholder="Váš email">
            <p class="help-block">Akceptujeme emaily len vo formáte identifikátor@nazov-firmy.domena.</p>
          </div>

          <div class="checkbox">
            <label>
              <input type="checkbox"> Súhlasím so správou, spracovaním a
              uchovaním mojich osobných údajov v KAM Fórum. Poskytnutie údajov je dobrovoľné a bez
              dôsledkov s tým, že tieto údaje môžu byť spracované pre účely
              databázy užívateľov fóra v zmysle Zák. č. 428/2002 Zb. o
              ochrane osobných údajov. Súhlas je daný na dobu neurčitú a podľa §
              20 ods. 3 cit. zákona je ho možné kedykoľvek písomne odvolať.
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Odoslať registračný formulár</button>
        </form>
      </div><!-- .entry-content -->
    </article><!-- #post-## -->

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
