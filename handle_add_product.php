<?php
        require_once("./connect.php");

        if(isset($_POST['submit']) && isset($_FILES['avatar'])){
            $img_name = $_FILES['avatar']['name'];
            $img_size = $_FILES['avatar']['size'];
            $tmp_name = $_FILES['avatar']['tmp_name'];
            $error = $_FILES['avatar']['error'];

            if($error === 0){
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);

                $allowed = array("jpg", "jpeg", "png");

                if(in_array($img_ex_lc, $allowed)){
                    $new_name_img = uniqid("IMG-", true).'.'.$img_ex_lc;
                    $img_path = './assets/images/product/'.$new_name_img;
                    move_uploaded_file($tmp_name, $img_path);

                    // add to database
                    $name = $_POST['name'];
                    $amount = $_POST['amount'];
                    $price = $_POST['price'];
                    $note = $_POST['description'];

                    $add_product = "INSERT INTO product(name, avatar, amount, price, note) VALUES('$name', '$new_name_img', '$amount', '$price', '$note')";
                    mysqli_query($conn, $add_product);
                    header("Location: ./admin.php?message=success_add_product");
                }else{
                    header("Location: ./admin.php?message=error_add_product");
                }
            }else{
                header("Location: ./admin.php?message=error_add_product");
            }
        }
        else{
            header("Location: ./admin.php?message=error_add_product");
        }
        mysqli_close($conn);
?>