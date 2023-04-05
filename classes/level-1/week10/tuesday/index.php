<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master PHP Arrays</title>
</head>
<body>
    <h1>Master PHP Arrays</h1>
    <h2>How to add elements to the Array.</h2>
    <?php
    $cities = ['Masaka', 'Kampala', 'Mbale'];

    ?>
    <h2>The current items in the array are: </h2>
    <pre>
    <?php 
    var_dump($cities)
    ?>
    </pre>
    <?php
    $cities[] = 'Arua';
    ?>
    <h2>These are the cities after adding Arua.</h2>
    <pre>
    <?php 
    var_dump( $cities );
    ?>
    </pre>
    <?php
    $new_cities = ['Jinja'];
    $new_cities = array_merge($new_cities, $cities);
    ?>
    <h2>These are the cities after adding Jinja at the beginning of the Array.</h2>
    <pre>
    <?php var_dump($new_cities);?>
    </pre>
    <?php
    $new_city = "Gulu";
    array_unshift($cities, $new_city);
    ?>
    <pre>
    <?php 
    var_dump($cities)
    ?>
    </pre>
    <h1>Inserting elements to the middle of the array.</h1>
    <?php
    // The third element indicates how many elements in the array that you want to remove. It can be specified as a positive or as a negative.
    array_splice($cities, 2, 0, ['Hoima', 'Entebbe']);
    ?>
    <pre>
    <?php 
    var_dump($cities);
    ?>
    </pre>
    <h2>Replace elements in the array</h2>
    <p>The countries are:
    <?php
    $east_african_countries = ["Uganda", "Kenya", "South Sudan", "Nigeria", "Egypt"];
    echo implode(", ", $east_african_countries);
    ?>
    </p>
    <h2>But Nigeria is not part of the East African countries, so replace Nigeria with Tanzania.</h2>
    <?php
    array_splice($east_african_countries, 3, 2, 'Tanzania');
    echo implode(', ', $east_african_countries);
    ?>
    <p>
    <?php
    $european_countries = array("Spain", "France", "England", "Italy", "China", "Switzerland");
    ?>
    <p>Started with <?= implode(',', $european_countries); ?></p>
    <?php
    for ($i = 0; $i < sizeof($european_countries); $i++):
        if($i == 4):
            $country_at_4 = $european_countries[$i];
            $european_countries[$i] = 'Beligium';
            $country_at_5 = $european_countries[$i + 1];
            $european_countries[$i + 1] = $country_at_4;
            $european_countries[] = $country_at_5;
            break;
        endif;
    endfor;
    ?>
    </p>
    <h2>Add Belgium as the Fifth country</h2>
    <p>Now we have the following countries: <?=implode(', ', $european_countries)?></p>
    <?php
    echo implode(', ', $european_countries)
    ?>
    <h2>Delete China from European Countires</h2>
    <p>    
    <?php
    // unset($european_countries[5]);
    // echo implode(", ", $european_countries);
    ?>
    </p>
    <p>
    <?php
    for ($index = 0; $index < count($european_countries); $index++):
        if ($european_countries[$index] === "China"):
            unset($european_countries[$index]);
            break;
        endif;
    endfor;
    ?>
    </p>



</body>
</html>