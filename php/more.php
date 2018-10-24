<section id="more">

<?php include 'uni.php'?>

<a href="#top"><i class="fa fa-angle-double-up fa-4x" id="scroll" aria-hidden="true"></i></a>

<section id="navigation">
  <div class="container-fluid">
    <div class="row navigation">
      <div class="col-md-4 text-center animation-element">
        <a href="#about-tab"><span class="a-pink"><?php echo $about ?></span></a>
      </div>
      <div class="col-md-4 text-center animation-element">
        <a href="#portfolio-tab" id="nav-middle"><span class="a-white"><?php echo $portfolio ?></span></a>
      </div>
      <div class="col-md-4 text-center animation-element">
        <a href="#contact-tab"><span class="a-yellow"><?php echo $contact ?></span></a>
      </div>
    </div>
  </div>
</section>


<!-- SECTION: ACCORDION -->
<section id="accordion-section">
  <div class="container-fluid accordion-main">



<!-- ABOUT -->
<section id="about">
      <button class="accordion animation-element" id="about-tab"><?php echo $about ?></button>
      <div class="panel">
          <p class="text-center about-main animation-element"><?php echo $aboutText ?></p>
          <br>
          <div class="row">
              <div class="col-md-6 text-center animation-element">
                  <h4 class="pink"><?php echo $experiences ?></h4>

                  <ul class="uncenter">
                      <div class="col-md-6 animation-element">
                        <li>AirBNB</li>
                        <li>Amarillo Límon</li>
                        <li>Bruce Price</li>
                            <li>Dikeou Collection</li>
                        <li>MCA Denver</li>
                        <li>Robischon Gallery</li>
                        <li>Rocky Mountain College <br>of Art + Design</li>
                        <li>Vans</li>
                        <li>With Food + Love</li>
                          <br>
                      </div>
                      <div class="col-md-6 animation-element">
                          <li>Camping World of Denver</li>
                          <li>Steve Casey's <br>Four Seasons</li>
                          <br>
                      </div>
                  </ul>
              </div>
              <div class="col-md-6 text-center animation-element">
                  <h4 class="yellow"><?php echo $skills ?></h4>
                  <ul class="uncenter">
                      <div class="col-md-6 animation-element">
                          <li>HTML5</li>
                          <li>CSS3</li>
                          <li>Javascript</li>
                          <li>JQuery</li>
                          <li>MySQL</li>
                          <li>PHP</li>
                          <li>Wordpress</li>
                          <br>
                      </div>
                      <div class="col-md-6 animation-element">
                          <li>After Effects</li>
                          <li>InDesign</li>
                          <li>Illustrator</li>
                          <li>Photoshop</li>
                          <li>Premier</li>
                          <br>
                      </div>
                  </ul>
              </div>
          </div>
      </div>
    </section>

<!-- PORTFOLIO -->
    <section id="portfolio-tab">
      <button class="accordion animation-element"><?php echo $portfolio ?></button>
      <div class="panel">
        <div class="row text-center portfolio-div">

          <?php
//foreach(array_reverse($photoPath, true) as $each => $value) {
foreach ($photoPath as $each => $value) {
    // echo $First[$each]. " " . $Second2[$each];
    echo "<div class='col-md-4 cards animation-element'>";
    echo "<div class='portfolio-item' data-toggle='modal' data-target='#" . $photoPath[$each] . "'>";
    echo "<img class='img-responsive img-main' src='assets/img/portfolio/" . $photoPath[$each] . ".jpg'/>";
    echo "<h4 class='titles'><span>" . $title[$each] . "</span></h4>";
    echo "<div class='portfolio-text'>";
    echo "<p><span>" . $media[$each] . "</span></p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

    // MODAL
    echo "<div class='modal fade' id='" . $photoPath[$each] . "' tabindex='-1' role='dialog'>";
    echo "<div class='modal-dialog' role='document'>";
    echo "<div class='modal-content'>";
    echo "<div class='modal-header'>";
    echo "<button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span></button>";
    echo "</div>";
    echo "<div class='modal-body'>";
    echo "<div class='container-fluid'>";
    echo "<div class='hidden-modal animation-element'>";
    echo "<h4 class='modal-title' id='myModalLabel'>" . $title[$each] . "</h4>";
    echo "<span>" . $media[$each] . "</span>";
    echo "</div>";
    echo "<br><br><br>";
    echo "<div class='row'>";
    echo "<br>";
    echo "<div class='col-md-12 modal-text'>";
    echo "<div class='modal-line hidden-modal animation-element'>";
    echo "<p>" . $mText[$each] . "</p>";
    echo "</div>";

    $directory = "../assets/img/modals/" . $value . "/";
    $files = preg_grep('/^([^.])/', scandir($directory));

    $url = "assets/img/modals/" . $value . "/";

    $i = 0;
    $last = count($files);

    foreach ($files as $files2 => $value2) {
        //  echo $directory.$value2."<br>";
        if ($i == $last - 1) {
            echo "<div class='animation-element'>";
            echo "<img class='img-responsive img-modal img-shadow' src='" . $url . $value2 . "' />";
            echo "</div>";
        } else {
            echo "<div class='animation-element'>";
            echo "<img class='img-responsive img-modal img-shadow' src='" . $url . $value2 . "' />";
            echo "</div>";
            echo "<hr>";
        }
        $i++;
    }

    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class='modal-footer'>";
    echo "<button type='button' class='btn btn-default close-btn' data-dismiss='modal'>Close</button>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

}

?>






          </div>
      </div>
    </section>

<!-- CONTACT -->
<section id="contact-tab">
      <button class="accordion animation-element"><?php echo $contact ?></button>
      <div class="panel">
        <div class="text-center">
          <div class="row contact">
            <div class="col-md-4 animation-element">
              <h4><?php echo $email; ?></h4>
                <span class="contact-pink"><a href="mailto:hello@ethanethan.com">hello@ethanethan.com</a></span>
            </div>
            <div class="col-md-4 animation-element">
              <h4>Blog</h4>
                <span class="contact-black"><a href="http://mynameisethan.com">MyNameIsEthan.com</a></span>
            </div>
            <div class="col-md-4 animation-element">
              <h4 class="phone"><?php echo $phone; ?></h4>
                <span class="contact-yellow"><a href="tel:+17204299921">US +1 720.429.9921</a></span>
            </div>
          </div>
          <br><br>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 social animation-element">
              <!-- <span><a href="#">Facebook</a></span>
              <span><a href="#">Instagram</a></span>
              <span><a href="#">Twitter</a></span> -->

              <a href="http://facebook.com/ethanbradfordbarrett" target="_blank"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a>
              <a href="http://instagram.com/ethanbbarrett/" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
              <a href="http://twitter.com/ethanbbarrett" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
              <a href="https://www.linkedin.com/in/ethan-barrett-535a18109/" target="_blank"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a>
            </div>
            <div class="col-md-4"></div>
          </div>
          </div>
      </div>
      </section>

</div>
</section>


<!-- SECTION: FOOTER -->
<section id="footer-section">
  <div class="container-fluid black-background-footer text-center">
      <span>EthanEthan.com | &copy; <?php echo date('Y'); ?></span>
  </div>
</section>
</section><!-- more -->

<script src="js/smoothscroll.js"></script>
<script src="js/animate.js"></script>
