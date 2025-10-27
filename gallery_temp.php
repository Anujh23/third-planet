<?php include("admin/include/connection1.php");?>
<!DOCTYPE html>
<html lang="en">
	
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title> Gallery </title>
        
		<?php include("include/filescript.php");?>
        <script src="js/slider-28.1.0.min.js" type="text/javascript"></script>
        <script type="text/javascript">
        window.v_1_slider_init = function() {

            var v_1_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var v_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $vSlideshowRunner$,
                $Transitions: v_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $vArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $vThumbnailNavigator$,
                $SpacingX: 5,
                $SpacingY: 5
              }
            };

            var v_1_slider = new $vSlider$("v_1", v_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 390;

            function ScaleSlider() {
                var containerElement = v_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    v_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $v$.$AddEvent(window, "load", ScaleSlider);
            $v$.$AddEvent(window, "resize", ScaleSlider);
            $v$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
	<script type="text/javascript">
        window.v_2_slider_init = function() {

            var v_2_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var v_2_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $vSlideshowRunner$,
                $Transitions: v_2_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $vArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $vThumbnailNavigator$,
                $SpacingX: 5,
                $SpacingY: 5
              }
            };

            var v_2_slider = new $vSlider$("v_2", v_2_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 390;

            function ScaleSlider() {
                var containerElement = v_2_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    v_2_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $v$.$AddEvent(window, "load", ScaleSlider);
            $v$.$AddEvent(window, "resize", ScaleSlider);
            $v$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
	  <script type="text/javascript">
        window.v_3_slider_init = function() {

            var v_3_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var v_3_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $vSlideshowRunner$,
                $Transitions: v_3_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $vArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $vThumbnailNavigator$,
                $SpacingX: 5,
                $SpacingY: 5
              }
            };

            var v_3_slider = new $vSlider$("v_3", v_3_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 390;

            function ScaleSlider() {
                var containerElement = v_3_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    v_3_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $v$.$AddEvent(window, "load", ScaleSlider);
            $v$.$AddEvent(window, "resize", ScaleSlider);
            $v$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
	
	<script type="text/javascript">
        window.v_4_slider_init = function() {

            var v_4_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var v_4_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $vSlideshowRunner$,
                $Transitions: v_4_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $vArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $vThumbnailNavigator$,
                $SpacingX: 5,
                $SpacingY: 5
              }
            };

            var v_4_slider = new $vSlider$("v_4", v_4_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 390;

            function ScaleSlider() {
                var containerElement = v_4_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    v_4_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $v$.$AddEvent(window, "load", ScaleSlider);
            $v$.$AddEvent(window, "resize", ScaleSlider);
            $v$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
	
	<script type="text/javascript">
        window.v_5_slider_init = function() {

            var v_5_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var v_5_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $vSlideshowRunner$,
                $Transitions: v_5_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $vArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $vThumbnailNavigator$,
                $SpacingX: 5,
                $SpacingY: 5
              }
            };

            var v_5_slider = new $vSlider$("v_5", v_5_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 390;

            function ScaleSlider() {
                var containerElement = v_5_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    v_5_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $v$.$AddEvent(window, "load", ScaleSlider);
            $v$.$AddEvent(window, "resize", ScaleSlider);
            $v$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
	
	<script type="text/javascript">
        window.v_6_slider_init = function() {

            var v_6_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var v_6_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $vSlideshowRunner$,
                $Transitions: v_6_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $vArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $vThumbnailNavigator$,
                $SpacingX: 5,
                $SpacingY: 5
              }
            };

            var v_6_slider = new $vSlider$("v_6", v_6_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 390;

            function ScaleSlider() {
                var containerElement = v_6_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    v_6_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $v$.$AddEvent(window, "load", ScaleSlider);
            $v$.$AddEvent(window, "resize", ScaleSlider);
            $v$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
	
	<script type="text/javascript">
        window.v_7_slider_init = function() {

            var v_7_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var v_7_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $vSlideshowRunner$,
                $Transitions: v_7_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $vArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $vThumbnailNavigator$,
                $SpacingX: 5,
                $SpacingY: 5
              }
            };

            var v_7_slider = new $vSlider$("v_7", v_7_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 390;

            function ScaleSlider() {
                var containerElement = v_7_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    v_7_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $v$.$AddEvent(window, "load", ScaleSlider);
            $v$.$AddEvent(window, "resize", ScaleSlider);
            $v$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
	
	<script type="text/javascript">
        window.v_8_slider_init = function() {

            var v_8_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var v_8_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $vSlideshowRunner$,
                $Transitions: v_8_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $vArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $vThumbnailNavigator$,
                $SpacingX: 5,
                $SpacingY: 5
              }
            };

            var v_8_slider = new $vSlider$("v_8", v_8_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 390;

            function ScaleSlider() {
                var containerElement = v_8_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    v_8_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $v$.$AddEvent(window, "load", ScaleSlider);
            $v$.$AddEvent(window, "resize", ScaleSlider);
            $v$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
	<script type="text/javascript">
        window.v_9_slider_init = function() {

            var v_9_SlideshowTransitions = [
              {$Duration:800,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:800,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var v_9_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $vSlideshowRunner$,
                $Transitions: v_9_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $vArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $vThumbnailNavigator$,
                $SpacingX: 5,
                $SpacingY: 5
              }
            };

            var v_9_slider = new $vSlider$("v_9", v_9_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 390;

            function ScaleSlider() {
                var containerElement = v_9_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    v_9_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $v$.$AddEvent(window, "load", ScaleSlider);
            $v$.$AddEvent(window, "resize", ScaleSlider);
            $v$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
        <style>
.gallery {    }

.first {
    height:430px;
   padding:0px 30px;
}
.one {
    height: 350px;
   width: 400px;
   float: left;
}
.two {
    height: 350px;
   width: 400px;
   margin-left:45px;
    float:left;
    
}
.three {
    height: 350px;
   width: 400px;
   float:right;
   margin-top:1px;
}


h3{
margin-bottom: 0px; 
height:50px; 
text-align: center
}
</style>
<style>
        /*v slider loading skin spin css*/
        .vl-009-spin img {
            animation-name: vl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes vl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*v slider arrow skin 106 css*/
        .va106 {display:block;position:absolute;cursor:pointer;}
        .va106 .c {fill:#fff;opacity:.3;}
        .va106 .a {fill:none;stroke:#000;stroke-width:350;stroke-miterlimit:10;}
        .va106:hover .c {opacity:.5;}
        .va106:hover .a {opacity:.8;}
        .va106.va106dn .c {opacity:.2;}
        .va106.va106dn .a {opacity:1;}
        .va106.va106ds {opacity:.3;pointer-events:none;}

        /*v slider thumbnail skin 101 css*/
        .vt101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
        .vt101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
        .vt101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
        .vt101 .p:hover .cv, .vt101 .p.pdn .cv {border:none;border-color:transparent;}
        .vt101 .p:hover{padding:2px;}
        .vt101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
        .vt101 .p:hover.pdn{padding:0;}
        .vt101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
        .vt101 .pav .cv {border-color:#fff;opacity:.35;}
        .vt101 .pav .a, .vt101 .p:hover .a {visibility:visible;}
        .vt101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
        .vt101 .pav .t, .vt101 .p:hover .t{opacity:1;}
    </style>
	</head>
	<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">
	    
    
    

		<?php include("include/header.php");?>
        
			<!-- site content -->
			<div class="gallery">
    			<div class="first">
                    <div class="one">
                        <p><h3>Eradicating Hunger, Poverty and Malnutrition</h1></p>
                        <div id="v_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:390px;height:320px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="vl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:390px;height:320px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_1.jpg" />
                <img data-u="thumb" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_1.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_2.jpg" />
                <img data-u="thumb" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_2.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_3.jpg" />
                <img data-u="thumb" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_3.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_4.jpg" />
                <img data-u="thumb" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_4.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_5.jpg" />
                <img data-u="thumb" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_5.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_6.jpg" />
                <img data-u="thumb" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_6.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_7.jpg" />
                <img data-u="thumb" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_7.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_8.jpg" />
                <img data-u="thumb" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_8.jpg" />
            </div>
            
        </div><a data-scale="0" href="https://www.3planet.org" style="display:none;position:absolute;">web animation</a>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="vt101" style="position:absolute;left:0px;bottom:0px;width:390px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="va106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="va106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">v_1_slider_init();
    </script>
                    </div>
                    <div class="two">
                        <p><h3>Rural and Slum Area Development</h1></p>
                        <div id="v_2" style="position:relative;margin:0 auto;top:0px;left:0px;width:390px;height:320px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="vl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:390px;height:320px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_1.jpg" />
                <img data-u="thumb" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_1.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_2.jpg" />
                <img data-u="thumb" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_2.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_3.jpg" />
                <img data-u="thumb" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_3.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_4.jpg" />
                <img data-u="thumb" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_4.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_5.jpg" />
                <img data-u="thumb" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_5.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_6.jpg" />
                <img data-u="thumb" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_6.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_7.jpg" />
                <img data-u="thumb" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_7.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_8.jpg" />
                <img data-u="thumb" src="img/Rural_and_Slum_Area_Development/Third_Planet Foundation_Social Impact_8.jpg" />
            </div>
        </div><a data-scale="0" href="https://www.3planet.org" style="display:none;position:absolute;">web animation</a>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="vt101" style="position:absolute;left:0px;bottom:0px;width:390px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="va106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="va106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">v_2_slider_init();
    </script>
                    </div>
                    <div class="three">
                        <p><h3>Promoting Education</h1></p>
                        <div id="v_3" style="position:relative;margin:0 auto;top:0px;left:0px;width:390px;height:320px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="vl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:390px;height:320px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/Promoting_Education/Third Planet Foundation_Quality Education and Learning1_www.3planet.org.jpg" />
                <img data-u="thumb" src="img/Promoting_Education/Third Planet Foundation_Quality Education and Learning1_www.3planet.org.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Promoting_Education/Third Planet Foundation_Quality Education and Learning2_www.3planet.org.jpg" />
                <img data-u="thumb" src="img/Promoting_Education/Third Planet Foundation_Quality Education and Learning2_www.3planet.org.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Promoting_Education/Third Planet Foundation_Quality Education and Learning3_www.3planet.org.jpg" />
                <img data-u="thumb" src="img/Promoting_Education/Third Planet Foundation_Quality Education and Learning3_www.3planet.org.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Promoting_Education/Third Planet Foundation_Quality Education and Learning4_www.3planet.org.jpg" />
                <img data-u="thumb" src="img/Promoting_Education/Third Planet Foundation_Quality Education and Learning4_www.3planet.org.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Promoting_Education/Third Planet Foundation_Quality Education and Learning5_www.3planet.org.jpg" />
                <img data-u="thumb" src="img/Promoting_Education/Third Planet Foundation_Quality Education and Learning5_www.3planet.org.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Promoting_Education/Third Planet Foundation_Quality Education and Learning6_www.3planet.org.jpg" />
                <img data-u="thumb" src="img/Promoting_Education/Third Planet Foundation_Quality Education and Learning6_www.3planet.org.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Promoting_Education/Third Planet Foundation_Quality Education and Learning7_www.3planet.org.jpg" />
                <img data-u="thumb" src="img/Promoting_Education/Third Planet Foundation_Quality Education and Learning7_www.3planet.org.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Promoting_Education/Third Planet Foundation_Quality Education and Learning8_www.3planet.org.jpg" />
                <img data-u="thumb" src="img/Promoting_Education/Third Planet Foundation_Quality Education and Learning8_www.3planet.org.jpg" />
            </div>
            
        </div><a data-scale="0" href="https://www.3planet.org" style="display:none;position:absolute;">web animation</a>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="vt101" style="position:absolute;left:0px;bottom:0px;width:390px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="va106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="va106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">v_3_slider_init();
    </script>
                    </div>
                </div>
                <div class="first">
                    <div class="one">
                        <p><h3>Promoting Healthcare</h1></p>
                        <div id="v_4" style="position:relative;margin:0 auto;top:0px;left:0px;width:390px;height:320px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="vl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:390px;height:320px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare1_www.3planet.org.jpg" />
                <img data-u="thumb" src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare1_www.3planet.org.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare2_www.3planet.org.jpg" />
                <img data-u="thumb" src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare2_www.3planet.org.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare3_www.3planet.org.jpg" />
                <img data-u="thumb" src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare3_www.3planet.org.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare4_www.3planet.org.jpg" />
                <img data-u="thumb" src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare4_www.3planet.org.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare5_www.3planet.org.jpg" />
                <img data-u="thumb" src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare5_www.3planet.org.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare6_www.3planet.org.jpg" />
                <img data-u="thumb" src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare6_www.3planet.org.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare7_www.3planet.org.jpg" />
                <img data-u="thumb" src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare7_www.3planet.org.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare8_www.3planet.org.jpg" />
                <img data-u="thumb" src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare8_www.3planet.org.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare9_www.3planet.org.jpg" />
                <img data-u="thumb" src="img/Quality_Healthcare/Third Planet Foundation_Quality Healthcare9_www.3planet.org.jpg" />
            </div>
            
        </div><a data-scale="0" href="https://www.3planet.org" style="display:none;position:absolute;">web animation</a>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="vt101" style="position:absolute;left:0px;bottom:0px;width:390px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="va106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="va106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">v_4_slider_init();
    </script>
                    </div>
                    <div class="two">
                        <p><h3>Promoting Skill & Livelihood Development</h1></p>
                        <div id="v_5" style="position:relative;margin:0 auto;top:0px;left:0px;width:390px;height:320px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="vl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:390px;height:320px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/031.jpg" />
                <img data-u="thumb" src="img/031-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/032.jpg" />
                <img data-u="thumb" src="img/032-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/033.jpg" />
                <img data-u="thumb" src="img/033-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/034.jpg" />
                <img data-u="thumb" src="img/034-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/035.jpg" />
                <img data-u="thumb" src="img/035-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/036.jpg" />
                <img data-u="thumb" src="img/036-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/037.jpg" />
                <img data-u="thumb" src="img/037-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/038.jpg" />
                <img data-u="thumb" src="img/038-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/039.jpg" />
                <img data-u="thumb" src="img/039-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/040.jpg" />
                <img data-u="thumb" src="img/040-s190x90.jpg" />
            </div>
        </div><a data-scale="0" href="https://www.3planet.org" style="display:none;position:absolute;">web animation</a>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="vt101" style="position:absolute;left:0px;bottom:0px;width:390px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="va106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="va106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">v_5_slider_init();
    </script>
                    </div>
                    <div class="three">
                        <p><h3>Water Sanitation and Hygiene (WASH)</h1></p>
                        <div id="v_6" style="position:relative;margin:0 auto;top:0px;left:0px;width:390px;height:320px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="vl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:390px;height:320px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/031.jpg" />
                <img data-u="thumb" src="img/031-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/032.jpg" />
                <img data-u="thumb" src="img/032-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/033.jpg" />
                <img data-u="thumb" src="img/033-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/034.jpg" />
                <img data-u="thumb" src="img/034-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/035.jpg" />
                <img data-u="thumb" src="img/035-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/036.jpg" />
                <img data-u="thumb" src="img/036-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/037.jpg" />
                <img data-u="thumb" src="img/037-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/038.jpg" />
                <img data-u="thumb" src="img/038-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/039.jpg" />
                <img data-u="thumb" src="img/039-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/040.jpg" />
                <img data-u="thumb" src="img/040-s190x90.jpg" />
            </div>
        </div><a data-scale="0" href="https://www.3planet.org" style="display:none;position:absolute;">web animation</a>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="vt101" style="position:absolute;left:0px;bottom:0px;width:390px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="va106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="va106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">v_6_slider_init();
    </script>
                    </div>
                </div>
                <div class="first">
                    <div class="one">
                        <p><h3>Gender Equality and Empowering Women</h1></p>
                        <div id="v_7" style="position:relative;margin:0 auto;top:0px;left:0px;width:390px;height:320px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="vl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:390px;height:320px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment1.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment1.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment2.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment2.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment3.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment3.jpg" />
            </div>
            <div>
               <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment4.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment4.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment5.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment5.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment6.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment6.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment7.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment7.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment8.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment8.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment9.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment9.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment10.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment10.jpg" />
            </div>
			<div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment11.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment11.jpg" />
            </div>
			<div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment912.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment912.jpg" />
            </div>
			<div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment913.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment913.jpg" />
            </div>
			<div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment14.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment14.jpg" />
            </div>
			<div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment15.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment15.jpg" />
            </div>
			<div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment16.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment16.jpg" />
            </div>
			<div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment17.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment17.jpg" />
            </div>
			<div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment_Gender Equality1.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment_Gender Equality1.jpg" />
            </div>
			<div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment_Gender Equality2.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment_Gender Equality2.jpg" />
            </div>
			<div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment_Gender Equality3.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment_Gender Equality3.jpg" />
            </div>
			<div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment_Gender Equality4.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment_Gender Equality4.jpg" />
            </div>
			<div>
                <img data-u="image" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment_Gender Equality5.jpg" />
                <img data-u="thumb" src="img/Gender_Equality_and_Empowering_Women/Third Planet Foundation_Women Empowerment_Gender Equality5.jpg" />
            </div>
        </div><a data-scale="0" href="https://www.3planet.org" style="display:none;position:absolute;">web animation</a>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="vt101" style="position:absolute;left:0px;bottom:0px;width:390px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="va106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="va106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">v_7_slider_init();
    </script>
                    </div>
                    <div class="two">
                        <p><h3>Agriculture Development & Environment Sustainability</h1></p>
                        <div id="v_8" style="position:relative;margin:0 auto;top:0px;left:0px;width:390px;height:320px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="vl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:390px;height:320px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development1.jpg" />
                <img data-u="thumb" src="img/Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development1.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development2.jpg" />
                <img data-u="thumb" src="img/Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development2.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development3.jpg" />
                <img data-u="thumb" src="img/Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development3.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development4.jpg" />
                <img data-u="thumb" src="img/Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development4.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development5.jpg" />
                <img data-u="thumb" src="img/Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development5.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development6.jpg" />
                <img data-u="thumb" src="img/Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development6.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development7.jpg" />
                <img data-u="thumb" src="img/Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development7.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development8.jpg" />
                <img data-u="thumb" src="img/Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development8.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development9.jpg" />
                <img data-u="thumb" src="img/Agriculture_evelopment_and_Environment_Sustainability/Third Planet Foundation_Agriculture Development9.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/040.jpg" />
                <img data-u="thumb" src="img/040-s190x90.jpg" />
            </div>
        </div><a data-scale="0" href="https://www.3planet.org" style="display:none;position:absolute;">web animation</a>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="vt101" style="position:absolute;left:0px;bottom:0px;width:390px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="va106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="va106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">v_8_slider_init();
    </script>
                    </div>
                    <div class="three">
                        <p><h3>Disaster & COVID-19 Relief and Rehabilitation</h1></p>
                        <div id="v_9" style="position:relative;margin:0 auto;top:0px;left:0px;width:390px;height:320px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="vl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:390px;height:320px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/031.jpg" />
                <img data-u="thumb" src="img/031-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/032.jpg" />
                <img data-u="thumb" src="img/032-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/033.jpg" />
                <img data-u="thumb" src="img/033-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/034.jpg" />
                <img data-u="thumb" src="img/034-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/035.jpg" />
                <img data-u="thumb" src="img/035-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/036.jpg" />
                <img data-u="thumb" src="img/036-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/037.jpg" />
                <img data-u="thumb" src="img/037-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/038.jpg" />
                <img data-u="thumb" src="img/038-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/039.jpg" />
                <img data-u="thumb" src="img/039-s190x90.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/040.jpg" />
                <img data-u="thumb" src="img/040-s190x90.jpg" />
            </div>
        </div><a data-scale="0" href="https://www.3planet.org" style="display:none;position:absolute;">web animation</a>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="vt101" style="position:absolute;left:0px;bottom:0px;width:390px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
            <div data-u="slides">
                <div data-u="prototype" class="p" style="width:190px;height:90px;">
                    <div data-u="thumbnailtemplate" class="t"></div>
                    <svg viewbox="0 0 16000 16000" class="cv">
                        <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                        <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                        <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                    </svg>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="va106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
                <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="va106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
                <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
            </svg>
        </div>
    </div>
    <script type="text/javascript">v_9_slider_init();
    </script>
                    </div>
                </div>
			</div>
			<!-- site content ends -->
			<?php include("include/footer.php");?>