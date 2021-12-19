<?php
// Идеальный пример принципа LSP на php
class Person
{
    public $position;

    function speak()
    {
        return $this->position . ' Say hello' . '<br>';
    }
}

class Member extends Person
{
    function access()
    {
        return 'Access to member room'  . '<br>';
    }
}

class Guest extends Person
{
    function access()
    {
        return 'Access to guest room'  . '<br>';
    }
}

class Dev extends Member
{
    public $position = 'Developer';
}

class Cleaner extends Guest
{
    public $position = 'Cleaner';
}

$dev = new Dev();
echo $dev->speak();
echo $dev->access();

$cleaner = new Cleaner();
echo $cleaner->speak();
echo $cleaner->access();
