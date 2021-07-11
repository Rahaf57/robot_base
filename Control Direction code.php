<!DOCTYPE html>
<head>
    <meta charset="utf-8">
</head>
<style>
    button {
    background-color: #f6f9fa;
    border: none;
    color: rgb(242, 246, 248);
    padding: 20px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin: 8px 4px;
    cursor: pointer;
    
  }
  div{
    width: 300px;
  background-color: rgb(229, 248, 244);
  }
  div.ex2 {
  border: 1px solid black;
  width: 300px;
  height: 120px;
  padding: 25px ;
  background-color: lightblue;
}
  #Forward1{
      position: relative;
      left: 2px;
         
  }
  #Left1{
      position: absolute;
      left: 400px;
      top: 195px;
      
     
      
      
  }
  #Stop{
      position: absolute;
      left: 100px;
      top: 8px;
      
      

  }
  #Right1{
      position: absolute;
      left: 550px;
      top: 195px;
      
      
  }
  #Backward1{
      position: relative;
      left: 2pt;
      
      
  }
 </style>
<body>

    <center>
        <form action="Control Direction code.php" method="post">
        <div class="ex1">
        <p class= "d" style="font-size:40px;"> Control Direction </p> </div>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    
        <div class="ex2">
    <input class="Fd" type="submit" value="FORWARD" name="Forward" id="Forward1" width: 350px; > </button>  
       
    <input class="right" type="submit" value="RIGHT" name="Right" id="Right1" width: 350px; > </button> 
    <br>
    <br>
    
    
    
    <input class="stopp" type="submit" value="STOP" name="Stop" id="Stop1" width: 350px; > </button>  
    
    <br>
    <br>
    
    <input class="Bd" type="submit" value="BACKWARD" name="Backward" id="Backward1" width: 350px; > </button>  
        
        <br>
        <br> 
   
    <input class="left1" type="submit" value="LEFT" name="Left" id="Left1" width: 350px;> </button>  
    
    </center>
</div>

</form>

<script>
  window.watsonAssistantChatOptions = {
      integrationID: "4c89b4e1-f581-498c-b180-7edc42738e07", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "bb280831-75f9-4f3f-9d23-d80a2328b9a0", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
</script>

  
</body>
 </html>

 <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "db for control device";
 
 try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $conn->beginTransaction();
   
   $conn->exec("INSERT INTO direction (stop , forward , backward , R , L)
  VALUES ('stop' ,'forward' , 'backward' , 'right' , 'left')");

  $conn->commit();
  /*echo "New record right created successfully";*/
 } catch(PDOException $e) {

    $conn->rollback();
    echo "Error: " . $e->getMessage();
  
 }
 
 $conn = null;

 ?>
 
 
