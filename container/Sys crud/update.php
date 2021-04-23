<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the post id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $title = isset($_POST['title']) ? $_POST['title'] : '';
        $author = isset($_POST['author']) ? $_POST['author'] : '';
        $image = isset($_POST['image']) ? $_POST['image'] : '';
        $content = isset($_POST['content']) ? $_POST['content'] : '';
        $date = isset($_POST['date']) ? $_POST['date'] : date('Y-m-d H:i:s');
        // Update the record
        $stmt = $pdo->prepare('UPDATE posts SET id = ?, title = ?, author = ?, image = ?, content = ?, date = ? WHERE id = ?');
        $stmt->execute([$id, $title, $author, $image, $content, $date, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the posts table
    $stmt = $pdo->prepare('SELECT * FROM posts WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $post = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$post) {
        exit('Post doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>

<?=template_header('Read')?>

<div class="content update">
	<h2>Update Post #<?=$post['id']?></h2>
    <form action="update.php?id=<?=$post['id']?>" method="post">
        <label for="id">ID</label>
        <label for="title">Title</label>
        <input type="text" name="id" placeholder="id" value="auto" id="id">
        <input type="text" name="title" placeholder="The title" id="title">
        <label for="author">Author</label>
        <label for="image">Image</label>
        <input type="text" name="author" placeholder="Your name" id="author">
        <input type="file" name="image" placeholder="image" id="image">
        <label for="content">Content</label>
        <label for="date">Date</label>
        <input type="text" name="content" placeholder="Your content" id="content">
        <input type="datetime-local" name="date" value="<?=date('Y-m-d\TH:i')?>" id="date">
        <input type="submit" value="Update">
    </form>
    
    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>