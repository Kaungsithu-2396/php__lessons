<?php
   

    function category_list(){
        global $conn;
        $sql="SELECT * FROM web_list ";
        $fecthMessage= mysqli_query($conn,$sql);
        $total_row=mysqli_num_rows($fecthMessage);
        $rows=[];
        while($data=mysqli_fetch_assoc($fecthMessage)){

            array_push($rows,$data);                                           
        }
        return $rows;
    }


    function category_add(){
        global $conn;
        if(isset($_GET['addBtn'])){
            $sms=$_GET['name'];
        $sql="INSERT INTO web_list (message) VALUES ('$sms')";
        if(mysqli_query($conn,$sql)){
            // global $sms;
            // echo "$sms has been added";
            // header('location:create.php'); show warning sings though it works

            echo "<script>location.href='category_create.php'</script>";
        }
        else{
            echo 'sorry';
        }
};
    }

    function category_update(){
        global $conn;
        $message=$_GET['txt'];
        $id=$_GET['id'];
        $update="UPDATE web_list SET message='$message' WHERE id=$id";
        if(mysqli_query($conn,$update)){
            echo 'update successful';
            echo "<script>location.href='category_list.php'</script>";
        }else{
            die();
        }

    }

    function category_delete(){
        global $conn;
        $id=$_GET['id'];
        $sql= "DELETE FROM web_list WHERE id=$id";

        if(!mysqli_query($conn,$sql)){
            echo 'sorry';
        }else{
            echo "<script>location.href='category_list.php'</script>";
        }
    }

    

    