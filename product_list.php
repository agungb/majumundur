<?php
require 'inc/functions.php';

$page = "products";
$pageTitle = "Product List | Maju Mundur";

include 'inc/header.php';
?>
<div class="section catalog random">

    <div class="col-container page-container">
        <div class="col col-70-md col-60-lg col-center">

            <h1 class="actions-header">Product List</h1>
            <div class="actions-item">
                <a class="actions-link" href="product.php">
                Add Product</a>
            </div>

            <div class="form-container">
              <ul class="items">
                <?php
                  foreach (get_product_list() as $item) {
                      echo "<li>" . $item['title'] . "</li>";
                  }
                  ?>
              </ul>
            </div>

        </div>
    </div>
</div>

<?php include("inc/footer.php"); ?>
