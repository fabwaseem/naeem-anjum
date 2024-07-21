<?php include_once("./layout/header.php");
$projects = require './data/projects.php';
 ?>

    <div class="loading-container">
      <div class="loading-screen">
        <div class="rounded-div-wrap top">
          <div class="rounded-div"></div>
        </div>
        <div class="loading-words">
          <h2 class="home-active home-active-first">
            Hello
            <div class="dot"></div>
          </h2>
          <h2 class="home-active">
            Bonjour
            <div class="dot"></div>
          </h2>
          <h2 class="home-active">
            स्वागत हे
            <div class="dot"></div>
          </h2>
          <h2 class="home-active">
            Ciao
            <div class="dot"></div>
          </h2>
          <h2 class="home-active">
            Olá
            <div class="dot"></div>
          </h2>
          <h2 class="home-active jap">
            おい
            <div class="dot"></div>
          </h2>
          <h2 class="home-active">
            Hallå
            <div class="dot"></div>
          </h2>
          <h2 class="home-active">
            Guten tag
            <div class="dot"></div>
          </h2>
          <h2 class="home-active-last">
            Hallo
            <div class="dot"></div>
          </h2>
          <h2 class="active">
            Home
            <div class="dot"></div>
          </h2>
          <h2>
            Work
            <div class="dot"></div>
          </h2>
          <h2>
            TWICE
            <div class="dot"></div>
          </h2>
          <h2>
            The Damai
            <div class="dot"></div>
          </h2>
          <h2>
            FABRIC&trade;
            <div class="dot"></div>
          </h2>
          <h2>
            Aanstekelijk
            <div class="dot"></div>
          </h2>
          <h2>
            Base Create
            <div class="dot"></div>
          </h2>
          <h2>
            AVVR
            <div class="dot"></div>
          </h2>
          <h2>
            GraphicHunters
            <div class="dot"></div>
          </h2>
          <h2>
            Future Goals
            <div class="dot"></div>
          </h2>
          <h2>
            Atypikal
            <div class="dot"></div>
          </h2>
          <h2>
            One:Nil
            <div class="dot"></div>
          </h2>
          <h2>
            Andy Hardy
            <div class="dot"></div>
          </h2>
          <h2>
            About
            <div class="dot"></div>
          </h2>
          <h2>
            Contact
            <div class="dot"></div>
          </h2>
          <h2>
            Success
            <div class="dot"></div>
          </h2>
          <h2>
            Archive
            <div class="dot"></div>
          </h2>
          <h2>
            Error
            <div class="dot"></div>
          </h2>
          <h2>
            Styleguide
            <div class="dot"></div>
          </h2>
        </div>
        <div class="rounded-div-wrap bottom">
          <div class="rounded-div"></div>
        </div>
      </div>
    </div>

    <main
      class="main"
      id="home"
      data-barba="container"
      data-barba-namespace="home"
    >
      <div class="mouse-pos-list-image no-select">
        <div class="mouse-pos-list-image-bounce overlay">
          <div class="float-image-wrap">
            <?php foreach ($projects as $project) : ?>
              <!-- if project.featured true -->
              <?php if ($project['featured']) : ?>

              <li
              class="mouse-pos-list-image-inner development interaction visible"
            >
              <div
                class="overlay overlay-image lazy"
                style="
                  background-color: #f1f1f1;
                  background-position: center center;
                  background-repeat: no-repeat;
                  background-size: cover;
                "
                data-bg="./assets/img/projects/<?php echo $project['image']; ?>"
              ></div>
            </li>
            <?php endif; ?>
            <?php endforeach; ?>

          </div>
        </div>
      </div>
      <div class="mouse-pos-list-btn no-select"></div>
      <div class="mouse-pos-list-span no-select"><p>View</p></div>
      <?php include_once("./layout/mobile-nav.php"); ?>
      <div class="main-wrap" data-scroll-container>
        <header class="section home-header theme-dark" data-scroll-section>
          <div
            class="overlay personal-image no-select once-in"
            data-scroll
            data-scroll-speed="-3"
            data-scroll-position="top"
          >
            <img src="./assets/img/DSC07033.jpg" />
          </div>
        <?php include_once("./layout/navbar.php"); ?>
          <div class="container once-in once-in-secondary">
            <div class="row">
              <div class="flex-col">
                <div class="header-above-h4" data-scroll data-scroll-speed="1">
                  <div class="arrow big">
                    <svg
                      width="14px"
                      height="14px"
                      viewBox="0 0 14 14"
                      version="1.1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                    >
                      <title>arrow-up-right</title>
                      <g
                        id="Page-1"
                        stroke="none"
                        stroke-width="1"
                        fill="none"
                        fill-rule="evenodd"
                      >
                        <g
                          id="Artboard"
                          transform="translate(-1019.000000, -279.000000)"
                          stroke="#FFFFFF"
                          stroke-width="1.5"
                        >
                          <g
                            id="arrow-up-right"
                            transform="translate(1026.000000, 286.000000) rotate(90.000000) translate(-1026.000000, -286.000000) translate(1020.000000, 280.000000)"
                          >
                            <polyline
                              id="Path"
                              points="2.76923077 0 12 0 12 9.23076923"
                            ></polyline>
                            <line
                              x1="12"
                              y1="0"
                              x2="0"
                              y2="12"
                              id="Path"
                            ></line>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <h4><span>Product</span> Designer & Solopreneur</h4>
              </div>
            </div>
          </div>
          <div class="big-name">
            <div
              class="name-h1"
              data-scroll
              data-scroll-direction="horizontal"
              data-scroll-speed="4"
              data-scroll-position="top"
            >
              <div class="name-wrap">
                <h1 class="no-select once-in once-in-secondary">
                  Figma<span class="spacer">,</span>
                </h1>
                <h1 class="no-select once-in once-in-secondary">
                  Sketch<span class="spacer">,</span>
                </h1>
                <h1 class="no-select once-in once-in-secondary">
                  Adobe Xd<span class="spacer">,</span>
                </h1>
                <h1 class="no-select once-in once-in-secondary">
                  Webflow<span class="spacer">,</span>
                </h1>
                <h1 class="no-select once-in once-in-secondary">
                  Framer<span class="spacer">,</span>
                </h1>
              </div>
            </div>
          </div>
          <div class="white-block"></div>
        </header>
        <section class="section home-intro" data-scroll-section>
          <div class="container medium">
            <div class="row">
              <div class="flex-col">
                <h4 class="span-lines animate">
                  Helping brands to stand out in the digital era. Together we
                  will set the new status quo. No nonsense, always on the
                  cutting edge.
                </h4>
              </div>
              <div class="flex-col">
                <div class="text-wrap fade-in animate">
                  <p>
                    The combination of my passion for design, code & interaction
                    positions me in a unique place in the web design world.
                  </p>
                </div>
                <div class="btn btn-round" data-scroll data-scroll-speed="2">
                  <a
                    href="./about"
                    class="btn-click magnetic"
                    data-strength="100"
                    data-strength-text="50"
                  >
                    <div class="btn-fill"></div>
                    <span class="btn-text">
                      <span class="btn-text-inner">About me</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section work-grid large-work-grid" data-scroll-section>
          <div class="container">
            <div class="grid-sub-title">
              <div class="flex-col">
                <h5>Recent work</h5>
              </div>
              <!-- <div class="flex-col">
            <h5>Services</h5>
         </div> -->
            </div>
            <ul class="work-items mouse-pos-list-image-wrap">
              <?php foreach ($projects as $project) : ?>
              <!-- if project.featured true -->
              <?php if ($project['featured']) : ?>
                <li class="<?php echo $project['category']; ?> interaction visible">
                <div class="stripe animate"></div>
                <a href="./work/<?php echo $project['slug']; ?>"
                 class="row">
                  <div class="flex-col">
                    <h4><span>
                      <?php echo $project['name']; ?>
                    </span></h4>
                  </div>
                  <div class="flex-col animate">
                    <p>
                      <?php echo $project['services']; ?>
                    </p>
                  </div>
                </a>
              </li>
              <?php endif; ?>
              <?php endforeach; ?>

              <div class="stripe last animate"></div>
            </ul>
          </div>
        </section>
        <section class="section work-tiles work-tiles-home" data-scroll-section>
          <div class="container">
            <ul>
              <?php foreach ($projects as $project) : ?>
              <!-- if project.featured true -->
              <?php if ($project['featured']) : ?>
<li class="<?php echo $project['category']; ?> interaction visible">
                <div class="single-tile-wrap">
                  <a href="./work/twice" class="row">
                    <div class="flex-col">
                      <div class="tile-image">
                        <div
                          class="overlay overlay-image lazy"
                          style="
                            background-color: #f1f1f1;
                            background-position: center center;
                            background-repeat: no-repeat;
                            background-size: cover;
                          "
                          data-bg="./assets/img/projects/<?php echo $project['image']; ?>"
                        ></div>
                      </div>
                    </div>
                    <div class="flex-col">
                      <h4><span>
                        <?php echo $project['name']; ?>
                      </span></h4>
                      <div class="stripe"></div>
                    </div>
                    <div class="flex-col">
                      <p>
                        <?php echo $project['services']; ?>
                      </p>
                    </div>
                    <div class="flex-col">
                      <p>
                        <?php echo $project['year']; ?>
                      </p>
                    </div>
                  </a>
                </div>
              </li>
              <?php endif; ?>
                <?php endforeach; ?>

            </ul>
          </div>
        </section>
        <section
          class="section center-grid-btn center-grid-btn-home"
          data-scroll-section
        >
          <div class="container">
            <div class="grid-after-btn">
              <div class="btn btn-normal">
                <a
                  href="./work"
                  class="btn-click magnetic"
                  data-strength="25"
                  data-strength-text="15"
                >
                  <div class="btn-fill"></div>
                  <span class="btn-text">
                    <span class="btn-text-inner change"
                      >More work
                      <div class="count-nr">
                        <?php echo count($projects); ?>
                      </div></span
                    >
                  </span>
                </a>
              </div>
            </div>
          </div>
        </section>
        <section class="section horizontal-items" data-scroll-section>
          <div class="container">
            <div
              class="row row-1"
              data-scroll
              data-scroll-speed="-1"
              data-scroll-direction="horizontal"
            >
              <div class="flex-col">
                <div class="horizontal-single-item">
                  <div
                    class="overlay lazy"
                    style="
                      background-position: center center;
                      background-repeat: no-repeat;
                      background-size: cover;
                    "
                    data-bg="./assets/img/home-item-3.jpg"
                  ></div>
                </div>
              </div>
              <div class="flex-col">
                <div class="horizontal-single-item">
                  <div class="overlay playpauze">
                    <video
                      class="overlay lazy"
                      src="./assets/img/home-item-2.mp4"
                      loop
                      muted
                      playsinline
                    ></video>
                  </div>
                </div>
              </div>
              <div class="flex-col">
                <div class="horizontal-single-item">
                  <div
                    class="overlay lazy"
                    style="
                      background-position: center center;
                      background-repeat: no-repeat;
                      background-size: cover;
                    "
                    data-bg="./assets/img/home-item-3.jpg"
                  ></div>
                </div>
              </div>
              <div class="flex-col">
                <div class="horizontal-single-item">
                  <div class="overlay playpauze">
                    <video
                      class="overlay lazy"
                      src="./assets/img/home-item-2.mp4"
                      loop
                      muted
                      playsinline
                    ></video>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="row row-2"
              data-scroll
              data-scroll-speed="1"
              data-scroll-direction="horizontal"
            >
              <div class="flex-col">
                <div class="horizontal-single-item">
                  <div class="overlay playpauze">
                    <video
                      class="overlay lazy"
                      src="./assets/img/home-item-2.mp4"
                      loop
                      muted
                      playsinline
                    ></video>
                  </div>
                </div>
              </div>
              <div class="flex-col">
                <div class="horizontal-single-item">
                  <div
                    class="overlay lazy"
                    style="
                      background-position: center center;
                      background-repeat: no-repeat;
                      background-size: cover;
                    "
                    data-bg="./assets/img/home-item-3.jpg"
                  ></div>
                </div>
              </div>
              <div class="flex-col">
                <div class="horizontal-single-item">
                  <div class="overlay playpauze">
                    <video
                      class="overlay lazy"
                      src="./assets/img/home-item-2.mp4"
                      loop
                      muted
                      playsinline
                    ></video>
                  </div>
                </div>
              </div>
              <div class="flex-col">
                <div class="horizontal-single-item">
                  <div
                    class="overlay lazy"
                    style="
                      background-position: center center;
                      background-repeat: no-repeat;
                      background-size: cover;
                    "
                    data-bg="./assets/img/home-item-3.jpg"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </section>


<?php include_once("./layout/footer.php"); ?>