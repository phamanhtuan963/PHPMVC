<html>
<head>
    <title>Game World</title>
    <style>
        tabble{
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
    </style>

</head>
<body>
<h1>Welcome to Game World</h1>
<table style="border-collapse: collapse">
    <tr><td>Title</td><td>Price</td><td>Image</td><td>Producer</td></tr>
    <?php
        /*foreach ($games as $key => $game)
        {
            echo '<tr><td><a href="index.php?game='.$game->title.'">'. $game->title . '</a></td><td>'
                . $game->price . '</td><td>' . $game->image . '</td><td>' . $game->producer . '</td></tr>';
        }*/
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo '<tr><td>' .'<a href="index.php?title='. $row['title'].'">'.$row['title'].'</a></td><td>'. $row["price"].'</td><td>'
                . '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'"/>'.'</td><td>' . $row["producer"].  "</td></tr>";
        }
    } else {
        echo "0 results";
    }
    ?>
</table>
</body>
</html>