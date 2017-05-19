<div class="form-group">
  <label for="title" class="col-sm-2 control-label">Title</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="title" name="title" placeholder="Post Title" value="<?php if(isset($postTitle)) echo $postTitle; ?>">
  </div> <!-- /col -->
</div> <!-- /form-group -->

<div class="form-group">
  <label for="description" class="col-sm-2 control-label">Description</label>
  <div class="col-sm-10">
    <textarea name="description" class="form-control" rows="10" placeholder="Description of the post">
      <?php if(isset($postDescription)) echo $postDescription; ?>
    </textarea>
  </div> <!-- /col -->
</div> <!-- /form-group -->

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default">
      <?php
        if(isset($buttonText)) {
          echo $buttonText;
        } else {
            echo "Add Post";
        }
      ?>
    </button>
  </div> <!-- /col -->
</div> <!-- /form-group -->
