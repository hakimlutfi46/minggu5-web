<?php
class Person
{
    private $name;

    function set_name($new_name)
    {
        $this->name = $new_name;
    }

    function get_name()
    {
        return $this->name;
    }
}

$person1 = new Person();
// properti bisa di akses secara langsung
echo "Hai " . $person1->name = "Lukman Hakim";
echo "<hr>";
// method tidak bisa di akses secara langsung
echo $person1->get_name();


// pemanggilan tidak bisa diluar, harus di dalam class person