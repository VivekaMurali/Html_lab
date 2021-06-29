<!p2.php-->

<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background-color:lightgreen;
			font-size: 15px;
		}
		h1{
			font-family: arial;
			background-color: pink;
		}
		table{
			background-color: lightblue;
			font-size: 20px;
		}
	</style>
</head>
<body><center><h1><u>Library Management System</u></h1>
	<form action="p3.php" method="POST" name="form2"><table border='2' height="50%" width="50%">
		<tr><th>Book ID</th><th><input type="text" name="bid" id="bid" required></th></tr>
		<tr><th>Book Name</th><th><input type="text" name="bookname" id="bookname" required></th></tr>
		<tr><th>Author</th><th><input type="text" name="author" id="author" required></th></tr>
		<tr><th>Publications</th><th><input type="text" name="publications" id="publications" required></th></tr>
		<tr><th>Issue date</th><th><input type="date" name="issuedate" id="issuedate"  required></th></tr>
		<tr><th>Due date</th><th><input type="date" name="duedate" id="duedate"  required></th></tr>
		<tr><th><input type="submit" name="s1" value="save" onclick="return validate()"></th><th><input type="submit" name="s2" value="show details"></th></tr></table></form></center>
		<script type="text/javascript">
			function validate()
			{
				var bid=document.getElementById("bid");
				var bookname=document.getElementById("bookname");
				var author=document.getElementById("author");
				var publications=document.getElementById("publications");
				var id=/^[0-9]+$/;
			

				if(!(bid.value.match(id)))
				{
					window.alert("Please enter a valid book id");
					return false;
				}
				if(!bookname.value.match(/^[a-z A-Z]+$/))
				{
					window.alert("Please enter a valid book name");
					return false;
				}
				if(!author.value.match(/^[a-z A-Z]+$/))
				{
					window.alert("Please enter a valid author name");
					return false;
				}
				if(!publications.value.match(/^[a-z A-Z]+$/))
				{
					window.alert("Please enter a valid publications");
					return false;
				}
				
				return true;

			}
		</script>

</body>
</html>