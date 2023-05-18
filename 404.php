<?php

header( 'Content-Type: text/html; charset=utf-8' );
header( 'Cache-Control: s-maxage=2678400, max-age=2678400' );

echo <<<EOF
	<!DOCTYPE html>
	<html lang="en">
		<head>
			<meta charset="utf-8" />
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<meta name="description" content="Page Not Found" />
			<title>Page Not Found</title>
			<link rel="icon" type="image/x-icon" href="https://meta.wikiforge.net/favicon.ico" />
			<link rel="apple-touch-icon" href="https://meta.wikiforge.net/apple-touch-icon.png" />
			<!-- Bootstrap core CSS -->
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"/>
			<style>
				/* Error Page Inline Styles */
				body {
					padding-top: 20px;
				}
				/* Layout */
				.jumbotron {
					font-size: 21px;
					font-weight: 200;
					line-height: 2.1428571435;
					color: inherit;
					padding: 10px 0px;
					text-align: center;
					background-color: transparent;
				}
				/* Everything but the jumbotron gets side spacing for mobile-first views */
				.body-content {
					padding-left: 15px;
					padding-right: 15px;
				}
				/* button */
				.jumbotron .btn {
					font-size: 21px;
					padding: 14px 24px;
				}
				/* Bottom links */
				.bottom-links {
					display: flex;
					justify-content: space-between;
					margin:-30px auto;
					padding-left: 10px;
					padding-right: 10px;
					max-width: 100%;
					text-align: center;
					width: 600px;
				}
				/* Dark mode */
				@media (prefers-color-scheme: dark) {
					body {
						background-color: #282828;
					}
					h1, p {
						color: white;
					}
				}
			</style>
		</head>
		<div class="container">
			<!-- Jumbotron -->
			<div class="jumbotron">
				<p>
					<a href="https://meta.wikiforge.net">
						<img src="https://static.wikiforge.net/metawiki/8/88/WikiForge_Logo.svg" width="130" height="130" alt="WikiForge Logo" />
					</a>
				</p>
				<h1>Page Not Found</h1>
				<p>We couldn't find this page. Check your spelling and try again.</p>
			</div>
		</div>
		<div class="bottom-links">
			<a href="#" onClick="history.go(-1); return false;">&larr; Return Whence You Came</a>
			<a href="/"> Go to Main Page</a>
		</div>
	</html>
EOF;
