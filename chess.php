<?php

session_start();



if (isset($_GET['newFigures']))
	$_SESSION['map'] = 'rnbqkbnrpppppppp11111111111111111111111111111111PPPPPPPPRNBQKBNR';

if (isset($_GET['getFigures']))
	echo $_SESSION['map'];

if (isset($_GET['moveFigure'])) {
	$frCoord = $_GET['frCoord'];
	$toCoord = $_GET['toCoord'];
	$figure = $_SESSION['map'][$frCoord];
	$_SESSION['map'][$frCoord] = '1';
	$_SESSION['map'][$toCoord] = $figure;
	echo $_SESSION['map'];
}