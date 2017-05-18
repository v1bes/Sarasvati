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
          <?php $events = $pages->find("template=programm, sort=-created, limit=1");
          foreach($events as $event) {
            echo "<h2>".$event->title."</h2>";
            echo "<h3>".strftime("%d. %B – %H:%M", $event->date)."</h3>";
            echo "<hr>";
            echo "<p>".$event->body_text."</p>";
          } ?>
        </div>
      </div>
    </section>


<!-- About -->
    <section class="about">
        <?php $abouts = $pages->find("template=about, sort=-created, limit=1");
        foreach($abouts as $about) {
          echo "<h1>".$about->title."</h1>";
          // team
          echo "<div class='outer-container'>";
          if (isset($about->single_image)) {
            echo "<img src='".$about->single_image->url."' alt='Gruppenfoto'>";
          } else {
            echo "<img src='http://placehold.it/1300x600' alt=''>";
          }
          echo "<p>".$about->body_text."</p>";
        } ?>
      </div>

      <!-- DJs -->

      <div class="outer-container">
      <?php $djs = $pages->find("template=djs, sort=-created, limit=5");
      foreach($djs as $dj) {
        echo "<h2>".$dj->title."</h2>";
        echo "<div class='dj-img'><img src='".$dj->single_image->url."' alt=''></div>";
        echo "<div class='dj-desc'>".$dj->body_text."</div>";
      } ?>
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

<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . "site/templates/php/gallery.php",array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true)));?>

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
<!--
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
-->
</body>
</html>
