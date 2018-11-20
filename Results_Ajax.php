<?php
$servername = "localhost";
$username = "sleepyro";
$password = "fadjarvis321";
$dbname = "results_test";


    if (isset($_POST['key'])) {

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($_POST['key'] == 'getPlayerData') {
            $start = $conn->real_escape_string($_POST['start']);
            $limit = $conn->real_escape_string($_POST['limit']);

            $sql = $conn->query("SELECT * FROM results_tbl LIMIT $start, $limit");
            if ($sql->num_rows > 0) {
                $response = "";
                while($data = $sql->fetch_array()) {
                    $response .= '
                    <tr>
                        <td id="name_"'.$data["id"].'"> '.$data["name"].'</td> 
                        <td>'.$data["price"].'</td>
                        <td>'.$data["value"].'</td>
                        <td>'.$data["ratio"].'</td>
                        </tr>
                    ';
                }
                exit ($response);
            } else
                exit('reachedMax');
        }
    }

?>