<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Document</title> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <style>
  nav a {
  font-size: 1.5rem;
  color: #f9f8eb;
  text-transform: uppercase;
  
}

.container {
  width: 90%;
  max-width: 900px;
  margin: 0 auto;
}
.container-nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
 
}
header {
background-color: #05004e;
padding: 0.8em 0;
box-shadow: 2px 2px 10px #f1f6f9;
}
nav ul {
list-style: none;
padding: 0;
display: flex;
}
 nav li {
margin-left: 7em;
}
 nav a {
  text-decoration: none;
}

nav a:hover,
nav a:focus {
  color: #fd5f00;
}
@media (max-width: 640px) {
  .container {
    text-align: center;
  }

  .container-nav {
    flex-direction: column;
  }

  nav ul {
    flex-direction: column;
  }

  nav li {
    margin: 0.8em 0;
  }
}
.animate-charcter
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  --text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 90px;
}
p{
  font-family: 'Brush Script MT', 'Brush Script Std',cursive;
  font-weight:bold;
  color:white;
  text-shadow:1px 1px white;
  font-size:30px;
} 
@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
body{
   background-color:white;
}
table{
  background-color:white;
}
y
  </style>
  </head>
  <div class="container">
  <div class="row">
    <div class="col-md-12 text-center">
      <h3 class="animate-charcter"> LIVE SCORE</h3>
    </div>
  </div>
</div> 
<header>
<div class="sticky-top">
  <div class="container container-nav">
  <div class="sticky-top">
    <nav>
      <ul>
        <li><a href="home.php">HOME</a></li>
        <li><a href="highlights.php">HIGHLIGHTS</a></li>
        <li><a href="standing.php">STANDINGS</a></li>
      </ul>
    </nav>
    </div>
</div>
</header>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
  
        
            <style>  
          table.wrapper{ 
        max-height:240px; 
        border:3px blue; 
        display:flex;  
        overflow-x:auto; 
        overflow-y:hidden; 
        font-size:20px; 
        width:100%;   
        border-spacing:30px; 
        padding-top:0px;  
        white-space:nowrap;  
        background-color:white;
        position:sticky;
        top:73px;
      
          }
          wrapper::webkit-scrollbar{  
            width:0;
           
          }
          ab:hover{
            border:15px solid blue;
          } 
            </style>
            <div style="background-color:blue;">
            <p style="background-color:blue;">
          FIXED MATCHES
THESE ARE FOOTBALL MATCHES OUTCOMES THAT HAVE BEEN INFLUENCED BY THE TOP GUYS TO HAPPEN.
FOR EACH OUTCOMES THERE IS AVERAGE OF 960,000$ PLACED ON THEM.
WE HELP YOU DETECT THEM AND SHOW YOU, TO EITHER AVOID PLAYING AGAINST IT OR NOT
THE CHOICE IS IN YOUR HANDS
          </p></div>
            <hr>
         
      <table class="wrapper" style="background-color:bisque;"> <div class="sticky-top">
        <tr><th> </th><th style="color:black; font-size:30px;" class="tab1">FOOTBALL PREDICTIONS FILTER </th><th></th><th></th><th></th>
      </tr> 
      <tr><td></td><td></td> <td></td> <td></td> <td></td> <td></tr><tr></td> <td></td> <td></td> <td></td> <td></td> <td></td> </tr></div>
        </div>
      <?php 
       echo"<div class='sticky-top'>"; 
      $conn = mysqli_connect("localhost","root","","soccer"); 
      $sql = "SELECT `id`, `Gametype`, `Team1`, `Team2`,`Amountplaced` FROM `input data` WHERE 1"; 
      $team2=$conn->query($sql);      
      if($team2-> num_rows > 0){  
        while($row = $team2-> fetch_assoc()){   
          echo" <div class='wrapper';>";  
           
          echo"<div class='ab' style =' display:flex;white-space:no-wrap justify-content:space-between; align-items:center;'>";  echo"<td style='min-height:100px; box-sizing:border-box; padding:30px; padding-top:0px; padding-left:0px; padding-right:60px;padding-bottom:0px;border:3px dotted black;'>"; echo "<b>";echo $row["Gametype"];echo "</b>";echo "<br>";  echo"</div>";
          echo"<div class='ab'style =' display:flex; justify-content:center; align-items:center;'>";  echo $row["Team1"]; echo"&nbsp;";  echo"vs";echo"&nbsp;";   echo $row["Team2"];echo "<br>";echo "AVERAGE AMOUNT STAKED:";echo $row["Amountplaced"]; echo"</td>";  
 echo "</div>";  echo "</div>";   echo "</div>"; 
 
                    }
    }  
    $conn->close(); 
    echo"</div>";?>
    
  </table>
</head> 
<hr> 
<body>
    <iframe src="https://www.scorebat.com/embed/livescore/" frameborder="0" width="600" height="760" allowfullscreen allow='autoplay; fullscreen' style="width:600px;height:760px;overflow:hidden;display:block;" class="_scorebatEmbeddedPlayer_"></iframe><script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = 'https://www.scorebat.com/embed/embed.js?v=arrv'; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'scorebat-jssdk'));</script> 
    </body>  
    </html>