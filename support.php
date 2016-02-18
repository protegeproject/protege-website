<?php include 'includes/header.php' ?>

<div class="jumbotron-container">
  <div class="jumbotron internal bordered">
    <div class="container">
      <div class="row">
        <div class="col-10">
          <h1>
            Do you have questions about Prot&eacute;g&eacute;?  We're here 
            to help!  We offer both community-based and paid support through 
            a variety of sources.
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
              <h3 class="heading-b">Prot&eacute;g&eacute; User Support</h3>
              <p>
                User support for all versions of <a href="products.php#web-protege">WebProt&eacute;g&eacute;</a> and 
                <a href="products.php#desktop-protege">Prot&eacute;g&eacute; Desktop</a>.
              </p>
            </div><!-- /end .col-8 -->
            <div class="col-3 pull-right">
              <a href="#" class="btn btn-b btn-small btn-block upcase" id="showProtegeUserMailingList">Subscribe</a>
              <a href="http://protege-project.136.n4.nabble.com/" class="upcase text-center link-d external-link">Archive &raquo;</a>
            </div><!-- /end .col-4 -->
          </div><!-- /end .row -->
        </div><!-- /end .panel -->

        <div id="protegeUserMailingList" class="modal fade mailingList" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
          <a href="#" data-dismiss="modal" class="close-modal-icon close-modal" data-related_form="protegeUserSubscribe"></a>
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <div class="row">
                  <div class="col-6">
                    <h3 class="heading-b">Subscribe to the Prot&eacute;g&eacute; User Support mailing list</h3>
                    <form id="protegeUserSubscribe" method="" action="">
                      <label>Name</label>
                      <input type="text" name="fullname" placeholder="Enter your name">
                      <label>Email</label>
                      <input type="email" name="email" placeholder="Enter your email">
                      <p>Receive list mail batched in a daily digest?</p>
                      <input type="radio" name="digest" value="1"> <span>Yes</span>
                      <input type="radio" name="digest" value="0"> <span>No</span>
                      <a href="#" data-dismiss="modal" class="cancel-modal close-modal" data-related_form="protegeUserSubscribe">Cancel</a>
                      <button id="signUpProtegeUserList" type="submit" class="btn btn-b pull-right close-modal" data-related_form="protegeUserSubscribe">Sign Up</button>
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
              <h3 class="heading-b">Prot&eacute;g&eacute; Developer Support</h3>
              <p>
                Developer support for all versions of <a href="products.php#web-protege">WebProt&eacute;g&eacute;</a> and 
                <a href="products.php#desktop-protege">Prot&eacute;g&eacute; Desktop</a>.
              </p>
            </div><!-- /end .col-8 -->

            <div class="col-3 pull-right">
              <a href="#" id="showProtegeDevMailingList" class="btn btn-b btn-small btn-block upcase">Subscribe</a>
              <a href="http://protege-project.136.n4.nabble.com/" class="upcase text-center link-d external-link">Archive &raquo;</a>
            </div><!-- /end .col-4 -->            
            <div id="protegeDevMailingList" class="modal fade mailingList" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
              <a href="#" data-dismiss="modal" class="close-modal-icon close-modal" data-related_form="protegeDevSubscribe"></a>
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-6">
                        <h3 class="heading-b">Subscribe to the Prot&eacute;g&eacute; Developer Support mailing list</h3>
                        <form id="protegeDevSubscribe" method="" action="">
                          <label>Name</label>
                          <input type="text" name="fullname" placeholder="Enter your name">
                          <label>Email</label>
                          <input type="email" name="email" placeholder="Enter your email">
                          <p>Receive list mail batched in a daily digest?</p>
                          <input type="radio" name="digest" value="1"> <span>Yes</span>
                          <input type="radio" name="digest" value="0"> <span>No</span>
                          <a href="#" data-dismiss="modal" class="cancel-modal close-modal" data-related_form="protegeDevSubscribe">Cancel</a>
                          <button id="signUpProtegeDevList" type="submit" name="email-button" class="btn btn-b pull-right close-modal" data-related_form="protegeDevSubscribe">Sign Up</button>
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
              <h3 class="heading-b">Prot&eacute;g&eacute; Announcements</h3>
              <p>
                Low traffic, announcement-only list for new releases,
                availability of short courses, and information regarding
                Prot&eacute;g&eacute; Conferences.
              </p>
            </div><!-- /end .col-8 -->

            <div class="col-3 pull-right">
              <a href="#" id="showAnnouncementMailingList" class="btn btn-b btn-small btn-block upcase">Subscribe</a>
              <a href="http://protege-project.136.n4.nabble.com/Protege-Announce-f4659442.html" class="upcase text-center link-d external-link">Archive &raquo;</a>
            </div><!-- /end .col-4 -->
            <div id="announcementMailingList" class="modal fade mailingList" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
              <a href="#" data-dismiss="modal" class="close-modal-icon close-modal" data-related_form="protegeAnnounceSubscribe"></a>
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-6">
                        <h3 class="heading-b">Subscribe to the Prot&eacute;g&eacute; Announcements mailing list</h3>
                        <form id="protegeAnnounceSubscribe" method="" action="">
                          <label>Name</label>
                          <input type="text" name="fullname" placeholder="Enter your name">
                          <label>Email</label>
                          <input type="email" name="email" placeholder="Enter your email">
                          <p>Receive list mail batched in a daily digest?</p>
                          <input type="radio" name="digest" value="1"> <span>Yes</span>
                          <input type="radio" name="digest" value="0"> <span>No</span>
                          <a href="#" data-dismiss="modal" class="cancel-modal close-modal" data-related_form="protegeAnnounceSubscribe">Cancel</a>
                          <button id="signUpProtegeAnnounceList" type="submit" class="btn btn-b pull-right close-modal" data-related_form="protegeAnnounceSubscribe">Sign Up</button>
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
          Learn about the Prot&eacute;g&eacute; toolset and developing ontologies using 
          our product documentation.  All documentation is freely available 
          on the <a href="http://protegewiki.stanford.edu/wiki/Main_Page" target="_blank">Prot&eacute;g&eacute; Wiki.</a>
        </p>
        <p>
          Please note that applying for a user account on the wiki is not 
          necessary for viewing documentation.  Obtaining a user account is 
          only required in the event you wish to contribute content.
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
            <span class="offset-raquo">&raquo;</span><a href="http://protegewiki.stanford.edu/wiki/ProtegeProject_FAQ" class="link-c" target="_blank">Prot&eacute;g&eacute; Frequently Asked Questions</a>
            <p>
              Find answers to commonly asked questions about the Prot&eacute;g&eacute; Project.
            </p>
            <span class="offset-raquo">&raquo;</span><a href="http://protegewiki.stanford.edu/wiki/WebProtege" class="link-c" target="_blank">WebProt&eacute;g&eacute; Overview</a>
            <p>
              Get an overview of WebProt&eacute;g&eacute; features and the latest project activity.
            </p>
            <span class="offset-raquo">&raquo;</span><a href="http://protegewiki.stanford.edu/wiki/WebProtegeUsersGuide" class="link-c" target="_blank">WebProt&eacute;g&eacute; User's Guide</a>
            <p>
              A short user's guide with screencasts and screenshots describing the main user interface elements in WebProt&eacute;g&eacute;.
            </p>
            <span class="offset-raquo">&raquo;</span><a href="http://protegewiki.stanford.edu/wiki/Protege4UserDocs" class="link-c" target="_blank">Prot&eacute;g&eacute; Desktop Overview</a>
            <p>
              Top-level entry point for all documentation pertaining to the latest version of Prot&eacute;g&eacute; Desktop, including an overview of editor features, links to tutorials, release notes, etc.
            </p>
            <span class="offset-raquo">&raquo;</span><a href="http://protegewiki.stanford.edu/wiki/Ontology101" class="link-c" target="_blank">Ontology Development 101</a>
            <p>
              A guide to creating your first ontology.
            </p>
            <span class="offset-raquo">&raquo;</span><a href="http://130.88.198.11/tutorials/protegeowltutorial/" class="link-c" target="_blank">Prot&eacute;g&eacute; OWL Tutorial</a>
            <p>
              A substantial guide to the Web Ontology Language (OWL) and ontology engineering.
            </p>
          </div><!-- /end #users -->
          <div class="tab-pane" id="developers">
            <span class="offset-raquo">&raquo;</span><a href="http://protegewiki.stanford.edu/wiki/WebProtegeDevelopersGuide" class="link-c" target="_blank">WebProt&eacute;g&eacute; Developer's Guide</a>
            <p>
              Describes how to compile and run WebProt&eacute;g&eacute; from an IDE.
            </p>
            <span class="offset-raquo">&raquo;</span><a href="http://protegewiki.stanford.edu/wiki/WebProtegeImplementationGuide" class="link-c" target="_blank">WebProt&eacute;g&eacute; Implementation Guide</a>
            <p>
              A guide for implementing your own WebProt&eacute;g&eacute; components.
            </p>
            <span class="offset-raquo">&raquo;</span><a href="https://github.com/protegeproject/webprotege" class="link-c" target="_blank">WebProt&eacute;g&eacute; on GitHub</a>
            <p>
              Official home of the WebProt&eacute;g&eacute; code base and issue tracker.
            </p>
            <span class="offset-raquo">&raquo;</span><a href="http://protegewiki.stanford.edu/wiki/Protege5DevDocs" class="link-c" target="_blank">Prot&eacute;g&eacute; Desktop Developer's Guide</a>
            <p>
              Top-level entry point for all Prot&eacute;g&eacute; Desktop developer documentation, including instructions for building from sources, building from Eclipse, design documents, etc.
            </p>
            <span class="offset-raquo">&raquo;</span><a href="https://github.com/protegeproject/protege" class="link-c" target="_blank">Prot&eacute;g&eacute; Desktop on GitHub</a>
            <p>
              Official home of the Prot&eacute;g&eacute; Desktop code base and issue tracker.
            </p>
            <span class="offset-raquo">&raquo;</span><a href="http://protege.stanford.edu/protege/4.3/docs/api/" class="link-c" target="_blank">Prot&eacute;g&eacute; Desktop Javadoc</a>
            <p>
            </p>
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
      <h2 class="heading-c">Get assistance from the very same people that make Prot&eacute;g&eacute;</h2>
    </hgroup>

    <div class="row">
      <div class="col-4 short-course-info">
        <h3 class="heading-c">Attend a Short Course</h3>
        <span class="offset-raquo">&raquo;</span><a href="short-courses.php" class="link-c">Prot&eacute;g&eacute; Short Course</a>
        <p>
          A 3-day intensive training in ontology development, hands-on use of the Prot&eacute;g&eacute; toolset, and the Web Ontology Language (OWL).
        </p>
        <!-- Uncomment for next short course -->

        <p>
			<span class="offset-raquo">&raquo;</span> <a href="shortcourse/201603/index.html" target="_blank" class="link-c">Next Short Course: <br />
			March 21 - 23, 2016 @ Stanford</a>
		</p>

      </div><!-- /end .col-4 -->
      <div class="col-4 affiliate">
        <h3 class="heading-c">Become a Prot&eacute;g&eacute; Affiliate</h3>
        <span><em class="ital-a">(fee: $15,000/year)</em></span>
        <ul class="list-b">
          <li>40 hours consulting</li>
          <li>One free registration to the <a href="short-courses.php">Prot&eacute;g&eacute; Short Course</a></li>
          <li>Prot&eacute;g&eacute; coffee mug and t-shirt</li>
          <li>Recognition in the Prot&eacute;g&eacute; Desktop application's About Box</li>
        </ul>
      </div><!-- /end .col-4 -->
      <div class="col-4 affiliate last">
        <h3 class="heading-c">Ask for Consultation</h3>
        <span><em class="ital-a">(fee: $500/staff person/hour)</em></span>
        <ul class="list-b">
          <li>Ontology and knowledge base design and/or evaluation</li>
          <li>Plug-in design and/or development</li>
          <li>Using Prot&eacute;g&eacute; in applications</li>
          <li>Visualization and comprehension techniques for large knowledge-bases</li>
        </ul>
      </div><!-- /end .col-4 -->
    </div><!-- /end .row -->
    <div class="row" style="text-align: center;">
    	<a href="mailto:protege-affiliates@lists.stanford.edu" class="btn btn-d btn-med upcase">Contact the Prot&eacute;g&eacute; Affiliates Program</a>
    </div>
  </div><!-- /end .container -->
</section>
<?php include 'includes/footer.php' ?>
