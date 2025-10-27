<?php include("include/connection1.php");?>
<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>OUR MISSION - Third Planet Foundation</title>
        <?php include("include/filescript.php");?>

    </head>
    <body>
        <?php include("include/header.php");?>
        <!-- site content -->
        <div id="main">
            <!-- Breadcrumb Section Start Here -->
            <div class="breadcrumb-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 style="color:#fff;">OUR MISSION</h1>
                            <ul class="breadcrumb">
                                <li>
                                    <a href="<?=$urlroot;?>" style="color:#fff;">Home</a>
                                </li>
                                <li class="active" style="color:#fff;">
                                    OUR MISSION
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb Section End Here -->
            <!-- Mission Content Section -->
            <section class="mission-section">
                <div class="container">
                    <!-- Two column layout: left Text, right SDG image -->
                    <div class="row mission-vision-grid">
                        <!-- LEFT: Vision at top, Mission below -->
                        <div class="col-xs-12 col-md-6">
                            <h2 class="vision-title theme-hero-heading">Our Vision</h2>
                            <div class="vision-card">
                                <span class="quote-mark" aria-hidden="true">“</span>
                                <blockquote class="vision-quote">
                                    <p>To build a resilient and prosperous nation by championing sustainable development, fostering inclusive growth, and empowering communities for a better tomorrow.</p>
                                </blockquote>
                            </div>
                            <div class="mission-statement">
                                <h2 class="mission-title theme-hero-heading">Our Mission</h2>
                                <p class="mission-lead">To drive holistic socio-economic development by empowering communities, fostering sustainable growth, and creating opportunities that transform lives.</p>
                            </div>
                        </div>

                        <!-- RIGHT: SDG image visual -->
                        <div class="col-xs-12 col-md-6">
                            <div class="sdg-cube-side">
                                <div class="sdg-cube-wrap" role="img" aria-label="Decorative SDG image"></div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- End Mission Content Section -->

            <!-- CTA: placed after globe image section completes -->
            <section aria-label="Partner CTA">
                <div class="container">
                    <div class="row mission-cta-row">
                        <div class="col-xs-12 text-center">
                            <div style="background:#f2f3f5; padding: 30px; border-radius: 8px; color: #26211d;">
                                <h3 style="margin: 0 0 15px 0; color: #26211d; font-weight: 600; font-size: 22px;">
                                    Partner With Us for Impactful CSR
                                </h3>
                                <p style="font-size: 16px; margin-bottom: 20px; opacity: 0.9; color:#555;">
                                    Join India's transformation through compliant, measurable, and sustainable community development programs.
                                </p>
                                <a href="contactus.php" style="background: #00a8a8; color: #ffffff; padding: 12px 25px; border-radius: 25px; text-decoration: none; font-weight: 700; display: inline-block;">
                                    Get in Touch <i class="fa fa-arrow-right" style="margin-left: 8px;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php include("include/footer.php");?>
    </body>
</html>
