<?php


 class Phrase
 {

public $currentPhrase;
public $selected = array();
public $phrases =
[
'Dream Big',
'Dream Bigger',
'Home is where the Heart is',
'DEVELOPERS DEVELOPERS',
'Propane and Propane Accesories'
];


public function __construct($phrase=null, $selected= array() )
{
  if (!empty($currentPhrase)) {
    $this->currentPhrase = $currentPhrase;
  }
  if (!empty($selected)) {
    $this->selected = $selected;
  }
  if(!isset($currentPhrase)) {
    $getPhrase = rand(0, count($this->phrases)-1);
    $this->currentPhrase = $this->phrases[$getPhrase];
  }
}
public function addPhraseToDisplay()
  {
    $characters = str_split(strtolower($this->currentPhrase));
    $output = "<div class='section' id='phrase' >";
    $output .= "<ul>";
    foreach ($characters as $character) {
    if (in_array($character, $this->selected)) {
        $output .= "<li class='show letter'>" . $character . "</li>";
    } else if ($character == " ") {
        $output .= "<li class='space'>" . $character . "</li>";
    } else {
      $output .= "<li class='hide letter'>" . $character . "</li>";
      }

    }
    $output .= "</ul>";
    $output .= "</div>";
    return $output;
    echo $phrase->addPhraseToDisplay();

  }
}
//$Phrase = new Phrase;
?>
