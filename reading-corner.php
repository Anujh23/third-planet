<?php include("include/connection1.php");?>
<!DOCTYPE html>
<html lang="en">
 
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Reading Corner</title>
    <?php include("include/filescript.php");?>
    <style>
        .rc-grid { display: flex; flex-wrap: wrap; gap: 24px; }
        .rc-card { background:#fff; border:1px solid #e6e9ec; border-radius:8px; overflow:hidden; width:100%; max-width:360px; box-shadow:0 6px 16px rgba(0,0,0,0.08); transition:transform .15s ease; }
        .rc-card:hover { transform: translateY(-2px); }
        .rc-thumb { width:100%; height:200px; object-fit:cover; background:#f5f7f9; display:block; }
        .rc-body { padding:14px 16px; }
        .rc-title { margin:0 0 6px; font-size:18px; line-height:1.3; color:#111; }
        .rc-sub { margin:0 0 8px; color:#5b5f63; font-size:14px; min-height:18px; }
        .rc-meta { font-size:12px; color:#7a7f85; }
        .rc-section-h { margin:8px 0 18px; font-weight:700; letter-spacing:.2px; }
        @media (max-width: 767px) { .rc-card { max-width:100%; } .rc-thumb{height:180px;} }
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
                        <h1 style="color:#fff;">Reading Corner</h1>
                        <ul class="breadcrumb">
                            <li>
                                <a href="<?=$urlroot;?>"  style="color:#fff;">Home</a>
                            </li>
                            <li class="active"  style="color:#fff;">
                                Reading Corner
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Section End Here -->

        <div class="container" style="padding:30px 0 50px;">
            <?php
            // Helper: escape
            function rc_fmt($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }
            // Static sample content (edit freely)
            $blogs = [
                [
                    'name' => 'Community-Led Water Conservation',
                    'pages' => 'community-led-water-conservation',
                    'cbrief' => 'How village committees revived ponds across two districts.',
                    'photo' => 'Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development9.jpg',       
                    'date' => 'Oct 03, 2025'
                ],
                [
                    'name' => 'Learning Labs: After-school Support',
                    'pages' => 'learning-labs-after-school-support',
                    'cbrief' => 'A simple model to lift foundational literacy and numeracy.',
                    'photo' => 'Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development9.jpg',       
                    'date' => 'Sep 25, 2025'
                ],
                [
                    'name' => 'Women SHGs Driving Clean Energy',
                    'pages' => 'women-shgs-driving-clean-energy',
                    'cbrief' => 'From awareness to ownership: clean cookstoves in 30 villages.',
                    'photo' => 'Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development9.jpg',       
                    'date' => 'Sep 10, 2025'
                ],
            ];
            ?>
            <?php if (!empty($blogs)) { ?>
                <h3 class="rc-section-h">Blogs</h3>
                <div class="rc-grid">
                    <?php foreach ($blogs as $b) {
                        $title = rc_fmt($b['name']);
                        $sub = rc_fmt($b['cbrief']);
                        $slug = rc_fmt($b['pages']);
                        $datep = rc_fmt($b['date']);
                        $img = !empty($b['photo']) ? $urlroot.'img/'.rc_fmt($b['photo']) : $urlroot.'img/flag.png';
                        $href = $urlroot.'blog-detail.php?slug='.$slug;
                    ?>
                        <a class="rc-card" href="<?=$href; ?>">
                            <img class="rc-thumb" src="<?=$img; ?>" alt="<?=$title; ?>">
                            <div class="rc-body">
                                <h4 class="rc-title"><?=$title; ?></h4>
                                <p class="rc-sub"><?= $sub; ?></p>
                                <div class="rc-meta"><?=$datep; ?></div>
                            </div>
                        </a>
                    <?php } ?>
                </div>
            <?php } ?>
            
        </div>
    </div>
    <?php include("include/footer.php");?>
</body>
</html>