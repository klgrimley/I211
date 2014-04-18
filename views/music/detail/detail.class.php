<?php
/*
 * Author: Kevin Grimley
 * Date: April 5, 2014
 * Name: view_movie.class.php
 * Description: This class defines a method "display".
 *              The method accepts a Movie object and displays the details of the movie in a table.
 */

class Book_Detail extends BookIndexView {

    public function display($book) {
        //display page header
        parent::displayHeader("Book Details");

        //retrieve movie details by calling get methods
        $id = $book->getId();
        $title = $book->getTitle();
        $isbn = $book->getIsbn();
        $publish_date = $book->getPublish_date();
        $publisher = $book->getPublisher();
        $category = $book->getCategory();
        $image = $book->getImage();
        $description = $book->getDescription();
        ?>

        <div id="main_header">Book Details</div>

        <!-- display movie details -->
        <div id="detail">
            <div class="image"><img src="<?= base_url ?>/www/img/books/<?= $image ?>" alt="<?= $title ?>" title="<?= $title ?>"></div>
            <table>
                <tr>
                    <td class="heading"><strong>Title:</strong></td>
                    <td><?= $title ?></td>
                </tr>
                <tr>
                    <td><strong>ISBN:</strong></td>
                    <td><?= $isbn ?></td>
                </tr>
                <tr>
                    <td><strong>Publish Date:</strong></td>
                    <td><?= $publish_date ?></td>
                </tr>
                <tr>
                    <td><strong>Publisher:</strong></td>
                    <td><?= $publisher ?></td>
                </tr>
                <tr>
                    <td><strong>Category:</strong></td>
                    <td><?= $category ?></td>
                </tr>
                <tr>
                    <td class="description"><strong>Description: </strong></td>
                    <td><?= $description ?></td>
                </tr>
            </table>
        </div>
        <a href="<?= base_url ?>/book/index">Back to book list</a>
        <?php
        //display page footer
        parent::displayFooter();
    }

//end of display method
}