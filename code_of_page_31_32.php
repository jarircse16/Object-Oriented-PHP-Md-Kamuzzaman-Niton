<?php

class PrimeNumbers {
    
    private $start = 0;
    private $end = 0;
    private $last_is_prime = 3;
    private $primes_checker = array ();
    private $not_primes = array(); // Add this line to initialize the $not_primes array
    
    public function setRange($start , $end){
        $this->start = $start;
        $this->end = $end;
    }
    
    public function showPrimes(){
        $start_loop = ($this->start % 2 ==0) ? $this->start +1 : $this->start;
        if($this->start <= 2){
            echo "2\n";
        }
        for($i = $start_loop; $i <= $this->end && ! isset($this->not_primes[$i]);$i+=2) {
            if($this->check_prime($i)){
                echo $i,"\n";
            }
        }
    }
    
    public function check_prime($number){ // Add the visibility modifier "public"
        if($number < 2 ) {
            return FALSE;
        }
        foreach($this->primes_checker as $k => $c){ // Correct the variable name from "prime_checker" to "primes_checker"
            if($number % $k ==0)
                return FALSE;
        }
        $half_number = $number/2;
        for($i = $this->last_is_prime; $i <= $half_number && ! isset($this->not_primes[$i]);$i+=2){
            $this->last_is_prime += 1;
            if($this->modding ($number, $i) == 0) {
                return FALSE;
            }
            else
            {
                if(! isset($this->not_primes[$i]))
                {
                    $this->not_primes[$i] = TRUE;
                }
            }
        }
        $this->primes_checker[$number] = TRUE;
        return TRUE;
    }
    
    public function modding ($number, $divider){ // Add the visibility modifier "public"
        $first = true;
        for($i = $divider ; $i<=$number; $i += $divider){ // Correct the variable name from "divider" to "$divider"
            ($first)?$first=FALSE:$this->not_primes[$i] = TRUE;
            if($number - $i < $divider){
                return $number - $i;
            }
        }
    }
}

$pn = new PrimeNumbers();
$pn -> setRange(0,50);
$pn ->showPrimes();
?>
