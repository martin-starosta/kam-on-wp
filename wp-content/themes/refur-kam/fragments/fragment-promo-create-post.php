<!-- PROMO: Create new post -->
<?php if( is_user_logged_in() ): ?>
<div class="card promoted">
    <p class="promoted-headline">Chceš sa podeliť o zaujímavú informáciu?</p>
	<p>Ako registrovaný užívateľ máš možnosť napísať vlastný príspevok a tak začať diskusiu na tému, ktorá
					ťa zaujíma.
	</p>
	<p class="variation-b">
	    <a class="suit_and_tie" href="<?= get_site_url( ); ?>/wp-admin/post-new.php">Napísať vlastný príspevok</a>
	</p>
</div>
<?php endif; ?>