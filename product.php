<?php
require 'inc/functions.php';

$pageTitle = "Product | Maju Mundur";
$page = "products";
$category_id = $title = $description = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $category_id = trim(filter_input(INPUT_POST, 'category_id', FILTER_SANITIZE_NUMBER_INT));
    $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
    $description = trim(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING));

    if (empty($category_id) || empty($title) || empty($description)) {
        $error_message = 'Please fill in the required fields: Project, Title, Description';
    } else {
        if (add_product($category_id, $title, $description)) {
            header('Location: product_list.php');
            exit;
        } else {
            $error_message = 'Could not add product';
        }
    }
}

include 'inc/header.php';
?>

<div class="section page">
    <div class="col-container page-container">
        <div class="col col-70-md col-60-lg col-center">
            <h1 class="actions-header">Add Product</h1>
            <?php
            if (isset($error_message)) {
                echo "<p class='message'>$error_message</p>";
            }
            ?>
            <form class="form-container form-add" method="post" action="product.php">
                <table>
                    <tr>
                        <th>
                            <label for="category_id">Category</label>
                        </th>
                        <td>
                            <select name="category_id" id="category_id">
                                <option value="">Select One</option>
                                <?php
                                foreach (get_category_list() as $item) {
                                    echo "<option value='" . $item['category_id'] . "'";
                                    if ($category_id == $item['category_id']) {
                                        echo ' selected';
                                    }
                                    echo ">" . $item['title'] . "</option>";
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="title">Title<span class="required">*</span></label></th>
                        <td><input type="text" id="title" name="title" value="<?php echo htmlspecialchars($title); ?>" /></td>
                    </tr>
                    <tr>
                        <th><label for="description">Description<span class="required">*</span></label></th>
                        <td><input type="text" id="description" name="description" value="<?php echo htmlspecialchars($description); ?>" /></td>
                    </tr>
                </table>
                <input class="button button--primary button--topic-php" type="submit" value="Submit" />
            </form>
        </div>
    </div>
</div>

<?php include "inc/footer.php"; ?>
