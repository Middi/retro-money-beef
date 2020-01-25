<?php
/**
 * Template part for the how it works section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package retro_money_beef
 */

?>

<section id="how-it-works" class="how-it-works">
    <div class="container">

        <div class="title-container-h1">
            <h1 class="display-h1 h1-underline underline-yellow"><?php the_field('hiw_title'); ?></h1>
        </div>

        <div class="sm-container text-center"><?php the_field('hiw_text'); ?></div>
        <div id="timeline">
            <div class="timeline-item">
                <div class="timeline-icon">
					<svg height="46" width="46" xmlns="http://www.w3.org/2000/svg"><circle cx="23" cy="23" fill="none" r="18" stroke="#fee4db" stroke-width="9"/></svg>
                </div>
                <div class="timeline-content scroll-animation">
                    <div class="text-right">
                        <h2 class="h2-underline underline-pink reverse-underline"><?php the_field('step_1_title'); ?></h2>
                    </div>
                    <p><?php the_field('step_1_text'); ?></p>
                    <a class="arrow-link arrow-link-pink" href="#"><?php the_field('cta_text'); ?> </a>
                    <div class="timeline-number">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/hiw-01.png" alt="timeline-number">
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">
					<svg height="46" width="46" xmlns="http://www.w3.org/2000/svg"><circle cx="23" cy="23" fill="none" r="18" stroke="#CADEEA" stroke-width="9"/></svg>
                </div>
                <div class="timeline-content right scroll-animation right-animate">
                    <h2 class="h2-underline underline-blue"><?php the_field('step_2_title'); ?></h2>
                    <p><?php the_field('step_2_text'); ?></p>
                    <div class="timeline-number timeline-right">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/hiw-02.png" alt="timeline-number">
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">
					<svg height="46" width="46" xmlns="http://www.w3.org/2000/svg"><circle cx="23" cy="23" fill="none" r="18" stroke="#C2E5D6" stroke-width="9"/></svg>
                </div>
                <div class="timeline-content scroll-animation">
                    <div class="text-right">
                        <h2 class="h2-underline underline-green reverse-underline"><?php the_field('step_3_title'); ?></h2>
                    </div>
                    <p><?php the_field('step_3_text'); ?></p>
                    <div class="timeline-number">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/hiw-03.png" alt="timeline-number">
                    </div>
                </div>
            </div>

            <div class="timeline-item">
                <div class="timeline-icon">
					<svg height="46" width="46" xmlns="http://www.w3.org/2000/svg"><circle cx="23" cy="23" fill="none" r="18" stroke="#FBE7B7" stroke-width="9"/></svg>
                </div>
                <div class="timeline-content right scroll-animation right-animate">
                    <h2 class="h2-underline underline-yellow"><?php the_field('step_4_title'); ?></h2>
                    <p><?php the_field('step_4_text'); ?></p>
                    <div class="timeline-number timeline-right">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/img/hiw-04.png" alt="timeline-number">
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a class="btn btn-black" href="#"><?php the_field('cta_text'); ?> </a>
        </div>

        <div class="hiw-blob">
			<svg height="603" width="755" xmlns="http://www.w3.org/2000/svg"><path d="M189.009 547.88C96.597 496.787 6.429 409.445.599 320.087-5.132 230.52 73.323 138.982 155.58 81.13 237.991 23.231 324.051-.935 427.487.68c103.387 1.453 224.048 28.898 283.155 111.082 59.158 82.347 56.658 219.644 6.481 314.866-50.176 95.223-148.182 148.419-244.412 167.652-96.381 19.281-191.189 4.483-283.702-46.4z" fill="#d3eae1"/></svg>
        </div>
    </div>
</section>