$("#start_form").submit(function(e){

  $($('.inpt_info')).each(function() {
		var strt_input = $(this).val();
    if(strt_input == "") {
      // $("div.fill_area").css({"display":"block","visibility":"visible","opacity":"1"});
      e.preventDefault();
  }
  });


  // var strt_input = $(".inpt_info").val();
//   if(strt_input == "") {
//     $("div.fill_area").css({"display":"block","visibility":"visible","opacity":"1"});
//     e.preventDefault();
// }

});
// $( document ).click(function() {
//   $("div.fill_area").css({"display":"none","visibility":"hidden","opacity":"0"});
// });