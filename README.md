halstead
========

http://www.programando.org/blog/2013/01/desafio-enero-las-metricas-de-halstead/


<pre>
?> php halstead.php operadores.txt programa.txt
n1 = 6 (input, if, &lt;=, then, print, else)
N1 = 7 (input, if, &lt;=, then, print, else, print)
n2 = 5 ("ingrese un valor:", "ganaste", "perdiste", a, 100)
N2 = 6 ("ingrese un valor:", "ganaste", "perdiste", a, a, 100)

N = 13
n = 11
V = 44.972611042285
L = 0.27777777777778
D = 3.6
E = 161.90139975223
T = 8.994522208457
</pre>

-----------------------------------

<pre>
?> php halstead.php operadores2.txt halstead.php
n1 = 19 (&lt;?php, =, ., implode, array, file, FILE_IGNORE_NEW_LINES, if, preg_match_all, foreach, as, str_replace, preg_replace, sizeof, +, *, log, /, print)
N1 = 73 (&lt;?php, =, ., implode, array, file, FILE_IGNORE_NEW_LINES, ., =, file, =, array, if, preg_match_all, =, foreach, as, =, str_replace, =, array, if, preg_match_all, =, =, preg_replace, if, preg_match_all, =, array, =, array, =, array, =, sizeof, =, sizeof, =, sizeof, =, sizeof, =, +, =, +, =, *, log, =, /, *, /, =, *, print, ., implode, ., ., implode, ., ., implode, ., ., implode, ., ., /, ., ., /)
n2 = 39 ('#(', '|', 'preg_quote', ')#', '/("(?:[^"\\\\]|\\\\.)*"|\'(?:[^\'\\\\]|\\\\.)*\')/', ' ', '/\b(\w+)\b/', "n1 = $nn1 (", ', ', ")\nN1 = $NN1 (", ")\nn2 = $nn2 (", ")\nN2 = $NN2 (", ")\n\nN = $N\nn = $n\nV = $V\nL = ", "\nD = $D\nE = $E\nT = ", op, _map, argv, 1, code, _get_contents, 2, N2, m, s, N1, _merge, n1, _unique, n2, nn1, nn2, NN1, NN2, N, n, V, D, E, 18)
N2 = 95 ('#(', '|', 'preg_quote', ')#', '/("(?:[^"\\\\]|\\\\.)*"|\'(?:[^\'\\\\]|\\\\.)*\')/', ' ', ' ', '/\b(\w+)\b/', "n1 = $nn1 (", ', ', ")\nN1 = $NN1 (", ', ', ")\nn2 = $nn2 (", ', ', ")\nN2 = $NN2 (", ', ', ")\n\nN = $N\nn = $n\nV = $V\nL = ", "\nD = $D\nE = $E\nT = ", op, _map, argv, 1, code, _get_contents, argv, 2, N2, code, m, N2, m, 1, m, 1, s, code, s, code, N1, op, code, m, N1, m, 1, code, op, code, code, m, N2, _merge, N2, m, 1, n1, _unique, N1, n2, _unique, N2, nn1, n1, nn2, n2, NN1, N1, NN2, N2, N, NN1, NN2, n, nn1, nn2, V, N, n, 2, D, nn1, 2, NN2, nn2, E, V, D, n1, N1, n2, N2, 1, D, E, 18)

N = 168
n = 58
V = 984.14080718143
L = 0.043213296398892
D = 23.141025641026
E = 22774.027653365
T = 1265.2237585203
</pre>

