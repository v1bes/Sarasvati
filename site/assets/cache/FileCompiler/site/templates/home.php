<?php
 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/basic-page.php",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?>
<body class="demo loading">
  <canvas id="webgl"></canvas>
  <main>
    <div class="header">
      <div class="logo">
        <!-- Generator: Adobe Illustrator 21.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)-->
        <svg id="Ebene_1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 0 426.3 419.7" style="enable-background:new 0 0 426.3 419.7;" xml:space="preserve">
        </svg>
      </div>
    </div>
    <a name="programm"></a>

<!-- Programm -->
    <section class="programm">
      <div class="prog-containter">
        <h1>AktuelL</h1>
        <div class="frame-wrap">
          <div class="frame"><img src="<?php echo $config->urls->templates?>img/design/frame2.png"><img src="<?php echo $config->urls->templates?>img/design/frame-off2.png" class="off"><img src="<?php echo $config->urls->templates?>img/content/test.png" alt="" class="main"><img src="<?php echo $config->urls->templates?>img/content/test.png" alt="" class="main2"></div>
        </div>
        <div class="info">
          <h2>Silvester</h2>
          <h3>01.01.2016 - 3 Uhr</h3>
          <hr>
          <?php echo "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>";?>
        </div>
      </div>
    </section>


<!-- About -->
    <section class="about">
      <h1>AbouT</h1>

      <!-- Team -->
      <div class="outer-container">
        <img src="http://placehold.it/1300x600" alt="">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>

      <!-- DJs -->
      <div class="outer-container">
        <div class="dj-img"><img src="http://placecage.com/300/300" alt=""></div>
        <div class="dj-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
      </div>
      <div class="outer-container">
        <div class="dj-desc-shift">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
        <div class="dj-img"><img src="http://placecage.com/300/300" alt=""></div>
      </div>
      <div class="outer-container">
        <div class="dj-img"><img src="http://placecage.com/300/300" alt=""></div>
        <div class="dj-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
      </div>
      <div class="outer-container">
        <div class="dj-desc-shift">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
        <div class="dj-img"><img src="http://placecage.com/300/300" alt=""></div>
      </div>

      <!-- Name list -->
      <h1>Andere DJs</h1>
      <div class="outer-container">
        <p class="dj-name"><a href="">Peter Pan</a></p>
        <p class="dj-name"><a href="">Pipi Langstrump</a></p>
        <p class="dj-name"><a href="">Helge Schneider</a></p>
        <p class="dj-name"><a href="">Udo Jürgens</a></p>
      </div>
      <div class="outer-container">
        <p class="dj-name"><a href="">Schnewittchen</a></p>
        <p class="dj-name"><a href="">Deine Mama</a></p>
        <p class="dj-name"><a href="">Angela Merkel</a></p>
        <p class="dj-name"><a href="">Peter Pan</a></p>
      </div>
      <div class="outer-container">
        <p class="dj-name"><a href="">Marcel Pahnke</a></p>
        <p class="dj-name"><a href="">Riccardo Lorenzo</a></p>
        <p class="dj-name"><a href="">Peter Lindenberg</a></p>
        <p class="dj-name"><a href="">Gabor Gabor</a></p>
      </div>
    </section>

<!-- Gallerie -->
<!-- Photoswipe -->
    <!-- Core JS file -->
        <script src="<?php echo $config->urls->templates?>js/photoswipe/photoswipe.min.js"></script>
    <!-- UI JS file -->
        <script src="<?php echo $config->urls->templates?>js/photoswipe/ui/photoswipe-ui-default.js"></script>
  <!-- photoswipe dom -->
      <!-- Root element of PhotoSwipe. Must have class pswp. -->
    <button id="psbtn" class="center">TEST GALLERY</button>
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
      <!-- Background of PhotoSwipe.
             It's a separate element as animating opacity is faster than rgba(). -->

        <div class="pswp__bg"></div>
      <!-- Slides wrapper with overflow:hidden. -->
        <div class="pswp__scroll-wrap">
          <!-- Container that holds slides.
                PhotoSwipe keeps only 3 of them in the DOM to save memory.
                Don't modify these 3 pswp__item elements, data is added later on. -->

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
          <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                  <!--  Controls are self-explanatory. Order can be changed. -->
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="Share"></button>
                    <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                    <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                    <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
                  <!-- element will get class pswp__preloader--active when preloader is running -->
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                          <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                </button>
                <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                </button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
  <!--End of photoswipe dom -->
<script>
    var openPhotoSwipe = function() {
        var pswpElement = document.querySelectorAll('.pswp')[0];

        // build items array
        var items = [
            {
                src: '<?php echo $config->urls->templates?>img/gallery/watt1.jpg',
                w: 525,
                h: 366
            },
            {
                src: '<?php echo $config->urls->templates?>img/gallery/watt2.jpg',
                w: 1252,
                h: 1252
            },
            {
                src: '<?php echo $config->urls->templates?>img/gallery/watt3.jpg',
                w: 703,
                h: 466
            },
            {
                src: '<?php echo $config->urls->templates?>img/gallery/watt4.jpg',
                w: 800,
                h: 800
            },
            {
                src: '<?php echo $config->urls->templates?>img/gallery/watt5.jpg',
                w: 524,
                h: 366
            },
            {
                src: '<?php echo $config->urls->templates?>img/gallery/watt6.jpg',
                w: 480,
                h: 360
            }
        ];

        // define options (if needed)
        var options = {
                 // history & focus options are disabled on CodePen
            history: false,
            focus: false,

            showAnimationDuration: 0,
            hideAnimationDuration: 0

        };

        var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
        gallery.init();
    };

    // openPhotoSwipe();
    document.getElementById('psbtn').onclick = openPhotoSwipe;
</script>
    <section class="gallery">
      <div>
        <!-- TODO: PHP Loop für images aus processwire field -->
        <img src="<?php echo $config->urls->templates?>img/gallery/watt1.jpg">
        <img src="<?php echo $config->urls->templates?>img/gallery/watt2.jpg">
        <img src="<?php echo $config->urls->templates?>img/gallery/watt3.jpg">
        <img src="<?php echo $config->urls->templates?>img/gallery/watt4.jpg">
        <img src="<?php echo $config->urls->templates?>img/gallery/watt5.jpg">
        <img src="<?php echo $config->urls->templates?>img/gallery/watt6.jpg">
      </div>
    </section>
  <!-- End of gallery-->

    <!-- Newsletter -->
    <section class="newsletter">
      <h1 class="no-mb">NewsletteR</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <form class="news" action="" method="get">
        <input type="text" placeholder="pen@ration.com">
        <!-- <input type="submit" value="Click mich "> -->
      </form>
    </section>
  </main>

<!-- Footer -->
  <footer>
    <div class="social">
      <i class="fa fa-facebook-official" aria-hidden="true"></i>
      <i class="fa fa-soundcloud" aria-hidden="true"></i>
      <i class="fa fa-instagram" aria-hidden="true"></i>
    </div>
  </footer>

  <script src="<?php echo $config->urls->templates?>js/regl.min.js"></script>
  <script src="<?php echo $config->urls->templates?>js/min/function-min.js"></script>
  <script id="fragmentShader" type="x-shader/x-fragment">
    #define TWO_PI 6.2831853072
    #define PI 3.14159265359
    precision highp float;
    uniform float globaltime;
    uniform vec2 resolution;
    uniform float aspect;
    uniform float scroll;
    uniform float velocity;
    const float timescale = 0.15;
    const float displace = 0.03;
    const float gridSize = 20.0;
    const int layers = 3;
    const float detail = 2.0;
    const float wave = 1.0;
    vec2 rotate(vec2 v, float angle) {
    float c = cos(angle);
    float s = sin(angle);
    return v * mat2(c, -s, s, c);
    }
    vec3 coordToHex(vec2 coord, float scale, float angle) {
    vec2 c = rotate(coord, angle);
    float q = (1.0 / 3.0 * sqrt(3.0) * c.x - 1.0 / 3.0 * c.y) * scale;
    float r = 2.0 / 3.0 * c.y * scale;
    return vec3(q, r, -q - r);
    }
    vec3 hexToCell(vec3 hex, float m) {
    return fract(hex / m) * 2.0 - 1.0;
    }
    float absMax(vec3 v) {
    return max(max(abs(v.x), abs(v.y)), abs(v.z));
    }
    float nsin(float value) {
    return sin(value * TWO_PI) * 0.5 + 0.5;
    }
    float hexToFloat(vec3 hex, float amt) {
    return mix(absMax(hex), 1.0 - length(hex) / sqrt(3.0), amt);
    }
    float calc(vec3 hex, float time, float len) {
    float value = 0.0;
    for (int i = 0; i < layers; i++) {
    vec3 cell = hexToCell(hex, 1.0 + float(i));
    value += nsin(
    hexToFloat(
    cell,
    nsin(len * wave + time + float(i) / float(layers))
    ) * detail + nsin(time * 0.5)
    );
    }
    return value / float(layers);
    }
    void main(void) {
    vec2 tx = (gl_FragCoord.xy / resolution.xy - 0.5) * vec2(aspect, 1.0) * 2.0;
    float time = globaltime * timescale - scroll;
    float invScroll = 1.0 - scroll;
    float rgb[3];
    float len = 1.0 - length(tx) * 0.3;
    float zoom = nsin(time * 0.1) + len * velocity * 3.0;
    float angle = TWO_PI * nsin(time * 0.05) + PI * len * scroll;
    vec3 hex = coordToHex(tx, gridSize * zoom, angle);
    for (int i = 0; i < 3; i++) {
    float time2 = time + float(i) * displace * invScroll;
    rgb[i] = pow(calc(hex, time2, len), 3.0) * (0.2 + 0.8 * sin(PI * len * 0.5));
    }
    gl_FragColor = vec4(
    rgb[0] * (1.0 - scroll * 0.2),
    rgb[1] * invScroll,
    (rgb[2] + 0.2) * invScroll,
    1.0
    );
    }
  </script>
  <script src="<?php echo $config->urls->templates?>js/demo1.js"></script>

</body>
</html>
