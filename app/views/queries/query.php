<?php require APPROOT . '/views/inc/header.php';?>
  <div class="row">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
        <h2>Search the Database!</h2>

        <form action="<?php echo URLROOT; ?>/queries/query" method="post">
          <div class="form-group">
            <input type="text" name="query" placeholder="Search Query..." class="form-control form-control-lg <?php echo (!empty($data['query_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['query']; ?>">
            <select name="column">
              <option value="">Select filter</option>
              <option value="allMovies">All Movies</option>
              <option value="allActors">All Actors</option>
              <option value="Actor">Specific Actor</option>
              <option value="Movie">Specific Movie</option>
              <option value="Genre">All movies of specific Genre</option>
              <option value="allActorsInMovie">All Actors in specific Movie</option>
             <option value="allMoviesGroupedByYear">All Movies grouped by year of release</option>
            </select>
            <span class="invalid-feedback"><?php echo $data['query_err']; ?></span>
             <span class="invalid-feedback"><?php echo $data['column_err']; ?></span>
          </div>
          <div class="row">
            <div class="col">
              <input type="submit" value="Search!" class="btn btn-success btn-block">
            </div>
            <div class="col">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php require APPROOT . '/views/inc/footer.php';?>