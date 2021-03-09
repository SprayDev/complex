<?php

class Complex
{

    public $const;
    public $multiplier;

    public function __construct($const, $multiplier = 1)
    {
        $this->const = $const;
        $this->multiplier = $multiplier;
    }

    public function __toString() {
        switch (true){
            case is_float($this->const)&&is_float($this->multiplier):
                return sprintf("(%.2f%+.2fi)", $this->const, $this->multiplier);
            case is_float($this->const)&&!is_float($this->multiplier):
                return sprintf("(%.2f%+di)", $this->const, $this->multiplier);
            case !is_float($this->const)&&is_float($this->multiplier):
                return sprintf("(%d%+.2fi)", $this->const, $this->multiplier);
            case !is_float($this->const)&&!is_float($this->multiplier):
                return sprintf("(%d%+di)", $this->const, $this->multiplier);
            default:
                return sprintf("(%d%+di)", $this->const, $this->multiplier);
        }
    }

    public static function addition($z1, $z2) {
        $sum_const = $z1->const + $z2->const;
        $sum_multiplier = $z1->multiplier + $z2->multiplier;
        return new static($sum_const, $sum_multiplier);
    }

    public static function subtraction($z1, $z2) {
        $sub_const = $z1->const - $z2->const;
        $sub_multiplier = $z1->multiplier - $z2->multiplier;
        return new static($sub_const, $sub_multiplier);
    }

    public static function multiplication($z1, $z2)
    {
        $multi_const = $z1->const*$z2->const - $z1->multiplier*$z2->multiplier;
        $multi_multiplier = $z1->const*$z2->multiplier + $z1->multiplier*$z2->const;
        return new static($multi_const, $multi_multiplier);
    }

    public static function deletion($z1, $z2)
    {
        $del_const = ($z1->const*$z2->const + $z1->multiplier*$z2->multiplier)/($z2->const*$z2->const + $z2->multiplier*$z2->multiplier);
        $del_multiplier = ($z2->const*$z1->multiplier - $z1->const*$z2->multiplier)/($z2->const*$z2->const + $z2->multiplier*$z2->multiplier);
        return new static($del_const, $del_multiplier);
    }
}
