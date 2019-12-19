<?php
class formprof extends formetudiant {
    protected $nums;
    
  
    public function Num_sec_sociale($nums){
      echo $nums.' : <input type="text" name="'.$nums.'" value ="'.self::getvalue($nums).'"/><br>';
   
    }
  
}