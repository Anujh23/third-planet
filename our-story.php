<?php include("include/connection1.php");?>
<!DOCTYPE html>
<html lang="en">
	
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title> OUR STORY </title>
        
		<?php include("include/filescript.php");?>
		<link rel="stylesheet" href="<?=$urlroot;?>assets/css/story.css">

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
								<h1  style="color:#fff;">OUR STORY</h1>
								<ul class="breadcrumb">
									<li>
										<a href="<?=$urlroot;?>"  style="color:#fff;">Home</a>
									</li>
									<li class="active"  style="color:#fff;">
										OUR STORY
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<!-- Breadcrumb Section End Here -->

            <!-- Our Story Section Start Here -->
            <section class="our-story-section">
                <div class="container">
                    <div class="story-hero">
                        <h1 class="story-title">Our Story</h1>
                        <p class="story-intro">
                            Third Planet Foundation is a Section 8 not-for-profit CSR implementation organisation founded in 2012. We partner with companies and communities to co-create high-quality, compliant and measurable development programmes across India.
                        </p>
                    </div>

                    <div class="row story-grid">
                        <div class="col-md-7">
                            <div class="story-content">
                                <h2 class="story-subtitle">How we began</h2>
                                <p>
                                    We started with a simple belief: meaningful change happens when businesses and communities work together. Since 2012, we have built an execution-first team that translates CSR commitments into on-ground programmes that are ethical, compliant and outcome-driven.
                                </p>

                                <h2 class="story-subtitle">What we focus on</h2>
                                <p>
                                    Our work spans priority thematic areas aligned to Schedule VII such as Promoting Education, Quality Healthcare, Skill & Livelihood Development, Water Sanitation & Hygiene (WASH), Gender Equality & Women Empowerment, Agriculture Development & Environment Sustainability, Rural Development, and Eradicating Hunger & Poverty Alleviation.
                                </p>

                                <h2 class="story-subtitle">How we work</h2>
                                <p>
                                    We design and implement end-to-end projects — from needs assessment and baseline studies to programme delivery, monitoring, social audit and impact reporting. Our approach is collaborative, transparent and built to scale across diverse geographies.
                                </p>

                                <ul class="story-highlights" aria-label="Third Planet Foundation highlights">
                                    <li><span class="badge-dot" aria-hidden="true"></span> Section 8 not-for-profit; CSR implementation partner</li>
                                    <li><span class="badge-dot" aria-hidden="true"></span> Founded in 2012; pan-India programme delivery</li>
                                    <li><span class="badge-dot" aria-hidden="true"></span> Need-based design, robust governance and measurable outcomes</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <figure class="story-visual">
                                <img src="<?php echo $urlroot;?>img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare1_www.3planet.org.jpg" alt="Third Planet Foundation field programme" class="story-image">
                                <figcaption class="story-caption">Field implementation across key thematic areas</figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="story-cred-strip" aria-label="Registrations and credentials">
                        <div class="cred-item">Section 8 (2012)</div>
                        <div class="cred-item">CSR Implementation</div>
                        <div class="cred-item">Pan-India Footprint</div>
                    </div>
                </div>
            </section>
            <!-- Our Story Section End Here -->
        </div>
        <!-- #main end -->
        
        <?php include("include/footer.php");?>
        
    </body>
</html>
