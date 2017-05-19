<?php
require __DIR__ . '/inc/bootstrap.php';
requireAuth();
require_once __DIR__ . '/inc/header.php';

$post = getPost(request()->get('postId'));

// If not admin or owner of the post, return error.
if (!isAdmin() && !isOwner($post['owner_id'])) {
  // Display message and redirect
  $session->getFlashBag()->add('error', 'Not Anthorized');
  redirect('posts-list.php');
}

$postTitle = $post['name'];
$postDescription = $post['description'];
$buttonText = 'Update Post';
?>

<div class="container">
  <h1 class="text-center">Update post</h1>
  <div class="well">
    <!-- action="procedures/editPost.php  -->
    <form class="form-horizontal" method="post" action="procedures/editPost.php">
      <input type="hidden" name="postId" value="<?php echo $post['postID']; ?>" />
      <?php include_once __DIR__ .'/inc/postForm.php'; ?>
    </form>
  </div>
</div>

<?php require_once __DIR__ . '/inc/footer.php'; ?>
