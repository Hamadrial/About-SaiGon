<div class="media ">
  <?php if (isAuthenticated()) : ?>
  <!-- Place vote on the left hand side of post's title and description -->
  <div class="media-left">
    <!-- Vote -->
    <div class="btn-group-vertical" role="group">
      <!-- Up vote -->
      <a href="procedures/vote.php?vote=up&amp;postId=<?php echo $post['postID']; ?>">
        <!-- User can cast only 1 vote ($post['myVote'] == 1). When user alreaady vote, the arrow turn to orange color. Click he arrow again to take back vote -->
        <span class="glyphicon glyphicon-triangle-top" <?php if ($post['myVote'] == 1) echo 'style="color:orange"'; ?>></span>
      </a>
      <?php
        // Display score's color
        if (isset($post['score'])) {
          // Score has green color if it > 0
          if ($post['score'] > 0) {
            echo '<span class="text-green">';
              echo $post['score'];
            echo '</span>';
          } else if ($post['score'] < 0) {
            // Score has red color if it < 0
            echo '<span class="text-red">';
              echo $post['score'];
            echo '</span>';
          }
        } else {
            echo '<span>';
              echo '0';
            echo '</span>';
        }
      ?>
      <!-- Down vote -->
      <a href="procedures/vote.php?vote=down&amp;postId=<?php echo $post['postID']; ?>">
        <span class="glyphicon glyphicon-triangle-bottom"<?php if ($post['myVote'] == -1) echo 'style="color:orange"'; ?>></span>
      </a>
    </div> <!-- /btn-group-vertical -->
  </div> <!-- /media-left -->
<?php endif; ?>

  <!-- Display all books -->
  <div class="media-body">
    <!-- Display title -->
    <h4 class="media-heading"><?php echo $post['name']; ?></h4>

    <!-- Display description -->
    <p><?php echo $post['description']; ?></p>

    <!-- Edit and delete books links -->
    <p>
      <span class="edit"><a href="edit.php?postId=<?php echo $post['postID']; ?>" class="">Edit</a> | </span>
      <span class="delete"><a href="procedures/deletePost.php?postId=<?php echo $post['postID']; ?>">Delete</a></span>
    </p>
  </div> <!-- /media-body -->
</div> <!-- /media -->
