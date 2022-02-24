<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>jquery 로그인</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
  <form action="login_ok.php" name="form1" id="from1" method="post">
    <table>
      <tr>
        <td>아이디</td>
        <td><input type="text" id="userId" name="userId" tabindex="10"></td>
        <td rowspan="2"><input type="button" id="login" tabindex="30" value="로그인" style="height: 50px;"></td>
      </tr>
      <tr>
        <td>비밀번호</td>
        <td><input type="password" id="userId" name="userId" tabindex="20"></td>
      </tr>
    </table>
  </form>
  <div id="message"></div>

  <script>
    $(document).ready(function(){
      $("#login").on("click",function(){
        let action = $("#form1").attr('action');
        let form_data = {
          userId: $("#userId").val(),
          userPw: $('#userPw').val(),
          is_ajax: 1
        };

        $.ajax({
          type: 'post',
          url: action,
          data:form_data,
          success: function(response){
            if(response == 'success'){
              $("#message").html(`<p>로그인 성공</p>`);
              $("#form1").slideUp('slow');
            }else{
              $("#message").html(`<p>로그인 실패</p>`);
            }
          }
        });

      });
    });
  </script>
</body>
</html>