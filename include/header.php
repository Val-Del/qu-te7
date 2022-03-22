<nav class="flex">
    <div class="lundi">
        <a href="index.php?lundi"><button>lundi</button></a>
    </div>
    <div class="mardi">
        <a href="index.php?mardi"><button>mardi</button></a>
    </div>
    <div class="mercredi">
        <a href="index.php?mercredi"><button>mercredi</button></a>
    </div>
    <div class="jeudi">
        <a href="index.php?jeudi"><button>jeudi</button></a>
    </div>
    <div class="vendredi">
        <a href="index.php?vendredi"><button>vendredi</button></a>
    </div>
    <div class="samedi">
        <a href="index.php?samedi"><button>samedi</button></a>
    </div>
    <div class="dimanche">
        <a href="index.php?dimanche"><button>dimanche</button></a>
    </div>
</nav>
<div class="temp">
<?php 
// $exemple1 = array(
//     "NORD" => array("10","20"),
//     "SUD" => array("10","20"),
//     "OUEST" => array("10","20"),
//     "EST" => array("10","20")
// );
// foreach ($exemple1 as $key => $value) { 
//     foreach ($value as $value1){
//         echo "<div id=\"$key\"> $value1 </div>";
//     }
// }

$lundi = array (
    array("NORD","10°","12°","10°","15°"),
    array("SUD","20°","22°","20°","25°"),
    array("OUEST","12°","13°","14°","15°"),
    array("EST","11°","14°","14°","14°")
  );
  
$mardi = array (
    array("NORD","11°","11°","14°","13°"),
    array("SUD","20°","23°","22°","22°"),
    array("OUEST","14°","13°","14°","14°"),
    array("EST","12°","13°","10°","15°")
    );

// $mercredi = array (
//     array("NORD","11°","11°","14°","16°"),
//     array("SUD","18°","18°","19°","20°"),
//     array("OUEST","14°","16°","16°","15°"),
//     array("EST","17°","16°","16°","18°")
//     );

$mercredi = array(
        "NORD" => array("11°","11°","14°","16°"),
        "SUD" => array("18°","18°","19°","20°"),
        "OUEST" => array("14°","16°","16°","15°"),
        "EST" => array("17°","16°","16°","18°")
       );
foreach ($mercredi as $key => $value) { 
    echo "<div id=\"$key\"> $key";
     foreach ($value as $value1){
         echo "<div> $value1 </div>";
     }
     echo "</div>";
 }

$jeudi = array (
    array("NORD","18°","17°","17°","18°"),
    array("SUD","21°","22°","22°","23°"),
    array("OUEST","17°","19°","20°","18°"),
    array("EST","16°","16°","16°","15°")
    );

$vendredi = array (
    array("NORD","14°","14°","14°","19°"),
    array("SUD","19°","18°","18°","19°"),
    array("OUEST","14°","13°","14°","10°"),
    array("EST","10°","12°","10°","15°")
    );

$samedi = array (
    array("NORD","14°","12°","14°","14°"),
    array("SUD","18°","18°","17°","17°"),
    array("OUEST","13°","11°","13°","13°"),
    array("EST","10°","14°","10°","14°")
    );

$dimanche = array (
    array("NORD","12°","12°","12°","12°"),
    array("SUD","18°","18°","17°","17°"),
    array("OUEST","14°","14°","14°","15°"),
    array("EST","10°","14°","10°","14°")
    );


if(isset($_GET['lundi'])) {
    echo '<div class="nord">';
    echo "<div>" . $lundi[0][0] . "</div>" . "<div>" . $lundi [0][1] ."</div>" . "<div>" . $lundi [0][2] ."</div>" . "<div>" . $lundi [0][3] ."</div>" . "<div>" . $lundi [0][4] . "</div>" ."<br>";
    echo "</div>";

    echo '<div class="sud">';
    echo "<div>" . $lundi[1][0] . "</div>" . "<div>" . $lundi [1][1] . "</div>" . "<div>" . $lundi [1][2] . "</div>" . "<div>" . $lundi [1][3] . "</div>" . "<div>" . $lundi [1][4] . "</div>" ."<br>";
    echo "</div>";

    echo '<div class="ouest">';
    echo "<div>" . $lundi[2][0] . "</div>" . "<div>" . $lundi [2][1] . "</div>" . "<div>" . $lundi [2][2] . "</div>" . "<div>" . $lundi [2][3] . "</div>" . "<div>" . $lundi [2][4] . "</div>" ."<br>";
    echo "</div>";


    echo '<div class="est">';
    echo "<div>" . $lundi[3][0] . "</div>" . "<div>". $lundi [3][1] . "</div>" . "<div>" . $lundi [3][2] . "</div>" . "<div>" . $lundi [3][3] . "</div>" . "<div>" . $lundi [3][4] ."<br>" . "</div>";
    echo "</div>";
    
  }

  if(isset($_GET['mardi'])) {
    echo '<div class="nord">';
    echo "<div>" . $mardi[0][0] . "</div>" . "<div>" . $mardi [0][1] ."</div>" . "<div>" . $mardi [0][2] ."</div>" . "<div>" . $mardi [0][3] ."</div>" . "<div>" . $mardi [0][4] . "</div>" ."<br>";
    echo "</div>";

    echo '<div class="sud">';
    echo "<div>" . $mardi[1][0] . "</div>" . "<div>" . $mardi [1][1] . "</div>" . "<div>" . $mardi [1][2] . "</div>" . "<div>" . $mardi [1][3] . "</div>" . "<div>" . $mardi [1][4] . "</div>" ."<br>";
    echo "</div>";

    echo '<div class="ouest">';
    echo "<div>" . $mardi[2][0] . "</div>" . "<div>" . $mardi [2][1] . "</div>" . "<div>" . $mardi [2][2] . "</div>" . "<div>" . $mardi [2][3] . "</div>" . "<div>" . $mardi [2][4] . "</div>" ."<br>";
    echo "</div>";

    echo '<div class="est">';
    echo "<div>" . $mardi[3][0] . "</div>" . "<div>". $mardi [3][1] . "</div>" . "<div>" . $mardi [3][2] . "</div>" . "<div>" . $mardi [3][3] . "</div>" . "<div>" . $mardi [3][4] ."<br>" . "</div>";
    echo "</div>";
    
  }
  if(isset($_GET['mercredi'])) {

    // for($i = 0; $i < count($mercredi); $i++) {
    //     echo $keys[$i];


    //      foreach($mercredi as $value) {
    //      echo $value;
    //  }


    echo $mercredi[0][0] . $mercredi [0][1] . $mercredi [0][2] . $mercredi [0][3] . $mercredi [0][4] ."<br>";
    echo $mercredi[1][0] . $mercredi [1][1] . $mercredi [1][2] . $mercredi [1][3] . $mercredi [1][4] ."<br>";
    echo $mercredi[2][0] . $mercredi [2][1] . $mercredi [2][2] . $mercredi [2][3] . $mercredi [2][4] ."<br>";
    echo $mercredi[3][0] . $mercredi [3][1] . $mercredi [3][2] . $mercredi [3][3] . $mercredi [3][4] ."<br>";
    
    
    
  }
  if(isset($_GET['jeudi'])) {
    echo $jeudi[0][0] . $jeudi [0][1] . $jeudi [0][2] . $jeudi [0][3] . $jeudi [0][4] ."<br>";
    echo $jeudi[1][0] . $jeudi [1][1] . $jeudi [1][2] . $jeudi [1][3] . $jeudi [1][4] ."<br>";
    echo $jeudi[2][0] . $jeudi [2][1] . $jeudi [2][2] . $jeudi [2][3] . $jeudi [2][4] ."<br>";
    echo $jeudi[3][0] . $jeudi [3][1] . $jeudi [3][2] . $jeudi [3][3] . $jeudi [3][4] ."<br>";
    
  }
  if(isset($_GET['vendredi'])) {
    echo $vendredi[0][0] . $vendredi [0][1] . $vendredi [0][2] . $vendredi [0][3] . $vendredi [0][4] ."<br>";
    echo $vendredi[1][0] . $vendredi [1][1] . $vendredi [1][2] . $vendredi [1][3] . $vendredi [1][4] ."<br>";
    echo $vendredi[2][0] . $vendredi [2][1] . $vendredi [2][2] . $vendredi [2][3] . $vendredi [2][4] ."<br>";
    echo $vendredi[3][0] . $vendredi [3][1] . $vendredi [3][2] . $vendredi [3][3] . $vendredi [3][4] ."<br>";
    
  }

  if(isset($_GET['samedi'])) {
    echo $samedi[0][0] . $samedi [0][1] . $samedi [0][2] . $samedi [0][3] . $samedi [0][4] ."<br>";
    echo $samedi[1][0] . $samedi [1][1] . $samedi [1][2] . $samedi [1][3] . $samedi [1][4] ."<br>";
    echo $samedi[2][0] . $samedi [2][1] . $samedi [2][2] . $samedi [2][3] . $samedi [2][4] ."<br>";
    echo $samedi[3][0] . $samedi [3][1] . $samedi [3][2] . $samedi [3][3] . $samedi [3][4] ."<br>";
    
  }
  if(isset($_GET['dimanche'])) {
    echo $dimanche[0][0] . $dimanche [0][1] . $dimanche [0][2] . $dimanche [0][3] . $dimanche [0][4] ."<br>";
    echo $dimanche[1][0] . $dimanche [1][1] . $dimanche [1][2] . $dimanche [1][3] . $dimanche [1][4] ."<br>";
    echo $dimanche[2][0] . $dimanche [2][1] . $dimanche [2][2] . $dimanche [2][3] . $dimanche [2][4] ."<br>";
    echo $dimanche[3][0] . $dimanche [3][1] . $dimanche [3][2] . $dimanche [3][3] . $dimanche [3][4] ."<br>";
    
  }
  




  ?>
  </div>



