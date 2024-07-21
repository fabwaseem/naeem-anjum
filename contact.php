

<?php include_once("./layout/header.php");
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
          <h2 class="active">
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
      id="contact"
      data-barba="container"
      data-barba-namespace="contact"
    >
       <?php include_once("./layout/mobile-nav.php"); ?>
      <div class="main-wrap" data-scroll-container>
        <header
          class="section default-header contact-header theme-dark"
          data-scroll-section
        >
       <?php include_once("./layout/navbar.php"); ?>
          <div class="container medium">
            <div class="row once-in">
              <div class="flex-col">
                <h1>
                  <span
                    ><div class="profile-picture"></div>
                    Let's start a </span
                  ><span>project together</span>
                </h1>
              </div>
              <div class="flex-col">
                <div class="profile-picture"></div>
                <div class="arrow">
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
                          <line x1="12" y1="0" x2="0" y2="12" id="Path"></line>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
              </div>
            </div>
            <div class="row once-in">
              <div class="flex-col">
                <form
                  class="form"
                  method="post"
                  enctype="multipart/form-data"
                  novalidate
                >
                  <div class="website-field">
                    <label class="label" for="tel">Phone Number</label>
                    <input
                      class="field"
                      type="text"
                      id="form-tel"
                      name="tel"
                      tabindex="-1"
                    />
                  </div>
                  <div class="form-col">
                    <h5>01</h5>
                    <label class="label" for="name">What's your name?</label>
                    <input
                      class="field"
                      type="text"
                      id="form-name"
                      name="name"
                      value=""
                      required
                      placeholder="John Doe *"
                    />
                  </div>
                  <div class="form-col">
                    <h5>02</h5>
                    <label class="label" for="email">What's your email?</label>
                    <input
                      class="field"
                      type="email"
                      id="form-email"
                      name="email"
                      value=""
                      required
                      placeholder="john@doe.com *"
                    />
                  </div>
                  <div class="form-col">
                    <h5>03</h5>
                    <label class="label" for="email"
                      >What's the name of your organization?</label
                    >
                    <input
                      class="field"
                      type="text"
                      id="form-company"
                      name="company"
                      value=""
                      required
                      placeholder="John & Doe ®"
                    />
                  </div>
                  <div class="form-col">
                    <h5>04</h5>
                    <label class="label" for="email"
                      >What services are you looking for?</label
                    >
                    <input
                      class="field"
                      type="text"
                      id="form-service"
                      name="service"
                      value=""
                      required
                      placeholder="Web Design, Web Development ..."
                    />
                  </div>
                  <div class="form-col">
                    <h5>05</h5>
                    <label class="label" for="message">Your message</label>
                    <textarea
                      class="field"
                      type="text"
                      id="form-message"
                      name="message"
                      rows="8"
                      required
                      placeholder="Hello Dennis, can you help me with ... *"
                    ></textarea>
                  </div>
                  <div class="btn-contact-send">
                    <div
                      class="btn btn-round"
                      data-scroll
                      data-scroll-speed="2"
                      data-scroll-offset="-50%, 0%"
                    >
                      <div
                        class="btn-click magnetic"
                        data-strength="100"
                        data-strength-text="50"
                      >
                        <div class="btn-fill"></div>
                        <span class="btn-text">
                          <input
                            type="submit"
                            name="submit"
                            value="Send it!"
                            class="form-btn"
                          />
                        </span>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div class="flex-col">
                <h5>Contact Details</h5>
                <ul class="links-wrap">
                  <li class="btn btn-link btn-link-external">
                    <a
                      href="mailto:info@dennissnellenberg.com"
                      class="btn-click magnetic"
                      data-strength="20"
                      data-strength-text="10"
                    >
                      <span class="btn-text">
                        <span class="btn-text-inner"
                          >info@dennissnellenberg.com</span
                        >
                      </span>
                    </a>
                  </li>
                  <li class="btn btn-link btn-link-external">
                    <a
                      href="tel:+923060690872"
                      class="btn-click magnetic"
                      data-strength="20"
                      data-strength-text="10"
                    >
                      <span class="btn-text">
                        <span class="btn-text-inner">+92 306 0690872</span>
                      </span>
                    </a>
                  </li>
                </ul>
                <h5>Business Details</h5>
                <ul class="links-wrap">
                  <li><p>Naeem Anjum B.V.</p></li>
                  <li><p>CoC: 92411711</p></li>
                  <li><p>VAT: NL866034080B01</p></li>
                  <li><p>Location: The Netherlands</p></li>
                </ul>
                <h5>Socials</h5>
                <ul>
                  <li class="btn btn-link btn-link-external">
                    <a
                      href="https://www.behance.net/thisnaeem"
                      target="_blank"
                      class="btn-click magnetic"
                      data-strength="20"
                      data-strength-text="10"
                    >
                      <span class="btn-text">
                        <span class="btn-text-inner">Behance</span>
                      </span>
                    </a>
                  </li>
                  <li class="btn btn-link btn-link-external">
                    <a
                      href="https://www.dribble.com/thisnaeem"
                      target="_blank"
                      class="btn-click magnetic"
                      data-strength="20"
                      data-strength-text="10"
                    >
                      <span class="btn-text">
                        <span class="btn-text-inner">Dribble</span>
                      </span>
                    </a>
                  </li>
                  <li class="btn btn-link btn-link-external">
                    <a
                      href="https://www.instagram.com/thisnaeem/"
                      target="_blank"
                      class="btn-click magnetic"
                      data-strength="20"
                      data-strength-text="10"
                    >
                      <span class="btn-text">
                        <span class="btn-text-inner">Instagram</span>
                      </span>
                    </a>
                  </li>
                  <li class="btn btn-link btn-link-external">
                    <a
                      href="https://twitter.com/thisnaeem"
                      target="_blank"
                      class="btn-click magnetic"
                      data-strength="20"
                      data-strength-text="10"
                    >
                      <span class="btn-text">
                        <span class="btn-text-inner">Twitter</span>
                      </span>
                    </a>
                  </li>
                  <li class="btn btn-link btn-link-external">
                    <a
                      href="https://www.linkedin.com/in/thisnaeem/"
                      target="_blank"
                      class="btn-click magnetic"
                      data-strength="20"
                      data-strength-text="10"
                    >
                      <span class="btn-text">
                        <span class="btn-text-inner">LinkedIn</span>
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </header>
        <footer
          class="section footer footer-contact theme-dark"
          data-scroll-section
        >
           <div class="container no-padding">
              <div class="row bottom-footer">
                <div class="flex-col">
                  <div class="credits">
                    <h5>Version</h5>
                    <p>2024 © Edition</p>
                  </div>
                  <div class="time">
                    <h5>Local time</h5>
                    <p><span id="timeSpan">09:41 PM CET</span></p>
                  </div>
                </div>
                <div class="flex-col">
                  <div class="socials">
                    <h5>Socials</h5>
                    <ul>
                      <li class="btn btn-link btn-link-external">
                        <a
                          href="https://www.behance.net/thisnaeem"
                          target="_blank"
                          class="btn-click magnetic"
                          data-strength="20"
                          data-strength-text="10"
                        >
                          <span class="btn-text">
                            <span class="btn-text-inner">Behance</span>
                          </span>
                        </a>
                      </li>
                      <li class="btn btn-link btn-link-external">
                        <a
                          href="https://www.dribble.com/thisnaeem"
                          target="_blank"
                          class="btn-click magnetic"
                          data-strength="20"
                          data-strength-text="10"
                        >
                          <span class="btn-text">
                            <span class="btn-text-inner">Dribble</span>
                          </span>
                        </a>
                      </li>
                      <li class="btn btn-link btn-link-external">
                        <a
                          href="https://www.instagram.com/thisnaeem/"
                          target="_blank"
                          class="btn-click magnetic"
                          data-strength="20"
                          data-strength-text="10"
                        >
                          <span class="btn-text">
                            <span class="btn-text-inner">Instagram</span>
                          </span>
                        </a>
                      </li>
                      <li class="btn btn-link btn-link-external">
                        <a
                          href="https://twitter.com/thisnaeem"
                          target="_blank"
                          class="btn-click magnetic"
                          data-strength="20"
                          data-strength-text="10"
                        >
                          <span class="btn-text">
                            <span class="btn-text-inner">Twitter</span>
                          </span>
                        </a>
                      </li>
                      <li class="btn btn-link btn-link-external">
                        <a
                          href="https://www.linkedin.com/in/thisnaeem/"
                          target="_blank"
                          class="btn-click magnetic"
                          data-strength="20"
                          data-strength-text="10"
                        >
                          <span class="btn-text">
                            <span class="btn-text-inner">LinkedIn</span>
                          </span>
                        </a>
                      </li>
                    </ul>
                    <div class="stripe"></div>
                  </div>
                </div>
              </div>
            </div>
        </footer>
      </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@barba/core"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.6.1/dist/lazyload.min.js"></script>

    <script src="./assets/js/locomotive-scroll.min.js"></script>
    <script defer src="./assets/js/index-new.js"></script>
  </body>
</html>
