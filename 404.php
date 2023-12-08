<?php

header( 'Content-Type: text/html; charset=utf-8' );
header( 'Cache-Control: s-maxage=2678400, max-age=2678400' );

echo <<<EOF
	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<meta name="description" content="Page not found" />
			<title>Page not found</title>
			<link rel="icon" type="image/x-icon" href="https://meta.wikitide.org/favicon.ico" />
			<link rel="apple-touch-icon" href="https://meta.wikitide.org/apple-touch-icon.png" />
			<!-- Bootstrap core CSS -->
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
			<!-- Outfit font from Google Fonts -->
			<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit">
			<link href="/ErrorPages/assets/main.css" rel="stylesheet">
		</head>
		<div class="container">
			<!-- Jumbotron -->
			<div class="jumbotron" style="padding: 70px 0; text-align: center;">
				<p>
					<a href="https://wikitide.org">
						<img src="https://static.wikitide.net/commonswiki/2/22/WikiTide_icon.svg" width="130" height="130" alt="WikiForge" />
					</a>
				</p>
				<h1><b>Page not found</b></h1>
				<p>We couldn't find this page. Check your spelling and try again.</p>
			</div>
		</div>
		<div class="bottom-links">
			<a href="#" onClick="history.go(-1); return false;">&larr; Go back</a>
			<a href="/">Main Page</a>
		</div>
	</html>
EOF;
