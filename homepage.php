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
					<a href='menupage.php'><img src="img/home.png" alt="HomeButton" class="icon" id="icnHome" style="float: left;"/></a>
					<img src="img/cat.png" alt="categories" class="icon" id="icnCategory"/>
					<img src="img/search.png" alt="Search" class="icon" id="icnSearch"/>
					<div id="div_advert" class="div_advert">

					</div>
				</div>
				<!-- ------------------------------------------------------------------- search form -->
				<form action="content_search" method="post" id="frmContentSear" class="frmContentSear">
					<input type="text" placeholder="search" class="input_search"/>
					<input type="submit" value="search"/>
				</form>
				<!-- -------------------------------------------------------------------end of search form -->
			</div><!-- /header -->

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
				<p class='p_category' id="cat_archive">
					<img src='img/r_arrow.png' width="30px;" class="right_arrow"/>
					Archive
				</p>
				<hr/>
			</div>
			<!-- /header -->
			<div class='div_content' id="content">
				<span class='cat_label'>Politics</span>
				<div id="news1" class="div_news">
					
					<a href="newsdetails.php" data-transition="pop"> <?php
					include 'connection.php';

					$query = "select * from tbl_news where category='Politics'";
					$execute = mysql_query($query);
					while ($row = mysql_fetch_array($execute)) {
						$thumb = $row['thumb'];
						$id = $row['newsID'];
						// echo "<div class='thumb_outline' style='float:left;'><div id='" . $id . "' class='thumb_headline' style='background:url(" . $thumb . ")no-repeat;'></div>". $row['headline'] . "</div>";
						echo "<div class='thumb_outline' style='float:left;'><img id='" . $id . "' class='thumb_headline' alt='". $thumb ."' src='" . $thumb . "'/>". $row['headline'] . "</div>";
					}
					?></a>
				</div>
				<span class='cat_label'>Sports</span>
				<div id="news1" class="div_news">
					<a href="newsdetails.php" data-transition="pop"> <?php
					include 'connection.php';

					$query = "select * from tbl_news where category='Sports'";
					$execute = mysql_query($query);
					while ($row = mysql_fetch_array($execute)) {
						$thumb = $row['thumb'];
						$id = $row['newsID'];
						// echo "<div class='thumb_outline' style='float:left;'><div id='" . $id . "' class='thumb_headline' style='background:url(" . $thumb . ")no-repeat;'></div>". $row['headline'] . "</div>";
						echo "<div class='thumb_outline' style='float:left;'><img id='" . $id . "' class='thumb_headline' alt='". $thumb ."' src='" . $thumb . "'/>". $row['headline'] . "</div>";
					}
					?></a>
				</div>
				<span class='cat_label'>Business</span>
				<div id="news1" class="div_news">
					<a href="newsdetails.php" data-transition="pop"> <?php
					include 'connection.php';

					$query = "select * from tbl_news where category='Business'";
					$execute = mysql_query($query);
					while ($row = mysql_fetch_array($execute)) {
						$thumb = $row['thumb'];
						$id = $row['newsID'];
						// echo "<div class='thumb_outline' style='float:left;'><div id='" . $id . "' class='thumb_headline' style='background:url(" . $thumb . ")no-repeat;'></div>". $row['headline'] . "</div>";
						echo "<div class='thumb_outline' style='float:left;'><img id='" . $id . "' class='thumb_headline' alt='". $thumb ."' src='" . $thumb . "'/>". $row['headline'] . "</div>";
					}
					?></a>
				</div>
				<span class='cat_label'>Lifestyle</span>
				<div id="news1" class="div_news">
					<a href="newsdetails.php" data-transition="pop"> <?php
					include 'connection.php';

					$query = "select * from tbl_news where category='Lifestyle'";
					$execute = mysql_query($query);
					while ($row = mysql_fetch_array($execute)) {
						$thumb = $row['thumb'];
						$id = $row['newsID'];
						// echo "<div class='thumb_outline' style='float:left;'><div id='" . $id . "' class='thumb_headline' style='background:url(" . $thumb . ")no-repeat;'></div>". $row['headline'] . "</div>";
						echo "<div class='thumb_outline' style='float:left;'><img id='" . $id . "' class='thumb_headline' alt='". $thumb ."' src='" . $thumb . "'/>". $row['headline'] . "</div>";
					}
					?></a>
				</div>
				<span class='cat_label'>Entertainment</span>
				<div id="news1" class="div_news">
					<a href="newsdetails.php" data-transition="pop"> <?php
					include 'connection.php';

					$query = "select * from tbl_news where category='Entertainment'";
					$execute = mysql_query($query);
					while ($row = mysql_fetch_array($execute)) {
						$thumb = $row['thumb'];
						$id = $row['newsID'];
						// echo "<div class='thumb_outline' style='float:left;'><div id='" . $id . "' class='thumb_headline' style='background:url(" . $thumb . ")no-repeat;'></div>". $row['headline'] . "</div>";
						echo "<div class='thumb_outline' style='float:left;'><img id='" . $id . "' class='thumb_headline' alt='". $thumb ."' src='" . $thumb . "'/>". $row['headline'] . "</div>";
					}
					?></a>
				</div>
			</div>
		</div>

	</body>
</html>

