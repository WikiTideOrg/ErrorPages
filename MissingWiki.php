
<?php

if ( !$wgCommandLineMode ) {
	http_response_code( 404 );

	$centralServer = $wi->wikifarm === 'wikitide' ?
		'meta.wikitide.org' :
		'meta.wikiforge.net';

	$logoUrl = $wi->wikifarm === 'wikitide' ?
		'https://static.wikiforge.net/commonswikitide/2/22/WikiTide_icon.svg' :
		'https://static.wikiforge.net/metawiki/8/88/WikiForge_Logo.svg';
	$logoAltText = $wi->wikifarm === 'wikitide' ?
		'WikiTide' :
		'WikiForge';

	$requestWikiUrl = $wi->wikifarm === 'wikitide' ?
		'https://meta.wikitide.org/wiki/Special:RequestWiki?wpsubdomain=' . substr( $wgDBname, 0, -8 ) :
		'https://meta.wikiforge.net/wiki/Special:RequestPremiumWiki?wpsubdomain=' . substr( $wgDBname, 0, -4 );

	$serviceMainPage = $wi->wikifarm === 'wikitide' ?
		'https://wikitide.org' :
		'https://wikiforge.net';

	$output = <<<EOF
		<!DOCTYPE html>
		<html lang="en">
			<head>
				<meta charset="utf-8" />
				<meta name="viewport" content="width=device-width, initial-scale=1.0" />
				<meta name="description" content="Wiki not found" />
				<title>Wiki not found</title>
				<link rel="icon" type="image/x-icon" href="https://{$centralServer}/favicon.ico" />
				<link rel="apple-touch-icon" href="https://{$centralServer}/apple-touch-icon.png" />
				<!-- Bootstrap core CSS -->
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
				<!-- Outfit font from Google Fonts -->
				<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Outfit">
				<link href="/ErrorPages/assets/main.css" rel="stylesheet">
			</head>
			<div class="container" style="padding: 70px 0; text-align: center;">
				<!-- Jumbotron -->
				<div class="jumbotron">
					<img src="{$logoUrl}" width="130" height="130" alt="{$logoAltText}" />
					<h1><b>Wiki not found</b></h1>
					<p class="lead">Check your spelling and try again.</p>
					<p>
						<a href="{$requestWikiUrl}" class="btn btn-lg btn-outline-primary" role="button">Start this wiki</a>
					</p>
				</div>
			</div>
			<div class="bottom-links">
				<a href="#" onClick="history.go(-1); return false;">&larr; Go back</a>
				<a href="{$serviceMainPage}">{$logoAltText}</a>
				<a href="https://{$centralServer}/wiki/Special:WikiDiscover">Directory</a>
			</div>
		</html>
	EOF;
	header( 'Content-length: ' . strlen( $output ) );
	echo $output;
	die( 1 );
} else {
	// $wgDBname will always be set to a string, even if the --wiki parameter was not passed to a script.
	echo "The wiki database '{$wgDBname}' was not found." . PHP_EOL;
}
