<?php
header('Content-type: application/json');

   $data = array(
       array('title' => '3 d. kelionë DIDINGOJI KROKUVA – ZAKOPANË – VELIÈKA', 'category' => 1, 'price' => '9800', 'image' => 'https://cdn.pixabay.com/photo/2014/10/11/11/51/cottage-484521_960_720.jpg'),
       array('title' => '11 d. kelionë JAV Vakarinë pakrantë', 'category' => 1, 'price' => '94900', 'image' => 'https://cdn.pixabay.com/photo/2015/03/11/12/31/new-york-668616_960_720.jpg'),
       array('title' => '7 n. kruizas po Kanarø salas ir 7 n. poilsis TENERIFËJE', 'category' => 1, 'price' => '106900', 'image' => 'https://cdn.pixabay.com/photo/2019/01/13/01/13/landscape-3929654_960_720.jpg'),
       array('title' => '2 d. kelionë Karaliauèiaus kraðtas-Palmininkai', 'category' => 1, 'price' => '7700', 'image' => 'https://cdn.pixabay.com/photo/2018/10/21/09/06/city-3762469_960_720.jpg'),
       array('title' => 'PASLAPTINGOJI SAREMOS SALA – PRAMOGOS TARTU', 'category' => 1, 'price' => '7700', 'image' => 'https://cdn.pixabay.com/photo/2018/10/13/10/49/estonia-3744005_960_720.jpg'),
       array('title' => 'VISO KÛNO SPA su ðveitimu, masaþu ir veido procedûra DVIEM', 'category' => 2, 'price' => '7900', 'image' => 'https://cdn.pixabay.com/photo/2015/01/05/22/29/wellness-589774_960_720.jpg'),
       array('title' => 'SPA ritualas - GINTARINË OAZË', 'category' => 2, 'price' => '4900', 'image' => 'https://cdn.pixabay.com/photo/2015/11/03/16/54/wellness-1021131_960_720.jpg'),
       array('title' => 'RADIOLIFTINGAS – odos patempimas, stangrinimas ir atjauninimas', 'category' => 2, 'price' => '4200', 'image' => 'https://cdn.pixabay.com/photo/2016/06/16/14/37/sunblock-1461397_960_720.jpg'),
       array('title' => 'Prabangus SPA kompleksas vyrams - TITANO GALIA', 'category' => 2, 'price' => '2900', 'image' => 'https://cdn.pixabay.com/photo/2018/07/30/09/08/hairdresser-3572052_960_720.jpg'),
       array('title' => '7 n. TURKIJOJE, 5* vieðbutyje SENSITIVE PREMIUM RESORT & SPA', 'category' => 1, 'price' => '9800', 'image' => 'https://cdn.pixabay.com/photo/2015/01/10/21/47/swimming-pool-595728_960_720.jpg')
   );

//encode
$myJSON = (html_entity_decode(json_encode($data, JSON_NUMERIC_CHECK)));
echo $myJSON;
?>