<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="jumbotron jumbotron-flud text-center">
    <div class="container">
    <table class="table">
    <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Length in minutes</th>
            <th scope="col">Year</th>
            <th scope="col">Language</th>
            <th scope="col">Genre</th>
          </tr>
        </thead>
      <?php foreach($data as $row) {
        echo '<tbody>';
        echo '<tr>';
        echo '<th scope="row">'.$row->mov_id;'</th>';
        echo '<td>' . $row->mov_title;'</td>';
        echo '<td>' . $row->mov_length;'</td>';
        echo '<td>' . $row->mov_year;'</td>';
        echo '<td>' . $row->mov_lang;'</td>';
        echo '<td>' . $row->gen_title;'</td>';
        echo '</tbody>';
      } ?>
        
</table>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
