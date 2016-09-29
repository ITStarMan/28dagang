   //判断登录及按钮状态

   $.ajax({
      url:'../api/judgeLogin.php',
      type:'GET',
      dataType:'text',
      success:function(data){
         if(data=="true"){
            $("#linkBtn").attr("href","../user/user.html");
            $("#add").attr("href","../api/sendMes.html");
         }else if(data=="false"){
            $("#add").attr("href","javascript:void(0)");
            $("#linkBtn").attr("href","../user/login.html");
            $("#add").on("click",function(){
               alert("请先登录再发言");
            });
         }
      },
   });