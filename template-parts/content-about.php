<?php
/**
 * Template part for the about section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package retro_money_beef
 */

?>


<section class="left-pic">
    <div class="container flex">
        <div class="left-pic-img slide-in-left-delay"></div>
        <div class="left-pic-text slide-in-right-delay">
            <h1 class="h1-underline underline-green"><?php the_field('about_heading'); ?></h1>
            <?php the_field('about_text'); ?>
            <br/> <br/>
            <a class="btn btn-black" href="#"> <?php the_field('cta_text'); ?> </a>
        </div>

        <div class="about-blob">
            <svg height="667" width="831" xmlns="http://www.w3.org/2000/svg"><path d="M678.404 37.503C759.046 89.93 781.896 189.49 813.196 260.896c31.3 71.245 21.302 156.963-29.778 227.404-29.524 40.714-108.855 131.671-213.515 165.053-90.364 28.821-259.305 7.505-359.075-22.409-99.77-29.913-134.102-98.86-171.247-176.957C2.435 375.889-13.05 292.674 12.817 223.36 38.466 154.206 241.324 2.737 330.007 2.898c88.685.16 267.756-17.984 348.397 34.605z" fill="#e1f1fb"/></svg>
        </div>
    </div>
</section>