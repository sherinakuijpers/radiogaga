<?php
$dieren = array("Hond", "Kat", "Koe", "Giraffe"); // array aanmaken
$eten = ["Kaas", "Boterham", "Yoghurt"];

print_r($dieren);
echo implode(", ", $eten) . "\n";  // "\n" volgende regel

$eten[] = "Pindakaas";  // 1 ding aan de array toevoegen
echo implode(", ", $eten);
// sort($eten);    // op alfabetische volgorde
echo implode(", ", $eten);
// rsort($eten);   // reversed alfabetische volgorde
echo implode(", ", $eten);
echo count($eten);    // optellen hoeveel dingen er in een array staan

$wateetikvandaag = $eten[1]; // laat het 2e ding in het array zien
echo $wateetikvandaag;

// array_pop($eten);  // haalt het laatste ding in de array weg
array_push($dieren, "Gorilla", "Zebra", "Leeuw"); // meerdere dingen aan een array toevoegen
echo implode(", ",$eten) . "\n";
echo implode(", ", $dieren);

array_shift($dieren); // het eerste ding in de array weghalen
array_unshift($dieren, "eend"); // voegt het element vooraan de array toe

$autos = ["Volkswagen",["Polo", "Golf"], "Audi", "BMW", ["M3", "M5", "Z4"]];  // een array in een array
print_r($autos);
echo $autos[1][1]; // print golf (tweede element in het tweede array)

$diereneten = array_merge($dieren, $eten);  // array_merge 2 arrays aan elkaar toevoegen
print_r($diereneten);

$namen = ["Rob" => "Wessels"];
print_r($namen); // laat zien dat Wessels bij Rob hoort

$namen["Livio"] = "Sandberg";   // voegt livio sandberg toe aan de array
print_r($namen);

unset($namen["Rob"]); // haalt rob met bijbehorende element wessels uit de array
print_r($namen);





?>