<?php
$county_data = "1. Mombasa. – Hassan Ali Joho – ODM,
2. Kwale. – Salim Mvurya – Jubilee,
3. Kilifi. – Amason Jeffah Kingi – ODM,
4. Tana River. – Dhadho Godhana – ODM,
5. Lamu. – Fahim Yasin Twaha – Jubilee,
6. Taita-Taveta. – Granton Samboja – WDM K,
7. Garissa. – Ali Bunow Korane – Jubilee,
8. Wajir. – Mohamed Abdi Mohamud – Jubilee,
9. Mandera. – Ali Ibrahim Roba - Jubilee,
10. Marsabit – Mohamud Mohamed Ali – Jubilee,
11. Isiolo – Mohamed Abdi Kuti – Independent,
12. Meru – Kiraitu Murungi – Jubilee,
13. Tharaka Nithi – Onesmus Muthomi Njuki – Jubilee,
14. Embu – Martin Nyaga Wambora – Jubilee,
15. Kitui – Charitu Ngilu – Narc Kenya,
16. Machakos – Alfred Mutua – CCM,
17. Makueni – Kivutha Kibwana – WDM K.,
18. Nyandarua – Francis Kimemia – Jubilee,
19. Nyeri – Mutahi Kahiga – Jubilee,
20. Kirinyaga. – Ann Waiguru – Jubilee,
21. Murang’a – Mwangi wa iria – Jubilee,
22. Kiambu. – Ferdinand Waititu Babayao – Jubilee,
23. Turkana. – Josphat Nanok – ODM,
24. West Pokot. – John Krop Lonyang’apuo. – KANU,
25. Samburu. – Moses Kasainie Lenolkulal – Jubilee,
26. Trans-Nzoia. – Patrick Khaemba – FORD Kenya,
27. Uasin gishu. – Jackson Mandago – Jubilee,
28. Elgeyo Marakwet. – Alex Tanui Tolgas – Jubilee,
29. Nandi. – Stephen Sang – Jubilee,
30. Baringo – Stanley K Kipris. – Jubilee,
31. Laikipia – Ndiritu Muriithi – Independent,
32. Nakuru. – Lee Kinyanjui – Jubilee,
33. Narok – Samuel Kuntai Ole Tunai – Jubilee,
34. Kajiado. – Joseph Ole Lenku – Jubilee,
35. Kericho. – Prof.Paul Chepkwony Kiprono – Jubilee,
36. Bomet. – Hillary Barchok – Jubilee,
37. Kakamega. – Wyclife Oparanya – ODM,
38. Vihiga. – Wilber Ottichilo – ODM,
39. Bungoma. – Wyclife Wafula Wangamiti – ODM,
40. Busia. – Sospeter Ojaamong – ODM,
41. Siaya. – Cornel Rasanga. – ODM,
42. Kisumu. – Peter Anyang Nyong’o. – ODM,
43. Homabay. – Cyprian Awiti – ODM,
44. Migori. – Zachary Okoth Obado – ODM,
45. Kisii. – James Ongware – ODM,
46. Nyamira. – John Nyangarama Obiena - ODM,
47. Nairobi. – Mike Sonko Mbuvi Kioko – Jubilee";

function splitter($county_string){
   $county_array = explode(", ", $county_string);
   var_dump($county_array);

//splitter($county_data);
  array_walk($county_array,'update_string');
   return $county_array;

}
function getWebsite($county_name){
   return "<a href='http://$county_name.go.ke'>"."http://$county_name.go.ke</a>";
}


//$str="47. Nairobi. – Mike Sonko Mbuvi Kioko – Jubilee";
function update_string(&$str){//parmanent schange
  $str= explode("–",$str);

  $county_name=$str[0];
  $county_number_and_name=explode('.',$county_name);

  $govornor_name=$str[1];
  $political_party=$str[2];

  //Number of the county
    $str[0]=$county_number_and_name[0];
  //Name of the county
    $str[1]=$county_number_and_name[1];
  //Name of the govornor
    $str[2]=$govornor_name;
  //Website of the county
    $str[3]=getWebsite($county_number_and_name[1]);
  //Name of the political pary
    $str[4]=$political_party;
}
update_string($str);
//var_dump(splitter($county_data));

function printTable($array_2d){
echo "<table border='1'>";
 echo"<thead><tr>";
 echo "<th>Name</th>";
 echo "<th>Governor</th>";
 echo "<th>Website</th>";

   echo"</tr></thead>";

echo"<tbody>";
 foreach ($array_2d as $row) {
  echo"<tr>";
    print_r($row);
      foreach($row as $key=>$cell):
        if($key <4){
           echo"<td>".$cell.'</td>';
         }else {
                echo ""
         }       }
   // code...
 }


 echo "</thead></tr>"

}