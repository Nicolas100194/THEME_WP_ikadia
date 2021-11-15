<?php get_header() ?>
<div class="bloc-header">
    <div class="content-header">
        <h1>creatives</h1>
        <h2>power by psdfreebies.com</h2>
        <p>Scroll Down</p>
        <a href="#link">
            <div class="btn-scroll">
                <img src="/wp_ikadia/wp-content/themes/theme_ikadia/img/arrow.png" alt="scroll">
            </div>
        </a>
    </div>
</div>
<div id="link"class="bloc-content">
    <div class="top-bloc">
        <p class="big-letter">W</p>
        <h3>we are an awesome agency</h3>
    </div>
    <div class="container">
        <div class="card">
            <div class="logo-card"><img src="/wp_ikadia/wp-content/themes/theme_ikadia/img/write.png" alt="icone crayon"></div>
            <h4 class="title-card">feature one</h4>
            <p class="text-card">Aenean lacinia bibendum nulla sed consectetur. VivAenean lacinia bibendum nulla sed consecteturamus sagittis</p>
        </div>
        <div class="card">
            <div class="logo-card"><img src="/wp_ikadia/wp-content/themes/theme_ikadia/img/write.png" alt="icone crayon"></div>
            <h4 class="title-card">feature two</h4>
            <p class="text-card">Aenean lacinia bibendum nulla sed consectetur. VivAenean lacinia bibendum nulla sed consecteturamus sagittis</p>
        </div>
        <div class="card">
            <div class="logo-card"><img src="/wp_ikadia/wp-content/themes/theme_ikadia/img/search.png" alt="icone recherche"></div>
            <h4 class="title-card">feature three</h4>
            <p class="text-card">Aenean lacinia bibendum nulla sed consectetur. VivAenean lacinia bibendum nulla sed consecteturamus sagittis</p>
        </div>
        <div class="card">
            <div class="logo-card"><img src="/wp_ikadia/wp-content/themes/theme_ikadia/img/speak.png" alt="icone dialogue"></div>
            <h4 class="title-card">feature four</h4>
            <p class="text-card">Aenean lacinia bibendum nulla sed consectetur. VivAenean lacinia bibendum nulla sed consecteturamus sagittis</p>
        </div>
    </div>
</div>
<?php 
//requête wp_query précisant nombre d'article à afficher
    $posts = new WP_Query([
        'posts_per_page' => 2
    ]);

//affichage des deux derniers articles
$count_post = 0;
while($posts->have_posts()): $posts->the_post();
    $count_post ++;
    if ($count_post == 1):?>
        <div class="container-article first-article">
            <a class="view-more"href="<?php the_permalink()?>">
                <div class="content">
                    <div class="infos-article">
                    <?= the_category() ?>
                    <p>&nbsp|
                    <?= get_the_date();?></p>
                    </div>
                    <h4><?php the_title()?></h4>
                    <?= the_excerpt() ?>
                </div>
                <div class="thumbnail">
                    <?php the_post_thumbnail()?>
                </div>
            </a>
        </div>      
    <?php else :?>
        <div class="container-article second-article">
        <a class="view-more"href="<?php the_permalink()?>">
                <div class="content">
                    <div class="infos-article">
                    <?= the_category() ?>
                    <p>&nbsp|
                    <?= get_the_date();?></p>
                    </div>
                    <h4><?php the_title()?></h4>
                    <?= the_excerpt() ?>
                </div>
                <div class="thumbnail">
                    <?php the_post_thumbnail()?>
                </div>
            </a>
        </div>
    <?php endif;?>
<?php endwhile ;?>

<div class="wrapper">
    <div class="container">
        <div class="card-wrapper">
            <img src="/wp_ikadia/wp-content/themes/theme_ikadia/img/Write2.png" alt="iconecrayon">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum sed facere, ad, consequuntur dolor doloribus maiores, explicabo culpa nobis ipsa aperiam animi quidem blanditiis atque aliquam fugit eaque omnis assumenda!
            </p>
        </div>
        <div class="card-wrapper">
            <img src="/wp_ikadia/wp-content/themes/theme_ikadia/img/Write2.png" alt="icone crayon">
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus ratione commodi vitae enim blanditiis, odio, voluptatem dignissimos corrupti voluptas maxime architecto earum, vel est! Possimus fugit sit quod? Earum, quos.
            </p>
        </div>
    </div>
</div>

<div class="bloc-form">
    <div class="top-bloc">
        <p class="big-letter">C</p>
        <h3>we'd love to hear about your project</h3>
    </div>
    <div class="container-form container">
        <?php
            //formulaire de contact
            echo do_shortcode('[contact-form-7 id="18" title="Contact"]'); ?>
    </div>
</div>


<?php get_footer() ?>