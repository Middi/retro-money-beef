<?php
/**
 * Template part for the get your pack section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package retro_money_beef
 */

?>


<section class="left-pic bg-grey">
    <div class="container flex">
        <div class="left-pic-img car scroll-animation"></div>
        <div class="left-pic-text scroll-animation right-animate">
            <h1 class="h1-underline underline-pink">Get your selling pack.</h1>
            <p>Signup now for your free selling starter pack and turn your old items into cash.</p>
                
                <div class="alert success">
                    <p class="text-center">You are now signed up, Check your email.</p>
                </div>

            <form id="user-form" enctype="multipart/form-data" method="POST" action="<?php echo admin_url('admin-ajax.php'); ?>">
                
                <div class="btn-group">
                    <input type="text" name="first_name" placeholder="First Name" required />
                    <input type="text" name="last_name" placeholder="Last Name" required/>
                </div>

                <div class="btn-group">
                    <input type="email" name="user_email" placeholder="Email"  required/>
                </div>

                <div class="btn-group">
                    <input type="password" name="pass1" placeholder="Password" required style="width:250px; margin-bottom:3px;"><br />
                    <input type="password" name="pass2" placeholder="Confirm Password" required style="width:250px; margin-bottom:3px;"><br />
                </div>

                <input type="hidden" name="action" value="create_customer" />
                <input class="btn btn-black mt-1" type="submit" value="Submit" />
                
            </form>
        </div>
        <div class="about-blob">
            <svg width="836" height="744" xmlns="http://www.w3.org/2000/svg"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Desktop-HD" transform="translate(-324 -3616)" fill="#FEE4DB" fill-rule="nonzero"><g id="blob-shape-(3)" transform="rotate(163 313.591 2211.332)"><path d="M698.881 162.407C779.32 257.131 845.8 394.311 823.29 503.115c-22.683 109.018-134.18 189.661-238.872 228.703-104.866 39.042-202.753 36.481-310.586-3.2C166 689.15 48.396 612.346 12.8 492.66c-35.595-119.897 10.993-282.89 94.05-378.255C189.904 19.041 309.602-8.693 416.562 3.468c107.135 12.16 201.706 64.429 282.32 158.94z" id="Path"/></g></g></g></svg>    
        </div>
    </div>
</section>