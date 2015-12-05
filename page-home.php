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
			<i class="icon fa fa-user fa-3x"></i>
			<h1>Profile</h1>
			<em>Who I am</em>
		</div>
		<div class="body">
			<p>I am a creative and driven guy who is passionate about problem solving in exciting areas such as <strong>artificial 
                intelligence</strong> and <strong>machine learning</strong>. More specifically areas such as <strong>computer vision</strong> and <strong>natural language 
                processing</strong> is of particular interest which in the latest past have shown great progress.</p>
		</div>
	</div>

    <div class="section section-right">
        <div class="head">
            <i class="icon fa fa-star fa-3x"></i>
            <h1>Skills</h1>
            <em>What I know</em>
        </div>
        <div class="body" style="width: calc(80% - 320px)">
            <div class="bars-container">
                <div class="bar-header">
                    <div class="bar-container"></div>
                    <div class="bar-description">Fields:</div>
                </div>
                <div class="bar-item">
                    <div class="bar-container"><div class="bar" style="width: 75%;"></div></div>
                    <div class="bar-description">Machine Learning</div>
                </div>
                <div class="bar-item">
                    <div class="bar-container"><div class="bar" style="width: 65%;"></div></div>
                    <div class="bar-description">Deep Learning</div>
                </div>
                <div class="bar-item">
                    <div class="bar-container"><div class="bar" style="width: 54%;"></div></div>
                    <div class="bar-description">Computer Vision</div>
                </div>
                <div class="bar-item">
                    <div class="bar-container"><div class="bar" style="width: 60%;"></div></div>
                    <div class="bar-description">Natural Language Processing</div>
                </div>
                <div class="bar-item">
                    <div class="bar-container"><div class="bar" style="width: 50%;"></div></div>
                    <div class="bar-description">Web Development</div>
                </div>
                <div class="bar-item">
                    <div class="bar-container"><div class="bar" style="width: 10%;"></div></div>
                    <div class="bar-description">Distributed Computing</div>
                </div>
                <div class="bar-header">
                    <div class="bar-container"></div>
                    <div class="bar-description">Programming Languages:</div>
                </div>
                <div class="bar-item">
                    <div class="bar-container"><div class="bar" style="width: 80%;"></div></div>
                    <div class="bar-description">Python</div>
                </div>
                <div class="bar-item">
                    <div class="bar-container"><div class="bar" style="width: 90%;"></div></div>
                    <div class="bar-description">C#</div>
                </div>
                <div class="bar-item">
                    <div class="bar-container"><div class="bar" style="width: 85%;"></div></div>
                    <div class="bar-description">Java</div>
                </div>
                <div class="bar-item">
                    <div class="bar-container"><div class="bar" style="width: 40%;"></div></div>
                    <div class="bar-description">c++</div>
                </div>
                <div class="bar-item">
                    <div class="bar-container"><div class="bar" style="width: 75%;"></div></div>
                    <div class="bar-description">Matlab</div>
                </div>
                <div class="bar-header">
                    <div class="bar-container"></div>
                    <div class="bar-description">Tools:</div>
                </div>
                <div class="bar-item">
                    <div class="bar-container"><div class="bar" style="width: 65%;"></div></div>
                    <div class="bar-description">Theano</div>
                </div>
                <div class="bar-item">
                    <div class="bar-container"><div class="bar" style="width: 50%;"></div></div>
                    <div class="bar-description">OpenCV</div>
                </div>
            </div>
        </div>
    </div>

    <div class="section timeline">
        <div class="timeline-head">
            <i class="icon fa fa-globe fa-2x"></i>
            <div class="header">Work Experience</div>
            <div class="line"><div style="height: 1px; background-color: #dadada;"></div></div>
        </div>

        <div style="position: relative">

            <div class="timeline-rail"></div>

            <ol>
                <li>
                    <div class="date-container">
                        <div class="custom-tooltip date-box">
                            <span><i class="fa fa-clock-o normal"></i></span> 2015
                        </div>
                    </div>
                    <div class="bullet-container"><div class="timeline-item-bullet"></div></div>
                    <div class="icon-container"><img alt="Gavagai" src="<?php echo get_stylesheet_directory_uri(); ?>/images/gavagai.png"></div>
                    <div class="content-container">
                        <h2>Master's Thesis at Gavagai, Stockholm, Sweden</h2>
                        <p>I am currently settled at <a href="http://gavagai.se">Gavagai</a> in Stockholm where I immerse within the field of Natural Language Processing in my Master's Thesis. 
                            In particular, I investigate word embeddings, which are, ways of constructing machine representations of words that are widely used 
                            to solve high level NLP tasks such as question answering, sentiment analysis, semantic role labeling and so on. The work requires 
                            breaking into the very cutting edge of NLP research and the use of suitable languages and tools such as c++, python, Theano and 
                            Lasagne to be able to try new ideas.</p>                           
                    </div>
                </li>

                <li>
                    <div class="date-container">
                        <div class="custom-tooltip date-box">
                            <span><i class="fa fa-clock-o normal"></i></span> 2014
                        </div>
                    </div>
                    <div class="bullet-container"><div class="timeline-item-bullet"></div></div>
                    <div class="icon-container"><img alt="SICK IVP" src="<?php echo get_stylesheet_directory_uri(); ?>/images/sickivp.png"></div>
                    <div class="content-container">
                        <h2>Summer Internship at SICK IVP, Link&#246;ping, Sweden</h2>
                        <p>During the summer 2014 I worked at SICK IVP in Link&#246;ping with HMI development. More specifically designing multi-touch gestures 
                            for 3D object manipulation on tablet devices among others. I got hands on experience with Google Web Toolkit and WebGL and 
                            improved my Java skills. This position required thorough computer graphics and linear algebra knowledge and a fast mindset 
                            to quickly get into existing code bases.</p>
                    </div>
                </li>

                <li>
                    <div class="date-container"></div>
                    <div class="bullet-container"><i class="fa fa-plus timeline-item-bullet-plus"></i></div>
                </li>
            
                <li class="hidden">
                    <div class="date-container">
                        <div class="custom-tooltip date-box">
                            <span><i class="fa fa-clock-o normal"></i></span> 2013
                        </div>
                    </div>
                    <div class="bullet-container"><div class="timeline-item-bullet"></div></div>
                    <div class="icon-container"><img alt="ABB" src="<?php echo get_stylesheet_directory_uri(); ?>/images/abb.jpg"></div>
                    <div class="content-container">
                        <h2>Summer Internship at ABB Control Systems, V&#228;ster&#229;s, Sweden</h2>
                        <p>I learned how to manage virtual machines in the cloud at Amazon Web Services (AWS) and wrote manuals for how ABB Control 
                            Systems can use AWS to host their demo systems. </p>
                    </div>
                </li>

                <li class="hidden">
                    <div class="date-container">
                        <div class="custom-tooltip date-box">
                            <span><i class="fa fa-clock-o normal"></i></span> 2011
                        </div>
                    </div>
                    <div class="bullet-container"><div class="timeline-item-bullet"></div></div>
                    <div class="icon-container"><img alt="ABB" src="<?php echo get_stylesheet_directory_uri(); ?>/images/abb.jpg"></div>
                    <div class="content-container">
                        <h2>Summer Internship at ABB Force Measurement, V&#228;ster&#229;s, Sweden</h2>
                        <p>I investigated the possibilities for ABB Force Measurement to use tablets for surveillance of ABB's industrial products</p>
                    </div>
                </li>

                <li class="hidden">
                    <div class="date-container">
                        <div class="custom-tooltip date-box">
                            <span><i class="fa fa-clock-o normal"></i></span> 2010
                        </div>
                    </div>
                    <div class="bullet-container"><div class="timeline-item-bullet"></div></div>
                    <div class="icon-container"><img alt="ABB" src="<?php echo get_stylesheet_directory_uri(); ?>/images/abb.jpg"></div>
                    <div class="content-container">
                        <h2>Summer Internship at ABB Control Systems, V&#228;ster&#229;s, Sweden</h2>
                        <p>Graphical User Interface development. Gave rise to an internal ABB patent application: The use of a graph in a process control system. </p>
                    </div>
                </li>

            </ol>

        </div>
    </div>

    <div class="section timeline">
        <div class="timeline-head">
            <i class="icon fa fa-graduation-cap fa-2x"></i>
            <div class="header">Education</div>
            <div class="line"><div style="height: 1px; background-color: #dadada;"></div></div>
        </div>

        <div style="position: relative">

            <div class="timeline-rail"></div>

            <ol>
                <li>
                    <div class="date-container">
                        <div class="custom-tooltip date-box">
                            <span><i class="fa fa-clock-o normal"></i></span> 2015
                        </div>
                    </div>
                    <div class="bullet-container"><div class="timeline-item-bullet"></div></div>
                    <div class="content-container">
                        <h2>Exchange semester at ETH, Z&#252;rich, Switzerland</h2>
                        <h3>As an extra fifth master semester I went to ETH in Z&#252;rich where I mainly took classes in Machine Learning</h3>
                        <em>ETH, Z&#252;rich, Switzerland</em>
                    </div>
                </li>

                <li>
                    <div class="date-container">
                        <div class="custom-tooltip date-box">
                            <span><i class="fa fa-clock-o normal"></i></span> 2010 - 2016
                        </div>
                    </div>
                    <div class="bullet-container"><div class="timeline-item-bullet"></div></div>
                    <div class="content-container">
                        <h2>Master of Science: Applied Physics and Electrical Engineering</h2>
                        <h3>Master focus: Signal and Image processing</h3>
                        <em>Institute of Technology, Link&#246;ping University, Sweden</em>
                    </div>
                </li>
            
                <li>
                    <div class="date-container">
                        <div class="custom-tooltip date-box">
                            <span><i class="fa fa-clock-o normal"></i></span> 2007 - 2010
                        </div>
                    </div>
                    <div class="bullet-container"><div class="timeline-item-bullet"></div></div>
                    <div class="content-container">
                        <h2>Industrial Engineering High School Program</h2>
                        <em>ABB Indtustrial High School, V&#228;ster&#229;s, Sweden</em>
                    </div>
                </li>
            </ol>

        </div>
    </div>

</div>

<?php wp_footer(); ?>

<script type="text/javascript">
    jQuery('.timeline-item-bullet-plus').click(function () {
        var ol = jQuery(this).closest('ol');
        var li = jQuery(this).closest('li');
        jQuery('.hidden', ol).removeClass('hidden');
        jQuery(li).addClass('hidden');
    });
</script>
</body>
</html>