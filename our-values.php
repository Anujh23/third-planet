<?php include("include/connection1.php");?>
<!DOCTYPE html>
<html lang="en">
	
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title> OUR VALUES </title>
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
								<h1  style="color:#fff;">OUR VALUES</h1>
								<ul class="breadcrumb">
									<li>
										<a href="<?=$urlroot;?>"  style="color:#fff;">Home</a>
									</li>
									<li class="active"  style="color:#fff;">
										OUR VALUES
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<!-- Breadcrumb Section End Here -->
            <style>
                .values-wrap{padding:30px 0 60px}
                .values-intro{text-align:center;max-width:900px;margin:0 auto 26px}
                .values-intro h2{margin:0 0 10px;font-weight:700;letter-spacing:.3px}
                .ribbon{position:relative}
                .ribbon-line{position:absolute;top:50%;left:0;right:0;height:4px;background:#e8f3f1;border-radius:4px;transform:translateY(-50%)}
                .values-grid{position:relative;display:flex;gap:18px;align-items:stretch;justify-content:space-between;flex-wrap:wrap}
                .val-card{position:relative;background:#fff;border:1px solid #e6e9ec;border-radius:10px;box-shadow:0 8px 20px rgba(0,0,0,.08);padding:18px 16px;flex:1 1 200px;min-width:200px;max-width:260px}
                .val-icon{width:40px;height:40px;border-radius:50%;display:flex;align-items:center;justify-content:center;background:#e8f7f4;color:#0a7c6c;margin-bottom:10px;font-size:18px}
                .val-title{font-weight:700;margin:0 0 6px;font-size:16px}
                .val-text{color:#5b5f63;font-size:14px;margin:0}
                .chev{position:absolute;top:50%;right:-12px;transform:translateY(-50%);width:24px;height:24px;background:#0a7c6c;color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;box-shadow:0 3px 8px rgba(10,124,108,.35)}
                .values-cta{margin-top:26px;text-align:center}
                .btn-ribbon{display:inline-block;background:#0a7c6c;color:#fff;padding:10px 18px;border-radius:6px;text-decoration:none}
                .btn-ribbon:hover{background:#0d8f7d;color:#fff}
                @media(max-width:992px){.chev{display:none}.ribbon-line{display:none}.values-grid{gap:14px;justify-content:center}}
            </style>
            <div class="container values-wrap">
                <div class="values-intro">
                    <h2>Our Values</h2>
                    <p>We practice values that strengthen community trust and enduring impact across our CSR programs.</p>
                </div>
                <div class="ribbon">
                    <div class="ribbon-line"></div>
                    <div class="values-grid">
                        <div class="val-card">
                            <div class="val-icon"><i class="fa fa-shield"></i></div>
                            <h3 class="val-title">Trust</h3>
                            <p class="val-text">We keep promises to communities and partners, building credibility through consistent delivery.</p>
                            <div class="chev"><i class="fa fa-chevron-right"></i></div>
                        </div>
                        <div class="val-card">
                            <div class="val-icon"><i class="fa fa-eye"></i></div>
                            <h3 class="val-title">Transparency</h3>
                            <p class="val-text">Clear goals, budgets, and outcomes—open reporting that invites scrutiny and learning.</p>
                            <div class="chev"><i class="fa fa-chevron-right"></i></div>
                        </div>
                        <div class="val-card">
                            <div class="val-icon"><i class="fa fa-users"></i></div>
                            <h3 class="val-title">Diversity & Inclusion</h3>
                            <p class="val-text">We co-create with women, youth, and marginalized groups for equitable outcomes.</p>
                            <div class="chev"><i class="fa fa-chevron-right"></i></div>
                        </div>
                        <div class="val-card">
                            <div class="val-icon"><i class="fa fa-check-circle"></i></div>
                            <h3 class="val-title">Accountability</h3>
                            <p class="val-text">We set KPIs, monitor rigorously, and take corrective action where results fall short.</p>
                            <div class="chev"><i class="fa fa-chevron-right"></i></div>
                        </div>
                        <div class="val-card">
                            <div class="val-icon"><i class="fa fa-leaf"></i></div>
                            <h3 class="val-title">Sustainability</h3>
                            <p class="val-text">We design for longevity—local capacity, O&M plans, and community ownership.</p>
                        </div>
                    </div>
                </div>
                <div class="values-cta">
                    <a class="btn-ribbon" href="<?=$urlroot;?>our-process.php">See Our Process</a>
                </div>
            </div>
            
            <!-- Expanded Content: More on Our Values -->
            <style>
                .values-more{padding:20px 0 70px;background:#faf8f5}
                .values-more .section-title{margin:0 0 14px;text-align:center;font-weight:700;color:#cfa27f}
                .values-more .section-sub{max-width:900px;margin:0 auto 28px;text-align:center;color:#5f5b57}
                .principles-list{display:grid;grid-template-columns:repeat(2,minmax(260px,1fr));gap:14px;max-width:1000px;margin:0 auto 26px}
                .principle{background:#fff;border:1px solid #ece7e2;border-radius:10px;padding:14px 16px;box-shadow:0 6px 16px rgba(0,0,0,.05)}
                .principle h4{margin:0 0 6px;font-size:16px;font-weight:700;color:#2a2928}
                .principle p{margin:0;color:#5f5b57;line-height:1.6}
                .live-values{display:flex;gap:18px;flex-wrap:wrap;align-items:stretch;justify-content:center;margin-top:10px}
                .live-card{flex:1 1 260px;max-width:340px;background:#ffffff;border:1px solid #e6e9ec;border-radius:12px;padding:18px;box-shadow:0 8px 20px rgba(0,0,0,.06)}
                .live-card h4{margin:0 0 8px;font-weight:700;color:#1f1f1f}
                .live-card ul{padding-left:18px;margin:0}
                .policy-box{margin:28px auto 0;max-width:900px;background:#0a7c6c;border-radius:10px;color:#fff;padding:18px 20px;display:flex;gap:16px;align-items:center;justify-content:space-between;flex-wrap:wrap}
                .policy-box .text{flex:1 1 320px}
                .policy-box .text h4{margin:0 0 4px;color:#fff;font-weight:700}
                .policy-box .text p{margin:0;opacity:.95}
                .policy-box .actions a{display:inline-block;background:#f4b000;color:#000;padding:10px 16px;border-radius:6px;text-decoration:none;font-weight:700}
                .policy-box .actions a:hover{background:#ffd15a}
                @media(max-width:767px){
                    .principles-list{grid-template-columns:1fr}
                }
            </style>
            <div class="values-more">
                <div class="container">
                    <h3 class="section-title">More on Our Values</h3>
                    <p class="section-sub">Our values guide every partnership, program design, and on-ground interaction. They turn intent into daily practice.</p>

                    <div class="principles-list">
                        <div class="principle">
                            <h4><i class="fa fa-handshake-o"></i> Partnership First</h4>
                            <p>We co-create with communities, governments, and companies to ensure relevance, ownership, and long-term adoption.</p>
                        </div>
                        <div class="principle">
                            <h4><i class="fa fa-line-chart"></i> Evidence-Led</h4>
                            <p>Needs assessments, baselines, and frequent reviews shape decisions so resources flow to what truly works.</p>
                        </div>
                        <div class="principle">
                            <h4><i class="fa fa-graduation-cap"></i> Learning Culture</h4>
                            <p>We document, share, and iterate—treating every project as a chance to improve systems and build capacity.</p>
                        </div>
                        <div class="principle">
                            <h4><i class="fa fa-balance-scale"></i> Ethics & Safeguarding</h4>
                            <p>We uphold dignity, consent, and safety, especially for children and vulnerable groups, across all interventions.</p>
                        </div>
                    </div>

                    <div class="live-values">
                        <div class="live-card">
                            <h4>In Program Design</h4>
                            <ul>
                                <li>Community diagnostics and participatory planning</li>
                                <li>Clear theory of change with measurable outcomes</li>
                                <li>Inclusion lens for gender and vulnerability</li>
                            </ul>
                        </div>
                        <div class="live-card">
                            <h4>In Delivery</h4>
                            <ul>
                                <li>Local partners and capacity building</li>
                                <li>Transparent budgets and governance</li>
                                <li>Regular field reviews and course correction</li>
                            </ul>
                        </div>
                        <div class="live-card">
                            <h4>In Impact</h4>
                            <ul>
                                <li>Third-party validations where applicable</li>
                                <li>Open sharing of results and learnings</li>
                                <li>Exit and O&M plans to sustain gains</li>
                            </ul>
                        </div>
                    </div>

                    <div class="policy-box">
                        <div class="text">
                            <h4>Policies & Commitments</h4>
                            <p>Explore our code of conduct, safeguarding, DEI, and environmental commitments that operationalize our values.</p>
                        </div>
                        <div class="actions">
                            <a href="<?=$urlroot;?>resource-hub.php">Open Resource Hub</a>
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <?php include("include/footer.php");?>
</body>
</html>