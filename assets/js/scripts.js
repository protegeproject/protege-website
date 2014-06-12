(function($) {

  // Remove Map Canvas ID on Short Courses page to eliminate duplicate IDs
  $('.short-courses .event').removeAttr('id', 'map-canvas')
  
  // Hide short course banner for now.  No new offerings at the current time. Uncomment following line to hide course banner
  // $('.map-course-container').hide();

  // Hide .map-container on page load
  $('.map-container').hide();

  // Function to call Google Maps API placement
  function initMaps() {

    // Place location coordinates here for next event
    var myLatlng = new google.maps.LatLng(37.431472,-122.175661);

    var mapOptions = {
      zoom: 17,
      center: myLatlng, // Drop marker at these coordinates
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      scrollwheel: false // Eliminate map from scrolling when user scrolls over it
    }

    // Create map element
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    // Use custom map marker according to design comp
    var image = 'assets/img/custom-map-pin.png';

    var marker = new google.maps.Marker({
      // Slightly alter these numbers (usually subtract a few decimals) to make sure the pin on the map is centered within the viewport
      // Uncomment next line for coordinates of the Li Ka Shing Center
      // position: new google.maps.LatLng(37.4313,-122.175661),
      // Coordinates of MSOB  
      position: new google.maps.LatLng(37.432111,-122.179522),
      map: map,
      icon: image,
      visible: true
    });

    // Content for latest Protege course goes here
    var boxText = 
      '<div id="box" class="clearfix">' +
        '<p class="upcase infobox-title"><strong><a href="http://protege.stanford.edu/shortcourse/201403/" target="_blank">Protégé Short Course</a></strong></p>' + // Course title and url
        '<hr class="ruler-a">' +
        '<div class="clearfix">' +
        '<span class="pictogram pull-left calendar-icon"></span>' +
        '<p class="pull-left">March 26-28, 2013</p>' + // Time and date of course
        '</div>' +
        '<div class="clearfix">' +
        '<span class="pictogram pull-left map-icon"></span>' +
        '<p class="pull-left">291 Campus Dr. Palo Alto, CA. 94305</p>' + // Address/Location of course
        '</div>' +
        '<div class="clearfix">' +
        '<a href="http://protege.stanford.edu/shortcourse/201403/" style="margin-right: 20px;" class="learn-more-link pull-right" target="_blank">Learn more &raquo;</a>' +
        '</div>';

      '</div>';
            
    // Options specific to InfoBox plugin
    var myOptions = {
      // content: boxText,
      disableAutoPan: false,
      maxWidth: 0,
      pixelOffset: new google.maps.Size(30, -110),
      zIndex: null,
      infoBoxClearance: new google.maps.Size(1, 1),
      closeBoxURL: "",
      isHidden: false,
      pane: "floatPane",
      enableEventPropagation: false
    };

    // Initialize InfoBox
    var infoBox = new InfoBox(myOptions);
    infoBox.open(map, marker);

  };

  // Run initMaps() function on page load
  initMaps();

  // Interaction for opening map panel
  $('.open-map, .open-map-icon').on('click', function(e) {
    $('.map-container').slideDown();
    $('.newest-course').slideUp();
    initMaps();
    e.preventDefault();
  });

  // Interaction for closing map panel
  $('.close-map').on('click', function() {
    $('.map-container').slideUp();
    $('.newest-course').slideDown();
  });

  // Needed to comepnsate header offset for affix navigation, whether map container is opened or closed
  if ($('.map-course-container').is(':visible')) {
    $('.navbar-wrapper').addClass("affix-top").each(function (){
      var $self = $(this);
      var offsetFn = function () {
        h=0;
        $('.map-course-container').each(function () { h+=$(this).outerHeight();});
        return h;
      }
      $self.affix({offset: {top: offsetFn}});
    });
  } else {
    $('.navbar-wrapper').affix();
  }

  // Customize download button, icon, and instructions for Windows
  if (navigator.appVersion.indexOf("Win")!=-1) {
    $('.local-install').attr('href', 'http://protegewiki.stanford.edu/wiki/WebProtegeAdminGuide');
    $('.desktop-download-btn').find('h4').text('Download for Windows');
    $('.desktop-download-btn .media .generic-download-icon').attr('class', 'windows-icon');
    $('.desktop-download-btn').attr('href', 'http://protege.stanford.edu/download/protege/5.0/binaries/protege-5.0.0-beta-14.zip');
    $('.windows-instructions').removeClass('hide');
    if ($('div:not(.windows-instructions)')) {
      $('.instruction-panel div:not(.windows-instructions)').addClass('hide');
    }
    $('#source').find('option[value=' + getInstallerValue() + ']').attr('selected', true);
  }

  // Customize download button, icon, and instructions for Mac
  if (navigator.appVersion.indexOf("Mac")!=-1) {
    $('.local-install').attr('href', 'http://protegewiki.stanford.edu/wiki/WebProtegeAdminGuide');
    $('.desktop-download-btn').find('h4').text('Download for Mac OSX');
    $('.desktop-download-btn .media .generic-download-icon').attr('class', 'apple-icon');
    $('.desktop-download-btn').attr('href', 'http://protege.stanford.edu/download/protege/5.0/binaries/protege-5.0.0-beta-14.zip')
    $('.osx-instructions').removeClass('hide');
    if ($('div:not(.osx-instructions)')) {
      $('.instruction-panel div:not(.osx-instructions)').addClass('hide');
    }
    $('#source').find('option[value=' + getInstallerValue() + ']').attr('selected', true);
  }

  // Customize download button and instructions for Linux
  if (navigator.userAgent.indexOf("Linux")!=-1) {
    $('.local-install').attr('href', 'http://protegewiki.stanford.edu/wiki/WebProtegeAdminGuide');
    $('.desktop-download-btn').find('h4').text('Download for Linux');
    $('.desktop-download-btn').attr('href', 'http://protege.stanford.edu/download/protege/5.0/binaries/protege-5.0.0-beta-14.tar.gz')
    $('.generic-instructions').removeClass('hide');
    if ($('div:not(.generic-instructions)')) {
      $('.instruction-panel div:not(.generic-instructions)').addClass('hide');
    }
    $('#source').find('option[value=' + getInstallerValue() + ']').attr('selected', true);
  }
  
  function getInstallerValue() {
    var installerValue;
    var is64Bit = (navigator.userAgent.indexOf("64") != -1);
    var agent = navigator.userAgent;
    
    if (agent.indexOf("Win") != -1) {
      installerValue = (is64Bit) ? "desktop-win-64-vm" : "desktop-win-vm";
    } else if (agent.indexOf("Linux") != -1) {
      installerValue = (is64Bit) ? "desktop-linux-64-vm" : "desktop-linux-vm";
    } else if (agent.indexOf("Mac") != -1) {
      installerValue = "desktop-osx";
    }
    return installerValue;
  }
  
  // Hide original dropdown menu
  $('#source').hide();

  // Call function that replaces old dropdown menu with more styleable dl list
  createDropDown();
            
  // Create custom click event to call newly generated dropdown list
  $(".dropdown dt a").on('click', function(e) {
    $(".dropdown dd ul").toggle();
    $(this).parent().parent().addClass('dropdown-active');
    $('.search-downloads').select(); // Automatically highlight search field
    e.preventDefault();
  });

  // Hide dropdown list if anything but target is clicked
  $(document).on('click', function(e) {
    var $clicked = $(e.target);
    if (! $clicked.parents().hasClass("dropdown")) {
      $(".dropdown dd ul").hide();
    }
  });

  // Once a dropdown item is clicked, replace text on dropdown menu button
  $(".dropdown dd ul li a").on('click', function(e) {
    var text = $(this).html();
    $(".dropdown dt a").html(text);
    $(".dropdown dd ul").hide();
    
    var source = $("#source");
    source.val($(this).find("span.value").html())
    e.preventDefault();
  });

  // Create and replace all elements of initial dropdown element
  function createDropDown(){
    var source = $("#source");
    var selected = source.find("option[selected]");
    var options = $("option", source);
    
    $("#desktop-download-form").append('<dl id="target" class="dropdown"></dl>');
    $("#target").append('<dt class="selected-download"><a href="#" data-value=' + selected.val() + '><span>' + selected.text() + '</span></a></dt>');
    $("#target").append('<dd><ul></ul></dd>');
    $("#target dd ul").append('<li><form><input type="search" class="search-downloads"></form>');

    options.each(function(){
      $("#target dd ul").append('<li data-value='+ $(this).val() + '><a href="#"><span>' + $(this).text() + '</span></a></li>');
    });
  }

  // Functionality to make dropdown menu items searchable
  var downloadListItems = $('#target dd li:not(:first-child)');
  $('.search-downloads').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    downloadListItems.show().filter(function() {
      var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
      return !~text.indexOf(val);
    }).hide();
  });

  // Case statement used to determine which download instructions to show
  $('.dropdown dd ul li').on('click', function(e) {
    var ddVal = $(this).data('value');
    switch (ddVal) {
      case 'desktop-osx':
        $('.osx-instructions').removeClass('hide');
        if ($('div:not(.osx-instructions)')) {
          $('.instruction-panel div:not(.osx-instructions)').addClass('hide');
        }
        break;
      case 'desktop-win-64':
      case 'desktop-win-64-vm':
      case 'desktop-win-vm':
      case 'desktop-win':
        {
          $('.windows-instructions').removeClass('hide');
          if ($('div:not(.windows-instructions)')) {
            $('.instruction-panel div:not(.windows-instructions)').addClass('hide');
        }
        break;
      }
      default:
        $('.generic-instructions').removeClass('hide');
        if ($('div:not(.generic-instructions)')) {
          $('.instruction-panel div:not(.generic-instructions').addClass('hide');
        }
        break;
    }
    // Update data attribute value for style hooks
    $(".dropdown dt a").attr('data-value', ddVal);
    // Used to determine which download icon to show based on download selection
    $('#target dt a').each(function() {
      if (ddVal.match(/^desktop-win/)) {
        $(this).attr('class', 'windows-dropdown-icon');
      }
      else if (ddVal.match(/^desktop-osx/)) {
        $(this).attr('class', 'apple-dropdown-icon');
      }
      else if (ddVal.match(/^desktop-linux/)) {
        $(this).attr('class', 'linux-dropdown-icon');
      }
      else {
        $(this).attr('class', 'download-dropdown-icon');
      }
    })
  });

  // Case statement used to determine which file to download based on dropdown menu selection
  $('#showSignUpModal').on('click', function(e) {
    var altDdVal = $('dt.selected-download a').attr('data-value');
    switch (altDdVal) {
      case 'desktop-osx':
        $('#desktopDownload').modal('hide');
        $('#signUpModal').modal('show');
        var iFrameDl = $('<iframe width="1" height="1" frameborder="0" style="display: none;" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/MacOSX/install_protege_4.3.zip"></iframe>');
        iFrameDl.prependTo($('body'));
        $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/MacOSX/install_protege_4.3.zip')
        break;
      case 'desktop-win-64-vm':
        $('#desktopDownload').modal('hide');
        $('#signUpModal').modal('show');
        var iFrameDl = $('<iframe width="1" height="1" frameborder="0" style="display: none;" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Windows_64bit/VM/install_protege_4.3.exe"></iframe>');
        iFrameDl.prependTo($('body'));
        $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Windows_64bit/VM/install_protege_4.3.exe')
        break;
      case 'desktop-win-64':
        $('#desktopDownload').modal('hide');
        $('#signUpModal').modal('show');
        var iFrameDl = $('<iframe width="1" height="1" frameborder="0" style="display: none;" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Windows_64bit/NoVM/install_protege_4.3.exe"></iframe>');
        iFrameDl.prependTo($('body'));
        $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Windows_64bit/NoVM/install_protege_4.3.exe')
        break;
      case 'desktop-win-vm':
        $('#desktopDownload').modal('hide');
        $('#signUpModal').modal('show');
        var iFrameDl = $('<iframe width="1" height="1" frameborder="0" style="display: none;" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Windows/VM/install_protege_4.3.exe"></iframe>');
        iFrameDl.prependTo($('body'));
        $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Windows/VM/install_protege_4.3.exe')
        break;
        break;
      case 'desktop-win':
        $('#desktopDownload').modal('hide');
        $('#signUpModal').modal('show');
        var iFrameDl = $('<iframe width="1" height="1" frameborder="0" style="display: none;" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Windows/NoVM/install_protege_4.3.exe"></iframe>');
        iFrameDl.prependTo($('body'));
        $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Windows/NoVM/install_protege_4.3.exe')
        break;
      case 'desktop-linux-64-vm':
        $('#desktopDownload').modal('hide');
        $('#signUpModal').modal('show');
        var iFrameDl = $('<iframe width="1" height="1" frameborder="0" style="display: none;" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Linux_64bit/VM/install_protege_4.3.bin"></iframe>');
        iFrameDl.prependTo($('body'));
        $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Linux_64bit/VM/install_protege_4.3.bin')
        break;
      case 'desktop-linux-64':
        $('#desktopDownload').modal('hide');
        $('#signUpModal').modal('show');
        var iFrameDl = $('<iframe width="1" height="1" frameborder="0" style="display: none;" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Linux_64bit/NoVM/install_protege_4.3.bin"></iframe>');
        iFrameDl.prependTo($('body'));
        $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Linux_64bit/NoVM/install_protege_4.3.bin')
        break;
      case 'desktop-linux-vm':
        $('#desktopDownload').modal('hide');
        $('#signUpModal').modal('show');
        var iFrameDl = $('<iframe width="1" height="1" frameborder="0" style="display: none;" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Linux/VM/install_protege_4.3.bin"></iframe>');
        iFrameDl.prependTo($('body'));
        $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Linux/VM/install_protege_4.3.bin')
        break;
      case 'desktop-linux':
        $('#desktopDownload').modal('hide');
        $('#signUpModal').modal('show');
        var iFrameDl = $('<iframe width="1" height="1" frameborder="0" style="display: none;" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Linux/NoVM/install_protege_4.3.bin"></iframe>');
        iFrameDl.prependTo($('body'));
        $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Linux/NoVM/install_protege_4.3.bin')
        break;
      case 'desktop-unix':
        $('#desktopDownload').modal('hide');
        $('#signUpModal').modal('show');
        var iFrameDl = $('<iframe width="1" height="1" frameborder="0" style="display: none;" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Unix/install_protege_4.3.bin"></iframe>');
        iFrameDl.prependTo($('body'));
        $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Unix/install_protege_4.3.bin')
        break;
      case 'desktop-hpux-vm':
        $('#desktopDownload').modal('hide');
        $('#signUpModal').modal('show');
        var iFrameDl = $('<iframe width="1" height="1" frameborder="0" style="display: none;" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/HPUX/VM/install_protege_4.3.bin"></iframe>');
        iFrameDl.prependTo($('body'));
        $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/HPUX/VM/install_protege_4.3.bin')
        break;
      case 'desktop-hpux':
        $('#desktopDownload').modal('hide');
        $('#signUpModal').modal('show');
        var iFrameDl = $('<iframe width="1" height="1" frameborder="0" style="display: none;" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/HPUX/NoVM/install_protege_4.3.bin"></iframe>');
        iFrameDl.prependTo($('body'));
        $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/HPUX/NoVM/install_protege_4.3.bin')
        break;
      case 'desktop-solaris':
        $('#desktopDownload').modal('hide');
        $('#signUpModal').modal('show');
        var iFrameDl = $('<iframe width="1" height="1" frameborder="0" style="display: none;" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Solaris/NoVM/install_protege_4.3.bin"></iframe>');
        iFrameDl.prependTo($('body'));
        $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Solaris/NoVM/install_protege_4.3.bin')
        break;
      case 'desktop-aix-vm':
        $('#desktopDownload').modal('hide');
        $('#signUpModal').modal('show');
        var iFrameDl = $('<iframe width="1" height="1" frameborder="0" style="display: none;" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/AIX/VM/install_protege_4.3.bin"></iframe>');
        iFrameDl.prependTo($('body'));
        $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/AIX/VM/install_protege_4.3.bin')
        break;
      case 'desktop-aix':
        $('#desktopDownload').modal('hide');
        $('#signUpModal').modal('show');
        var iFrameDl = $('<iframe width="1" height="1" frameborder="0" style="display: none;" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/AIX/NoVM/install_protege_4.3.bin"></iframe>');
        iFrameDl.prependTo($('body'));
        $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/AIX/NoVM/install_protege_4.3.bin')
        break;
      case 'desktop-other':
        $('#desktopDownload').modal('hide');
        $('#signUpModal').modal('show');
        var iFrameDl = $('<iframe width="1" height="1" frameborder="0" style="display: none;" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Java/install_protege_4.3.jar"></iframe>');
        iFrameDl.prependTo($('body'));
        $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Java/install_protege_4.3.jar')
        break;
    }
    e.preventDefault();
  });

  // Add OS icons to various dropdown menu items
  $('#target dd li:not(:first-child)').each(function() {
    if ($(this).data('value').match(/^desktop-win/)) {
      $(this).find('a').addClass('windows-dropdown-icon');
    }
    else if ($(this).data('value').match(/^desktop-osx/)) {
      $(this).find('a').addClass('apple-dropdown-icon');
    }
    else if ($(this).data('value').match(/^desktop-linux/)) {
      $(this).find('a').addClass('linux-dropdown-icon');
    }
    else {
      $(this).find('a').addClass('download-dropdown-icon');
    }
  });

  // Initial item to have selected on dropdown menu based on OS
  if (navigator.appVersion.indexOf("Mac")!=-1) {
    $('#target dt a').attr('class', 'apple-dropdown-icon');
  }

  // Initial item to have selected on dropdown menu based on OS
  if (navigator.appVersion.indexOf("Win")!=-1) {
    $('#target dt a').attr('class', 'windows-dropdown-icon');
  }  

  // Initial item to have selected on dropdown menu based on OS
  if (navigator.userAgent.indexOf("Linux")!=-1) {
    $('#target dt a').attr('class', 'linux-dropdown-icon');
  }

  // Functionality to show Desktop Download Modal
  $('.showDownloadDesktop').on('click', function(e) {
    $('#desktopDownload').modal('show');
    e.preventDefault();
  })

  // Functionality to show Protege web Screenshots Modal
  $('#showScreenShotsModalWeb').on('click', function(e) {
    $('#screenShotsModalWeb').modal('show');
    e.preventDefault();
  })

  // Functionality to show Protege desktop Screenshots Modal
  $('#showScreenShotsModalDesktop').on('click', function(e) {
    $('#screenShotsModalDesktop').modal('show');
    e.preventDefault();
  })

  // Remove value attr from form fields on focus inside of modals.
  // Add value attr back on blur
  $('.modal input').each(function() {
    var defaultValue = this.value;
    $(this).on('focus', function() {
      if(this.value === defaultValue) {
        this.value = '';
      }
    });
    $(this).on('blur', function() {
      if(this.value === '') {
        this.value = defaultValue;
      }
    });
  })

  // Remove value attr from texareas on focus inside of modals.
  // Add value attr back on blur
  $('.modal input').each(function() {
    var defaultValue = this.value;
    $('#signUpModal textarea').each(function() {
      var defaultText = $(this).text();
      $(this).on('focus', function() {
        if(this.value === defaultText) {
          this.value = '';
        }
      });
      $(this).on('blur', function() {
        if(this.value === '') {
          this.value = defaultText;
        }
      });
    })
  })

  // Add active states to hash based footer links
  $('.sub-footer-nav li').on('click', function() {
    if (window.location.hash === '#our-team') {
      $(this).addClass('active');
      $(this).siblings().removeClass('active');
    } else if (window.location.hash === '#about-bmir') {
      $(this).addClass('active');
      $(this).siblings().removeClass('active');
    } else if (window.location.hash === '#citing') {
      $(this).addClass('active');
      $(this).siblings().removeClass('active');

    }
  });

  // Don't allow courses table to grow past amount of courses listed
  $('#grow-table').on('click', function(e) {
    var tableHeight = $('.table').height();
    var tableContainerHeight = $('.table-container').height();
    if ($('.table-container').height() > tableHeight - 165) {
      $('.table-container').animate({'height': tableHeight + 'px'});
    } else {
      $('.table-container').animate({'height': '+=165'});
    }
    e.preventDefault();
  })

  // Autoplay shortcourse review carousel
  $('#shortcourse-reviews').carousel({
    interval: 15000
  });

  // Options for Twitter feed near footer
  $('.twitterfeed').tweet({
      modpath: 'twitter/',
      username: 'protegeproject',
      count: 1,
      loading_text: 'loading',
      template: '{text}{time}'
  });

  // Open social, tweet links and wiki link in new tab
  $('.social-icons a, .twitterfeed a, .external-link').on('click', function() {
    window.open(this.href);
    return false;
  });

  // Interval for screenshots carousel
  $('#webCarousel, #desktopCarousel').carousel({
    interval: 3000
  })

  // Tooltip functionliaty on product pages
  $('.tooltip-activate').hover(function() {
    $(this).find('.tooltip').toggleClass('visually-hidden');
  })

  // Tab functionality under documentation section on support page
  $('a[data-toggle="tab"]').on('shown', function (e) {
    e.target // activated tab
    e.relatedTarget // previous tab
  })

  // Expand/Collapse Blockquotes
  $('.read-more').on('click', function(e) {
    var blockquoteContext = $(this).prev();
    var actualHeight = blockquoteContext[0].scrollHeight;
    if (blockquoteContext.height() == 90) {
      $(blockquoteContext).animate({height: actualHeight + 'px'});
      $(this).text('Read Less...');
    } else {
      $(blockquoteContext).animate({height: '90px'});
      $(this).text('Read More...');
    }
    e.preventDefault();
    return false;
  });

  $('.testimonials').carousel('pause')

  $('a.gallery1').colorbox({rel: 'gallery1'});
  $('a.gallery2').colorbox({rel: 'gallery2'});

  function validateRegForm() {
    var valid = true;

    if ($("#name").val().length < 3) {
      $("#nameError").show();
      valid = false;
    } else {
      $("#nameError").hide();
    }
    
    if ($("#email").val().length < 3) {
      $("#emailError").show();
      valid = false;
    } else {
      $("#emailError").hide();
    }

    return valid;
  }

  function submitRegForm() {
    $.ajax({
      type: "POST", 
      url: "register.php", 
      data: $('#signUpForm').serialize()
    });
    return false;
  }

  function resetRegForm() {
    $("#nameError").hide();
    $("#emailError").hide();
    $("#description").val("");
    $("#signUpModal input").each(function() {
      $(this).val("");
    })
  }

  $("#signUp").on("click", function(event) {
    event.preventDefault();
  })

  $("#signUp").on("click", function() {
    if (validateRegForm()) {
      submitRegForm();
      resetRegForm();
      $("#signUpModal").modal('hide');
    }
  })

  $("#closeSignUpModal").on("click", function() {
    resetRegForm();
  })
  
  $("a[id=documentation-menu-title]").on("click", function(event) {
    event.preventDefault();
  })

  $("a[id=resources-menu-title]").on("click", function(event) {
    event.preventDefault();
  })

  $("#downloads-menu-title").on("click", function(event) {
    event.preventDefault();
  })
 
})(jQuery);
