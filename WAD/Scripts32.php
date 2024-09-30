<?php
$verne1="Jules Verne 1828–1905 was a French novelist, poet, and playwright. Most famous for his novel sequence,
the Voyages Extraordinaires, Verne also wrote assorted short stories, plays, miscellaneous novels, essays, and poetry.
His works are notable for their profound influence on science fiction and on surrealism,
their innovative use of modernist literary techniques such as self-reflexivity, and their complex combination of positivist and romantic ideologies.
Unless otherwise referenced, the information presented here is derived from the research of Volker Dehs, Jean-Michel Margot, Zvi Har’El, and William Butcher.";

$find="plays";
$pos=strpos($verne1, $find);
if($pos===false){
  echo "The weord $find was not found in the text";
}else{
    echo "The word $find was found in the text at position $pos";
    }
?>
