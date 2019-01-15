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
        <tbody>
           <tr>
            <th scope="row"><?php echo $data->mov_id; ?></th>
            <td><?php echo $data->mov_title; ?></td>
            <td><?php echo $data->mov_length; ?></td>
            <td><?php echo $data->mov_year; ?></td>
            <td><?php echo $data->mov_lang; ?></td>
            <td><?php echo $data->gen_title; ?></td>
          </tr>
        </tbody>
</table>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
