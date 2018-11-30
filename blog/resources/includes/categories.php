<?php
include_once "../lib/config.php";

$sql = "SELECT * FROM categories ORDER BY id ASC";

$result = mysqli_query($conn, $sql);

$resultCheck = mysqli_num_rows($result);
?>

<!-- Categories / topics -->
<div class="card my-4">
   <h5 class="card-header">Categories</h5>
   <div class="card-body">
      <div class="row">
<?php
   if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) { ?>
         <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
               <li onclick="loadTopic(<?php echo $row['id']; ?>)">
                  <button class="badge badge-pill badge-light"><?php echo $row['name']; ?></button>
               </li>
            </ul>
         </div>
      <?php
      }
   }
?>
      </div>
   </div>
</div>

<script>

function loadTopic(id){
   $.ajax({
      type: 'POST',
      url: 'resources/views/blog_on_topic.php',
      data: {
         category_id: id,
      }
   });
   window.location.href = '/blog/resources/views/blog_on_topic.php?category_id=' + id;
}

</script>
