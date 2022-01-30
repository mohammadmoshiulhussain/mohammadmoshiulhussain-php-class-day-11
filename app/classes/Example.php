<?php
namespace App\classes;
class Example
{
    public $name;
    public $email;
    public $mobile;
    public $firstname;
    public $lastname;
    public $x;
    public $y;
    public $z;
    public $data=[];


    public function index()
    {
//        $this->firstname = 'Rohim';
//        $this->lastname = 'Khan';
//        echo "Full name is".' '.$this->firstname." ".$this->lastname;
//        *Operator* binary
//        $this->x = 10;
//        $this->y = 20;
//        echo $this->x + $this->y;
//        echo '<br/>';
//        echo $this->x - $this->y;
//        echo '<br/>';
//        echo $this->x * $this->y;
//        echo '<br/>';
//        echo $this->x / $this->y;
//        echo '<br/>';
//        echo $this->x % $this->y;

//        *Operator* assignment

//        $this->x = 10;
//        $this->y = 20;
//
//        echo $this->x += $this->y; $this->x = $this->x + $this->y = 30
//        echo '<br/>';
//        echo $this->x -= $this->y; $this->x = $this->x - $this->y = 10
//        echo '<br/>';
//        echo $this->x *= $this->y; 200
//        echo '<br/>';
//        echo $this->x /= $this->y; 10
//        echo '<br/>';
//        echo $this->x %= $this->y; 10
//        echo '<br/>';
//        echo $this->x .= $this->y; 1020

//        *Operator* Logical*

//        $this->x = 10;
//        $this->y = 20;
//        $this->z = 30;

//        echo ($this->x > $this->y) && ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x > $this->y) && ($this->y < $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) && ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) && ($this->y < $this->z);
//        echo '<br/>....<br/>';

//        echo ($this->x > $this->y) || ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x > $this->y) || ($this->y < $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) || ($this->y > $this->z);
//        echo '<br/>....<br/>';
//        echo ($this->x < $this->y) || ($this->y < $this->z);
//        echo '<br/>....<br/>';

//        =====Statement=====
//        $this->x = 100;
//        if($this->x > 20)
//        {
//            echo $this->x;
//        }
//        else
//        {
//            echo 'Hello World';
//        }

//        $this->x = 100;
//        switch ($this->x)
//        {
//            case 10:
//                echo 'Hello World';
//                break;
//            case 20:
//                echo 'Hello Bangladesh';
//                break;
//            case 30:
//                echo 'Hello Dhaka';
//                break;
//            default:
//                echo 'Hello BITM';
//
//        }
//        $this->x = 100;
//
//        while ($this->x < 110)
//        {
//            echo 'Hello World<br/>';
//            $this->x++;
//        }

//        $this->x = 100;
//
//        do{
//            echo 'Hello World<br/>';
//            $this->x++;
//        } while ($this->x < 110);

        $this->data = [10, 20, 30, 'BITM', 100.200, true];
//        echo $this->data[3];
        foreach ($this->data as $item)
        {
            echo $item;
        }




















    }
}