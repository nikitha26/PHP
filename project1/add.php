<?php
    if(isset($_POST['submit'])){
        // echo htmlspecialchars($_POST['email']);
        // echo htmlspecialchars($_POST['todo']);
        // echo htmlspecialchars($_POST['p_name']);

        //Check Email
        if(empty($_POST['email'])){
            echo 'Email is required'.'<br/>';
        }else{
            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo 'Email must be valid email address';
            }
        }
        //Check Todo
        if(empty($_POST['todo'])){
            echo 'Todo is required'.'<br/>';
        }else{
            $todo = $_POST['todo'];
            if(!preg_match('/^[a-zA-Z\s]+$/',$todo)){
                echo 'Todo must be letters and spaces';
            }
        }
        //Check Name
        if(empty($_POST['pname'])){
            echo 'Name is required';
        }else{
            $name = $_POST['pname'];
            if(!preg_match('/^[a-zA-Z\s]+$/',$name)){
                echo 'Name must be letters and spaces';
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
            <input type="email" name="email">
            <label for="">Your Todo</label>
            <input type="text" name="todo">
            <label for="">Your Name</label>
            <input type="text" name="pname">
            <div class="center">
                <input type="submit" name="submit" value="ADD TODO" class="btn brand">
            </div>
        </form>
    </section>
    <?php include('templates/footer.php');?>
</html>