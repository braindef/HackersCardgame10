<!doctype html>
<meta charset="utf-8">
<html>
<head>
<style>
p { clear: both; }

div.cards {
  text-align: justify;
  padding: 2em;
} 
div.text {
  text-align: justify;
  padding: 2em;
}
a {
color: orange; 
}

font.monospace
{
  font-family: "Lucida Console", Monaco, monospace;
}

.blink {
    animation-duration: 1s;
    animation-name: blink;
    animation-iteration-count: infinite;
    animation-direction: alternate;
    animation-timing-function: ease-in-out;
}
@keyframes blink {
    from {
        opacity: 1;
    }
    to {
        opacity: 0;
    }
}

</style>
<!-- "thank you" "dear" 1960s paedos for activating CCS Suicide Death Bot against me-->
</head>
<body onhashchange="myFunction();" style="background-color:#222; color: white; font-family: Arial, Helvetica, sans-serif;">

Der Beweis, dass mein UPC Modem (allenfalls vorsätzlich) noch in den Händen einer weiteren Person war um Verantwortungs-Diffusion zu erzeugen und eine allfällige Unterwanderung der UPC oder der Post durch Ausländische Agenten (die worst case den Auftrag haben mich zu töten) zu verschleiern.

-->
<?php

    $csv = array_map('str_getcsv', file('cardNames.csv'));
    array_walk($csv, function(&$a) use ($csv) {
      $a = array_combine($csv[0], $a);
    });
    array_shift($csv); # remove column header


//    print_r($csv);
//    for ($i = 0; $i < sizeof($csv); $i++)
//	if ($csv[$i]["card"] == "a2") echo $csv[$i]["english"];    
    
$files = glob("*.*");
natsort ($files);

$supported_file = array(
    'gif',
    'jpg',
    'jpeg',
    'png'
);

foreach($files as $file)
{
  $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
  if (in_array($ext, $supported_file)) {

    $parts = explode(".", $file);
    echo '<div id="'.$parts[0].'" class="card" style="border: 10px solid black;float:left;text-align:center;">';
    echo "<font size=4em color=yellow><b>" . $parts[0] . "</b></font>" . "<hr style='height:0.01em; visibility:hidden;' />";
    echo '<a href="./'.$file .'" id="'.$parts[0].'"'.' target="_blank"><img width=200 src="'.$file .'" ></a><br>';
    echo  '<font size=1px>';

//    print_r($csv);
    for ($i = 0; $i < sizeof($csv); $i++)
      if ($csv[$i]["card"] == $parts[0]) echo $csv[$i]["english"] . "<br>" . $csv[$i]["german"] ;  
    //
    echo '</font><br><br>';
    echo '</div>
';

} else {
    continue;
 }

}

?>
<br>
<br>
<br>
</p>
</div>

<br>
<br>
Marc jr Landolt<br>
eidg. dipl Informatiker HF<br>
Neuenburgerstrasse 6<br>
5004 Aarau<br>
mail@marclandolt.ch<br>
062 822 61 31 (mostly unplugged)<br>
078 674 15 32 (mostly turned off and wrapped in tin foil)<br>
</p>
</body>
</html>

