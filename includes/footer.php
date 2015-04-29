<section id="social">
  <div class="container">

    <div class="row disp-table">

      <div class="col-2 center-vertical">
        <span class="pictogram-social main-twitter-icon"></span>
      </div><!-- /end .col-2 -->

      <div class="col-9 tweet twitterfeed">
      </div><!-- /end .col-7.tweet.twitterfeed -->

      <ul class="social-icons col-3">
        <p class="text-center upcase">Follow us on</p>
        <div class="row">
          <li><a href="http://twitter.com/protegeproject" class="pictogram-social twitter-round-icon"></a></li>
          <li><a href="http://www.facebook.com/pages/Protege-Project/136205016405270" class="pictogram-social facebook-round-icon"></a></li>
          <li><a href="http://github.com/protegeproject" class="pictogram-social github-round-icon"></a></li>
        </div>
      </ul>

    </div><!-- /end .row -->
  </div><!-- /end .container -->
</section><!-- /end #social -->

    <footer id="footer">
    	
      <div class="container">
      
        <div class="row" id="menuRow">

            <div class="col-2">
              <nav>
                <h3 class="upcase">Protégé</h3>
                <ul>
                  <li class="<?php echo ($currentPage == 'home' ? 'active' : '');?>"><a href="/">Home</a></li>
                  <li class="<?php echo ($bodyClass == 'products' ? 'active' : '');?>"><a href="products.php">Products</a></li>
                  <li class="<?php echo ($bodyClass == 'community' ? 'active' : '');?>"><a href="community.php">Community</a></li>
                  <li class="<?php echo ($bodyClass == 'contact' ? 'active' : '');?>"><a href="contact.php">Contact</a></li>
                </ul>
              </nav>
            </div><!-- /end .col-2 -->

            <div class="col-2">
              <nav>
                <h3 class="upcase">Support</h3>
                <ul class="sub-footer-nav">
                  <li class="<?php echo ($bodyClass == 'support' ? 'active' : '');?>"><a href="support.php">Mailing Lists</a></li>
                  <li><a href="support.php#documentationSupport">Documentation</a></li>
                  <li><a href="support.php#more-support">Other Options</a></li>
                </ul>
              </nav>
            </div><!-- /end .col-2 -->

            <div class="col-2">
              <nav>
                <h3 class="upcase">About</h3>
                <ul class="sub-footer-nav">
                  <li class="<?php echo ($bodyClass == 'about' ? 'active' : '');?>"><a href="about.php">Our Team</a></li>
                  <li><a href="about.php#about-bmir">BMIR</a></li>
                  <li><a href="about.php#citing">Citing</a></li>
                </ul>
              </nav>
            </div><!-- /end .col-2 -->

            <div class="col-5 pull-right">
              <div class="wiki-callout">
                <h3 class="upcase">Look no further. The wiki is here.</h3>
                <p>Everything you didn’t know you needed to know about Protégé.</p>
                <div class="row">
                  <div class="col-5">
                    <a href="http://protegewiki.stanford.edu/wiki/Main_Page" class="btn btn-b btn-block small upcase external-link">Visit the Wiki</a>
                  </div><!-- /end .col-6 -->
                </div><!-- /end .row -->
              </div><!-- /end .wiki-callout -->
            </div><!-- /end .col-4.pull-right -->
          </div><!-- /end .row -->
        </div><!-- /end .container -->
        <hr>
        <div class="container">
          <div class="row copyright">

            <div class="col-8">
              <p>Copyright © 2015 Stanford Center for Biomedical Informatics Research</p>
              <p class="disclaimer">
                <small>
                  Protégé is a national resource for biomedical ontologies and knowledge 
                  bases supported by the <a href="http://www.nigms.nih.gov/" class="external-link">National Institute of General Medical Sciences</a>.
                </small>
              </p>
              <p class="disclaimer">
                <small>
                  Protégé is a core component of <a href="http://www.bioontology.org/" class="external-link"> The National Center for Biomedical Ontology</a>.
                </small>
              </p>
            </div><!-- /end .col-8 -->

            <div class="col-4 text-right">
              <a href="http://www.stanford.edu" class="external-link"><p class="stanford-logo">Stanford University</p></a>
            </div><!-- /end .col-4.text-right -->

          </div><! --/end .row -->
      
 			</div><!-- /end .container -->
      
    </footer><!-- /end #footer -->

    <script src="assets/js/vendor/jquery-1.10.1.min.js"></script>
    <script src="assets/js/vendor/bootstrap.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyATdsmP1hwLCM1-VQnDB-bmTWnsURpZLeU&sensor=true"></script>
    <script src="assets/js/vendor/infobox.js"></script>
    <script src="assets/js/vendor/resize.js"></script>
    <script src="twitter/jquery.tweet.js"></script>
    <script src="assets/js/vendor/colorbox-min.js"></script>
    <script src="assets/js/scripts.js"></script>    
    <script src="assets/js/protege.mailinglists-1.0.0.js"></script>
  </body>
</html>
