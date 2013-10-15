<?php include 'includes/header.php' ?>

<div class="jumbotron internal bordered">

  <div class="container">
    <div class="row">
      <div class="col-10">
        <h1>
          Protégé is a free, open-source platform that provides a growing 
          user community with a suite of tools to construct domain models 
          and knowledge-based applications with ontologies.
        </h1>
      </div><!-- /end .col-10 -->
    </div><!-- /end .row -->

  </div><!-- /end .container -->

</div><!-- /end .jumbotron -->

<div class="sub-header">
  <div class="container">
    <div class="row">
      <div class="col-2">
        <img src="assets/img/cloud-badge.png">
      </div><!-- /end .col-2 -->
      <div class="col-6">
        <p class="intro-a">
          Talk about WebProtege, why people should use it, 
          and probably some other information that would 
          push users into using this instead of the desktop 
          version.
        </p>
        <p>
          In the frame-based model, an ontology consists of 
          a set of classes organized in a subsumption hierarchy 
          to represent a domain's salient concepts, a set of slots 
          associated to classes that describe their properties and 
          relationships, and a set of instances that hold specific 
          values for those classes.
        </p>
        <ul class="inline web-protege-nav">
          <li>
            <a href="#">
              <span class="pictogram">&#127748;</span>
              Screenshots
            </a>
          </li>
          <li class="tooltip-activate">
            <a href="#">
              <span class="pictogram">&#128193;</span>
              Documentation
            </a>
              <div class="tooltip bottom visually-hidden">
                <div class="tooltip-inner">
                  <ul>
                    <li>
                      <a href="#">
                        <span>&raquo;</span>
                        Link
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span>&raquo;</span>
                        Wiki Access
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span>&raquo;</span>
                        Website Linked
                      </a>
                    </li>
                  </ul>
                </div><!-- /end .tooltip-inner -->
                <div class="tooltip-arrow"></div>
              </div><!-- /end .tooltip -->
          </li><!-- /end .tool-tip-activate -->
          <li><a href="#"><span class="pictogram">&#10133;</span>Resources</a></li>
        </ul><!-- /end nav -->
      </div><!-- /end .col-6 -->
      <div class="col-4">
        <ul class="list-a">
          <li>Cross compatible with desktop version</li>
          <li>Extensible plug-in architecture with custom-designed elements</li>
        </ul>
        <a href="#" class="btn btn-b btn-xl btn-icon btn-block">
          <div class="media">
            <div class="pull-left">
              <span class="pictogram">&#9729;</span>
            </div><!-- /end .pull-left -->
            <div class="media-body">
              <h4>Use WebProtege</h4>
              <span>Stanford Hosting Solution</span>
            </div><!-- /end .media-body -->
          </div><!-- /end .media -->
        </a>
        <a class="text-center link-a" href="#">Install Locally &raquo;</a>
      </div><!-- /end .col-4 -->
    </div><!-- /end .row -->
  </div><!-- /end .container -->
</div><!-- /end .sub-header -->

<section class="desktop">
  <div class="container">
    <div class="row">
      <div class="col-2">
        <img src="assets/img/desktop-badge.png">
      </div><!-- /end .col-2 -->
      <div class="col-6">
        <p class="intro-b">
          At its core, Protégé implements a rich set of knowledge-modeling 
          structures and actions that support the creation, visualization, 
          and manipulation of ontologies in various representation formats. 
        </p>
        <p>
          Protégé can be customized to provide domain-friendly support for 
          creating knowledge models and entering data. Further, Protégé can 
          be extended by way of a plug-in architecture and a Java-based 
          Application Programming Interface (API) for building knowledge-based 
          tools and applications.
        </p>
        <ul class="inline web-protege-nav">
          <li>
            <a href="#">
              <span class="pictogram">&#127748;</span>
              Screenshots
            </a>
          </li>
          <li class="tooltip-activate">
            <a href="#">
              <span class="pictogram">&#128193;</span>
              Documentation
            </a>
              <div class="tooltip bottom visually-hidden">
                <div class="tooltip-inner">
                  <ul>
                    <li>
                      <a href="#">
                        <span>&raquo;</span>
                        Link
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span>&raquo;</span>
                        Wiki Access
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <span>&raquo;</span>
                        Website Linked
                      </a>
                    </li>
                  </ul>
                </div><!-- /end .tooltip-inner -->
                <div class="tooltip-arrow"></div>
              </div><!-- /end .tooltip -->
          </li><!-- /end .tool-tip-activate -->
          <li><a href="#"><span class="pictogram">&#10133;</span>Resources</a></li>
        </ul><!-- /end nav -->
      </div><!-- /end .col-6 -->
      <div class="col-4">
        <ul class="list-a">
          <li>Various export formats</li>
          <li>Extensible environment</li>
          <li>Active community</li>
        </ul>
        <a href="#" id="showDownloadDesktop" class="btn btn btn-xl btn-icon btn-block desktop-download-btn">
          <div class="media">
            <div class="pull-left">
              <span class="apple-icon"></span>
            </div><!-- /end .pull-left -->
            <div class="media-body">
              <h4>Download for Mac OSX</h4>
              <span>Protege Desktop 4.5</span>
            </div><!-- /end .media-body -->
          </div><!-- /end .media -->
        </a>
        <!-- Modal -->
        <div id="desktopDownload" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="desktopDownloadLabel" aria-hidden="true">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel" class="heading-a upcase">Download Protege 4.3 Desktop</h3>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-8">
                <form id="desktop-download-form">
                  <select id="source">
                    <option value="desktop-osx">Protege Desktop for Mac OSX</option>
                    <option value="desktop-win-64-vm">Protege Desktop for Windows 64bit (with Java VM)</option>
                    <option value="desktop-win-64">Protege Desktop for Windows 64bit (without Java VM)</option>
                    <option value="desktop-win-vm">Protege Desktop for Windows (with Java VM)</option>
                    <option value="desktop-win">Protege Desktop for Windows (without Java VM)</option>
                    <option value="desktop-linux-64-vm">Protege Desktop for Linux 64bit (with Java VM)</option>
                    <option value="desktop-linux-64">Protege Desktop for Linux 64bit (without Java VM)</option>
                    <option value="desktop-linux-vm">Protege Desktop for Linux (with Java VM)</option>
                    <option value="desktop-linux">Protege Desktop for Linux (without Java VM)</option>
                    <option value="desktop-unix">Protege Desktop for Any UNIX Platform</option>
                    <option value="desktop-hpux-vm">Protege Desktop for HPUX (with Java VM)</option>
                    <option value="desktop-hpux">Protege Desktop for HPUX (without Java VM)</option>
                    <option value="desktop-solaris">Protege Desktop for Solaris</option>
                    <option value="desktop-aix-vm">Protege Desktop for AIX (with Java VM)</option>
                    <option value="desktop-aix">Protege Desktop for AIX (without Java VM)</option>
                    <option value="desktop-other">Protege Desktop for Other Java-enabled Platforms</option>
                  </select>
                </form>
              </div><!-- /end .col-9 -->
              <div class="col-4">
                <a href="#" class="btn btn-b btn-lg" id="showSignUpModal"><span>Download</span></a>
              </div><!-- /end .col-2 -->
              <hr class="ruler-a clearleft">

              <div class="instruction-panel">

                <div class="col-12 hide osx-instructions">
                  <p class="header"><strong>Instructions</strong></p>
                  <p>After downloading, double-click install_protege_4.3</p>
                  <p class="header"><strong>Notes</strong></p>
                  <ul class="list-b">
                    <li>Be sure you have Java installed. You can download Java from Apple's site</li>
                    <li>
                      The compressed installer should be recognized by Stuffit Expander and should automatically 
                      be expanded after downloading. If it is not expanded, you can expand it manually using StuffIt 
                      Expander 6.0 or later.
                    </li>
                    <li>
                      If you have any problems launching the installer once it has been expanded, make sure that the 
                      compressed installer was expanded using Stuffit Expander. If you continue to have problems, 
                      please contact technical support.
                    </li>
                  </ul>
                </div><!-- /end .col-12 -->
                
                <div class="col-12 hide windows-instructions">
                  <p class="header"><strong>Instructions</strong></p>
                  <p>After downloading, double-click install_protege_4.3.exe</p>
                  <p class="header"><strong>Notes</strong></p>
                  <ul class="list-b">
                    <li>
                      If you do not have a Java virtual machine installed, be sure to download the package above which 
                      includes one. Otherwise you may need to download one from <a href="http://www.flexerasoftware.com/redirect/redirectJava.htm">Sun's Java web site</a> or contact your OS 
                      manufacturer.
                    </li>
                  </ul>
                </div><!-- /end .col-12 -->

                <div class="col-12 hide generic-instructions">
                  <p class="header"><strong>Instructions</strong></p>
                    <ol>
                      <li>After downloading open a shell and, cd to the directory where you downloaded the installer.</li>
                      <li>At the prompt type: <strong>sh ./install_protege_4.3.bin</strong></li>
                    </ol>
                  <p class="header"><strong>Notes</strong></p>
                  <ul class="list-b">
                    <li>
                      If you do not have a Java virtual machine installed, be sure to download the package above which 
                      includes one. Otherwise you may need to download one from <a href="http://www.flexerasoftware.com/redirect/redirectJava.htm">Sun's Java web site</a> or contact your OS 
                      manufacturer.
                    </li>
                  </ul>
                </div><!-- /end .col-12 -->

              </div><!-- /end .instruction-panel -->

            </div><!-- /end .row -->
          </div><!-- /end .modal-body -->
        </div><!-- /end .modal -->

        <div id="signUpModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="signUpModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <div class="row">
                  <div class="col-6">
                    <h3 class="heading-b">
                      Your download should start in a couple 
                      of seconds. If it doesn’t, <a class="alt-download" href="#">click here</a>.
                    </h3>
                    <p>In the meantime... why not sign up as a Protege User? Registered users immediately get:</p>
                    <ul class="list-a">
                      <li>Basic online support</li>
                      <li>Subscription to our newsletter</li>
                    </ul>
                  </div><!-- /end .col-6 -->
                  <div class="col-6">
                    <form>
                      <label>Name</label>
                      <input type="text" value="Enter your name">
                      <label>Email</label>
                      <input type="email" value="Enter your email">
                      <label>How did you hear about us?</label>
                      <input type="text" value="Friend, colleague, newspaper, ad, etc">
                      <div class="half first">
                        <label>Project URL</label>
                        <input type="text" value="http://">
                      </div><!-- /end .half -->
                      <div class="half">
                        <label>Affiliation</label>
                        <input type="text" value="What's your role?">
                      </div><!-- /end .half -->
                      <label>Project Description</label>
                      <textarea>A few words about your project...</textarea>
                      <button type="submit" class="btn btn-b pull-right">Sign Up</button>
                    </form>
                  </div><!-- /end .col-6 -->
                </div><!-- /end .row -->
              </div>
              <a href="#" data-dismiss="modal">No thanks, close this window</button>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <a class="text-center link-b" href="#">Other downloads &raquo;</a>
      </div><!-- /end .col-4 -->
    </div><!-- /end .row -->
  </div><!-- /end .container -->
</section><!-- /end .features -->
  
</div><!-- /end .container -->
<hr class="ruler-a">

<section class="support">
  <div class="container"> 
    <hgroup class="text-center">
      <h1 class="upcase">Need Support?</h1>
      <h2 class="heading-c">Get assistance from the very same people that make Protege</h2>
    </hgroup>

    <div class="row">
      <div class="col-4">
        <h3 class="heading-c">Mailing Lists</h3>
        <p>
          Morbi leo risus, porta ac consectetur ac, vestibulum at eros. 
          Cras mattis consectetur purus sit amet fermentum. Praesent 
          commodo cursus magna.
        </p>
        <a href="#" class="btn btn-d btn-med">Learn More</a>
      </div><!-- /end .col-4 -->
      <div class="col-4">
        <h3 class="heading-c">Documentation</h3>
        <p>
          Fusce dapibus, tellus ac cursus commodo, tortor mauris 
          condimentum nibh, ut fermentum massa justo sit amet risus. 
          risus Praesent commodo cursus magna, vel scelerisque nisl.
        </p>
        <a href="#" class="btn btn-d btn-med">Learn More</a>
      </div><!-- /end .col-4 -->
      <div class="col-4">
        <h3 class="heading-c">Short Courses</h3>
        <span class="course-raquo">&raquo;</span><a href="shortcourses.php" class="link-c">Protégé Short Course</a>
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
    </div><!-- /end .row -->

  </div><!-- /end .container -->
</section>
<?php include 'includes/footer.php' ?>

