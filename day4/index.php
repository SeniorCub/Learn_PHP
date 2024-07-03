<?php
     $break = "<br>";
     // Integer
     $int = 13;
     var_dump($int);
     echo($break);
     $num = 56.4;
     var_dump($num);
     echo($break);
     $bool = true;
     var_dump($bool);
     echo($break);

     $name = "Matthew";
     var_dump($name);
     echo($break);

     // Array
     // Index Array
     $details = array("Matthew", "Ibirogba", "Ayomide", "Ruqoyyah", "Rukayyat");
     var_dump($details);
     echo($break);
     print_r($details);
     echo($break);

     $profil = array("Matthew", "Computer Science", "Engaged", 400, "Male", 2021000001, 27, 4.96);
     var_dump($profil);
     echo($break);
     print_r($profil[0]);
     echo($break);
     print_r($profil[1]);
     echo($break);

     // Multi-dimenssional Array
     $list = array(
          array("Matthew", "Computer Science", "Engaged"),
          array("Roseline", "Computer Science", "Dating"),
          array("Sunday", "Agricultural Science", "Complicated"),
          array("Quadri", "Graduate", "Flirting"),
          array("Esther", "Computer Science", "Complicated"),
          array("Emmanuel", "Fine Art", "REV'D Father"),
          array("Olasukanmi", "Computer Science", "Happily Married with five kids")
     );
     var_dump($list);
     echo($break);
     print_r($list[6]);
     echo($break);
     print_r($list[3][2]);
     echo($break);
     print_r($list[5][1]);
     echo($break);

     $student = array(
          array("Matthew", 2021000001, array(4.75, 4.7)),
          array("Favour", 2023000045, array(4.96, 5.00)),
          array("Roseline", 203764, array(0.95, 1.20)),
          array("Sunday", 2023000049, array("AR", "ADVISED TO WITHDRAW")),
          array("Prosper", 19002, array(1.50, 3.70)),
     );
     var_dump($student);
     echo($break);
     print_r($student[2][2][0]);
     echo($break);

     // Associative Array
     $profile = array(
          "name" => "Roseline",
          "department" => "Computer Science",
          "relationship" => "Dating",
          "Matric No" => "203764",
          "level" => 400
     );
     var_dump($profile);
     echo($break);
     print_r($profile["department"]);
     echo($break);

     // Assignment
     // Create an array tell us about someone using associative array
     $cub = array(
          "Name" => "Reuben",
          "Nikname" => "SeniorCub",
          "Level" => 300,
          "Department" => "Computer Science",
          "MatricNo" => 2021000037,
          "PhoneNo" => 08134407001
     )
?>