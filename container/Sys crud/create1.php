<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "title" exists, if not default the value to blank, basically the same for all variables
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $author = isset($_POST['author']) ? $_POST['author'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';
    $date = isset($_POST['date']) ? $_POST['date'] : date('Y-m-d H:i:s');
    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO posts VALUES (?, ?, ?, ?, ?)');
    $stmt->execute([$id, $title, $author, $content, $date]);
    // Output message
    $msg = 'Created Successfully!';
}
?>

<?=template_header('Create')?>

<div class="content update">
    <h2>Create Contact</h2>
    <form action="create1.php" method="post">
        <label for="id">ID</label>
        <label for="title">Title</label>
        <input type="text" name="id" placeholder="id" value="auto" id="id">
        <input type="text" name="title" placeholder="The title" id="title">
        <label for="author">Author</label>
        <input type="text" name="author" placeholder="Your name" id="author">
        <label for="content">Content</label>
        <label for="date">Date</label>
        <input type="text" name="content" placeholder="Your content" id="content">
        <input type="datetime-local" name="date" value="<?=date('Y-m-d\TH:i')?>" id="date">
        <input type="submit" value="Create">
    </form>
    <form action="upload.php" method="POST">
        <label for="image">Image</label>
        <input type="file" name="image" placeholder="image" id="image">
        <input type="submit" value="upload img">
    </form>
</div>


<?=template_footer()?>