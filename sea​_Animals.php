<?php

require_once('mammal.php');

class Sea​_Animals extends Mammal
{

    public function swim($time)
    {

        $this->move($time);

        echo $this->kind . " με ονομα " . $this->name . " κολυμπάει με ταχύτητα " . $this->speed . " km/h.";
        echo $time . " ώρες και διανύει απόσταση " . $this->distance . " χιλιόμετρα.\n";
    }
}
