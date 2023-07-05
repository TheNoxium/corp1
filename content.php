Ваш Логин:
<?php echo htmlspecialchars($user['Login']); ?><br>

<html>
<head>
<title>Реле управлениея главным шлюзом</title>

 <script>  
        function show()  
        {  
            
             
             $.ajax({  
                url: "transfer/ledstate.php",  
                cache: false,  
                success: function(html){  
                    $("#content-2").html(html); 
                }
             }); 

             
             
        }
        
        $(document).ready(function(){  
            show();  
            setInterval('show()',500);  
        }); 
        
 
      function AjaxFormRequest(result_id,led,url) {
      jQuery.ajax({
      url:     url,
      type:     "POST",
      dataType: "html",
      data: jQuery("#"+led).serialize(),
         });
           
        }
        
        function show2()  
        {  

        $.ajax({  
                url: "transfer/ledstate2.php",  
                cache: false,  
                success: function(html){  
                    $("#content-3").html(html); 
                }
             }); 

            }

        $(document).ready(function(){  
            show();  
            setInterval('show2()',500);  
        }); 
        
 
      function AjaxFormRequest(result_id,led2,url) {
      jQuery.ajax({
      url:     url,
      type:     "POST",
      dataType: "html",
      data: jQuery("#"+led2).serialize(),
         });
         
}

function show3()  
        {  
            
             
             $.ajax({  
                url: "transfer/ledstate3.php",  
                cache: false,  
                success: function(html){  
                    $("#content-1").html(html); 
                }
             }); 

             
             
        }
        
        $(document).ready(function(){  
            show();  
            setInterval('show3()',500);  
        }); 
        
 
      function AjaxFormRequest(result_id,led3,url) {
      jQuery.ajax({
      url:     url,
      type:     "POST",
      dataType: "html",
      data: jQuery("#"+led3).serialize(),
         });
           
        }




</script>
    
    
    
</head>
    <body>
          
    <div class="r">
        <div class="rl">
        <p class="r1">Главнй шлюз</p>
        <div class="r2" style="font-size:15px" >
        <form  id="led" action="" method="post"  >
        <label><input type="radio" name="status" value="1"> ОТКР </label>
        <label><input type="radio" name="status" value="0"> ЗАКР </label>
        <br>
        <input class="submitButton" type="submit" value="Отправить" onclick="AjaxFormRequest('messegeResult', 'led', 'transfer/led.php')" >
        </form>
        </div>
        </div>
          
          <div class="rr">
          <p class="r1">Состояние</p>
          <div class="r2"style="font-size:35px" >
          <div class="r3" id="content-2"></div> 
          </div>
          </div>
        </div>

        <div class="r">
          <div class="rl">
          <p class="r1">Тенический отсек</p>
          <div class="r2" style="font-size:15px" >
          <form  id="led2" action="" method="post"  >
          <label><input type="radio" name="status" value="1"> ОТКР </label>
          <label><input type="radio" name="status" value="0"> ЗАКР </label>
          <br>
          <input class="submitButton" type="submit" value="Отправить" onclick="AjaxFormRequest('messegeResult', 'led2', 'transfer/led2.php')" >
          </form>
          </div>
          </div>
            
            <div class="rr">
            <p class="r1">Состояние</p>
            <div class="r2"style="font-size:5px" >
            <div class="r3" id="content-3"></div> 
            </div>
            </div>
          </div>

          <div class="r">
          <div class="rl">
          <p class="r1">Научный блок</p>
          <div class="r2" style="font-size:15px" >
          <form  id="led3" action="" method="post"  >
          

          <label><input type="radio" name="status" value="1"> ОТКР</label>
          <label><input type="radio" name="status" value="0"> ЗАКР </label>
          <br>
          <input class="submitButton" type="submit" value="Отправить" onclick="AjaxFormRequest('messegeResult', 'led3', 'transfer/led3.php')" >
          </form>
          </div>
          </div>
            
            <div class="rr">
            <p class="r1">Состояние</p>
            <div class="r2"style="font-size:35px" >
            <div class="r3" id="content-1"></div> 
            </div>
            </div>
          </div>

        




        
        
   </body>
</html> 


