<HTML>
	<HEAD>
		<TITLE>Logika</TITLE>
	</HEAD>
	
	<BODY>
		<?php
			$a=(-3);
			$b=2;
			
			echo "a =" .$a;
			echo "<br>b = ".$b;
			
			if ($a >=0 && $b>=0)
			{	echo "<br>a dan b bilangan asli";	}
			else if ($a <=0 && $b<=0)
			{	echo "<br>a dan b bukan bilangan asli";	}
			else if ($a >=0 && $b<=0)
			{	echo "<br>a adalah bilangan asli dan b bukan";	}
			else if ($a <=0 && $b>=0)
			{	echo "<br>b adalah bilangan asli dan a bukan";	}
		?>
	</BODY>
</HTML>