<!p1.php-->

<?php
$cc=mysqli_connect("localhost","root","");
if($cc->connect_error)
{
	echo"connection unsuccessful";
}
else
{
	$d="CREATE DATABASE library";
	if($cc->query($d)==true)
	{
		$cc=mysqli_connect("localhost","root","","library");
	}
	$s="CREATE TABLE book(bid int PRIMARY KEY,bookname varchar(25) not null,author varchar(25),publications varchar(25),issuedate date,duedate date)";
	if($cc->query($s))
	{
		echo"table created";
	}

}
$cc->close();
?>