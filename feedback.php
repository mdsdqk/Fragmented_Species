<html>
<head>
<style>
.bg{position:fixed;left:0px;right:0px;top:0px;bottom:0px;height:100%;width:100%;margin:0px;z-index:-99}
.fb{position:relative;padding:30px;width:50%;margin:20px;background:#F0D9D7;left:15%}
h1{color:#00E676;font-size:48px;text-align:center}
img{height:20px}
#prio{background:white}
.bac{position:absolute;top:0px;left:0px;height:40px;width:40px;margin:10px}

</style>
</head>

<body>

<img src="assets/backgr.jpg" class="bg" id="bg" />

<h1>Thank You For Your Feedback!</h1>

<a href="http://localhost:8080/feedback.html">
<img src="assets/prev.png" class="bac"/>
</a>

<?php 


extract($_GET);
        $con = mysqli_connect('localhost', 'root', '', 'newdb');
        $sql = "Insert into student values('$review','$rating','$name')";
        mysqli_query($con, $sql);

             echo "<div class='fb' id='prio'>";
                echo "<h2>".$review."</h2>";
                echo "<h2>".$rating."/5</h2>";
                echo "<h2>"."-----".$name."</h2>";
                echo "</div>";


$con = mysqli_connect('localhost', 'root', '', 'newdb');
$sql = "Select *from student where (review!='$review' || name!='$name')";
    $res = mysqli_query($con, $sql);
$j=0;
            while($row=mysqli_fetch_assoc($res))
            {
                $j++;
                echo "<div class='fb'>";
                echo "<h2>".$row['review']."</h2>";
                echo "<h2>".$row['rating']."/5</h2>";
                
/*
                echo"
                <script>
                var md = document.createElement('div');
                md.setAttribute('id','abc'+$j);
                for(i=0;i<5;i++)
                {
                    var image = document.createElement('img');
                    image.setAttribute('src','Star Filled-104 (1).png');
                    image.setAttribute('id','star_'+i);
                    image.setAttribute('class','star');

                    md.appendChild(image);
                    }
          
        for(i=0;i<1;i++)
             document.getElementById('star_'+i).src='Star Filled-104.png';

            
                </script>";

*/

                echo "<h2>"."-----".$row['name']."</h2>";
                echo"</div>";

            
            }
        
   
?>
</body>

</html>
