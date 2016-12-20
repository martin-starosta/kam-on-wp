<?php get_header(); ?>


<div id='custom_panel'>
    <h2>Registrácia nového KAM-a</h2>
    <?php
    if( count($errors) > 0) {
        foreach ( $errors as $error ) {
            echo "<p class='frm_error'>$error</p>";
        }
    }
    ?>

    <form id='registration-form' method='post' action='<?php echo get_site_url() . '/user/register'; ?>'>
        <p>
            Po vyplnení registračného formulára bude Vaša žiadosť spracovaná administrátorom fóra.
            V prípade, že Vaša žiadosť bude akceptovaná, obdržíte prihlasovacie meno a heslo na
            Vami zadanú emailovú adresu.
        </p>
        <div class="form-group">
            <label for="name">Meno</label>
            <input type="text" class="form-control" id="name"
                   placeholder="Vaše krstné meno" name="name">
        </div>

        <div class="form-group">
            <label for="surename">Priezvisko</label>
            <input type="text" class="form-control" id="surenaname"
                   placeholder="Vaše priezvisko" name="surename">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email"
                   placeholder="Váš email" name="email">
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

        <p>
            <button type="submit">Odoslať registračný formulár</button>
        </p>

    </form>
</div>

<?php get_footer(); ?>
