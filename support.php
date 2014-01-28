<?php include 'includes/header.php' ?>

<div class="jumbotron-container">
  <div class="jumbotron internal bordered">
    <div class="container">
      <div class="row">
        <div class="col-10">
          <h1>
            Do you have questions about Prot&eacute;g&eacute;?  We're here 
            to help!  We offer both free and paid support through a variety 
            of sources.  Scroll down to learn more.
          </h1>
        </div><!-- /end .col-10 -->
      </div><!-- /end .row -->
    </div><!-- /end .container -->
  </div><!-- /end .jumbotron -->
</div><!-- /end .jumbotron-container -->

<div class="sub-header main-content" id="mailing-lists">
  <div class="container offset-heading" id="mailingListSupport">
    <div class="row">
      <div class="col-4 offset-right-padding">
        <h2 class="heading-a upcase">Mailing Lists</h2>
        <hr class="half pull-left">
        <p class="intro-a clearleft">
          Get free support for all of your Prot&eacute;g&eacute; questions via 
          our mailing lists.  The lists are actively monitored by
          Stanford's Prot&eacute;g&eacute; team, as well as many experienced 
          Prot&eacute;g&eacute; users from the community at large.
        </p>
        <p>
          Click the Subscribe button next to the list you wish to join.  
          Please note that you must be subscribed 
          to a list before you can post messages.
        </p>
      </div><!-- /end .col-4 -->
      <div class="col-8">
        <div class="panel bring-to-front clearfix">
          <div class="row">

            <div class="col-8">
              <h3 class="heading-b">Protégé User Support</h3>
              <p>
                User support for all versions of <a href="products.php#web-protege">WebProt&eacute;g&eacute;</a> and 
                <a href="products.php#desktop-protege">Prot&eacute;g&eacute; Desktop</a>.
              </p>
            </div><!-- /end .col-8 -->

            <div class="col-3 pull-right">
              <a href="#" class="btn btn-b btn-small btn-block upcase" id="showDesktopMailingList">Subscribe</a>
              <a href="http://protege-project.136.n4.nabble.com/" class="upcase text-center link-d external-link">Archive &raquo;</a>
            </div><!-- /end .col-4 -->

          </div><!-- /end .row -->
        </div><!-- /end .panel -->
            <div id="desktopMailingList" class="modal fade mailingList" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
              <a href="#" data-dismiss="modal" class="close-modal-icon"></a>
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-6">
                        <h3 class="heading-b">Subscribe to the Protégé User Support mailing list</h3>
                        <form method="POST" action="https://mailman.stanford.edu/mailman/subscribe/protege-user">
                          <label>Name</label>
                          <input type="text" name="fullname" value="Enter your name">
                          <label>Email</label>
                          <input type="email" name="email" value="Enter your email">
                          <p>Receive list mail batched in a daily digest?</p>
                          <input type="radio" name="digest" value="1"> <span>Yes</span>
                          <input type="radio" name="digest" value="0"> <span>No</span>
                          <a href="#" data-dismiss="modal" class="cancel-modal">Cancel</a>
                          <button type="submit" class="btn btn-b pull-right">Sign Up</button>
                        </form>
                      </div><!-- /end .col-6 -->
                      <div class="col-6 with-bg">
                        <ul class="list-b">
                          <li><a href="http://protege-project.136.n4.nabble.com/" class="external-link">Archive</a> hosted by Nabbble</li>
                          <li><a href="https://mailman.stanford.edu/pipermail/protege-user/" class="external-link">Archive</a> hosted by Stanford IT Services</li>
                        </ul>
                      </div><!-- /end .col-6 -->
                    </div><!-- /end .row -->
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        <div class="panel clearfix">
          <div class="row">

            <div class="col-8">
              <h3 class="heading-b">Protégé Developer Support</h3>
              <p>
                Developer support for all versions of <a href="products.php#web-protege">WebProt&eacute;g&eacute;</a> and 
                <a href="products.php#desktop-protege">Prot&eacute;g&eacute; Desktop</a>.
              </p>
            </div><!-- /end .col-8 -->

            <div class="col-3 pull-right">
              <a href="#" id="showWebMailingList" class="btn btn-b btn-small btn-block upcase">Subscribe</a>
              <a href="http://protege-project.136.n4.nabble.com/" class="upcase text-center link-d external-link">Archive &raquo;</a>
            </div><!-- /end .col-4 -->            
            <div id="webMailingList" class="modal fade mailingList" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
              <a href="#" data-dismiss="modal" class="close-modal-icon"></a>
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-6">
                        <h3 class="heading-b">Subscribe to the Protégé Developer Support mailing list</h3>
                        <form method="POST" action="https://mailman.stanford.edu/mailman/subscribe/protege-dev">
                          <label>Name</label>
                          <input type="text" name="fullname" value="Enter your name">
                          <label>Email</label>
                          <input type="email" name="email" value="Enter your email">
                          <p>Receive list mail batched in a daily digest?</p>
                          <input type="radio" name="digest" value="1"> <span>Yes</span>
                          <input type="radio" name="digest" value="0"> <span>No</span>
                          <a href="#" data-dismiss="modal" class="cancel-modal">Cancel</a>
                          <button type="submit" name="email-button" class="btn btn-b pull-right">Sign Up</button>
                        </form>
                      </div><!-- /end .col-6 -->
                      <div class="col-6 with-bg">
                        <ul class="list-b">
                          <li><a class="external-link" href="http://protege-project.136.n4.nabble.com/">Archive</a> hosted by Nabbble</li>
                          <li><a class="external-link" href="http://mailman.stanford.edu/pipermail/protege-dev/">Archive</a> hosted by Stanford IT Services</li>
                        </ul>
                      </div><!-- /end .col-6 -->
                    </div><!-- /end .row -->
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

          </div><!-- /end .row -->
        </div><!-- /end .panel -->
        <div class="panel clearfix">
          <div class="row">

            <div class="col-8">
              <h3 class="heading-b">Protégé Announcements</h3>
              <p>
                Low traffic, announcement-only list for new releases,
                availability of short courses, and information regarding
                Protégé Conferences.
              </p>
            </div><!-- /end .col-8 -->

            <div class="col-3 pull-right">
              <a href="#" id="showAnnouncementMailingList" class="btn btn-b btn-small btn-block upcase">Subscribe</a>
              <a href="http://protege-project.136.n4.nabble.com/Protege-Announce-f4659442.html" class="upcase text-center link-d external-link">Archive &raquo;</a>
            </div><!-- /end .col-4 -->
            <div id="announcementMailingList" class="modal fade mailingList" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
              <a href="#" data-dismiss="modal" class="close-modal-icon"></a>
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-6">
                        <h3 class="heading-b">Subscribe to the Protégé Announcements mailing list</h3>
                        <form method="POST" action="https://mailman.stanford.edu/mailman/subscribe/protege-announce">
                          <label>Name</label>
                          <input type="text" name="fullname" value="Enter your name">
                          <label>Email</label>
                          <input type="email" name="email" value="Enter your email">
                          <p>Receive list mail batched in a daily digest?</p>
                          <input type="radio" name="digest" value="1"> <span>Yes</span>
                          <input type="radio" name="digest" value="0"> <span>No</span>
                          <a href="#" data-dismiss="modal" class="cancel-modal">Cancel</a>
                          <button type="submit" class="btn btn-b pull-right">Sign Up</button>
                        </form>
                      </div><!-- /end .col-6 -->
                      <div class="col-6 with-bg">
                        <ul class="list-b">
                          <li><a href="http://protege-project.136.n4.nabble.com/Protege-Announce-f4659442.html" class="external-link">Archive</a> hosted by Nabbble</li>
                          <li><a href="https://mailman.stanford.edu/pipermail/protege-announce/" class="external-link">Archive</a> hosted by Stanford IT Services</li>
                        </ul>
                      </div><!-- /end .col-6 -->
                    </div><!-- /end .row -->
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div><!-- /end .row -->
        </div><!-- /end .panel -->
      </div><!-- /end .col-8 -->
    </div><!-- /end .row -->
  </div><!-- /end .container -->
</div><!-- /end .sub-header -->

<section class="main-content">
  <div class="container offset-heading" id="documentationSupport">
    <div class="row">
      <div class="col-4 version-info">
        <h2 class="heading-b upcase">Documentation</h2>
        <hr class="ruler-a half pull-left">
        <p class="intro-b clearleft">
          Praesent commodo cursus magna, vel scelerisque nisl 
          consectetur et. Cras justo odio, dapibus ac facilisis in, 
          egestas eget quam.
        </p>
        <p>
          Vestibulum id ligula porta felis euismod semper. Nulla vitae 
          elit libero, a pharetra augue. Fusce dapibus, tellus ac cursus 
          commodo, tortor mauris condimentum nibh, ut fermentum massa justo 
          sit amet risus.
        </p>
      </div><!-- /end .col-4 -->
      <div class="col-8">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#users" data-toggle="tab" class="upcase">Users</a></li>
          <li><a href="#developers" data-toggle="tab" class="upcase">Developers</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="users">
            <p class="intro-b">Look here first!</p>
            <span class="offset-raquo">&raquo;</span><a href="short-courses.php" class="link-c">Protégé Short Course</a>
            <p>
              A comprehensive 4-day course on building ontologies, kownledge bases 
              and applications using Protégé (covers both frame-based and OWL 
              ontologies).
            </p>
            <span class="offset-raquo">&raquo;</span><a href="http://protege.stanford.edu/doc/faq.html" class="link-c">Protégé Frequently Asked Questions</a>
            <p>
              Answers questions about the Protégé Project and the Protégé Frames Editor.
            </p>
          </div><!-- /end #users -->
          <div class="tab-pane" id="developers">
            <p>Developer info</p>
          </div><!-- /end #developers -->
        </div><!-- /end .tab-content -->
      </div><!-- /end .col-8 -->
    </div><!-- /end .row -->
  </div><!-- /end .container -->
</section><!-- /end .documentation -->
  
</div><!-- /end .container -->
<hr class="ruler-a no-margin">

<section class="more-support main-content">
  <div class="container"> 
    <hgroup class="text-center">
      <h1 class="heading-a upcase no-margin" id="more-support">More Support Options</h1>
      <h2 class="heading-c">Get assistance from the very same people that make Protégé</h2>
    </hgroup>

    <div class="row">
      <div class="col-4 short-course-info">
        <h3 class="heading-c">Short Courses</h3>
        <span class="offset-raquo">&raquo;</span><a href="short-courses.php" class="link-c">Protégé Short Course</a>
        <p>
          A 3-day intensive training in hands-on use of the Prot&eacute;g&eacute; toolset, ontology development, and the Web Ontology Language (OWL).
        </p>
      </div><!-- /end .col-4 -->
      <div class="col-4 affiliate">
        <h3 class="heading-c">Protégé Afilliate</h3>
        <span><em class="ital-a">(fee: $1,500/year)</em></span>
        <ul class="list-b">
          <li>40 hours consulting</li>
          <li>2 tickets to the Protégé Conference</li>
          <li>Protégé coffee mug and t-shirt</li>
          <li>Recognition in the Prot&eacute;g&eacute; Desktop application's About Box</li>
        </ul>
        <a href="mailto:protege-affiliates@lists.stanford.edu" class="btn btn-d btn-med upcase">Contact Support</a>
      </div><!-- /end .col-4 -->
      <div class="col-4 affiliate last">
        <h3 class="heading-c">Consulting</h3>
        <span><em class="ital-a">(fee: $500/staff person/hour)</em></span>
        <ul class="list-b">
          <li>Ontology and knowledge base design and/or evaluation</li>
          <li>Plug-in design and/or development</li>
          <li>Using Protégé in applications</li>
          <li>Visualization and comprehension techniques for large knowledge-bases</li>
        </ul>
        <a href="mailto:protege-affiliates@lists.stanford.edu" class="btn btn-d btn-med upcase">Contact Support</a>
      </div><!-- /end .col-4 -->
    </div><!-- /end .row -->

  </div><!-- /end .container -->
</section>
<?php include 'includes/footer.php' ?>
