<?php include("include/connection1.php");?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Blog | Reading Corner</title>
  <?php include("include/filescript.php");?>
  <style>
    .detail-wrap{padding:30px 0 60px}
    .detail-hero{width:100%;max-height:420px;object-fit:cover;border-radius:8px;box-shadow:0 8px 22px rgba(0,0,0,.12)}
    .detail-title{margin:16px 0 6px;font-size:36px;line-height:1.2;font-weight:800;color:#1b3620}
    .detail-author{font-size:18px;font-weight:600;color:#1b3620;margin-bottom:8px}
    .detail-sub{color:#2c3d2f;margin:12px 0 6px;font-size:20px}
    .detail-meta{color:#7a7f85;font-size:13px;margin-bottom:16px}
    .detail-body{font-size:16px;line-height:1.8;color:#1b1b1b}
    .detail-body h2{font-size:22px;color:#1b3620;margin:22px 0 10px;font-weight:800}
    .detail-bottom{margin-top:28px;padding-top:16px;border-top:1px solid #e7ece9;display:flex;flex-wrap:wrap;gap:18px;align-items:center}
    .detail-pub{font-size:13px;color:#54625a}
    .share{margin-left:auto;display:flex;gap:10px;align-items:center}
    .share a{display:inline-flex;align-items:center;justify-content:center;width:32px;height:32px;border-radius:4px;background:#e7f2ea;color:#1b6f3a}
    .sidebar{padding-left:20px}
    .widget{background:#fff;border:1px solid #e6e9ec;border-radius:8px;padding:16px 16px 6px;margin-bottom:20px}
    .widget h4{margin:0 0 12px;color:#1b3620;font-weight:800}
    .widget ul{list-style:none;padding:0;margin:0}
    .widget li{margin:0 0 10px}
    .widget a{color:#1b6f3a;text-decoration:none}
    .widget a:hover{text-decoration:underline}
    @media(max-width:991px){.sidebar{padding-left:0;margin-top:24px}}
  </style>
</head>
<body>
<?php include("include/header.php");?>
<div id="main">
  <div class="breadcrumb-section">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1 style="color:#fff;">Reading Corner</h1>
          <ul class="breadcrumb">
            <li><a href="<?=$urlroot; ?>" style="color:#fff;">Home</a></li>
            <li><a href="<?=$urlroot; ?>reading-corner.php" style="color:#fff;">Reading Corner</a></li>
            <li class="active" style="color:#fff;">Blog</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container detail-wrap">
    <?php
      function h($s){ return htmlspecialchars($s ?? '', ENT_QUOTES, 'UTF-8'); }
      $slug = isset($_GET['slug']) ? preg_replace('/[^a-z0-9\-]/i','', $_GET['slug']) : '';
      // Static blog posts map (keep in sync with reading-corner.php)
      $BLOGS = [
        'community-led-water-conservation' => [
          'name' => 'Community-Led Water Conservation',
          'cbrief' => 'How village committees revived ponds across two districts.',
          'date' => 'Oct 03, 2025',
          'photo' => 'Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development9.jpg',
          'author' => 'Ashita Dargan',
          'brief' => '<p>Communities restored traditional ponds using local materials and labor. The program focused on mapping, de-silting, and catchment treatment. As a result, groundwater levels stabilized and rabi sowing increased by 22%.</p><ul><li>12 ponds revived</li><li>48,000 cubic meters storage created</li><li>Maintenance committees formed</li></ul>'
        ],
        'learning-labs-after-school-support' => [
          'name' => 'Learning Labs: After-school Support',
          'cbrief' => 'A simple model to lift foundational literacy and numeracy.',
          'date' => 'Sep 25, 2025',
          'photo' => 'Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development5.jpg',
          'author' => 'Team Third Planet',
          'brief' => '<p>Learning labs run by local tutors, with simple assessments and activity kits. Over two terms, grade-level proficiency improved from 41% to 69%.</p>'
        ],
        'women-shgs-driving-clean-energy' => [
          'name' => 'Women SHGs Driving Clean Energy',
          'cbrief' => 'From awareness to ownership: clean cookstoves in 30 villages.',
          'date' => 'Sep 10, 2025',
          'photo' => '',
          'author' => 'Programme Team',
          'brief' => '<p>Self-help groups created awareness, aggregated demand and negotiated better pricing. Households reported 35% reduction in fuel expenses and better indoor air quality.</p>'
        ],
      ];
      $row = $BLOGS[$slug] ?? null;
      if ($row) {
        $title = h($row['name']);
        $sub = h($row['cbrief']);
        $datep = h($row['date']);
        $author = h($row['author'] ?? '');
        $imgPath = !empty($row['photo']) ? $urlroot.'img/'.h($row['photo']) : $urlroot.'img/flag.png';
        // Build current page absolute URL for sharing
        $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
        $currentUrl = $scheme.'://'.($_SERVER['HTTP_HOST'] ?? 'localhost').($_SERVER['REQUEST_URI'] ?? '');
        $encUrl = urlencode($currentUrl);
        $encTitle = urlencode($title);
        $shareFb = 'https://www.facebook.com/sharer/sharer.php?u='.$encUrl;
        $shareTw = 'https://twitter.com/intent/tweet?url='.$encUrl.'&text='.$encTitle;
        $shareLn = 'https://www.linkedin.com/sharing/share-offsite/?url='.$encUrl;
    ?>
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <img class="detail-hero" src="<?=$imgPath; ?>" alt="<?=$title; ?>">
          <h1 class="detail-title"><?=$title;?></h1>
          <?php if (!empty($author)) { ?><div class="detail-author"><?=$author;?></div><?php } ?>
          <?php if (!empty($sub)) { ?><div class="detail-sub"><?=$sub;?></div><?php } ?>
          <div class="detail-meta"><?=$datep;?></div>
          <div class="detail-body"><?=$row['brief'];?></div>

          <div class="detail-bottom">
            <div class="detail-pub"><strong>Published:</strong> <?=$datep;?></div>
            <?php if (!empty($author)) { ?><div class="detail-pub"><strong>Author:</strong> <?=$author;?></div><?php } ?>
            <div class="share">
              <span>Share this page</span>
              <a href="<?=$shareFb;?>" title="Share on Facebook" target="_blank" rel="noopener noreferrer"><i class="fa fa-facebook"></i></a>
              <a href="<?=$shareTw;?>" title="Share on Twitter" target="_blank" rel="noopener noreferrer"><i class="fa fa-twitter"></i></a>
              <a href="mailto:?subject=<?=$encTitle;?>&body=<?=$encUrl;?>" title="Share on Email" target="_blank" rel="noopener noreferrer"><i class="fa fa-envelope"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 sidebar">
          <?php
            // Build list for widgets
            $slugs = array_keys($BLOGS);
            // Latest: same order as array (assumed newest first)
            $latest = $slugs;
            // Most read: reverse order as placeholder
            $most = array_reverse($slugs);
          ?>
          <div class="widget">
            <h4>Latest</h4>
            <ul>
              <?php foreach($latest as $s){ $b=$BLOGS[$s]; $href=$urlroot.'blog-detail.php?slug='.h($s); ?>
                <li><a href="<?=$href; ?>"><?= h($b['name']); ?></a></li>
              <?php } ?>
            </ul>
          </div>
          <div class="widget">
            <h4>Most read</h4>
            <ul>
              <?php foreach($most as $s){ $b=$BLOGS[$s]; $href=$urlroot.'blog-detail.php?slug='.h($s); ?>
                <li><a href="<?=$href; ?>"><?= h($b['name']); ?></a></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    <?php } else { ?>
      <div class="row"><div class="col-xs-12"><p>Blog not found.</p></div></div>
    <?php } ?>
  </div>
</div>
<?php include("include/footer.php");?>
</body>
</html>
