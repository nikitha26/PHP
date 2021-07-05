<?php
    include('config/dbconnect.php');
    $title = $email = $todo = '';
    $errors = array('email'=>'','todo'=>'','pname'=>'');
    if(isset($_POST['submit'])){
        // echo htmlspecialchars($_POST['email']);
        // echo htmlspecialchars($_POST['todo']);
        // echo htmlspecialchars($_POST['p_name']);

        //Check Email
        if(empty($_POST['email'])){
            $errors['email'] = 'Email is required'.'<br/>';
        }else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors['email'] = 'Email must be valid email address';
            }
        }
        //Check Name
        if(empty($_POST['pname'])){
            $errors['pname'] = 'Name is required';
        }else{
            $name = $_POST['pname'];
            if(!preg_match('/^[a-zA-Z\s]+$/',$name)){
                $errors['pname'] = 'Name must be letters and spaces';
            }
        }

        //Check Todo
        if(empty($_POST['todo'])){
            $errors['todo'] = 'Todo is required'.'<br/>';
        }else{
            $todo = $_POST['todo'];
            if(!preg_match('/^[a-zA-Z\s]+$/',$todo)){
                $errors['todo'] = 'Todo must be letters and spaces';
            }
        }
        if(array_filter($errors)){ 
             //echo 'Form is Invalid';
        }else{
           
            //Saving data to database.
             $email = mysqli_real_escape_string($conn,$_POST['email']);
             $name = mysqli_real_escape_string($conn,$_POST['name']);
             $todo = mysqli_real_escape_string($conn,$_POST['todo']);

             //Create Sql
             $sql = "INSERT INTO todo(title,email,todo) VALUES('$name','$email','$todo')";

             //Save to db and check
             if(mysqli_query($conn,$sql)){
                //Redirect to index page
                header('Location:index.php');
             }
             else{
                 //Error
                 echo 'query error:' . mysqli_error($conn);
             }
        }
    }
?>
<!DOCTYPE html>
    <?php include('templates/header.php');?>
    <section class="container grey-text">
        <h4 class="center">ADD TODO</h4>
        <form class="white" action="add.php" method="POST">
            <label for="">Your Email</label>
            <input type="email" name="email" value="<?php echo htmlspecialchars($email) ?>">
            <div class="red-text"><?php echo $errors['email'];?></div>

            <label for="">Your Name</label>
            <input type="text" name="pname" value="<?php echo htmlspecialchars($email) ?>">
            <div class="red-text"><?php echo $errors['pname'];?></div>

            <label for="">Your Todo</label>
            <input type="text" name="todo" value="<?php echo htmlspecialchars($email) ?>">
            <div class="red-text"><?php echo $errors['todo'];?></div>
            <div class="center">
                <input type="submit" name="submit" value="ADD TODO" class="btn brand">
            </div>
        </form>
    </section>
    <?php include('templates/footer.php');?>
</html>