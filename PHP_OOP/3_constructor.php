<!DOCTYPE html>
<html lang="en">
<body>
    <?php 
        class Book{
            var $title;
            var $author;
            var $pages;
            //constructor
            function __construct($title, $author, $pages){
                $this->title = $title;
                $this->author = $author;
                $this->pages = $pages;
            }

            //destructor , php will automatically call this function at the end of the script.
            function __destruct() {
                echo "$this->title titled book created successfully!!";
                echo "<br>";
              }
        }
        $book1 = new Book("Harry Potter","JK Rowling",400);
        $book2 = new Book("You Can Win","Shiv Khera",485);

        echo $book1->title;
        echo "<br>";
        echo $book1->author;
        echo "<br>";
        echo $book2->title;
        echo "<br>";
    ?>
</body>
</html>