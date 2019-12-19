<?php
class form{
    
private $data;
private $name;
private $value;

public function __construct($data)
{
    $this->data=$data;
}

private function getvalue($index){    
    return isset($this->data[$index])?$this->data[$index]:null;
}
public function texte($name){
    echo $name.' : <input type="text" name="'.$name.'" value ="'.self::getvalue($name).'"/><br>';

}
public function password($name){
    echo $name.' : <input type="password" name="'.$name.'"/><br>';
}
public function textearea($name){

}
public function email($name){
    echo $name.' : <input type="mail" name="'.$name.'"/><br>';
}
public function number($name){

}
public function date($name){
    echo $name.' : <input type="date" name="'.$name.'"/><br>';
}
public function radio($name){

}
public function checkbox($name){

}
public function submit($value){
    echo '<input type="submit" value="envoyer"/><br>';
}

}   