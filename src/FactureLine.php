<?php
/**
 * Created by PhpStorm.
 * User: brandonleininger
 * Date: 11/01/2019
 * Time: 10:40
 */

namespace FactureLine;

class FactureLine {
    private $value;
    private $desc;
    private $tva;

    public function __construct($desc, $value, $tva){
        $this->value = $value;
        $this->desc = $desc;
        $this->tva = $tva;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }
    /**
     * @param mixed $desc
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    }

    public function setTva($tva)
    {
        $this->tva = $tva;
    }

    public function calculateTotal()
    {
        $amount = $this->value;
        return $amount + ($this->tva * $amount) /100;
    }
}