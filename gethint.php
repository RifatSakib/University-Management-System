<?php
// Array with names
$a[] = "Ayesha";
$a[] = "Bishal";
$a[] = "Carryminati";
$a[] = "Dhruvo";
$a[] = "Emam";
$a[] = "Faran";
$a[] = "Gorila";
$a[] = "Hossain";
$a[] = "Islam";
$a[] = "Jubair";
$a[] = "Khan";
$a[] = "Layla";
$a[] = "Mridul";
$a[] = "Nakib";
$a[] = "Orpa";
$a[] = "Pakhi";
$a[] = "Rakib";
$a[] = "Sakib";
$a[] = "Tuna";
$a[] = "Usa";
$a[] = "Varun";
$a[] = "Wow";
$a[] = "Max";
$a[] = "Rabby";
$a[] = "Rohit";
$a[] = "Liza";
$a[] = "Eliana";
$a[] = "Jakir";
$a[] = "Junaid";
$a[] = "Vicky";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>