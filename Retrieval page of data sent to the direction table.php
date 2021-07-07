<?php


$connection =mysqli_connect('localhost' ,'root','','db for control device');
            $get_news_sql = "SELECT * FROM `direction`";
            $get_news_sql = mysqli_query($connection, $get_news_sql);
            while ($row = mysqli_fetch_array($get_news_sql)) 
            {
               echo $row['R'];
               echo "<br>";
               echo $row['L'];
               echo "<br>";
               echo $row['backward'];
               echo "<br>";
               echo $row['forward'];
               echo "<br>";
               echo $row['stop'];
               
               
            
            
            }
          ?>

   