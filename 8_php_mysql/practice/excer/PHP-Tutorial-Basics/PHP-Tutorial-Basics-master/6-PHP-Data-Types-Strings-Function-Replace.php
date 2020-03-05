<?


$a_string = "If a fact does not fit a theory, chage the fact...";

//use str.replace() function to replace the selected text "fact" with the text "truth"
echo str_replace("fact", "truth", $a_string, $count);

//new line, line break
echo "\n";

//Display how many times texted was replaced
echo "This text was replaced $count times";

?>