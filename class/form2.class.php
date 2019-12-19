<?php
class formetudiant{
    
static protected $data;
static protected $name;
static protected $value;

public function __construct($data)
{
    self::$data=$data;
}

protected function getvalue($index){    
    return isset(self::$data[$index])?self::$data[$index]:null;
}
static public function texte($name){
    echo $name.' : <input type="text" name="'.$name.'" value ="'.self::getvalue($name).'"/><br>';

}
static public function password($name){
    echo $name.' : <input type="text" name="'.$name.'" value ="'.self::getvalue($name).'"/><br>';
}

static public function email($name){
    echo $name.' : <input type="text" name="'.$name.'" value ="'.self::getvalue($name).'"/><br>';
}
static public function number($name){
    echo $name.' : <input type="text" name="'.$name.'" value ="'.self::getvalue($name).'"/><br>';

}
static public function submit($value){
    echo '<input type="submit" value="envoyer"/><br>';
}

}