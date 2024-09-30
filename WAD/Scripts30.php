<?php
$verne1="Jules Verne 1828–1905 was a French novelist, poet, and playwright. Most famous for his novel sequence,
 the Voyages Extraordinaires, Verne also wrote assorted short stories, plays, miscellaneous novels, essays, and poetry.
 His works are notable for their profound influence on science fiction and on surrealism,
 their innovative use of modernist literary techniques such as self-reflexivity, and their complex combination of positivist and romantic ideologies.
Unless otherwise referenced, the information presented here is derived from the research of Volker Dehs, Jean-Michel Margot, Zvi Har’El, and William Butcher.";

$verne2="Escritor, poeta y dramaturgo francés célebre por sus novelas de aventuras y por su profunda influencia en el género literario de la ciencia ficción,
se le considera junto con H. G. Wells, el padre de este género. Verne es uno de los escritores más importantes de Francia y de toda Europa gracias a la evidente
influencia de sus libros en la literatura vanguardista y el surrealismo, es el segundo autor más traducido en el mundo, después de Agatha ChristieJulio Verne
nació en una familia burguesa, estudió para continuar los pasos de su padre como abogado, pero muy joven decidió abandonar ese camino para dedicarse a la literatura.
Su colaboración con el editor Pierre-Jules Hetzel dio como fruto la creación de Viajes extraordinarios, una popular serie de novelas de aventuras escrupulosamente
documentadas y visionarias entre las que se incluían las famosas Cinco semanas en globo (1863), Viaje al centro de la Tierra (1864), De la Tierra a la Luna (1865),
Veinte mil leguas de viaje submarino (1870), La vuelta al mundo en ochenta días (1872) y La isla misteriosa (1874).";

similar_text($verne1, $verne2, $percent);
echo "The similarity between the two texts is $percent %";
?>