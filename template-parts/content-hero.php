<?php
/**
 * Template part for the hero section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package retro_money_beef
 */

?>

<section class="right-pic home-page-padding">
    <div class="container flex">
        <div class="right-pic-text slide-in-left">
            <h1><?php the_field('heading'); ?></h1>
            <p><?php the_field('sub_heading'); ?></p>
            <a class="arrow-link" href="#"><?php the_field('cta_text'); ?> </a>
        </div>
        <div class="right-pic-img slide-in-right"></div>
    <div class="blob">
			<svg height="831" width="974" xmlns="http://www.w3.org/2000/svg"><path d="M966.479 538.572c-21.884 100.368-42.786 242.03-240.488 275.426-197.703 33.395-427.323 22.061-591.725-95.097C-30.137 601.743-.808 503.437 8.739 354.477 18.286 205.517 97.1 76.198 203.786 25.593 310.513-25.245 414.192 7.367 570.885 58.858c156.692 51.49 257.52 96.838 323.108 178.06 65.355 80.941 94.37 201.286 72.486 301.654z" fill="#fee4db"/></svg>
		</div>
    </div>
</section>