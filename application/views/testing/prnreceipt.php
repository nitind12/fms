<div class="col-sm-2 col-sm-offset-3 col-lg-8 col-lg-offset-3 main dotted">

		
			<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>Home
				</a></li>
				<li class="active">Invoice/Receipt</li>
			</ol>
		</div>
					<h5><b><p class="text-left">Date:&nbsp 27-5-2019</p></b></h5>
					<h4><b><p class="text-center">The Demo School, Haldwani</p></b></h4>
					<h4><b><p class="text-center">Receipt</p></b></h4>
					<h5><b><p class="text-right">Receipt No.:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p></b></h5>

				<?php
				echo'<div class="col-md-5">';
				

				echo'<table class="table">';
				      echo'<tr>';
				      	echo'<td>'."Reg No:".'</td>';
				      	echo'<td>'.'</td>';
				     echo'</tr>';
				      echo'<tr>';
				      	echo'<td>'."Name:".'</td>';
				      	echo'<td>'.'</td>';
				      echo'</tr>';
				      echo'<tr>';
				      	echo'<td>'."Class:".'</td>';
				      	echo'<td>'.'</td>';
				      echo'</tr>';
				      echo'<tr>';
				      	echo'<td>'."Session:".'</td>';
				      	echo'<td>'.'</td>';
				      echo'</tr>';
				      echo'<tr>';
				      	echo'<td>'."Father:".'</td>';
				      	echo'<td>'.'</td>';
				      echo'</tr>';
				     
				 echo'</table>';

			
				


				echo'<table><b><u class="text-danger">Fee Details Below:</u></b>';
				echo'</table>';
					echo'<table class="table">';
						echo'<tr class="active">';
							echo'<td>'.'<b>'."Actual Fee:".'</b>'.'</td>';
							echo'<td>'.'</td>';
						echo'</tr>';
						echo'<tr class="active" >';
							echo'<td>'.'<b>'."Previous Due:".'</b>'.'</td>';
							echo'<td>'.'</td>';
						echo'</tr>';
						echo'<tr class="active" >';
							echo'<td>'.'<b>'."Total Due:".'</b>'.'</td>';
							echo'<td>'.'</td>';
						echo'</tr>';
				echo'</table>';

			echo'</div>';

				echo'<div class="col-md-5">';
					echo'<table class="table">';
				     echo'<tr>';
				      	echo'<td>'."Total Due:".'</td>';
				      	echo'<td>'.'</td>';
				      echo'</tr>';
				      echo'<tr>';
				      echo'<td>'."Discount?".'</td>';
				      echo'<td>'.'</td>';
				      echo'</tr>';
				      echo'<tr>';
				      	echo'<td>'."Fine?".'</td>';
				      	echo'<td>'.'</td>';
				      echo'</tr>';
				      echo'<tr>';
				      	echo'<td>'."Total:".'</td>';
				      	echo'<td>'.'</td>';
				      echo'</tr>';
				      echo'<tr>';
				 	 		echo'<td>'."Paid Amount:".'</td>';
				 	 		echo'<td>'.'</td>';
				 	 	echo'</tr>';
				 echo'</table>';
				 	
				 	 echo'<button type="button" class="btn btn-danger">Update</button>';
				 	 echo'<table class="table table-danger">';
				 	 	
				 	echo'</table>';
				 	 
						      echo'<label>Payment Mode:</label>';
						      echo'<select>';
						        echo'<option>Cash</option>';
						        echo'<option>Cheque</option>';
						        echo'<option>Demand Draft</option>';
						        echo'<option>Other</option>';
						      echo'</select><br><br>';
					echo'</div>';
					echo'<div class="col-md-6">';    
					echo'<div class="divider">'.'</div>';  
				 	 	echo'<table><b class="text-danger">Any Remark?</b>';
							echo'<div class="form-group">';
							  
							  echo'<textarea class="form-control col-md-4" rows="5" >'.'</textarea>';
							echo'</div>';
						echo'</table>';
					echo'</div>';
				echo'</div>';


echo'</div>';
?>



