<?php
    $less_id = 11;
    include "../include/elements/top.php";
?>

<div class="container my-5">
    <?php
        class Photo {
            public $image;
            public $description;

            public function __construct($image, $description) {
                $this->image = $image;
                $this->description = $description;
            }

            public function publish() {
                echo '<div class="photo">';
                echo '<img src="' . htmlspecialchars($this->image) . '" alt="' . htmlspecialchars($this->description) . '" class="img-fluid">';
                echo '<p>' . htmlspecialchars($this->description) . '</p>';
                echo '</div>';
            }
        }

        $photos = [
            new Photo("images/photo1.jpg", "A beautiful sunrise."),
            new Photo("images/photo2.jpg", "A serene mountain view."),
            new Photo("images/photo3.jpg", "A calm beach at sunset.")
        ];

        foreach ($photos as $photo) {
            $photo->publish();
        }
    ?>
</div>

<?php
    include "../include/elements/bottom.php"
?>