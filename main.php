<?php

require_once('simulator.php');


$simulator = new AnimalSimulator();

$simulator->createDog(990, "fdsfsdfds");
$simulator->createCat(100, "fsd");
$simulator->createSeal(30, " dsf");
$simulator->createGorilla(50, "dasd");
$simulator->createLion(50, "dasd");
$simulator->createTiger(50, "dasd");
$simulator->createWhale(21, "dasdasd");


/* ------------------------------------------------------------------------------------------------------------------

Δημιουργήστε ρουτίνα που δημιουργεί μία αγέλη Μ σκύλων (object)
και ρουτίνα που να  μετακινεί τυχαία το 70% του πληθυσμού αξιοποιώντας την run(), ενώ το υπόλοιπο να παραμένει idle. 
*/
// Για M=10 
//
$dogs = [];
for ($i = 1; $i <= 10; $i++) {

    $name = "nik-" . $i;
    $speed = rand(20, 40);

    $dog = $simulator->createDog($speed, $name);

    array_push($dogs, $dog);
}

//$percentage = 70;
//$result = 10 * ($percentage / 100);
//echo "70% of 10 is: " . $result;

$count = count($dogs);
$moveCount = round($count * 0.7);

// ανάμιξη των θεσεων του array
shuffle($dogs);

//
// 70 % RUN 
//
for ($i = 0; $i < $moveCount; $i++) {
    $time = rand(0, 40);
    $dogs[$i]->run($time);
}
//
// 30 % IDLE
//
for ($i = $moveCount; $i < $count; $i++) {
    echo "\nIDLE";
}


//------------------------------------------------------------------------------

// FIND MAX DISTANCE OPTION 1
$simulator->findMaxDogDistance();

$x = $simulator->dogs;
// -------------------------------------------------------
// CALL STATIC METHODS
//
// Print all Speeds
AnimalSimulator::printAnimalSpeeds($x);

//FIND MAX DISTANCE OPTION 2
AnimalSimulator::findMaxDistance($x);
