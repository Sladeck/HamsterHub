$(function () {
    $('#upload').submit(function () {

        var erreur = true;
        var url = $(this).find(':text[name="url"]').val();
        var valid = /^(https?\:\/\/)?((www\.)?youtube\.com|youtu\.?be)\/.+$/.test(url);

        if (url && valid ) {
            erreur = false;
        }
        if (erreur === false) {

            var data = $(this).serialize();
            $.ajax({
                url: '/video/upload',
                type: 'POST',
                data: data,
                dataType: 'json',
                success: function (data) {
                  $('.container').prepend(
                    '<div class="post '+data.id+'">'+
                      '<a href="/video/'+data.id+'"><div class="titre"><span>'+data.title+'</span></div></a>'+

                        '<figure>'+
                          '<div class="divIMG">'+
                          '<a href="/video/'+data.id+'">'+
                          '<img src="'+data.url+'" alt="'+data.title+'"><br>'+
                          '</a></div>'+
                          '<table class="tab">'+
                              '<tr>'+
                                  '<td><label class="user">Posté par </label></td>'+
                                  '<td><div class="user-post"><a href="/myVideo/'+data.user+'">'+data.user+'</a></div></td>'+
                              '</tr>'+
                              '<tr>'+
                                  '<td><label class="date">le </label></td>'+
                                  '<td><div class="date-post">'+data.day+'</div></td>'+
                              '</tr>'+
                          '</table>'+
                          '<figcaption>'+data.content+'</figcaption>'+
                        '</figure>');

                }

            });

        } else {
            if (!url) {
                console.log("entrez une url");
            }else{
                if(!valid){
                    console.log("entrez une url valide");
                }
            }
        }
        return false;
    });


    $('.delete').submit(function () {
      var id = $(this).find('input[type=hidden]').val();

      var data = $(this).serialize();
      $.ajax({
          url: '/video/delete',
          type: 'POST',
          data: data,
          dataType: 'json',
          success: function (data) {
            var selecteur = '.'+data.id;
            $(selecteur).remove();
            $( ".post" ).first().css({"background-color" :"rgba(82, 185, 225, 0.4)"});
          }
      });
      return false;

    });

});
