<?php

class Query {
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    // Do A Query on A Movie
    public function queryActor($data) {
        $this->db->query('SELECT * FROM actor WHERE concat(act_fn , " " , act_ln) LIKE :query');

        // Bind values
        $this->db->bind(':query', $data['query']);

       
            $row = $this->db->single();
    
        

       return $row;
    }


     public function queryMovie($data) {
        $this->db->query('SELECT * FROM movie 
                          JOIN movie_genres
                          ON movie.mov_id = movie_genres.mov_id
                          JOIN genre 
                          ON mov_title = :query');

        // Bind values
        $this->db->bind(':query', $data['query']);


       $row = $this->db->single();

       return $row;
    }

    public function queryGenre($data) {
        $this->db->query('SELECT * FROM movie
                            JOIN movie_genres
                            ON movie.mov_id = movie_genres.mov_id
                            JOIN genre
                            ON movie_genres.gen_id = genre.gen_id
                            WHERE gen_title = :query');

            $this->db->bind(':query', $data['query']);

         if($this->db->rowCount() > 1) {
            $row = $this->db->single();
        } else {
            $row = $this->db->resultSet();
        }

       return $row;
    }

    public function queryActorInMovie($data) {
        $this->db->query('SELECT * FROM actor
                            JOIN movie_cast
                            ON actor.act_id = movie_cast.act_id
                            JOIN movie
                            ON movie.mov_id = movie_cast.mov_id
                            WHERE mov_title = :query');

            $this->db->bind(':query', $data['query']);

         if($this->db->rowCount() > 1) {
            $row = $this->db->single();
        } else {
            $row = $this->db->resultSet();
        }

       return $row;
    }

    public function queryAllMovies($data) {
        $this->db->query('SELECT DISTINCT movie.mov_id, movie.mov_title, movie.mov_length, movie.mov_year, movie.mov_lang, gen_title from Movie
                            JOIN movie_genres
                            ON  movie.mov_id = movie_genres.mov_id
                            JOIN genre
                            ON movie_genres.gen_id = genre.gen_id');

        if($this->db->rowCount() > 1) {
            $row = $this->db->single();
        } else {
            $row = $this->db->resultSet();
        }

       return $row;
    }

    public function queryAllMoviesGroupedByYear($data) {
         $this->db->query('SELECT DISTINCT movie.mov_id, movie.mov_title, movie.mov_length, movie.mov_year, movie.mov_lang, gen_title from Movie
                            JOIN movie_genres
                            ON  movie.mov_id = movie_genres.mov_id
                            JOIN genre
                            ON movie_genres.gen_id = genre.gen_id
                            GROUP BY movie.mov_year
                            ');

        if($this->db->rowCount() > 1) {
            $row = $this->db->single();
        } else {
            $row = $this->db->resultSet();
        }

       return $row;
    }

        public function queryAllActors($data) {
        $this->db->query('SELECT * FROM actor');

        if($this->db->rowCount() > 1) {
            $row = $this->db->single();
        } else {
            $row = $this->db->resultSet();
        }

       return $row;
    
    }
}
