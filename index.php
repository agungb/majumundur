<?php
require 'inc/functions.php';

$pageTitle = "Maju Mundur Clothing";
$page = null;

include 'inc/header.php';
?>
	<div class="section catalog random">
    <div class="col-container actions-container">

      <h1>Welcome</h1>
      <p class="actions-copy">What would you like to do today?</p>
      <div class="actions-wrapper">
        <ul class="actions">
          <li class="actions-item">
            <a class="actions-link" href="product.php">
              <span class="actions-icon">
              </span>
              Add Product
            </a>
          </li>
          <li class="actions-item">
            <a class="actions-link" href="category.php">
              <span class="actions-icon">
              </span>
              Add Category
            </a>
          </li>
        </ul>
      </div>

		</div>

	</div>

<?php include("inc/footer.php"); ?>
