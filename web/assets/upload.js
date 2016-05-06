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
                  location.reload("http://127.0.0.1:8000/");
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


    $('#delete').submit(function () {
      var id = $(this).find('input[type=hidden]').val();

      var data = $(this).serialize();
      $.ajax({
          url: '/video/delete',
          type: 'POST',
          data: data,
          dataType: 'json',
          success: function (data) {
            window.location.reload("/");
          }
      });
      return false;

    });

});
