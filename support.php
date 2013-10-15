<?php include 'includes/header.php' ?>

<div class="jumbotron internal bordered">

  <div class="container">
    <div class="row">
      <div class="col-10">
        <h1>
          This paragraph should introduce the user to the different
          support options available, without giving much detail yet; 
          we’ll be more specific below.
        </h1>
      </div><!-- /end .col-10 -->
    </div><!-- /end .row -->

  </div><!-- /end .container -->

</div><!-- /end .jumbotron -->

<div class="sub-header">
  <div class="container">
    <div class="row">
      <div class="col-4">
        <h2 class="heading-a upcase">Mailing Lists</h2>
        <hr class="half pull-left">
        <p class="intro-a clearleft">
          Talk about what mailing lists are good for. Tell them 
          this is some sort of free support via email, and that 
          they could probably find other people’s problems useful 
          at some point.
        </p>
        <p>
          There are a number of Protégé mailing lists to which 
          you can subscribe. Please note that you must be subscribed 
          to a list before you can post messages.
        </p>
      </div><!-- /end .col-4 -->
      <div class="col-8">
        <div class="panel clearfix">
          <div class="row">

            <div class="col-8">
              <h3 class="heading-b">Protege Desktop Support</h3>
              <p>
                User and developer help for the 4.x series of
                the <a href="#">Protégé-OWL editor</a>.
              </p>
            </div><!-- /end .col-8 -->

            <div class="col-3 pull-right">
              <a href="#" class="btn btn-b btn-small btn-block upcase" id="showDesktopMailingList">Subscribe</a>
              <a href="#" class="upcase text-center link-d">Archive &raquo;</a>
            </div><!-- /end .col-4 -->
            <div id="desktopMailingList" class="modal fade mailingList" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
              <a href="#" data-dismiss="modal" class="close-modal-icon"></a>
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-6">
                        <h3 class="heading-b">Subscribe to the Protege Desktop Support mailing list</h3>
                        <form>
                          <label>Name</label>
                          <input type="text" value="Enter your name">
                          <label>Email</label>
                          <input type="email" value="Enter your email">
                          <input type="checkbox" name="subscribe" value="Subscribe"> Receive list mail batched in a daily digest
                          <a href="#" data-dismiss="modal" class="cancel-modal">Cancel</a>
                          <button type="submit" class="btn btn-b pull-right">Sign Up</button>
                        </form>
                      </div><!-- /end .col-6 -->
                      <div class="col-6 with-bg">
                        <ul class="list-b">
                          <li><a href="#">List Information</a> page to manage subscription (list name: p4-feedback)</li>
                          <li><a href="#">Archive</a> hosted by Stanford Information Technology Services</li>
                          <li><a href="#">Archive</a> hosted by Nabbble</li>
                        
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
              <h3 class="heading-b">WebProtege Support</h3>
              <p>
                User and developer help for all versions of <a href="#">WebProtégé</a>.
              </p>
            </div><!-- /end .col-8 -->

            <div class="col-3 pull-right">
              <a href="#" id="showWebMailingList" class="btn btn-b btn-small btn-block upcase">Subscribe</a>
              <a href="#" class="upcase text-center link-d">Archive &raquo;</a>
            </div><!-- /end .col-4 -->            
            <div id="webMailingList" class="modal fade mailingList" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
              <a href="#" data-dismiss="modal" class="close-modal-icon"></a>
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-6">
                        <h3 class="heading-b">Subscribe to the Protege Web Support mailing list</h3>
                        <form>
                          <label>Name</label>
                          <input type="text" value="Enter your name">
                          <label>Email</label>
                          <input type="email" value="Enter your email">
                          <input type="checkbox" name="subscribe" value="Subscribe"> Receive list mail batched in a daily digest
                          <a href="#" data-dismiss="modal" class="cancel-modal">Cancel</a>
                          <button type="submit" class="btn btn-b pull-right">Sign Up</button>
                        </form>
                      </div><!-- /end .col-6 -->
                      <div class="col-6 with-bg">
                        <ul class="list-b">
                          <li><a href="#">List Information</a> page to manage subscription (list name: p4-feedback)</li>
                          <li><a href="#">Archive</a> hosted by Stanford Information Technology Services</li>
                          <li><a href="#">Archive</a> hosted by Nabbble</li>
                        
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
              <h3 class="heading-b">Protege Announcements</h3>
              <p>
                Low traffic, announcement-only list for major releases,
                availability of short courses, and information regarding
                biennial Protégé Conferences.
              </p>
            </div><!-- /end .col-8 -->

            <div class="col-3 pull-right">
              <a href="#" id="showAnnouncementMailingList" class="btn btn-b btn-small btn-block upcase">Subscribe</a>
              <a href="#" class="upcase text-center link-d">Archive &raquo;</a>
            </div><!-- /end .col-4 -->
            <div id="announcementMailingList" class="modal fade mailingList" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
              <a href="#" data-dismiss="modal" class="close-modal-icon"></a>
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-6">
                        <h3 class="heading-b">Subscribe to the Protege Announcements mailing list</h3>
                        <form>
                          <label>Name</label>
                          <input type="text" value="Enter your name">
                          <label>Email</label>
                          <input type="email" value="Enter your email">
                          <input type="checkbox" name="subscribe" value="Subscribe"> Receive list mail batched in a daily digest
                          <a href="#" data-dismiss="modal" class="cancel-modal">Cancel</a>
                          <button type="submit" class="btn btn-b pull-right">Sign Up</button>
                        </form>
                      </div><!-- /end .col-6 -->
                      <div class="col-6 with-bg">
                        <ul class="list-b">
                          <li><a href="#">List Information</a> page to manage subscription (list name: p4-feedback)</li>
                          <li><a href="#">Archive</a> hosted by Stanford Information Technology Services</li>
                          <li><a href="#">Archive</a> hosted by Nabbble</li>
                        
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

<section class="documentation">
  <div class="container">
    <div class="row">
      <div class="col-4">
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
            <span class="course-raquo">&raquo;</span><a href="#" class="link-c">Protégé Short Course</a>
            <p>
              A comprehensive 4-day course on building ontologies, kownledge bases 
              and applications using Protege (covers both frame-based and OWL 
              ontologies).
            </p>
            <span class="course-raquo">&raquo;</span><a href="#" class="link-c">Protege Frequently Asked Questions</a>
            <p>
              Answers questions about the Protege Project and the Protege Frames Editor.
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
<hr class="ruler-a">

<section class="more-support">
  <div class="container"> 
    <hgroup class="text-center">
      <h1 class="upcase">More Support Options</h1>
      <h2 class="heading-c">Get assistance from the very same people that make Protege</h2>
    </hgroup>

    <div class="row">
      <div class="col-4">
        <h3 class="heading-c">Short Courses</h3>
        <span class="course-raquo">&raquo;</span><a href="#" class="link-c">Protégé Short Course</a>
        <p>
          A comprehensive 4-day course on building ontologies, knowledge 
          bases, and applications using Protégé (covers both frame-based 
          and OWL ontologies).
        </p>
        <span class="course-raquo">&raquo;</span><a href="#" class="link-c">Protégé-OWL Short Course</a>
        <p>
          An intensive 2-day introduction to developing OWL ontologies and 
          Semantic Web applications using Protégé-OWL.
        </p>
      </div><!-- /end .col-4 -->
      <div class="col-4 affiliate">
        <h3 class="heading-c">Protege Afilliate</h3>
        <span><em class="ital-a">(fee: $1,500/year)</em></span>
        <ul class="list-b">
          <li>40 hours consulting</li>
          <li>2 tickets to the annual Protégé Conf</li>
          <li>Protégé coffee mug and t-shirt</li>
          <li>2 tickets to the annual Protégé Conf</li>
          <li>Recognition on our application’s About Box and on our website’s About Page</li>
        </ul>
        <a href="#" class="btn btn-d btn-med upcase">Contact Support</a>
      </div><!-- /end .col-4 -->
      <div class="col-4 affiliate">
        <h3 class="heading-c">Consulting</h3>
        <span><em class="ital-a">(fee: $500/staff person/hour)</em></span>
        <ul class="list-b">
          <li>Ontology and knowledge base design and/or evaluation</li>
          <li>Plug-in design and/or development</li>
          <li>Using Protégé in applications</li>
          <li>Visualization and comprehension techniques for large knowledge-bases</li>
        </ul>
        <a href="#" class="btn btn-d btn-med upcase">Contact Support</a>
      </div><!-- /end .col-4 -->
    </div><!-- /end .row -->

  </div><!-- /end .container -->
</section>
<?php include 'includes/footer.php' ?>
