<?php include 'includes/header.php' ?>

<div class="jumbotron-container">
  <div class="jumbotron internal">
    <div class="container">
      <div class="row">
        <div class="col-10">
          <h1>
            Get in direct contact with the people who develop the Prot&eacute;g&eacute; platform.  
          </h1>
        </div><!-- /end .col-10 -->
      </div><!-- /end .row -->
    </div><!-- /end .container -->
  </div><!-- /end .jumbotron -->
</div><!-- /end .jumbotron-container -->

<section class="main-content">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h3 class="heading-c">Mailing Lists</h3>
        <p class="intro-b">
          If you have any questions about Prot&eacute;g&eacute; or WebProt&eacute;g&eacute;, please use the mailing lists to contact us.
        </p>
        <p>
          Our mailing lists are the central source of help, and the mailing lists' archives contain an extensive source of knowledge. Be sure to check out the archives before submitting a query.
        </p>
        <a href="support.php" class="btn btn-b btn-inline upcase">Mailing Lists</a>
      </div><!-- /end .col-6 -->
      <div class="col-6">
        <h3 class="heading-c">Contact Form</h3>
        <p class="intro-b">
	      If you have feedback about the Prot&eacute;g&eacute; website, or things unrelated to the software tools, please use the contact form. We do guarantee a reply.
        </p>
        <p>
          If you like to give us feedback on the website (e.g., broken links), or have a general inquiry that is not a feature request or bug report, or related to the products, please submit a message using the form. We will consider all the feedback, but we will not be able to answer them individually.
        </p>
        <a class="btn btn-b btn-inline upcase" id="contactBtn">Contact Us</a>
        
        <div id="contactModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                  <!-- iframe 'src' is set in scripts.js:589 -->
                  <iframe width="630" height="490" frameborder="0" marginheight="0" marginwidth="0" id="contactFrame">Loading...</iframe>
              </div>
	          <a id="closeContactModal" href="#" data-dismiss="modal">Close</a>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        
      </div><!-- /end .col-6 -->  
    </div><!-- /end .row -->
  </div><!-- /end .container -->
</section><!-- /end .features -->
  
</div><!-- /end .container -->
<?php include 'includes/footer.php' ?>
