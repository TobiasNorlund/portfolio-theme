<?php
/**
 * Template file for the home (static) page

 */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style-home.css">
</head>

<body <?php body_class(); ?>>
<div id="top-header-menu-container">
    <?php wp_nav_menu( array( 'theme_location' => 'top-header-menu', 'menu_id' => 'top-header-menu' ) ); ?>
</div>

<div id="logo">
    <div id="logo-face"></div>
    <div id="logo-box">TOBIAS NORLUND</div>
</div>

<div id="page" class="hfeed site">

	<div class="section section-left">
		<div class="head">
			<div class="icon"></div>
			<h1>Profile</h1>
			<em>My Personal Info</em>
		</div>
		<div class="body">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer.</p>
		</div>
	</div>

    <div class="section section-right">
        <div class="head">
            <div class="icon"></div>
            <h1>Skills</h1>
            <em>Whatever</em>
        </div>
        <div class="body">
            <p>blablablabla</p>
            <p>blablablabla</p>
            <p>blablablabla</p>
            <p>blablablabla</p>
        </div>
    </div>

    <div class="section timeline">
        <div class="timeline-head">
            <div class="icon"></div>
            <div class="header">Work Experience</div>
            <div class="line"><div style="height: 1px; background-color: #dadada;"></div></div>
        </div>

        <div style="position: relative">

            <div class="timeline-line" style="position: absolute; width: 0px; height: 100%; left:199px; border-left: 1px dashed gray; z-index: -1"></div>

            <ol>
                <li>
                    <div class="date-container">
                        <div class="custom-tooltip date-box">
                            <span><i class="fa fa-clock-o normal"></i></span> 2009 - 2010
                        </div>
                    </div>
                    <div class="bullet-container"><div class="timeline-item-bullet"></div></div>
                    <div class="content-container">
                        <h2>Master of Science: Applied Physics and Electrical Engineering</h2>
                        <em>Master: Signal and Image processing</em>
                        <p>lakwsdjfjk alwekj lekjfg bsdkjfgb lsdkfj bgldkfbv dlfkbjv xdfbv dsdf sdlkf jhskdjf halskdjhf laksdfhjä laksdhjä falskdjfhä a
                        alksdj fhäalskdjf halskjd fhalskjdh flaskdjhf laskjdf hlasdkjfh laskdjfh lasdkjf laskjdf aslkjdf aslkdjf alskjdf skdjhf skdf d 
                        sdkf hbskjdfghä sdjkfhg sldkfjg hsdlkjfg h</p>
                    </div>
                </li>
            
                <li>
                    <div class="date-container">
                        <div class="custom-tooltip date-box">
                            <span><i class="fa fa-clock-o normal"></i></span> 2009 - 2010
                        </div>
                    </div>
                    <div class="bullet-container"><div class="timeline-item-bullet"></div></div>
                    <div class="content-container">
                        <p>some other content</p>
                    </div>
                </li>
            </ol>

        </div>
    </div>

    <p>Content</p>
    <p>Content</p>
    <p>Content</p>
        <p>Content</p>
</div>

<?php wp_footer(); ?>

</body>
</html>