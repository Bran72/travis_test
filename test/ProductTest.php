<?php
/**
 * Created by PhpStorm.
 * User: brandonleininger
 * Date: 11/01/2019
 * Time: 18:10
 */

use PHPUnit\Framework\TestCase;

require 'src/Facture.php';
require 'src/FactureLine.php';


class testFacture extends TestCase
{
    public function testFacturation()
    {

        $ligne1 = new \FactureLine\FactureLine('iPhone', 1200, 20);
        $ligne2 = new \FactureLine\FactureLine('MacBook Pro', 2800, 20);
        $ligne3 = new \FactureLine\FactureLine('iMac', 2500, 20);

        $lignes = [$ligne1, $ligne2, $ligne3];
        $facture = new Facture\Facture($lignes);

        $this->assertEquals(6500, $facture->valeurTotale());

    }
}
