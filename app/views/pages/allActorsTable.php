<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="jumbotron jumbotron-flud text-center">
    <div class="container">
    <table class="table">
    <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Gender</th>
            <th scope="col">Birth Year</th>
          </tr>
        </thead>
      <?php foreach($data as $row) {
        echo '<tbody>';
        echo '<tr>';
        echo '<th scope="row">'.$row->act_id;'</th>';
        echo '<td>' . $row->act_fn;'</td>';
        echo '<td>' . $row->act_ln;'</td>';
        echo '<td>' . $row->act_gender;'</td>';
        echo '<td>' . $row->act_birth;'</td>';
        echo '</tbody>';
      } ?>
        
</table>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
