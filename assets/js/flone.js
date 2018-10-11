// ==========================
// OPEN PAGE IN A NEW TAB
// ==========================
var windowObjectReference = null; // global variable
function openRequestedPopup(strUrl) {
  windowObjectReference = window.open(strUrl, '_blank');
  windowObjectReference.focus();
}
// ==========================
// LOAD PAGE IN A DIV
// ==========================
function loadDetails(btnDiv, contentDiv, detailPage,btnName){
  $("#"+contentDiv).load(detailPage);
  $("#"+btnDiv).find('a').each(function() {
    $(this).removeClass('active');
  });
  $("#"+btnName).addClass('active');
}
+function ($) {
  // $(window).on('load', function () {
  //   $('[data-spy="affix"]').each(function () {
  //     var $spy = $(this)
  //     var data = $spy.data()

  //     data.offset = data.offset || {}

  //     if (data.offsetBottom) data.offset.bottom = data.offsetBottom
  //     if (data.offsetTop)    data.offset.top    = data.offsetTop

  //     $spy.affix(data)
  //   })
  // })
}(jQuery);

