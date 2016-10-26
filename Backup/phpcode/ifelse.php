 <DOCTYPE html>
 <html><head><title>if else</title>

 <style>
 .r1 { background-color: #59f442;
		color: #f45f42;
	 }
	 
 .r2 { background-color:#42f4f4;
		color: #ee42f4;
	 }
	 
 .r3 { background-color:#f44242;
		color: #f442ee
	 }
 .r4 { background-color:#1178af;
		color: #7baf11
	 }
	 
 </style>
 </head>
 <body>
	<center>
 <h1>
	 Episode VI
RETURN OF THE JEDI
In a galaxy far far away..

 Luke Skywalker has returned to
his home planet of Tatooine in
an attempt to rescue his
friend Han Solo from the
clutches of the vile gangster
Jabba the Hutt.

Little does Luke know that the
GALACTIC EMPIRE has secretly
begun construction on a new
armored space station even
more powerful than the first
dreaded Death Star.

When completed, this ultimate
weapon will spell certain doom
for the small band of rebels
struggling to restore freedom
to the galaxy...
 </h1>
 
 
 <h1><?php
 echo "<h1>";
	for ($i =0; $i < 100; $i++){
		if($i % 2 == 0 ){
				echo"<div class=\"r1\" >";
			}else{
			echo"<div class=\"r2\" >";
		}
		
		echo "* * * * * * * * $i  * * * * * * *<br />";
		echo "</div>";
		
	}
 ?>
 </h1>
 </center>
 </body>
 </html>
