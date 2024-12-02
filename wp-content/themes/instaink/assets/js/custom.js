$( document ).ready(function() {
    console.log( "ready!" );

    $('#article-generator-form').on('submit', function () {
		var _loadingDiv = $('.loading-content');
		var _placeHolderTextDiv = $('.placeholder-text');
		var _placeHolderWrapDiv = $('.article-placehoder-wrap');

      var data = {};

        const topic = $('#article-generator-title').val().trim();

        data.mainKeyword = topic;
        // const keywords = $('#article-generator-keywords').val();
        var subKeywords = $('#article-generator-sub-keywords').val().trim();
        if (subKeywords) {
          subKeywords = subKeywords.split(',');
          data.subKeywords = subKeywords;
        }

        var settings = {
            "url": "https://content.instaink.cloud/content-ai",
            "method": "POST",
            "headers": {
              "Content-Type": "application/json",
              "x-api-key": "TRIAL",
            },
            "data": JSON.stringify(data),
          };

         // $("#article-generator-result").html("In progressing...");
		  _loadingDiv.show();
		  _placeHolderTextDiv.hide();
          
          $.ajax(settings).done(function (response) {
            console.log(response);
            if (response.status === 'ok') {
              var html = '<div><strong>1. Title: </strong> '+ response.data.title +'</div>';
              html += '<div><strong>2. Meta title: </strong> '+ response.data.meta.title +'</div>';
              html += '<div><strong>3. Meta description: </strong> '+ response.data.meta.description +'</div>';
              html += '<div class="article-result-body"><strong>4. Body: </strong><div> '+ response.data.body.replace(/\n/g, "<br />") +'</div></div>';
              $("#article-generator-result").html(html);
			  
			  _placeHolderWrapDiv.hide();
            }
          })
          .fail(function (jqXHR, textStatus, errorThrown) {
            console.error("Lỗi:", textStatus, errorThrown);
            $("#article-generator-result").html("");
            // Hiển thị thông báo lỗi cho người dùng
            alert("Có lỗi xảy ra khi gửi yêu cầu. Vui lòng thử lại!");
          });


      
          return false;
    })
});