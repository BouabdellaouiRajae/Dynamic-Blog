<?php
$conn = mysqli_connect("localhost", "root", "", "signup");


// Close connection
mysqli_close($conn);

?>
<?php
if (isset($_POST['submit'])) {
    echo ("<script>alert ('fill all the field ')</script>");
    exit();
} else {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $content = $_POST['content'];
    $image_name = $_FILES['image']['name'];
    $image_type = $_FILES['image']['type'];
    $image_size = $_FILES['image']['size'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $error = $_FILES['image']['error'];
    $date = date('Y-m-d H:i:s');

    if ($error === 0) {
        if ($image_size > 125000) {
            $em = "Sorry, your file is too large.";
            header("Location: index.php?error=$em");
        } else {
            $image_ex = pathinfo($image_name, PATHINFO_EXTENSION);
            $image_ex_lc = strtolower($image_ex);

            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($image_ex_lc, $allowed_exs)) {
                $new_image_name = uniqid("IMG-", true) . '.' . $image_ex_lc;
                $image_upload_path = '/img/' . $new_image_name;
                move_uploaded_file($tmp_name, $image_upload_path);

                // Insert into Database
                $query = "INSERT INTO posts(title, author, image_url, content, date) 
                            VALUES('$title','$author' ,'$new_image_name' ,'$content','$date')";
                mysqli_query($conn, $query);
                header("Location: index.php");
            } else {
                $em = "You can't upload files of this type";
                header("Location: index.php?error=$em");
            }
        }
    } else {
        $em = "unknown error occurred!";
        header("Location: index.php?error=$em");
    }
}
?>