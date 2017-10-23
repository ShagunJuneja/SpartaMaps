<?php
$_SESSION["lang"]="en";
function defineStrings() {
switch($_SESSION[lang]) {
case "en":
define("WELCOME_TXT","Welcome!");
define("CHOOSE_TXT","Choose Language");
$def = WELCOME_TEXT;
break;
case "de":
define("WELCOME_TXT","Willkommen!");
define("CHOOSE_TXT","Sprache auswÃ¤hlen");
$def = WELCOME_TEXT;
break;
case "ja":
define("WELCOME_TXT","[ Japanese characters here]");
define("CHOOSE_TXT","[ Japanese characters here]");
$def = WELCOME_TEXT;
break;
default:
define("WELCOME_TXT","Welcome!");
define("CHOOSE_TXT","Choose Language");
$def = WELCOME_TEXT;
break;
}
}
define("WELCOME_TXT","Welcome!");
define("CHOOSE_TXT","Choose Language");

?>

