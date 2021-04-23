<?php
include 'functions.php';
// Connect to MySQL database
$pdo = pdo_connect_mysql();
// Get the page via GET request (URL param: page), if non exists default the page to 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Number of records to show on each page
$records_per_page = 5;

// Prepare the SQL statement and get records from our contacts table, LIMIT will determine the page
$stmt = $pdo->prepare('SELECT * FROM posts ORDER BY id LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page-1)*$records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// Fetch the records so we can display them in our template.
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Get the total number of posts, this is so we can determine whether there should be a next and previous button
$num_posts = $pdo->query('SELECT COUNT(*) FROM posts')->fetchColumn();
?>

<?=template_header('Read')?>

<div class="content read">
	<h2>Read Posts</h2>
	<a href="create1.php" class="create-contact">Create Posts</a>
	<table>
        <thead>
            <tr>
                <td>#</td>
                <td>Title</td>
                <td>Author</td>
                <td>Image</td>
                <td>Content</td>
                <td>Date</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
            <tr>
                <td><?=$post['id']?></td>
                <td><?=$post['title']?></td>
                <td><?=$post['author']?></td>
                <td><?=$post['image']?></td>
                <td><?=$post['content']?></td>
                <td><?=$post['date']?></td>
                <td class="actions">
                    <a href="update.php?id=<?=$post['id']?>" class="edit"><i class="fas fa-pen fa-xs"></i></a>
                    <a href="delete.php?id=<?=$post['id']?>" class="trash"><i class="fas fa-trash fa-xs"></i></a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
	<div class="pagination">
		<?php if ($page > 1): ?>
		<a href="read.php?page=<?=$page-1?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
		<?php endif; ?>
		<?php if ($page*$records_per_page < $num_posts): ?>
		<a href="read.php?page=<?=$page+1?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
		<?php endif; ?>
	</div>
</div>

<?=template_footer()?>