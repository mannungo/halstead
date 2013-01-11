<?php

$op = '#('.implode( '|', array_map( 'preg_quote', file( $argv[1], FILE_IGNORE_NEW_LINES ) ) ).')#';
$code = file_get_contents( $argv[2] );

$N2 = array();
if( preg_match_all( '/("(?:[^"\\\\]|\\\\.)*"|\'(?:[^\'\\\\]|\\\\.)*\')/', $code, $m ) ) {
	$N2 = $m[1];
	foreach( $m[1] as $s ) $code = str_replace( $s, ' ', $code );
}

$N1 = array();
if( preg_match_all( $op, $code, $m ) ) {
	$N1 = $m[1];
	$code = preg_replace( $op, ' ', $code );
}

if( preg_match_all( '/\b(\w+)\b/', $code, $m ) ) $N2 = array_merge( $N2, $m[1] );

$n1 = array_unique( $N1 );
$n2 = array_unique( $N2 );
$nn1 = sizeof( $n1 );
$nn2 = sizeof( $n2 );
$NN1 = sizeof( $N1 );
$NN2 = sizeof( $N2 );

$N = $NN1 + $NN2;
$n = $nn1 + $nn2;
$V = $N * log( $n, 2 );
$D = ( $nn1 / 2) * ( $NN2 / $nn2 );
$E = $V * $D;

print "n1 = $nn1 (".implode( ', ', $n1 ).")\nN1 = $NN1 (".implode( ', ', $N1 ).")\nn2 = $nn2 (".implode( ', ', $n2 ).")\nN2 = $NN2 (".implode( ', ', $N2 ).")\n\nN = $N\nn = $n\nV = $V\nL = ".( 1 / $D )."\nD = $D\nE = $E\nT = ".( $E / 18 );

