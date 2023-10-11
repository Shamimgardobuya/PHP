<?php
trait fairies {
    public function gift(){
        echo "I am a tinker fairy";
    }
}
trait beasts{
    public function movement(){
        echo "I can move in 4";
    }
}
class Griffin{
    use beasts;
}
class Nature{
    use fairies;
    use beasts;
    // public function __toString()
    // {
        
    // }
}

$forest = new Nature();
echo ''.$forest->gift().'';
echo ''.$forest->movement().'';


?>