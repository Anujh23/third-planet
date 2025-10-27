<?php include("include/connection1.php");?>
<!DOCTYPE html>
<html lang="en">
	
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title> Gallery </title>
        
		<?php include("include/filescript.php");?>
		<style>
		  /* Gallery Grid */
		  .gallery-container {
		    max-width: 1200px;
		    margin: 40px auto;
		    padding: 20px;
		  }
		  .gallery-grid {
		    display: grid;
		    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
		    gap: 20px;
		    margin-top: 30px;
		  }
		  .gallery-item {
		    position: relative;
		    overflow: hidden;
		    border-radius: 8px;
		    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
		    transition: transform 0.3s ease, box-shadow 0.3s ease;
		  }
		  .gallery-item:hover {
		    transform: translateY(-5px);
		    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
		  }
		  .gallery-item img {
		    width: 100%;
		    height: 250px;
		    object-fit: cover;
		    display: block;
		  }
		  .gallery-overlay {
		    position: absolute;
		    bottom: 0;
		    left: 0;
		    right: 0;
		    background: linear-gradient(transparent, rgba(0,0,0,0.7));
		    color: white;
		    padding: 20px;
		    transform: translateY(100%);
		    transition: transform 0.3s ease;
		  }
		  .gallery-item:hover .gallery-overlay {
		    transform: translateY(0);
		  }
		  .gallery-title {
		    font-size: 16px;
		    font-weight: bold;
		    margin-bottom: 5px;
		  }
		  .gallery-category {
		    font-size: 12px;
		    opacity: 0.8;
		    text-transform: uppercase;
		    letter-spacing: 1px;
		  }
		  .gallery-header {
		    text-align: center;
		    margin-bottom: 30px;
		  }
		  .gallery-header h2 {
		    color: #333;
		    font-size: 32px;
		    margin-bottom: 10px;
		  }
		  .gallery-header p {
		    color: #666;
		    font-size: 16px;
		  }
		</style>
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
							<h1 style="color:#fff;">Gallery</h1>
							<ul class="breadcrumb">
								<li>
									<a href="<?=$urlroot;?>" style="color:#fff;">Home</a>
								</li>
								<li class="active" style="color:#fff;">
									Gallery
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- Breadcrumb Section End Here -->

			<!-- Gallery Section -->
			<div class="gallery-container">
				<div class="gallery-header">
					<h2>Our Photo Gallery</h2>
					<p>Explore our work through these impactful moments</p>
				</div>
				
				<div class="gallery-grid">
					<div class="gallery-item">
						<img src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_1.jpg" alt="Rural Development">
						<div class="gallery-overlay">
							<div class="gallery-title">Rural Development</div>
							<div class="gallery-category">Social Impact- 3rd planet is helping in rural development</div>
						</div>
					</div>
					
					<div class="gallery-item">
						<img src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_2.jpg" alt="Community Work">
						<div class="gallery-overlay">
							<div class="gallery-title">Community Outreach</div>
							<div class="gallery-category">Rural Development</div>
						</div>
					</div>
					
					<div class="gallery-item">
						<img src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_3.jpg" alt="Slum Area Development">
						<div class="gallery-overlay">
							<div class="gallery-title">Slum Area Development</div>
							<div class="gallery-category">Social Impact</div>
						</div>
					</div>
					
					<div class="gallery-item">
						<img src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_4.jpg" alt="Infrastructure Development">
						<div class="gallery-overlay">
							<div class="gallery-title">Infrastructure Development</div>
							<div class="gallery-category">Rural Development</div>
						</div>
					</div>
					
					<div class="gallery-item">
						<img src="img/Promoting_Education/Third Planet Foundation_Quality Education and Learning1_www.3planet.org.jpg" alt="Quality Education">
						<div class="gallery-overlay">
							<div class="gallery-title">Quality Education</div>
							<div class="gallery-category">Education</div>
						</div>
					</div>
					
					<div class="gallery-item">
						<img src="img/Promoting_Education/Third Planet Foundation_Quality Education and Learning2_www.3planet.org.jpg" alt="Learning Programs">
						<div class="gallery-overlay">
							<div class="gallery-title">Learning Programs</div>
							<div class="gallery-category">Education</div>
						</div>
					</div>
					
					<div class="gallery-item">
						<img src="img/Promoting_Education/Third Planet Foundation_Quality Education and Learning3_www.3planet.org.jpg" alt="Educational Support">
						<div class="gallery-overlay">
							<div class="gallery-title">Educational Support</div>
							<div class="gallery-category">Education</div>
						</div>
					</div>
					
					<div class="gallery-item">
						<img src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare1_www.3planet.org.jpg" alt="Healthcare Services">
						<div class="gallery-overlay">
							<div class="gallery-title">Healthcare Services</div>
							<div class="gallery-category">Healthcare</div>
						</div>
					</div>
					
					<div class="gallery-item">
						<img src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare2_www.3planet.org.jpg" alt="Medical Support">
						<div class="gallery-overlay">
							<div class="gallery-title">Medical Support</div>
							<div class="gallery-category">Healthcare</div>
						</div>
					</div>
					
					<div class="gallery-item">
						<img src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare3_www.3planet.org.jpg" alt="Health Programs">
						<div class="gallery-overlay">
							<div class="gallery-title">Health Programs</div>
							<div class="gallery-category">Healthcare</div>
						</div>
					</div>
					
					<div class="gallery-item">
						<img src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment1.jpg" alt="Women Empowerment">
						<div class="gallery-overlay">
							<div class="gallery-title">Women Empowerment</div>
							<div class="gallery-category">Gender Equality</div>
						</div>
					</div>
					
					<div class="gallery-item">
						<img src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment2.jpg" alt="Gender Equality">
						<div class="gallery-overlay">
							<div class="gallery-title">Gender Equality</div>
							<div class="gallery-category">Women Empowerment</div>
						</div>
					</div>
				</div>
			</div>



        <?php include("include/footer.php");?>
        
        </body>
    </html>
    