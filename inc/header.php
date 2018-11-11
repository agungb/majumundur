<html>
<head>
	<title><?php echo $pageTitle; ?></title>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

	<header class="header">
    <div class="col-container">
  		<h1>
        <a class="logo" href="./">
          <svg viewbox="0 0 64 64" class="logo-icon"><use xlink:href="#logo_icon"></use></svg>
          <span class="logo-name">Maju Mundur</span>
        </a>
      </h1>

  		<ul class="nav">
        <li class="nav-item <?php if ($page == "products") { echo " on"; } ?>"><a class="nav-link" href="product_list.php">Products</a></li>
        <li class="nav-item <?php if ($page == "categories") { echo " on"; } ?>"><a class="nav-link" href="category_list.php">Categories</a></li>
      </ul>
    </div>
  </header>
	<div id="content">
