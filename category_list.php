<?php
require 'inc/functions.php';

$page = "categories";
$pageTitle = "Category List | Maju Mundur";

include 'inc/header.php';
?>
<div class="section catalog random">

    <div class="col-container page-container">
        <div class="col col-70-md col-60-lg col-center">
            <h1 class="actions-header">Category List</h1>
            <div class="actions-item">
                <a class="actions-link" href="category.php">
                Add Category
                </a>
            </div>

            <div class="form-container">
                <ul class="items">
                    <?php
                    foreach (get_category_list() as $item) {
                        echo "<li>" . $item['title'] . "</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

</div>

<?php include("inc/footer.php"); ?>
