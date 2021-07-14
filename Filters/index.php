<!DOCTYPE html>
<html>
<head>
    <style>
       
    </style>
</head>
<body>
    <!-- <table>
        <tr>
            <td>Filter Name</td>
            <td>Filter ID</td>
        </tr>
    <?php
        foreach (filter_list() as $id =>$filter) {
            echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
        }
    ?>
    </table> -->
    <?php
    //Validate String
    $str = "<h2>Rock and Johnson</h2>";
    $result = filter_var($str,FILTER_SANITIZE_STRING);
    //echo $result;

    //Validate integer
    $int = 0;
    $intresult = filter_var($int,FILTER_VALIDATE_INT);
    if($intresult){
        //echo $intresult;
    }
    else{
        //echo "Given input is not integer";
    }

    //Validate Ip Address
    $Ip = "168.2321.23";
    $resultip = filter_var($Ip,FILTER_VALIDATE_IP);
    if($resultip){
        //echo "Validate IP".$Ip;
    }
    else{
        //echo "Not Validate";
    }
    

    //Validate Email
    $email = "mnikitha365@mail.com";
    $emailresult = filter_var($email,FILTER_VALIDATE_EMAIL);
    //echo $emailresult;
    if($emailresult){
        echo "Valid Email";
    }
    else{
        echo "Not valid";
    }
    ?>
</body>
</html>
