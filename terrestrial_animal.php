<?php

require_once('mammal.php');


class Terrestrial_animal extends Mammal
{

    public function run($time)
    {

        $this->move($time);

        echo  $this->kind . " με ονομα " . $this->name . " τρέχει με ταχύτητα " . $this->speed . " km/h.";
        echo  $time . " ώρες και διανύει απόσταση " . $this->distance . " χιλιόμετρα. \n";
    }
}
