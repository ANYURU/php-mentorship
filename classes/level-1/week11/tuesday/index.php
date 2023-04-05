<!Doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Master Arrays in PHP Master class 4</title>
  <meta name="description" content="A simple HTML5 Template for new projects.">
  <meta name="author" content="SitePoint">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
</head>
<body>
  <h1>PHP TUTORIAL: Master Arrays session 4</h1>
  <h2>Storing different data types in an Array.</h2>
  <p>
    <?php
    $person = [
      'David Derrick Anyuru',
      false,
      78333333,
      5.3,
      ["HTML/CSS", "JS", "React", "PHP"]
    ];

    //  Insted of doing this
    // $person_name = "David Wampamba";
    // $is_employed = false;
    // $phone_number = 0783767368;
    // $height = 5.0;
    // $skill_1 = "HTML/CSS";
    // $skill_2 = "JS";
    // $skill_3 = "React";
    // $skill_4 = "PHP";

    ?>
    Name: <?= $person[0]; ?></br>
    Height: <?= $person[3]; ?></br>
    Skills: <?php
    $i = 0;
    $num_of_skills = count($person[4]);
    while ($i < count($person[4])):
      echo $person[4][$i];
      $i++;
      if ($i !== $num_of_skills):
        echo ', ';
      endif;
    endwhile;
     
    ?>
  </p>
</body>
</html>