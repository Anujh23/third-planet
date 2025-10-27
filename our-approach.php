<?php include("include/connection1.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Our Approach</title>
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
                        <h1 style="color:#fff;">Our Approach</h1>
                        <ul class="breadcrumb">
                            <li><a href="<?=$urlroot;?>" style="color:#fff;">Home</a></li>
                            <li class="active" style="color:#fff;">Our Approach</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Approach Content -->
        <section class="approach-section" style="padding:60px 0;background:#fbfaf8;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <h2 class="about-title" style="margin-top:0;">Our Approach</h2>
                        <p class="lead" style="color:#26211d;opacity:.9;">
                            Third Planet Foundation advances sustainable, people-centered development. We co-create solutions with communities, apply data and evidence to focus on root causes, and design every intervention to be climate-smart, inclusive and scalable.
                        </p>

                        <hr class="content-divider" style="width:60px;height:4px;background:#f4b000;border:0;margin:24px 0 32px;">

                        <h3 style="margin-top:0;">What guides our work</h3>
                        <ul style="margin:0 0 24px 18px;">
                            <li><strong>Community first:</strong> We listen deeply, respect local knowledge and strengthen local capacity.</li>
                            <li><strong>Evidence-led:</strong> We use data, research and feedback loops to inform decisions and track outcomes.</li>
                            <li><strong>Equity and inclusion:</strong> We prioritize women, youth and vulnerable groups in design and delivery.</li>
                            <li><strong>Climate-smart:</strong> We promote resilience, regenerative practices and resource efficiency.</li>
                        </ul>

                        <h3>How we work</h3>
                        <ol style="margin:0 0 24px 18px;">
                            <li><strong>Listen & learn:</strong> Participatory assessments to understand context, assets and aspirations.</li>
                            <li><strong>Co-design solutions:</strong> Translate insights into practical, culturally relevant interventions.</li>
                            <li><strong>Pilot & iterate:</strong> Start small, test quickly, gather feedback and refine.</li>
                            <li><strong>Scale with partners:</strong> Work with government, civil society and private sector to expand impact.</li>
                            <li><strong>Measure & share:</strong> Track outcomes, learn continuously and share what works.</li>
                        </ol>

                        <h3>Focus areas</h3>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-sm-6">
                                <ul style="margin-left:18px;">
                                    <li><strong>Agriculture & livelihoods:</strong> Climate-smart practices, producer collectives and market linkages.</li>
                                    <li><strong>Education:</strong> Foundational learning, teacher support and digital enablement.</li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul style="margin-left:18px;">
                                    <li><strong>Health & nutrition:</strong> Awareness, preventive care and last-mile access.</li>
                                    <li><strong>Gender & inclusion:</strong> Women’s leadership, skills and safety nets.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="well" style="background:#fff;border:1px solid #eae5e0;padding:24px;margin-top:20px;">
                            <h4 style="margin-top:0;">Partnerships for scale</h4>
                            <p style="margin:0;">We partner with governments, donors, corporations and community-based organizations to blend resources, align incentives and scale solutions responsibly. Transparency and accountability anchor every partnership.</p>
                        </div>

                        <p style="margin-top:18px;color:#727272;">Have a collaboration idea? <a href="<?=$urlroot;?>contactus.php">Contact us</a> to explore how we can build sustainable impact together.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include("include/footer.php");?>
</body>
</html>