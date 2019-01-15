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
        <tbody>
           <tr>
            <th scope="row"><?php echo $data->act_id; ?></th>
            <td><?php echo $data->act_fn; ?></td>
            <td><?php echo $data->act_ln; ?></td>
            <td><?php echo $data->act_gender; ?></td>
            <td><?php echo $data->act_birth; ?></td>
          </tr>
        </tbody>
</table>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
