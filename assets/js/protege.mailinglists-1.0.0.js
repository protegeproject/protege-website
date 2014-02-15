(function($) {

  // Protege User mailing list

  // Show Protege User mailing list modal dialog
  $('#showProtegeUserMailingList').on('click', function(event) {
    $('#protegeUserMailingList').modal('show');
    event.preventDefault();
  })

  // Subscribe to Protege User mailing list
  $("#signUpProtegeUserList").on("click", function(event) {
    submitSubscribeRequest("https://mailman.stanford.edu/mailman/subscribe/protege-user", "protegeUserSubscribe");
    $("#protegeUserMailingList").modal('hide');
    event.preventDefault();
  })

  // Protege Developer mailing list

  // Show Protege Developer mailing list modal dialog
  $('#showProtegeDevMailingList').on('click', function(e) {
    $('#protegeDevMailingList').modal('show');
    e.preventDefault();
  })

  // Subscribe to Protege Developer mailing list
  $("#signUpProtegeDevList").on("click", function(event) {
    submitSubscribeRequest("https://mailman.stanford.edu/mailman/subscribe/protege-dev", "protegeDevSubscribe");
    $("#protegeDevMailingList").modal('hide');
    event.preventDefault();
  })

  // Protege Announce mailing list

  // Show Protege Announce mailing list modal dialog
  $('#showAnnouncementMailingList').on('click', function(e) {
    $('#announcementMailingList').modal('show');
    e.preventDefault();
  })

  // Subscribe to Protege Announce mailing list
  $("#signUpProtegeAnnounceList").on("click", function(event) {
    submitSubscribeRequest("https://mailman.stanford.edu/mailman/subscribe/protege-announce", "protegeAnnounceSubscribe");
    $("#announcementMailingList").modal('hide');
    event.preventDefault();
  })

  // Helpers

  $(".close-modal").on("click", function(event) {
    var $cancelButton = $(this);
    var formId = $cancelButton.data("related_form")
    
    // Reset content for all inputs on the form.
    $("#" + formId).find("input").each(function() {
      $(this).val("");
    })

    // Remove radio button selections.
    $("#" + formId).find("input:radio:checked").removeAttr("checked");
  })

  function submitSubscribeRequest(listURL, formID) {
    $.ajax({
      type: "POST",
      url: listURL,
      data: $("#" + formID).serialize()
    });
  }

})(jQuery);
