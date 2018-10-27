$(document).ready(function() {
  
  $("div.main_item").each(function() {

      if ("/" + $(this).data('item') == location.pathname) {

          $(this).addClass('selection');
      }

  })
})
