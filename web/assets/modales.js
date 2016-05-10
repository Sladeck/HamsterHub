$(function(){

var modal = $(".modal-content");

/***********************************************/
  var uploadPopUp = $(".uploadPopUp");

  $("#postVids").click(function(){
      $(uploadPopUp).show("slow");
  });

  $(".close").click(function(){
    $(uploadPopUp).hide(200);
  });

  $(document).mouseup(function (e)
  {
    if (!modal.is(e.target) && modal.has(e.target).length === 0) // ... nor a descendant of the container
    {
        uploadPopUp.hide(200);
    }
  });
/*********************************************/
  var loginPopUp = $(".loginPopUp");

  $("#logIn").click(function(){
    $(loginPopUp).show("slow");
  });

  $(".close").click(function(){
    $(loginPopUp).hide(200);
  });

  $(document).mouseup(function (e)
  {
    if (!modal.is(e.target) && modal.has(e.target).length === 0) // ... nor a descendant of the container
    {
        loginPopUp.hide(200);
    }
  });
/***********************************************/
var registerPopUp = $(".registerPopUp");

  $("#register").click(function(){
    $(registerPopUp).show("slow");
  });

  $(".close").click(function(){
    $(registerPopUp).hide(200);
  });

  $(document).mouseup(function (e)
  {
    if (!modal.is(e.target) && modal.has(e.target).length === 0) // ... nor a descendant of the container
    {
        registerPopUp.hide(200);
    }
  });
/*********************************************/
});
