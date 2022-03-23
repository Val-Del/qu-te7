<nav class="flex">
    <div class="lundi dropdown">
        <a href="index.php?lundi"><button class="dropbtn">lundi</button></a>
        <div class="dropdown-content">
            <a href="index.php?lhiver" ><button>Hiver</button></a>
            <a href="index.php?lprintemps" ><button>Printemps</button></a>
            <a href="index.php?lété" ><button>Eté</button></a>
            <a href="index.php?lautomne"><button>Automne</button></a>
        </div>
    </div>
    <div class="mardi dropdown">
        <a href="index.php?mardi"><button class="dropbtn">mardi</button></a>
        <div class="dropdown-content">
            <a href="index.php?mahiver" ><button>Hiver</button></a>
            <a href="index.php?maprintemps" ><button>Printemps</button></a>
            <a href="index.php?maété" ><button>Eté</button></a>
            <a href="index.php?maautomne"><button>Automne</button></a>
        </div>
    </div>
    <div class="mercredi dropdown">
        <a href="index.php?mercredi"><button class="dropbtn">mercredi</button></a>
        <div class="dropdown-content">
            <a href="index.php?mehiver" ><button>Hiver</button></a>
            <a href="index.php?meprintemps" ><button>Printemps</button></a>
            <a href="index.php?meété" ><button>Eté</button></a>
            <a href="index.php?meautomne"><button>Automne</button></a>
        </div>
    </div>
    <div class="jeudi dropdown">
        <a href="index.php?jeudi"><button class="dropbtn">jeudi</button></a>
        <div class="dropdown-content">
            <a href="index.php?jhiver" ><button>Hiver</button></a>
            <a href="index.php?jprintemps" ><button>Printemps</button></a>
            <a href="index.php?jété" ><button>Eté</button></a>
            <a href="index.php?jautomne"><button>Automne</button></a>
        </div>
    </div>
    <div class="vendredi dropdown">
        <a href="index.php?vendredi"><button class="dropbtn">vendredi</button></a>
        <div class="dropdown-content">
            <a href="index.php?vhiver" ><button>Hiver</button></a>
            <a href="index.php?vprintemps" ><button>Printemps</button></a>
            <a href="index.php?vété" ><button>Eté</button></a>
            <a href="index.php?vautomne"><button>Automne</button></a>
        </div>
    </div>
    <div class="samedi dropdown">
        <a href="index.php?samedi"><button class="dropbtn">samedi</button></a>
        <div class="dropdown-content">
            <a href="index.php?shiver" ><button>Hiver</button></a>
            <a href="index.php?sprintemps" ><button>Printemps</button></a>
            <a href="index.php?sété" ><button>Eté</button></a>
            <a href="index.php?sautomne"><button>Automne</button></a>
        </div>
    </div>
    <div class="dimanche dropdown">
        <a href="index.php?dimanche"><button class="dropbtn">dimanche</button></a>
        <div class="dropdown-content">
            <a href="index.php?dhiver" ><button>Hiver</button></a>
            <a href="index.php?dprintemps" ><button>Printemps</button></a>
            <a href="index.php?dété" ><button>Eté</button></a>
            <a href="index.php?dautomne"><button>Automne</button></a>
        </div>
    </div>
</nav>
<div class="temp">

<?php 

$lundi = array(
"NORD" => array("10°","12°","10°","15°"),
"SUD" => array("20°","22°","20°","25°"),
"OUEST" => array("12°","13°","14°","15°"),
"EST" => array("11°","14°","14°","14°")
);

$lhiver = array(
    "NORD" => array("0°","2°","0°","5°"),
    "SUD" => array("10°","12°","10°","9°"),
    "OUEST" => array("2°","3°","4°","5°"),
    "EST" => array("1°","4°","4°","4°")
    );
if(isset($_GET['lhiver'])) {
    foreach ($lhiver as $key => $value) { 
        echo "<div id=\"$key\" class=\"lhiver\"> $key";
            foreach ($value as $value1){
                echo "<div> $value1 </div>";
            }
            echo "</div>";
        }
} 

$lprintemps = array(
    "NORD" => array("10°","12°","10°","15°"),
    "SUD" => array("20°","22°","20°","25°"),
    "OUEST" => array("12°","13°","14°","15°"),
    "EST" => array("11°","14°","14°","14°")
    );

if(isset($_GET['lprintemps'])) {
    foreach ($lprintemps as $key => $value) { 
        echo "<div id=\"$key\" class=\"lprintemps\"> $key";
            foreach ($value as $value1){
                echo "<div> $value1 </div>";
            }
            echo "</div>";
        }
} 
$lété = array(
    "NORD" => array("30°","32°","30°","35°"),
    "SUD" => array("30°","32°","30°","35°"),
    "OUEST" => array("32°","33°","34°","35°"),
    "EST" => array("31°","34°","34°","34°")
    );

if(isset($_GET['lété'])) {
    foreach ($lété as $key => $value) { 
        echo "<div id=\"$key\" class=\"lété\"> $key";
            foreach ($value as $value1){
                echo "<div> $value1 </div>";
            }
            echo "</div>";
        }
} 
$lautomne = array(
    "NORD" => array("10°","12°","10°","15°"),
    "SUD" => array("10°","12°","10°","15°"),
    "OUEST" => array("12°","13°","14°","15°"),
    "EST" => array("11°","14°","14°","14°")
    );

if(isset($_GET['lautomne'])) {
    foreach ($lautomne as $key => $value) { 
        echo "<div id=\"$key\" class=\"lautomne\"> $key";
            foreach ($value as $value1){
                echo "<div> $value1 </div>";
            }
            echo "</div>";
        }
} 
//----------------mardi---------------
$mardi = array(
    "NORD" => array("11°","11°","14°","13°"),
    "SUD" => array("20°","23°","22°","22°"),
    "OUEST" => array("14°","13°","14°","14°"),
    "EST" => array("12°","13°","10°","15°")
    );

$mahiver = array(
    "NORD" => array("1°","1°","4°","3°"),
    "SUD" => array("0°","3°","4°","4°"),
    "OUEST" => array("4","3°","4°","4°"),
    "EST" => array("2°","3°","0°","5°")
    );
if(isset($_GET['mahiver'])) {
    foreach ($mahiver as $key => $value) { 
        echo "<div id=\"$key\" class=\"mahiver\"> $key";
            foreach ($value as $value1){
                echo "<div> $value1 </div>";
            }
            echo "</div>";
        }
} 
$maprintemps = array(
    "NORD" => array("11°","11°","14°","13°"),
    "SUD" => array("20°","23°","22°","22°"),
    "OUEST" => array("14","13°","14°","14°"),
    "EST" => array("12°","13°","10°","15°")
    );
if(isset($_GET['maprintemps'])) {
    foreach ($maprintemps as $key => $value) { 
        echo "<div id=\"$key\" class=\"maprintemps\"> $key";
            foreach ($value as $value1){
                echo "<div> $value1 </div>";
            }
            echo "</div>";
        }
} 
$maautomne = array(
    "NORD" => array("1°","2°","0°","5°"),
    "SUD" => array("1°","12°","0°","15°"),
    "OUEST" => array("2°","13°","14°","5°"),
    "EST" => array("11°","1°","14°","14°")
    );

if(isset($_GET['maautomne'])) {
    foreach ($maautomne as $key => $value) { 
        echo "<div id=\"$key\" class=\"maautomne\"> $key";
            foreach ($value as $value1){
                echo "<div> $value1 </div>";
            }
            echo "</div>";
        }
} 
//---------------------- mercredi-----------------
$mercredi = array(
    "NORD" => array("11°","15°","14°","16°"),
    "SUD" => array("18°","18°","19°","20°"),
    "OUEST" => array("14°","16°","16°","15°"),
    "EST" => array("17°","16°","16°","18°")
    );

$mehiver = array(
    "NORD" => array("1°","5°","4°","6°"),
    "SUD" => array("8°","8°","9°","0°"),
    "OUEST" => array("4","6°","6°","5°"),
    "EST" => array("7°","6°","6°","8°")
    );
if(isset($_GET['mehiver'])) {
    foreach ($mehiver as $key => $value) { 
        echo "<div id=\"$key\" class=\"mehiver\"> $key";
            foreach ($value as $value1){
                echo "<div> $value1 </div>";
            }
            echo "</div>";
        }
} 

$meprintemps = array(
"NORD" => array("11°","15°","14°","16°"),
"SUD" => array("18°","18°","19°","20°"),
"OUEST" => array("14°","16°","16°","15°"),
"EST" => array("17°","16°","16°","18°")
);
if(isset($_GET['meprintemps'])) {
    foreach ($meprintemps as $key => $value) { 
        echo "<div id=\"$key\" class=\"meprintemps\"> $key";
            foreach ($value as $value1){
                echo "<div> $value1 </div>";
            }
            echo "</div>";
        }
} 
$meété = array(
    "NORD" => array("31°","35°","34°","36°"),
    "SUD" => array("38°","38°","39°","30°"),
    "OUEST" => array("34°","36°","36°","35°"),
    "EST" => array("37°","36°","36°","38°")
    );
    if(isset($_GET['meété'])) {
        foreach ($meété as $key => $value) { 
            echo "<div id=\"$key\" class=\"meété\"> $key";
                foreach ($value as $value1){
                    echo "<div> $value1 </div>";
                }
                echo "</div>";
            }
    } 
$meautomne = array(
    "NORD" => array("1°","5°","14°","16°"),
    "SUD" => array("3°","8°","19°","10°"),
    "OUEST" => array("4°","6°","16°","25°"),
    "EST" => array("3°","6°","16°","18°")
    );
    if(isset($_GET['meautomne'])) {
        foreach ($meautomne as $key => $value) { 
            echo "<div id=\"$key\" class=\"meautomne\"> $key";
                foreach ($value as $value1){
                    echo "<div> $value1 </div>";
                }
                echo "</div>";
            }
    } 

//----------------------jeudi------

$jeudi = array(
"NORD" => array("18°","17°","17°","18°"),
"SUD" => array("21°","22°","22°","23°"),
"OUEST" => array("17°","19°","20°","18°"),
"EST" => array("16°","16°","16°","15°")
);
$jhiver = array(
    "NORD" => array("8°","7°","7°","8°"),
    "SUD" => array("8°","8°","7°","9°"),
    "OUEST" => array("7°","9°","0°","8°"),
    "EST" => array("6°","6°","6°","5°")
    );
if(isset($_GET['jhiver'])) {
    foreach ($jhiver as $key => $value) { 
        echo "<div id=\"$key\" class=\"jhiver\"> $key";
            foreach ($value as $value1){
                echo "<div> $value1 </div>";
            }
            echo "</div>";
        }
} 
$jprintemps = array(
    "NORD" => array("18°","17°","17°","18°"),
    "SUD" => array("21°","22°","22°","23°"),
    "OUEST" => array("17°","19°","20°","18°"),
    "EST" => array("16°","16°","16°","15°")
    );
if(isset($_GET['jprintemps'])) {
    foreach ($jprintemps as $key => $value) { 
        echo "<div id=\"$key\" class=\"jprintemps\"> $key";
            foreach ($value as $value1){
                echo "<div> $value1 </div>";
            }
            echo "</div>";
        }
} 
$jété = array(
    "NORD" => array("48°","47°","47°","48°"),
    "SUD" => array("41°","42°","42°","43°"),
    "OUEST" => array("47°","49°","40°","48°"),
    "EST" => array("46°","46°","46°","45°")
    );
if(isset($_GET['jété'])) {
    foreach ($jété as $key => $value) { 
        echo "<div id=\"$key\" class=\"jété\"> $key";
            foreach ($value as $value1){
                echo "<div> $value1 </div>";
            }
            echo "</div>";
        }
} 
$jautomne = array(
    "NORD" => array("38°","37°","37°","38°"),
    "SUD" => array("31°","32°","32°","33°"),
    "OUEST" => array("37°","39°","30°","38°"),
    "EST" => array("36°","36°","36°","35°")
    );
if(isset($_GET['jautomne'])) {
    foreach ($jautomne as $key => $value) { 
        echo "<div id=\"$key\" class=\"jautomne\"> $key";
            foreach ($value as $value1){
                echo "<div> $value1 </div>";
            }
            echo "</div>";
        }
} 
//---------------------------------vendredi---------------

$vendredi = array(
"NORD" => array("14°","14°","14°","15°"),
"SUD" => array("21°","22°","22°","23°"),
"OUEST" => array("14°","13°","14°","10°"),
"EST" => array("10°","12°","10°","15°")
);
$vhiver = array(
    "NORD" => array("14°","14°","14°","15°"),
    "SUD" => array("21°","22°","22°","23°"),
    "OUEST" => array("14°","13°","14°","10°"),
    "EST" => array("10°","12°","10°","15°")
    );
if(isset($_GET['vhiver'])) {
    foreach ($vhiver as $key => $value) { 
        echo "<div id=\"$key\" class=\"vhiver\"> $key";
            foreach ($value as $value1){
                echo "<div> $value1 </div>";
            }
            echo "</div>";
        }
} 
$vprintemps = array(
    "NORD" => array("14°","14°","14°","15°"),
    "SUD" => array("21°","22°","22°","23°"),
    "OUEST" => array("14°","13°","14°","10°"),
    "EST" => array("10°","12°","10°","15°")
    );
if(isset($_GET['vprintemps'])) {
foreach ($vprintemps as $key => $value) { 
echo "<div id=\"$key\" class=\"vprintemps\"> $key";
    foreach ($value as $value1){
        echo "<div> $value1 </div>";
    }
    echo "</div>";
}
} 

$vété = array(
"NORD" => array("14°","14°","14°","15°"),
"SUD" => array("21°","22°","22°","23°"),
"OUEST" => array("14°","13°","14°","10°"),
"EST" => array("10°","12°","10°","15°")
);
if(isset($_GET['vété'])) {
foreach ($vété as $key => $value) { 
    echo "<div id=\"$key\" class=\"vété\"> $key";
        foreach ($value as $value1){
            echo "<div> $value1 </div>";
        }
        echo "</div>";
    }
} 
$vautomne = array(
"NORD" => array("14°","14°","14°","15°"),
"SUD" => array("21°","22°","22°","23°"),
"OUEST" => array("14°","13°","14°","10°"),
"EST" => array("10°","12°","10°","15°")
);
if(isset($_GET['vautomne'])) {
    foreach ($vautomne as $key => $value) { 
        echo "<div id=\"$key\" class=\"vautomne\"> $key";
            foreach ($value as $value1){
                echo "<div> $value1 </div>";
            }
            echo "</div>";
        }
} 


$samedi = array(
"NORD" => array("14°","12°","14°","14°"),
"SUD" => array("18°","18°","19°","20°"),
"OUEST" => array("14°","16°","16°","15°"),
"EST" => array("17°","16°","16°","18°")
);
$dimanche = array(
"NORD" => array("12°","12°","12°","12°"),
"SUD" => array("18°","18°","17°","17°"),
"OUEST" => array("14°","14°","14°","15°"),
"EST" => array("10°","14°","10°","14°")
);

if(isset($_GET['lundi'])) {
foreach ($lundi as $key => $value) { 
    echo "<div id=\"$key\"> $key";
     foreach ($value as $value1){
         echo "<div> $value1 </div>";
     }
     echo "</div>";
 }
}
if(isset($_GET['mardi'])) {
foreach ($mardi as $key => $value) { 
echo "<div id=\"$key\"> $key";
    foreach ($value as $value1){
        echo "<div> $value1 </div>";
    }
    echo "</div>";
}
}
if(isset($_GET['mercredi'])) {
foreach ($mercredi as $key => $value) { 
echo "<div id=\"$key\"> $key";
    foreach ($value as $value1){
        echo "<div> $value1 </div>";
    }
    echo "</div>";
}
}
if(isset($_GET['jeudi'])) {
foreach ($jeudi as $key => $value) { 
echo "<div id=\"$key\"> $key";
    foreach ($value as $value1){
        echo "<div> $value1 </div>";
    }
    echo "</div>";
}
}
if(isset($_GET['vendredi'])) {
foreach ($vendredi as $key => $value) { 
echo "<div id=\"$key\"> $key";
    foreach ($value as $value1){
        echo "<div> $value1 </div>";
    }
    echo "</div>";
}
}
if(isset($_GET['samedi'])) {
foreach ($samedi as $key => $value) { 
echo "<div id=\"$key\"> $key";
    foreach ($value as $value1){
        echo "<div> $value1 </div>";
    }
    echo "</div>";
}
}

if(isset($_GET['dimanche'])) {
foreach ($dimanche as $key => $value) { 
echo "<div id=\"$key\"> $key";
    foreach ($value as $value1){
        echo "<div> $value1 </div>";
    }
    echo "</div>";
}
}
?>
</div>

 