(function($) {
  // This example displays a marker at the center of Australia.
  // When the user clicks the marker, an info window opens.

  $('.short-courses .first-map').removeAttr('id', 'map-canvas')

  function initMaps() {

    var myLatlng = new google.maps.LatLng(32.70895,-117.160885);


    var mapOptions = {
      zoom: 17,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      scrollwheel: false
    }

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var image = 'assets/img/custom-map-marker.png';

    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(32.70870,-117.160885),
      map: map,
      icon: image,
      visible: true
    });

    var boxText = 
      '<div id="box" class="clearfix">' +
        '<p class="upcase infobox-title"><strong>Protege Bootcamp</strong></p>' +
        '<hr class="ruler-a">' +
        '<div class="clearfix">' +
        '<span class="pictogram pull-left">&#128197;</span>' +
        '<p class="pull-left">September 2-4. From 9.00 to 18.00</p>' +
        '</div>' +
        '<div class="clearfix">' +
        '<span class="pictogram pull-left map-icon">&#59172;</span>' +
        '<p class="pull-left">343 4th Avenue, San Diego, CA. 92101</p>' +
        '</div>';
      '</div>';
            
    var myOptions = {
      content: boxText,
      disableAutoPan: false,
      maxWidth: 0,
      pixelOffset: new google.maps.Size(30, -90),
      zIndex: null,
      infoBoxClearance: new google.maps.Size(1, 1),
      closeBoxURL: "",
      isHidden: false,
      pane: "floatPane",
      enableEventPropagation: false
    };

    var infoBox = new InfoBox(myOptions);
    infoBox.open(map, marker);

  };

  $('.tooltip-activate').hover(function() {
    $(this).find('.tooltip').toggleClass('visually-hidden');
  })

  $('a[data-toggle="tab"]').on('shown', function (e) {
    e.target // activated tab
    e.relatedTarget // previous tab
  })

  $('.social-icons a').click( function() {
    window.open(this.href);
    return false;
  });

  $('.map-container').hide();
  initMaps();

  var mapCourseContainHeight = $('.map-course-container').height();

  $('.open-map').click(function(e) {
    $('.map-container').slideDown();
    $(this).parent().parent().parent().slideUp();
    initMaps();
    e.preventDefault();
  });

  $('.close-map').click(function() {
    $('.map-container').slideUp();
    $('.newest-course').slideDown();
  });

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
  }

  if ($('.map-course-container').is(':hidden')) {
    $('.navbar-wrapper').addClass('affix');
  }

  if (navigator.appVersion.indexOf("X11")!=-1) OSName="UNIX";
  if (navigator.appVersion.indexOf("Linux")!=-1) OSName="Linux";
  if (navigator.appVersion.indexOf("SunOS") != -1 ) OSName = "Solaris";

  if (navigator.appVersion.indexOf("Win")!=-1) {
    $('.desktop-download-btn').find('h4').text('Download for Windows');
    $('.desktop-download-btn .media .apple-icon').attr('class', 'windows-icon');
    $('#desktop-download-btn').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Windows/NoVM/install_protege_4.3.exe')
    $('.windows-instructions').removeClass('hide');
    if ($('div:not(.windows-instructions)')) {
      $('.instruction-panel div:not(.windows-instructions').addClass('hide');
    }
    $('#source').find('option[value="desktop-win"]').attr("selected",true);
  }

  if (navigator.appVersion.indexOf("Mac")!=-1) {
    $('.osx-instructions').removeClass('hide');
    if ($('div:not(.osx-instructions)')) {
      $('.instruction-panel div:not(.osx-instructions').addClass('hide');
    }
    $('#source').find('option[value="desktop-osx"]').attr("selected",true);
  }

  // Replace dropdown menu
  $('#source').hide();
  createDropDown();
            
  $(".dropdown dt a").click(function(e) {
    $(".dropdown dd ul").toggle();
    $(this).parent().parent().addClass('dropdown-active');
    $('.search-downloads').select();
    e.preventDefault();
    e.stopPropagation();
  });

  $(document).on('click', function(e) {
    var $clicked = $(e.target);
    if (! $clicked.parents().hasClass("dropdown")) {
        $(".dropdown dd ul").hide();
    }
    $('.dropdown dt a').parent().parent().removeClass('dropdown-active');
  });
              
  $(".dropdown dd ul li a").on('click', function(e) {
    var text = $(this).html();
    $(".dropdown dt a").html(text);
    $(".dropdown dd ul").hide();
    
    var source = $("#source");
    source.val($(this).find("span.value").html())
    e.preventDefault();
  });

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

var downloadListItems = $('#target dd li:not(:first-child)');
$('.search-downloads').keyup(function() {
  var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
  downloadListItems.show().filter(function() {
    var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
    return !~text.indexOf(val);
  }).hide();
});

$('.dropdown dd ul li').on('click', function(e) {
  var ddVal = $(this).data('value');
  switch (ddVal) {
    case 'desktop-osx':
      $('.osx-instructions').removeClass('hide');
      if ($('div:not(.osx-instructions)')) {
        $('.instruction-panel div:not(.osx-instructions').addClass('hide');
      }
      break;
    case 'desktop-win-64':
    case 'desktop-win-64-vm':
    case 'desktop-win-vm':
    case 'desktop-win':
      {
        $('.windows-instructions').removeClass('hide');
        if ($('div:not(.windows-instructions)')) {
          $('.instruction-panel div:not(.windows-instructions').addClass('hide');
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
  $(".dropdown dt a").attr('data-value', ddVal);
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

$('#showSignUpModal').on('click', function(e) {
  var altDdVal = $('dt.selected-download a').attr('data-value');
  switch (altDdVal) {
    case 'desktop-osx':
      $('#desktopDownload').modal('hide');
      $('#signUpModal').modal('show');
      console.log('desktop-osx');
      var iFrameDl = $('<iframe width="1" height="1" frameborder="0" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/MacOSX/install_protege_4.3.zip"></iframe>');
      // iFrameDl.prependTo($('body'));
      $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/MacOSX/install_protege_4.3.zip')
      break;
    case 'desktop-win-64-vm':
      $('#desktopDownload').modal('hide');
      $('#signUpModal').modal('show');
      console.log('desktop-win-64-vm');
      var iFrameDl = $('<iframe width="1" height="1" frameborder="0" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Windows_64bit/VM/install_protege_4.3.exe"></iframe>');
      // iFrameDl.prependTo($('body'));
      $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Windows_64bit/VM/install_protege_4.3.exe')
      break;
    case 'desktop-win-64':
      $('#desktopDownload').modal('hide');
      $('#signUpModal').modal('show');
      console.log('desktop-win-64');
      var iFrameDl = $('<iframe width="1" height="1" frameborder="0" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Windows_64bit/NoVM/install_protege_4.3.exe"></iframe>');
      // iFrameDl.prependTo($('body'));
      $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Windows_64bit/NoVM/install_protege_4.3.exe')
      break;
    case 'desktop-win-vm':
      $('#desktopDownload').modal('hide');
      $('#signUpModal').modal('show');
      console.log('desktop-win-vm');
      var iFrameDl = $('<iframe width="1" height="1" frameborder="0" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Windows/VM/install_protege_4.3.exe"></iframe>');
      // iFrameDl.prependTo($('body'));
      $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Windows/VM/install_protege_4.3.exe')
      break;
      break;
    case 'desktop-win':
      $('#desktopDownload').modal('hide');
      $('#signUpModal').modal('show');
      console.log('desktop-win');
      var iFrameDl = $('<iframe width="1" height="1" frameborder="0" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Windows/NoVM/install_protege_4.3.exe"></iframe>');
      // iFrameDl.prependTo($('body'));
      $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Windows/NoVM/install_protege_4.3.exe')
      break;
    case 'desktop-linux-64-vm':
      $('#desktopDownload').modal('hide');
      $('#signUpModal').modal('show');
      console.log('desktop-linux-64-vm');
      var iFrameDl = $('<iframe width="1" height="1" frameborder="0" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Linux_64bit/VM/install_protege_4.3.bin"></iframe>');
      // iFrameDl.prependTo($('body'));
      $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Linux_64bit/VM/install_protege_4.3.bin')
      break;
    case 'desktop-linux-64':
      $('#desktopDownload').modal('hide');
      $('#signUpModal').modal('show');
      console.log('desktop-linux-64');
      var iFrameDl = $('<iframe width="1" height="1" frameborder="0" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Linux_64bit/NoVM/install_protege_4.3.bin"></iframe>');
      // iFrameDl.prependTo($('body'));
      $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Linux_64bit/NoVM/install_protege_4.3.bin')
      break;
    case 'desktop-linux-vm':
      $('#desktopDownload').modal('hide');
      $('#signUpModal').modal('show');
      console.log('desktop-linux-vm');
      var iFrameDl = $('<iframe width="1" height="1" frameborder="0" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Linux/VM/install_protege_4.3.bin"></iframe>');
      // iFrameDl.prependTo($('body'));
      $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Linux/VM/install_protege_4.3.bin')
      break;
    case 'desktop-linux':
      $('#desktopDownload').modal('hide');
      $('#signUpModal').modal('show');
      console.log('desktop-linux');
      var iFrameDl = $('<iframe width="1" height="1" frameborder="0" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Linux/NoVM/install_protege_4.3.bin"></iframe>');
      // iFrameDl.prependTo($('body'));
      $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Linux/NoVM/install_protege_4.3.bin')
      break;
    case 'desktop-unix':
      $('#desktopDownload').modal('hide');
      $('#signUpModal').modal('show');
      console.log('desktop-unix');
      var iFrameDl = $('<iframe width="1" height="1" frameborder="0" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Unix/install_protege_4.3.bin"></iframe>');
      // iFrameDl.prependTo($('body'));
      $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Unix/install_protege_4.3.bin')
      break;
    case 'desktop-hpux-vm':
      $('#desktopDownload').modal('hide');
      $('#signUpModal').modal('show');
      console.log('desktop-hpux-vm');
      var iFrameDl = $('<iframe width="1" height="1" frameborder="0" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/HPUX/VM/install_protege_4.3.bin"></iframe>');
      // iFrameDl.prependTo($('body'));
      $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/HPUX/VM/install_protege_4.3.bin')
      break;
    case 'desktop-hpux':
      $('#desktopDownload').modal('hide');
      $('#signUpModal').modal('show');
      console.log('desktop-hpux');
      var iFrameDl = $('<iframe width="1" height="1" frameborder="0" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/HPUX/NoVM/install_protege_4.3.bin"></iframe>');
      // iFrameDl.prependTo($('body'));
      $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/HPUX/NoVM/install_protege_4.3.bin')
      break;
    case 'desktop-solaris':
      $('#desktopDownload').modal('hide');
      $('#signUpModal').modal('show');
      console.log('desktop-solaris');
      var iFrameDl = $('<iframe width="1" height="1" frameborder="0" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Solaris/NoVM/install_protege_4.3.bin"></iframe>');
      // iFrameDl.prependTo($('body'));
      $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Solaris/NoVM/install_protege_4.3.bin')
      break;
    case 'desktop-aix-vm':
      $('#desktopDownload').modal('hide');
      $('#signUpModal').modal('show');
      console.log('desktop-aix-vm');
      var iFrameDl = $('<iframe width="1" height="1" frameborder="0" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/AIX/VM/install_protege_4.3.bin"></iframe>');
      // iFrameDl.prependTo($('body'));
      $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/AIX/VM/install_protege_4.3.bin')
      break;
    case 'desktop-aix':
      $('#desktopDownload').modal('hide');
      $('#signUpModal').modal('show');
      console.log('desktop-aix');
      var iFrameDl = $('<iframe width="1" height="1" frameborder="0" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/AIX/NoVM/install_protege_4.3.bin"></iframe>');
      // iFrameDl.prependTo($('body'));
      $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/AIX/NoVM/install_protege_4.3.bin')
      break;
    case 'desktop-other':
      $('#desktopDownload').modal('hide');
      $('#signUpModal').modal('show');
      console.log('desktop-other');
      var iFrameDl = $('<iframe width="1" height="1" frameborder="0" src="http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Java/install_protege_4.3.jar"></iframe>');
      // iFrameDl.prependTo($('body'));
      $('.alt-download').attr('href', 'http://protege.stanford.edu/download/protege/4.3/installanywhere/Web_Installers/InstData/Java/install_protege_4.3.jar')
      break;
  }
  e.preventDefault();
});

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

if (navigator.appVersion.indexOf("Mac")!=-1) {
  $('#target dt a').attr('class', 'apple-dropdown-icon');
}

if (navigator.appVersion.indexOf("Win")!=-1) {
  $('#target dt a').attr('class', 'windows-dropdown-icon');
}

$('#showDownloadDesktop').on('click', function(e) {
  $('#desktopDownload').modal('show');
  e.preventDefault();
})

$('#showDesktopMailingList').on('click', function(e) {
  $('#desktopMailingList').modal('show');
  e.preventDefault();
})

$('#showWebMailingList').on('click', function(e) {
  $('#webMailingList').modal('show');
  e.preventDefault();
})

$('#showAnnouncementMailingList').on('click', function(e) {
  $('#webMailingList').modal('show');
  e.preventDefault();
})

$('#signUpModal input').each(function() {

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

})(jQuery);
