<?php
require_once __DIR__ . '/inc/bootstrap.php';
requireAdmin();
require_once __DIR__ . '/inc/header.php';
?>

<section class="admin-panel">

<div id="admin">

</div>

  <div class="container">
    <div class="well">
      <h1>Admin</h1>
        <!-- Display messages -->
        <?php echo display_errors(); ?>
        <?php echo display_success(); ?>

        <div class="panel">
          <h3>Users</h3>
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Email</th>
                <th>Registered</th>
                <th>Promote/ Demote</th>
              </tr> <!-- /tr -->
            </thead> <!-- /head -->

            <tbody>
              <?php foreach (getAllUsers() as $user) : ?>
              <tr>
                <!-- For email column -->
                <td><?php echo $user['email']; ?></td>

                <!-- For registered column -->
                <td><?php echo $user['created_at']; ?></td>

                <!-- For promote or demote column -->
                <td>
                  <?php if (!isOwner($user['memberID'])) : ?>
                    <!-- Demote if role_id = 1 -->
                    <?php if ($user['role_id'] == 1) : ?>
                      <a href="procedures/adjustRole.php?role=demote&amp;userId=<?php echo $user['memberID']; ?>" class="bt btb-xs btn-warning">Demote from Admin</a>

                    <!-- Promote if role_id = 2 -->
                    <?php elseif ($user['role_id'] == 2) : ?>
                      <a href="procedures/adjustRole.php?role=promote&amp;userId=<?php echo $user['memberID']; ?>" class="bt btb-xs btn-success">Promote to Admin</a>
                    <?php endif; ?>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>
            </tbody> <!-- /body -->
          </table>
        </div> <!-- /panel -->
    </div> <!-- /well -->
  </div> <!-- /container -->
</section>


<?php require_once __DIR__ . '/inc/footer.php'; ?>
