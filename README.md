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
n1 = 20 (&lt;?php, =, array, if, preg_match_all, file_get_contents, str_replace, implode, array_map, file, FILE_IGNORE_NEW_LINES, sizeof, preg_replace, array_merge, +, array_unique, *, log, /, print)
N1 = 56 (&lt;?php, =, =, array, if, preg_match_all, =, file_get_contents, =, str_replace, =, if, preg_match_all, =, implode, array_map, file, FILE_IGNORE_NEW_LINES, =, sizeof, =, if, preg_match_all, preg_replace, =, array_merge, =, +, =, sizeof, =, =, sizeof, =, array_unique, +, =, sizeof, =, array_unique, =, =, *, log, *, =, /, *, /, print, implode, implode, implode, implode, /, /)
n2 = 34 ('/("(?:[^"\\\\]|\\\\.)*"|\'(?:[^\'\\\\]|\\\\.)*\')/', ' ', '#(', '|', 'preg_quote', ')#', '/\b(\w+)\b/', "n1 = $nn1 (", ', ', ")\nN1 = $NN1 (", ")\nn2 = $nn2 (", ")\nN2 = $NN2 (", ")\n\nN = $N\nn = $n\nV = $V\nL = ", "\nD = $D\nE = $E\nT = ", N1, N2, code, argv, 2, m, 1, op, NN1, N, NN2, n, nn1, n1, nn2, n2, E, V, D, 18)
N2 = 74 ('/("(?:[^"\\\\]|\\\\.)*"|\'(?:[^\'\\\\]|\\\\.)*\')/', ' ', '#(', '|', 'preg_quote', ')#', '/\b(\w+)\b/', ' ', "n1 = $nn1 (", ', ', ")\nN1 = $NN1 (", ', ', ")\nn2 = $nn2 (", ', ', ")\nN2 = $NN2 (", ', ', ")\n\nN = $N\nn = $n\nV = $V\nL = ", "\nD = $D\nE = $E\nT = ", N1, N2, code, argv, 2, m, code, N2, m, 1, code, op, argv, 1, code, m, NN1, N1, m, 1, op, code, m, N2, N2, m, 1, N, NN1, NN2, N2, n, nn1, n1, N1, nn2, n2, N2, E, V, N, n, 2, D, nn1, 2, NN2, nn2, n1, N1, n2, N2, 1, D, E, 18)

N = 130
n = 54
V = 748.13537528125
L = 0.045945945945946
D = 21.764705882353
E = 16282.94640318
T = 904.60813351001
</pre>

