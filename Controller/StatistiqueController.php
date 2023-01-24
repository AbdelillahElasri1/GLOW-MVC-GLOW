<?php
require_once 'Model/Statistique.php';

class Statistique extends db
{

    function count()
    {
        $statistique = new StatistiqueModel;
        $count = $statistique->countfromDB();
        return $count;
    }

    function maxPrice()
    {
        $statistique = new StatistiqueModel;
        $max = $statistique->maxPricefromDB();
        return $max;
    }

    function minPrice()
    {
        $statistique = new StatistiqueModel;
        $min = $statistique->minPrice();
        return $min;
    }
    function MoyenPrice()
    {
        $statistique = new StatistiqueModel;
        $totale = $statistique->AllPrices();
        $sum = 0;
        foreach ($totale as $key => $values) {
            $sum += $values['productPrice'];
        }
        return number_format((float)$sum/$this->count(), 2, '.', '');
    }
}