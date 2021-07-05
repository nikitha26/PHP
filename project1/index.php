<?php
   include('config/dbconnect.php');

   //query for all records
   $sql = 'SELECT * FROM todo';

   //make query & get result
   $result = mysqli_query($conn,$sql);

   //fetch the resulting rows and as an array
   $todos = mysqli_fetch_all($result, MYSQLI_ASSOC);

   //free result from memory
   mysqli_free_result($result);

   //close connection
   mysqli_close($conn);
   //print_r($todo);
   

?>
<!DOCTYPE html>
    <?php include('templates/header.php');?>
    <h4 class="center red-text">TODOS...</h4>
    <div class="container">
        <div class="row">
            <?php foreach($todos as $todo) { ?>
                <div class="col s6 md3">
                    <div class="card">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($todo['title']);?></h6>
                            <h6><?php echo htmlspecialchars($todo['email']);?></h5>
                            <ul>
                                <?php foreach(explode(',',$todo['todo']) as $ing){ ?>
                                <li><?php echo htmlspecialchars($ing)?></li>
                                <?php }?>
                            </ul>
                        </div>
                        <div class="card-action right-align">
                            <a href="" class="">More info</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php include('templates/footer.php');?>

    

</html>