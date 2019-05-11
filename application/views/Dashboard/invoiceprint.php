<style type="text/css" media="print">
	.hide_button{display: none}
</style>
<div class="row">
		<div style="clear: both; height: 45px"></div>
				<div class="col-sm-12 hide_button" align="center" 	style="margin-top: 10px">
            <button class="btn btn-danger print_button" onclick="window.print();">Print</button>
        </div>
        <div style="clear: both; height: 5px"></div>
		    		<p class="single_record">
			<table border="1" align="center" class="myfont table_" cellpadding="10">
				<tbody><tr>
					<td>
						<table border="0" class="myfont table_" style="border:#009900 solid 0px">
							<tbody><tr>
			
								<td align="left">
								</td>
								<td style="text-align: center">
									<h1><b>INVOICE</b></h1>
									<b style="font-size: 15px">
									<?php foreach($students as $item){?>
										<?php echo $item->class_sess_ID;?>
									</b>
									<h4><b style="font-size: 20px">Fee Management System</b></h4>
								</td>
								<td align="right">
								</td>
							</tr>
							<tr>
								<td class="myline_" colspan="3"></td>
							</tr>

							<tr>
								<td colspan="3">
									<table border="0" class="myfont table_" style="border:#009900 solid 0px; font-size: 12px; font-weight: bold">
										<tbody><tr>
											<td>Invoice: 
												<?php echo $item->invoice_ID;?>
											</td>
											<td></td>
											<td align="right">Date:
											<?php echo date("d-m-Y");?>
											</td>
										</tr>
									</tbody></table>
								</td>
							</tr>
							<tr>
								<td class="myline_" colspan="3"></td>
							</tr>
							<tr>
								<td style="height: 5px" colspan="3"></td>
							</tr>
							<tr>
								<td colspan="3" valign="top">
									<table border="0" class="myfont table_" style="border:#009900 solid 0px; font-size: 12px; font-family: &quot;Times New Roman&quot;">
										<tbody><tr>
											<td valign="top">
												<div style="float:left; font-size: 15px; padding: 0px 0px 10px 0px">To,</div>
												<div style="clear: both"></div>
												<div style="display: block; float: left">
												<?php echo $item->first_Name.' '.$item->last_Name ?> 
												<br>
												<?php echo $item->student_ID;?> 
												<br>
												<?php echo $item->class_sess_ID;?>
												<br>
												</div>
											
											</td>
											<td valign="top" align="right">
											<b>
											<?php //foreach($curr_date as item1)
											?>
											</b>
											</td>
										</tr>
									</tbody></table>
								</td>
							</tr>
							<tr>
								<td style="height: 5px" colspan="3"></td>
							</tr>
							<tr>
								<td colspan="3">
									<table border="1" class="myfont table_" width="700" height="25" style="border:black solid 1px; font-size: 13px;">
										<tbody><tr>
											<th class="myline_" colspan="3"></th>
										</tr>
										<tr style="font-weight: bold">
											<th class="sno_ bgcolor_">SNO</th>
											<th class="particular_ bgcolor_" style="width: 475px; padding: 0px 3px">Particulars</th>
											<th class="amount_ bgcolor_" align="right" style="padding: 0px 3px">Amount (Rs.)</th>
										</tr>
																																											
																																																																																																													
										<tr>
													<td class="sno_">1</td>
													<td style="width:60px; text-align: left;">
														<div class="content_"><span class="label_">Compulsory Heads:</span><br>
														<?php 
															//$static_head='';
															$static_amount=0;
															$s_head=$item->static_head_ID;
															$s_amount=$item->static_head_Amount;

															$str1 = explode(',', $s_head);
															$str2 = explode(',', $s_amount);

															for($i=0;$i<sizeof($str1);$i++)
															{
																echo $str1[$i];
																//echo '<br>';
																//echo '<span class="times_">(1 time)</span><br></div>';
																//echo '<div class="content_r"><br>';
																echo $str2[$i];
																echo '<br></div>';
																if($static_amount == 0){
																		$static_amount= $str2[$i];
																	}
																	else{
																		$static_amount= $static_amount + $str2[$i];
																	}
																
															}
															echo '</td>';
															echo '<td style="text-align: right; vertical-align: bottom;">';
															echo $static_amount;
															echo '</td>';
														 
														
										echo '</tr>';
										echo '<tr>';
											$flexible_amount=0;
											$f_head='';
											$f_head=$item->flexible_head_ID;
											if($f_head != '' )
											{				
													echo '<td class="sno_">2</td>';
													echo '<td style="width:60px; text-align: left;">';
														echo '<div class="content_"><span class="label_">Flexible Heads:</span><br>'; 
															//$static_head='';
															$f_amount=$item->flexible_head_Amount;

															$str1 = explode(',', $f_head);
															$str2 = explode(',', $f_amount);

															for($i=0;$i<sizeof($str1);$i++)
															{
																echo $str1[$i];
																//echo '<br>';
																//echo '<span class="times_">(1 time)</span><br></div>';
																//echo '<div class="content_r"><br>';
																echo $str2[$i];
																echo '<br></div>';
																if($flexible_amount == 0){
																		$flexible_amount= $str2[$i];
																	}
																	else{
																		$flexible_amount= $flexible_amount + $str2[$i];
																	}
																
															}
															echo '</td>';
															echo '<td style="text-align: right; vertical-align: bottom;">';
															echo $flexible_amount;
															echo '</td>';
													
											}		
										echo '</tr>';
										echo '<tr>';
											$due=0;
											$due=$item->previous_due_Amount;
											if($due != 0)
											{

													echo '<td class="sno_">3</td>';
													echo '<td style="width:60px; text-align: left;">';
														echo '<div class="content_"><span class="label_">';
														echo 'Previous Dues:';
														echo '</span><br>'; 
															//$static_head='';
															echo '</td>';
															echo '<td style="text-align: right; vertical-align: bottom;">';
															echo $due;
															echo '</td>';
											}			
														
										echo '</tr>';	
										
										echo '<tr>';
											echo '<td colspan="3">';
											echo '<div style="float: left; width: 545px; text-align: right; font-weight: bold">Total:</div>';
												echo '<div style="float: right; width: 140px; text-align: right;font-weight: bold">'; 
														$total=0;
														$total=$static_amount+$flexible_amount+$due;
														echo $total;
												?>
												</div>
											</td>
											<?php
											}
											?>
										</tr>
										
										<tr>
											<td colspan="3">
												<table border="0" cellpadding="0" class="table_" style="border:black solid 0px">
													<tbody><tr>
														<td colspan="2" class="address_contact" width="80%">
															<b>Address:</b><br> 
															Fee Management Sytem, Haldwani, UTTARAKHAND (INDIA)															<br>
															<b>Contact</b>: 9690051370<br>
															<b>Email</b>: fms@gmail.com<br>
														</td>
														<td colspan="2" width="15%" align="right" valign="bottom" style="font-size: 12px">Authorized Signatory</td>
													</tr>
												</tbody></table>
											</td>
										</tr>
										<tr>
											<td class="myline_" colspan="4"></td>
										</tr>
										<tr>
											<td colspan="3" class="optionalNote">
												*Optional fee is not compulsory for student. Those student enrolled for additional facilities are required to submit the same.
											</td>
										</tr>
									</tbody></table>
								</td>
							</tr>
						</tbody></table>
					</td>
				</tr>
				<tr>
					<td align="right" style="font-size: 10px">
						<b>Note</b>: This Invoice is generated for 1 Month.
					</td>
				</tr>
			</tbody></table>
			</p>
			<div class="col-sm-2"></div>
			
		</div>