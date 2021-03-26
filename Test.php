



<?php

// define our people and teams as simple arrays
for($i=1;$i<71;$i++){
    $people[]="person".$i;
}

for($i=1;$i<18;$i++){
    $teams[]="team".$i;
}
$html = "<table>";

// what team are we adding to?
$teamidx=0;

// loop through people, add them to a team
// when you run out of teams, shuffle the team
// order for giggles and start back at the first
// team
for($i=0;$i<count($people);$i++){
    $teammembers[$teams[$teamidx]][]=$people[$i];
    $teamidx++;
    if($teamidx==count($teams)){
        $teamidx=0;
        shuffle($teams);
    }
}
print "<pre>";
print_r($teammembers);
print "</pre>";
?>
