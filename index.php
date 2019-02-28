<?
header('Content-Type: text/html;charset=utf-8');
?>
<?php
if ($c=OCILogon("scott", "tiger", "ORCL")){
	echo "succes as scott";
	//OCILogoff($c);
}else{
	echo "Error";
}
$s = OCIParse($c, "SELECT round(sin(3.14),5) FROM dual");
OCIExecute($s, OCI_DEFAULT);
while (OCIFetch($s))
{
	echo "<br>"."sin(3.14) = ".OCIResult($s,1)."<br>";
}
OCICommit($c);
OCILogoff($c);
if ($c=OCILogon("SYSTEM", "pass", "ORCL")){
	echo "succes as SYSTEM";
	//OCILogoff($c);
}else{
	echo "Error";
}
$s = OCIParse($c, 
"SELECT first_name, last_name, salary FROM hr.employees
WHERE salary BETWEEN 3000 AND 4000 ORDER BY salary DESC");
OCIExecute($s, OCI_DEFAULT);
echo "<br>-----<br>SELECT first_name, last_name, salary FROM hr.employees
WHERE salary BETWEEN 3000 AND 4000 ORDER BY salary DESC;<br>-----";
while (OCIFetch($s))
{
	echo "<br>".OCIResult($s,1);
}
OCICommit($c);
OCILogoff($c);
phpinfo();
?>

<html>
    <head>
        

        

    </head>

    <body>
    превед
    </body>
    <p>
        <ue>
            <ei>
                <a href = "primer1.php">
				   пример 1
                </a>
                <a href = "primer2.php">
				   пример 2
                </a>
                <a href = "primer3.php">
				   пример 3
                </a>
                <a href = "primer4.php">
				   пример 4
                </a>
                <a href = "primer5.php">
				   пример 5
                </a>
                <a href = "primer6.php">
				   пример 6
                </a>
                <a href = "primer7.php">
				   пример 7
                </a>
                <a href = "primer8.php">
                    пример 8
                </a>
            </ei>
        </ue>
    </p>
</html>
