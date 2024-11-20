<!DOCTYPE html>
<html lang="en">
<body>
    <?php 
        class Movie{
            public $title;
            private $rating;
            function __construct($title, $rating){
                $this->title = $title;
                $this->setRating($rating);
            }
            function getRating(){
                return $this->rating;
            }
            function setRating($rating){
                if($rating == "G" || $rating == "PG" ||$rating == "PG-13"){
                    $this->rating = $rating;
                }else{
                    $this->rating = "NR";
                }
            }
        }
        $avengers = new Movie("Avengers","Dog");
        $avengers->setRating("Rahul");
        echo $avengers->getRating();
    ?>
</body>
</html>