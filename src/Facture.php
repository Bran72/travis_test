<?php
/**
 * Created by PhpStorm.
 * User: brandonleininger
 * Date: 11/01/2019
 * Time: 10:40
 */

namespace Facture;

use FactureLine\FactureLine;

class Facture {
    private $FactuLine;

    /**
     * @param FactureLine[] $FactuLine
     */
    public function __construct(array $FactuLine = []){
        $this->FactuLine = $FactuLine;
    }

    /**
     * @return array|FactureLine[]
     */
    public function getFactuLine()
    {
        return $this->FactuLine;
    }

    /**
     * @param array|FactureLine[] $FactuLine
     */
    public function setFactuLine($FactuLine)
    {
        $this->FactuLine = $FactuLine;
    }

    public function valeurTotale(){
        $test = 0;
        foreach ($this->FactuLine as $result){
            $test += $result->getValue();
        }
        return $test;
    }
}