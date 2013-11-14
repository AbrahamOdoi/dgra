<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Graphic Online</title>
		<link rel="stylesheet" href="css/jquery.mobile-1.0.min.css" />
		<script src="js/jquery-1.6.4.min.js"></script>
		<script src="js/jquery.mobile-1.0.min.js"></script>
		<script src="js/script.js"></script>
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" title="no title" charset="utf-8"/>
	</head>
	<body>

		<div data-role="page" data-theme="b" id="dailygraphic">

			<div data-role="header" data-theme='d'>
				<div id="head" class="head">
					<img src="img/logo.png" alt="graphic online" class="logo" id="graphic_logo"/>
					<img src="img/cat.png" alt="categories" class="icon" id="icnCategory"/>
					<img src="img/search.png" alt="Search" class="icon" id="icnSearch"/>
					<a href='menupage.php' data-transition="slideup"><img src="img/home.png" alt="HomeButton" class="icon" id="icnHome" style="float: left;"/></a>
					
					<div id="div_advert" class="div_advert">

					</div>
				</div>

			</div><!-- /header -->
			<!-- ------------------------------------------------------------------- search form -->
			<form action="content_search" method="post" id="frmContentSear" class="frmContentSear">
				<input type="text" placeholder="search"/>
				<input type="submit" value="search"/>
			</form>
			<!-- -------------------------------------------------------------------end of search form -->
			<div class="slide_category" id="slide_category">

				<p class='p_category' id="cat_news">
					<img src='img/r_arrow.png' width="30px;" class="right_arrow"/>
					News
				</p>

				<hr />
				<p class='p_category' id="cat_politics">
					<img src='img/r_arrow.png' width="30px;" class="right_arrow"/>
					Politics
				</p>
				<hr/>
				<p class='p_category' id="cat_sports">
					<img src='img/r_arrow.png' width="30px;" class="right_arrow"/>
					Sports
				</p>
				<hr/>
				<p class='p_category' id='cat_lifestyle'>
					<img src='img/r_arrow.png' width="30px;" class="right_arrow"/>
					Lifestyle
				</p>
				<hr/>
				<p class='p_category' id="cat_business">
					<img src='img/r_arrow.png' width="30px;" class="right_arrow"/>
					Business
				</p>
				<hr/>
				<p class='p_category' id="cat_entertainment">
					<img src='img/r_arrow.png' width="30px;" class="right_arrow"/>
					Entertainment
				</p>
				<hr/>
			</div>
			<!-- /header -->
			<div class='div_NewsContent' id="content">
				<?php
				include 'connection.php';
				$query = "SELECT * FROM tbl_news WHERE newsID = 1";
				$result = mysql_query ( $query );
				
				while ( $row = mysql_fetch_array ( $result ) ) {?>
					<h1 style="text-align: center; color:gray;"><?php echo $row['headline'] ?></h1>
					<p style="display: block; margin-bottom: 0px;">
						<span><strong style='color:gray;'>Author: </strong><?php echo $row['reporter'] ?></span>
						<span> | <?php echo $row['date'] ?></span>
					</p>
					<hr style="margin: 0px;"/>
					<?php $pic= $row['thumb']; ?>
					<span class='img_newsDet'><img src='<?php echo $pic; ?>' ></span>
					<article style="margin: 2px; text-align: justify;">
					<?php echo $row['content'] ?>
					</article>
				<?php } ?>
			</div>
		</div>

	</body>
</html>

