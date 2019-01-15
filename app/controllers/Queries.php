<?php
class Queries extends Controller {
    public function __construct() {
        $this->userModel = $this->model('Query');
    }

    public function query() {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form

            // Sanitize POST datass
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            // Init data
            $data = [
                'query' => trim($_POST['query']),
                'column' => $_POST['column'],
                'column_err' => '',
                'query_err' => ''
            ];

           

            // Validate filter
            if (empty($data['column'])) {
                $data['column_err'] = 'Please select a filter!';
            }

            // Make sure errors are empty

            if (empty($data['column_err'])) {

                // Determine which table to search according to filter
                $filter = $data['column'];

                switch ($filter) {
                    case 'Actor':
                    $data = $this->userModel->queryActor($data);
                    $this->view('pages/singleActorTable', $data);
                    break;

                    case 'Movie':
                    $data = $this->userModel->queryMovie($data);
                    $this->view('pages/singleMovieTable', $data);
                    break;

                    case 'Genre':
                    $data = $this->userModel->queryGenre($data);
                   $this->view('pages/allMoviesOfGenreTable', $data);
                    break;

                    case 'allMovies':
                    $data = $this->userModel->queryAllMovies($data);
                    $this->view('pages/allMoviesTable', $data);
                    break;

                    case 'allActors':
                    $data = $this->userModel->queryAllActors($data);
                    $this->view('pages/allActorsTable', $data);
                    break;

                    case 'allActorsInMovie':
                    $data = $this->userModel->queryActorInMovie($data);
                    $this->view('pages/actorInMovie', $data);
                    break;

                    case 'allMoviesGroupedByYear':
                    $data = $this->userModel->queryAllMoviesGroupedByYear($data);
                    $this->view('pages/allMoviesGroupedByYear', $data);
                    break;

                    default:
                    $data = $this->userModel->queryMovie($data);
                    foreach($data as $row) {
                    echo $row;
                    }
                }

            } else {
                // Load view with errors
                $this->view('queries/query', $data);
            }

        } else {
            // Init data
            $data = [
                'query' => '',
                'column' => '',
                'query_err' => '',
                'column_err' => ''
            ];

            // Load view
            $this->view('queries/query', $data);
        }
    }

}
