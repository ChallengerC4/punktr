<?php


// global useful things
$g_notenames=array("C","C#","D","D#","E","F","F#","G","Ab","A","Bb","B");

class note {
    
    public $number      = 40; // default value is 40 for no reason
    public $name        = "C"; // again, no reason
    public $length      = .25; //number.  .25=quarter note
    public $octave      = 4; //number
    public $scaledegree = 0;
    
    public function note() {
        $this->number=40;
    }
    public function downsixth() {
        // if scale degree is do, fa, or so - then D6=U3 and that 3rd is Major and the 6th is minor
        
        if ($this->scaledegree == 0 || $this->scaledegree==5 || $this->scaledegree==7) {
            $this->number-=8;
        } else {
            $this->number-=9;
        }
     
        $this->assignNoteName();
        return $this;
    }

    //this should be called after number has been moved
    public function assignNoteName() {
        global $g_notenames;
        $this->name=$g_notenames[($this->number-4) % 12];
        
    }
}
function newc4() {
    $n=new note();
    $n->number=40;
    $n->scaledegree=0;
    $n->octave=4;
    $n->assignNoteName();
    return $n;
}

function newd4() {
    $n=new note();
    $n->number=42;
    $n->scaledegree=2;
    $n->octave=4;
    $n->assignNoteName();
    return $n;    
}

function newe4() {
    $n=new note();
    $n->number=44;
    $n->octave=4;
    $n->scaledegree=4;
    $n->assignNoteName();
    return $n;    
}

function newa3() {
    $n=new note();
    $n->number=37;
    $n->octave=3;
    $n->scaledegree=9;
    $n->assignNoteName();
    return $n;    
}

function newb3() {
    $n=new note();
    $n->number=39;
    $n->octave=3;
    $n->scaledegree=11;
    $n->assignNoteName();
    return $n;    
}


?>
