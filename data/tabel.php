<?php

if(isset($_POST["submit"])) {

	$mimes = array('application/vnd.ms-excel','text/csv');
	if(in_array($_FILES['fileToUpload']['type'],$mimes)){
		
		if (($handle = fopen($_FILES["fileToUpload"]["tmp_name"],"r")) !== FALSE) {  	   
			$row = 1; $bar=0;

			$ro = fopen($_FILES["fileToUpload"]["tmp_name"],"r");

			while($num = fgetcsv($ro, 2000, ",")) {
				$count =count($num);
				$bar++;
			}

		    function fetch_data($handle,$row) {		

		     $output = '';
		     while ($data = fgetcsv($handle, 2000, ",")) {		     
		     $count = count($data);

		     $row++;

			 if(is_int($row/4)) {
								        
				$output .='<td style="height:34mm; width:67mm" align="center"><div></div>'.$data[0].'<br>'.$data[1].'<br>'.$data[2].'</td></tr><tr>';

					}

		       else {

			    $output .='<td style="height:34mm; width:67mm" align="center"><div></div>'.$data[0].'<br>'.$data[1].'<br>'.$data[2].'</td>';
		       		}
	

		     }
		     return $output;

		    }
			

	    if($count>3) {
		    echo "kolom field anda ".$count."<br/> <b>Maksimal kolom field harus 3</b>";
		    } 
		else if($bar%2!=0) {
		   echo "jumlah baris field anda ganjil : ".$bar."<br/><b>jumlah Baris field harus genap</b>";
		    }

	   else {
			require_once('tcpdf_include.php');
		    require_once('startpage.php');

			$content  = '';  
			$content .= '<table><tr>';     			   
		 	$content .= fetch_data($handle,$row); 
        	$content .= '</tr></table>';

			require_once('endpage.php'); 
		    }		   
		    	
		    fclose($handle);		    
		}

  
	} else {

	  die("Sorry, file type not allowed");
	}

} else {
	echo "<h1>404 NOT FOUND</h1>";
}


?>