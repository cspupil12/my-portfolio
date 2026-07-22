<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]> <html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]> <html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="description" content="Jaspreet — Founder, PlanBotic | AI Systems, Infrastructure & Automation">
    <meta name="author" content="Jaspreet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Jaspreet — Founder, PlanBotic | AI Systems, Infrastructure & Automation</title>
    <link rel="icon" href="favicon.png" type="image/png" />
    <!-- STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Saira:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/plugins.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
    <!-- /STYLES -->
    <style>
        /* Modern Single Page Layout Adjustments */
        html { scroll-behavior: smooth; }
        .conor_tm_home_wrap { min-height: 100vh; position: relative; display: flex; align-items: center; }
        .conor_tm_home_wrap .leftbox { width: 60%; }
        .conor_tm_home_wrap .rightbox { 
            width: 40%; 
            display: flex; 
            align-items: center; 
            justify-content: center;
            background: transparent !important;
        }
        .conor_tm_home_wrap .rightbox .inner {
            width: 350px;
            height: 350px;
            border-radius: 50%;
            position: relative;
            background-image: url('img/slider/2.png');
            background-size: cover;
            background-position: center 22%;
            box-shadow: 0 20px 40px rgba(227, 135, 45, 0.4);
            border: 5px solid rgba(227, 135, 45, 0.8);
            opacity: 1 !important;
            transform: scale(1) !important;
        }
        .conor_tm_home_wrap .rightbox .overlay { display: none; }
        @media (max-width: 1040px) {
            .conor_tm_home_wrap { flex-direction: column-reverse; justify-content: center; }
            .conor_tm_home_wrap .leftbox, .conor_tm_home_wrap .rightbox { width: 100%; }
            .conor_tm_home_wrap .rightbox { height: 400px; }
        }
        .page_section { padding: 100px 0; }
        .section_title { text-align: center; font-size: 40px; margin-bottom: 50px; color: #fff; font-family: 'Oswald', sans-serif; text-transform: uppercase; }
        .section_title span { color: #e3872d; }
        
        /* Force visibility for hero text and hide legacy bio subtitle from layout flow */
        .conor_tm_home_wrap .leftbox .texts_wrap h1 span,
        .conor_tm_home_wrap .leftbox .texts_wrap p.hero-tagline {
            visibility: visible !important;
            opacity: 1 !important;
        }
        .conor_tm_home_wrap .leftbox .texts_wrap p.subtitle {
            display: none !important;
        }
        /* Disable curtain overlay entirely */
        .conor_tm_home_wrap .leftbox .texts_wrap h1:before {
            display: none !important;
        }
    </style>
</head>
<body>
<!-- WRAPPER ALL -->
<div class="conor_tm_wrapper_all">
    <?php require 'inc/header.php'; ?>
    <?php require 'inc/menu.php'; ?>
    
    <!-- HOME SECTION -->
    <div id="home" class="conor_tm_home_wrap">
        <div class="leftbox">
            <div class="texts_wrap">
                <h2 class="responsive-heading">I'm </h2>
                <div class="name_holder">
                    <h2 class="cd-headline clip is-full-width mb">
                        <span class="cd-words-wrapper">
                            <b class="is-visible"><span class="hidden-xs">I'm</span> Founder.</b>
                            <b class="is-hidden"><span class="hidden-xs">I'm</span> Builder.</b>
                            <b class="is-hidden"><span class="hidden-xs">I'm</span> Automator.</b>
                            <b class="is-hidden"><span class="hidden-xs">I'm</span> Infrastructure Guy.</b>
                        </span>
                    </h2>
                </div>
                <div class="name_holder"><h1><span>Jaspreet Singh</span></h1></div>
                <p class="hero-tagline" style="font-size: 24px; color: #fff; margin-bottom: 20px; font-weight: 600; font-family: 'Oswald', sans-serif; line-height: 1.5; letter-spacing: 0.5px; text-align: left;">AI student and enthusiast pursuing my dreams<br>in DAV University, Jalandhar, PB, IND</p>
                <p class="subtitle">Hello, I'm <strong>Jaspreet Singh</strong>. I'm a founder and builder based in Jalandhar, Punjab, running <strong>PlanBotic</strong> — building AI agents, automation, and infrastructure for real businesses. Alongside that, I manage server infrastructure and operations at Morado Solutions.</p>
            </div>
        </div>
        <div class="rightbox">
            <div class="inner" data-aos="zoom-in" data-aos-duration="1200"></div>
            <div class="overlay"></div>
        </div>
    </div>
    
    <!-- ABOUT SECTION -->
    <div id="about" class="page_section conor_tm_section" data-aos="fade-up" data-aos-duration="800">
        <h2 class="section_title">About <span>Me</span></h2>
        <div class="conor_tm_author_definitions_wrap">
            <div class="container">
                <div class="inner_wrap">
                    <div class="texts_wrap">
                        <p>Founder of <strong>PlanBotic</strong>, where I design AI agents, automation, and secure web infrastructure for clients. I also head infrastructure and HR operations at Morado Solutions. My background spans AI/ML tooling, cloud infrastructure, and game server architecture — a mix that comes from years of hands-on building rather than a single specialization.</p>
                    </div>
                    <div class="short_info">
                        <ul>
                            <li><p><span class="first">Name:</span><span class="second">Jaspreet</span></p></li>
                            <li><p><span class="first">Email:</span><span class="second">jaspreet@planbotic.com</span></p></li>
                            <li><p><span class="first">Location:</span><span class="second">Jalandhar, Punjab, India</span></p></li>
                            <li><p><span class="first">Company:</span><span class="second">PlanBotic</span></p></li>
                            <li><p><span class="first">LinkedIn:</span><span class="second"><a href="https://linkedin.com/in/your-handle" target="_blank" style="color: #e3872d;">linkedin.com/in/your-handle</a></span></p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- EXPERIENCE SECTION -->
    <div id="experience" class="page_section conor_tm_section" data-aos="fade-up" data-aos-duration="800">
        <h2 class="section_title">Professional <span>Experience</span></h2>
        <div class="conor_tm_experience_wrap">
            <div class="container">
                <div class="inner_wrap">
                    <div class="experience_list">
                        <div class="experience_card glass_card_styled" data-aos="fade-up" data-aos-duration="800">
                            <div class="card_header">
                                <div class="title_group">
                                    <h3>Manager / Head of HR</h3>
                                    <h4>Morado Solutions</h4>
                                </div>
                            </div>
                            <div class="card_body">
                                <p>Overseeing infrastructure services, managing support tickets, maintaining server operations, and handling team coordination — including employee guidelines and administrative operations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SKILLS SECTION -->
    <div id="skills" class="page_section conor_tm_section" data-aos="fade-up" data-aos-duration="800">
        <h2 class="section_title">Skills & <span>Proficiencies</span></h2>
        <div class="conor_tm_skill_wrap">
            <div class="container">
                <div class="inner_wrap">
                    <div class="leftbox">
                        <div class="progress_bar_wrap_total">
                            <div class="conor_tm_progress_wrap" data-size="small" data-round="c" data-strip="off">
                                <div class="conor_tm_progress" data-value="90" data-color="rgba(227, 135, 45,.8)">
                                    <span><span class="label">Programming & AI - <span class="experience">Python, PyTorch, GenAI, RAG, Hugging Face</span></span><span class="number">90%</span></span>
                                    <div class="conor_tm_bar_bg"><div class="conor_tm_bar_wrap"><div class="conor_tm_bar"></div></div></div>
                                </div>
                                <div class="conor_tm_progress" data-value="85" data-color="rgba(227, 135, 45,.8)">
                                    <span><span class="label">Cloud & Infrastructure - <span class="experience">Google Cloud, Firebase, AWS, VPS, SSH</span></span><span class="number">85%</span></span>
                                    <div class="conor_tm_bar_bg"><div class="conor_tm_bar_wrap"><div class="conor_tm_bar"></div></div></div>
                                </div>
                                <div class="conor_tm_progress" data-value="80" data-color="rgba(227, 135, 45,.8)">
                                    <span><span class="label">Web & App Development - <span class="experience">Three.js, Framer, Vercel, WordPress</span></span><span class="number">80%</span></span>
                                    <div class="conor_tm_bar_bg"><div class="conor_tm_bar_wrap"><div class="conor_tm_bar"></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rightbox">
                        <div class="progress_bar_wrap_total">
                            <div class="conor_tm_progress_wrap" data-size="small" data-round="c" data-strip="off">
                                <div class="conor_tm_progress" data-value="75" data-color="rgba(227, 135, 45,.8)">
                                    <span><span class="label">3D Modelling - <span class="experience">Blender, Google Flow, Minecraft configurations</span></span><span class="number">75%</span></span>
                                    <div class="conor_tm_bar_bg"><div class="conor_tm_bar_wrap"><div class="conor_tm_bar"></div></div></div>
                                </div>
                                <div class="conor_tm_progress" data-value="70" data-color="rgba(227, 135, 45,.8)">
                                    <span><span class="label">Data Management - <span class="experience">Complex organization, large dataset handling</span></span><span class="number">70%</span></span>
                                    <div class="conor_tm_bar_bg"><div class="conor_tm_bar_wrap"><div class="conor_tm_bar"></div></div></div>
                                </div>
                                <div class="conor_tm_progress" data-value="75" data-color="rgba(227, 135, 45,.8)">
                                    <span><span class="label">Design & Content - <span class="experience">Graphic design, video editing, AI mockup tools</span></span><span class="number">75%</span></span>
                                    <div class="conor_tm_bar_bg"><div class="conor_tm_bar_wrap"><div class="conor_tm_bar"></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- PORTFOLIO / PROJECTS SECTION -->
    <div id="portfolio" class="page_section conor_tm_section" data-aos="fade-up" data-aos-duration="800">
        <h2 class="section_title">My <span>Projects</span></h2>
        <div class="conor_tm_portfolio_wrapper_all">
            <div class="container">
                <div class="conor_tm_portfolio_wrap">
                    <ul class="new_portfolio_grid">
                        <!-- Project 1 -->
                        <li class="new_portfolio_card glass_card_styled" data-aos="fade-up" data-aos-duration="800">
                            <div class="card_content">
                                <h4>SecureStaff</h4>
                                <p>Full staff authorization, role-based access, attendance & auto ID cards.</p>
                            </div>
                            <a class="full_link" href="#project1"></a>
                        </li>
                        <!-- Project 2 -->
                        <li class="new_portfolio_card glass_card_styled" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                            <div class="card_content">
                                <h4>AutoStock Fleet Manager</h4>
                                <p>Multi-company vehicle inventory, role-based dashboards & live analytics.</p>
                            </div>
                            <a class="full_link" href="#project2"></a>
                        </li>
                        <!-- Project 3 -->
                        <li class="new_portfolio_card glass_card_styled" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                            <div class="card_content">
                                <h4>Cloud & Web Deployments</h4>
                                <p>Hosting cloud deployments for Retrorealm, Nexusnodes, and personal Vercel builds.</p>
                            </div>
                            <a class="full_link" href="#project3"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- EDUCATION SECTION -->
    <div id="education" class="page_section conor_tm_section" data-aos="fade-up" data-aos-duration="800">
        <h2 class="section_title">Education & <span>Development</span></h2>
        <div class="conor_tm_education_wrap">
            <div class="container">
                <div class="inner_wrap">
                    <div class="education_timeline">
                        <div class="timeline_item glass_card_styled" data-aos="fade-up" data-aos-duration="800">
                            <div class="item_header">
                                <h3>Pursuing BTech in CS & AI</h3>
                                <h4>DAV University, Jalandhar</h4>
                            </div>
                            <div class="item_body">
                                <p>Specialized undergraduate program focusing on Computer Science and Artificial Intelligence.</p>
                            </div>
                        </div>
                        <div class="timeline_item glass_card_styled" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                            <div class="item_header">
                                <h3>CBSE Class 12</h3>
                                <h4>High School</h4>
                            </div>
                            <div class="item_body">
                                <p>Completed high school curriculum with a primary focus on Computer Science, Mathematics, and English.</p>
                            </div>
                        </div>
                        <div class="timeline_item glass_card_styled" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                            <div class="item_header">
                                <h3>Google Cloud Arcade</h3>
                                <h4>Cloud Competency</h4>
                            </div>
                            <div class="item_body">
                                <p>Active participant in cloud skill badges, infrastructure labs, and technical challenge events.</p>
                            </div>
                        </div>
                        <div class="timeline_item glass_card_styled" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                            <div class="item_header">
                                <h3>Frontend Designing</h3>
                                <h4>Self-Driven Practice</h4>
                            </div>
                            <div class="item_body">
                                <p>Continuous self-guided learning focusing on user interface design, modern layout structures, and styling animations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CERTIFICATIONS SECTION -->
    <div id="certifications" class="page_section conor_tm_section" data-aos="fade-up" data-aos-duration="800">
        <h2 class="section_title">Professional <span>Certifications</span></h2>
        <div class="conor_tm_certifications_wrap">
            <div class="container">
                <div class="inner_wrap">
                    <ul class="certifications_grid">
                        <li class="cert_card glass_card_styled" data-aos="fade-up" data-aos-duration="800">
                            <div class="card_inner">
                                <div class="badge_thumbnail">
                                    <a href="certificates/Be10x_AI_Tools_Workshop.png" target="_blank">
                                        <img src="certificates/Be10x_AI_Tools_Workshop.png" alt="Be10x AI Tools Workshop Certificate" onerror="this.src='img/portfolio/1.jpg'; this.onerror=null;"/>
                                    </a>
                                </div>
                                <div class="card_content">
                                    <h3>AI Tools & ChatGPT Workshop</h3>
                                    <h4>Be10x — June 2026</h4>
                                    <p>Hands-on workflow development covering data analysis, presentations, and coding/debugging using AI utilities.</p>
                                    <div class="conor_tm_button no_animation" data-position="left">
                                        <a href="certificates/Be10x_AI_Tools_Workshop.png" target="_blank" class="hvr-radial-in"><span>View Certificate</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="cert_card glass_card_styled" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                            <div class="card_inner">
                                <div class="badge_thumbnail">
                                    <a href="certificates/Outskill_GenAI_Mastermind.jpeg" target="_blank">
                                        <img src="certificates/Outskill_GenAI_Mastermind.jpeg" alt="Outskill Gen AI Engineering Mastermind Certificate" onerror="this.src='img/portfolio/2.jpg'; this.onerror=null;"/>
                                    </a>
                                </div>
                                <div class="card_content">
                                    <h3>Gen AI Engineering Mastermind</h3>
                                    <h4>Outskill</h4>
                                    <p>Comprehensive training on Gen AI solutions, architecture modeling, and deployment patterns.</p>
                                    <div class="conor_tm_button no_animation" data-position="left">
                                        <a href="certificates/Outskill_GenAI_Mastermind.jpeg" target="_blank" class="hvr-radial-in"><span>View Certificate</span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACT SECTION -->
    <div id="contact" class="page_section">
        <?php require 'inc/contact_me_block.php'; ?>
    </div>

    <?php require 'inc/footer.php'; ?>
    
    <div class="pointer" id="pointer"></div>
</div>
<!-- / WRAPPER ALL -->

<!-- SCRIPTS -->
<script src="js/jquery.js"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
<script src="js/animated.headline.js"></script>
<script src="js/plugins.js"></script>
<script src="js/init.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tsparticles@2.12.0/tsparticles.bundle.min.js"></script>
<script>
  AOS.init({ once: true, offset: 50, duration: 800 });
</script>
<!-- /SCRIPTS -->
</body>
</html>
