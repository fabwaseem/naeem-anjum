<?php include_once("./layout/header.php");
$projects = require './data/projects.php';
 ?>
    <div class="loading-container">
      <div class="loading-screen" style="top: 100%">
        <div class="rounded-div-wrap top" style="height: 0vh">
          <div class="rounded-div"></div>
        </div>
        <div
          class="loading-words"
          style="transform: translate(0px, -50px); opacity: 0"
        >
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
          <h2>
            Home
            <div class="dot"></div>
          </h2>
          <h2 class="active">
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
            FABRIC™
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
        <div class="rounded-div-wrap bottom" style="height: 5vh">
          <div class="rounded-div"></div>
        </div>
      </div>
    </div>
    <main
      class="main"
      id="work"
      data-barba="container"
      data-barba-namespace="work"
    >
      <div class="mouse-pos-list-image no-select">
        <div class="mouse-pos-list-image-bounce overlay">
          <div class="float-image-wrap">
            <?php foreach ($projects as $project) : ?>
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
            <?php endforeach; ?>

          </div>
        </div>
      </div>
      <div class="mouse-pos-list-btn no-select"></div>
      <div class="mouse-pos-list-span no-select"><p>View</p></div>
      <?php include_once("./layout/mobile-nav.php"); ?>
      <div class="main-wrap" data-scroll-container>
        <header class="section default-header work-header" data-scroll-section>
          <?php include_once("./layout/navbar.php"); ?>
          <div class="container medium">
            <div class="row">
              <div class="flex-col once-in">
                <h1>
                  <span>Creating next level </span><span>digital products</span>
                </h1>
              </div>
            </div>
          </div>
        </header>
        <section class="section work-filters" data-scroll-section>
          <div class="container once-in">
            <div class="filter-row">
              <div class="toggle-row">
                <div class="btn btn-normal all-btn active">
                  <div
                    class="btn-click magnetic"
                    data-strength="25"
                    data-strength-text="15"
                  >
                    <div class="btn-fill"></div>
                    <span class="btn-text">
                      <span class="btn-text-inner change">All</span>
                    </span>
                  </div>
                </div>
                <!-- get all categories from projects -->
                <?php
                $categories = [];
                foreach ($projects as $project) {
                  $categories[] = $project['category'];
                }
                $categories = array_unique($categories);
                ?>
                <?php foreach ($categories as $category) : ?>
                  <div class="btn btn-normal category-btn" data-category="<?php echo $category; ?>">
                    <div
                      class="btn-click magnetic"
                      data-strength="25"
                      data-strength-text="15"
                    >
                      <div class="btn-fill"></div>
                      <span class="btn-text">
                        <span class="btn-text-inner change"><?php echo ucfirst($category); ?>
                          <div class="count-nr">
                            <?php
                            $count = 0;
                            foreach ($projects as $project) {
                              if ($project['category'] === $category) {
                                $count++;
                              }
                            }
                            echo $count;
                            ?>
                          </div>
                      </span>
                      </span>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
              <div class="grid-row">
                <div class="btn btn-normal btn-icon rows-btn active">
                  <div
                    class="btn-click magnetic"
                    data-strength="25"
                    data-strength-text="15"
                  >
                    <div class="btn-fill"></div>
                    <span class="btn-text">
                      <span class="btn-text-inner change"
                        ><svg
                          style="width: 20px"
                          width="20"
                          height="19"
                          viewBox="0 0 20 19"
                        >
                          <g fill="currentColor" fill-rule="evenodd">
                            <path
                              d="M0 6h20v1H0zM0 0h20v1H0zM0 12h20v1H0zM0 18h20v1H0z"
                            />
                          </g>
                        </svg>
                      </span>
                    </span>
                  </div>
                </div>
                <div class="btn btn-normal btn-icon columns-btn">
                  <div
                    class="btn-click magnetic"
                    data-strength="25"
                    data-strength-text="15"
                  >
                    <div class="btn-fill"></div>
                    <span class="btn-text">
                      <span class="btn-text-inner change"
                        ><svg
                          style="width: 20px"
                          width="20"
                          height="20"
                          viewBox="0 0 20 20"
                        >
                          <g fill="currentColor" fill-rule="nonzero">
                            <path
                              d="M8 0H0v8h8V0zM7 1v6H1V1h6zM8 12H0v8h8v-8zm-1 1v6H1v-6h6zM20 0h-8v8h8V0zm-1 1v6h-6V1h6zM20 12h-8v8h8v-8zm-1 1v6h-6v-6h6z"
                            />
                          </g>
                        </svg>
                      </span>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section
          class="section-wrap section-wrap-work once-in"
          data-scroll-section
        >
          <section
            class="section work-grid small-work-grid grid-fade grid-rows-part visible"
          >
            <div class="container">
              <div class="grid-sub-title">
                <div class="flex-col">
                  <h5>Client</h5>
                </div>
                <div class="flex-col">
                  <h5>Location</h5>
                </div>
                <div class="flex-col">
                  <h5>Services</h5>
                </div>
                <div class="flex-col">
                  <h5>Year</h5>
                </div>
              </div>
              <ul class="work-items mouse-pos-list-image-wrap all-active">
                <?php foreach ($projects as $project) : ?>
                  <li class="<?php echo $project['category']; ?> interaction visible">
                    <div class="stripe animate"></div>
                    <a href="./work/<?php echo $project['slug']; ?>" class="row">
                      <div class="flex-col">
                        <h4><span><?php echo $project['name']; ?></span></h4>
                      </div>
                      <div class="flex-col animate">
                        <p><?php echo $project['location']; ?></p>
                      </div>
                      <div class="flex-col animate">
                        <p><?php echo $project['services']; ?></p>
                      </div>
                      <div class="flex-col animate">
                        <p><?php echo $project['year']; ?></p>
                      </div>
                    </a>
                  </li>
                <?php endforeach; ?>

                <div class="stripe last animate"></div>
              </ul>
            </div>
          </section>
          <section class="section work-tiles grid-fade grid-columns-part">
            <div class="container">
              <ul>
                 <?php foreach ($projects as $project) : ?>
                <li class="<?php echo $project['category']; ?> interaction visible">
                  <div class="single-tile-wrap">
                    <a href="./work/<?php echo $project['slug']; ?>
                    " class="row">
                      <div class="flex-col">
                        <div class="tile-image">
                          <div
                            class="overlay overlay-color"
                            style="background-color: #f1f1f1"
                          ></div>
                          <div
                            class="overlay overlay-image lazy"
                            style="
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
              <?php endforeach; ?>
              </ul>
            </div>
          </section>
        </section>
        <!-- <section
          class="section center-grid-btn center-grid-btn-archive"
          data-scroll-section
        >
          <div class="container">
            <div class="grid-after-btn">
              <div class="btn btn-normal btn-dark">
                <a
                  href="./archive"
                  class="btn-click magnetic"
                  data-strength="25"
                  data-strength-text="15"
                >
                  <div class="btn-fill"></div>
                  <span class="btn-text">
                    <span class="btn-text-inner change"
                      >Archive
                      <div class="count-nr">54</div></span
                    >
                  </span>
                </a>
              </div>
            </div>
          </div>
        </section> -->
<?php include_once("./layout/footer.php"); ?>