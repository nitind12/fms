<div class="row">
		<div class="col-sm-12 hide_button" style="margin-top: 10px">
        </div>
        <div style="clear: both; height: 10px"></div>
					<table border="0" class="myfont table_" cellpadding="10"><tbody><tr><td>
						<table  align ="center" style="width: 800px; font-size: 13px; font-family: verdana; border:#808080 solid 1px; background: #ffffff" class="table print_me">
				<tbody>
			<center>
			<div class="col-sm-12 hide_button" style="margin-top: 10px">
            <button class="btn btn-danger print_button" onclick="window.print();">Print</button>
     	   	</div>
     	   	</center>
     	   	<br>
			<tr>
					<td>
						<table border="0"  align="center" cellpadding="0px" cellspacing="10px" class="table_" style="border:#009900 solid 0px">
							<tbody><tr class="feeHeader" align="center" >

								<td width="100" align="center"><img src="https://school.teamfreelancers.com/assets_/default-demo/logo/4.jpg?ver=1.4" width="100"></td>
								<td width="500">
									<div style="width:350px; background:0; border-radius: 5px">
											<b></b>
											</div>
									<span class="header_text">
									<b>The Demo School, Haldwani</b><br>
									<span style="font-weight: 100">Fee Receipt <br>
									<span style="font-size: 13px; font-weight: bold">
										2019, May									</span>
								</span></span></td>
								<td width="100"></td>
							</tr>
						</tbody></table>
					</td>
				</tr>
			
				<tr>
					<td>
							<tbody><tr>
								<td class="myline_" colspan="4"></td>
							</tr>
							<tr>
								<td colspan="4">
									<table border="0" cellpadding="0" cellspacing="0" class="table_" style="border:#009900 solid 0px">
										<tbody><tr>
											<td align="left" class="space_td">
											Receipt No.:<?php	echo $receipt->receipt_ID;?>
											 </td>
											<td align="center" style="width: 500px;padding: 0px 0px 0px 8px; vertical-align: middle"><h4 align="center"></h4>
												<div style="width:150px; background: #f0f0f0; border-radius: 5px">
											Office Copy
											</div>
											</td>
											<td align="right" class="space_td">Date:<?php echo
											date('d-m-Y');?></td> </td>
										</tr>
									</tbody></table>
								</td>
							</tr>
							<tr>
								<td class="myline_" colspan="4"></td>
							</tr>
							<tr>
								<td style="height: 10px"></td>
							</tr>
							<tr class="myfont">
								<td colspan="2" width="50%" valign="top" >
									<table border="0" class="myfont" cellpadding="5">
										<tbody><tr>
											<td class="label_" width="100" >
											
											Reg. No.:<?php	echo $item1->student_ID;
											?>
											</td>
											<td class="content"></td>
											
										</tr>
										<tr>
											<td class="label_">Name:&nbsp<?php	echo $item1->first_Name.' ' .$item1->last_Name;?></td>
											<td class="content"></td>
										</tr>
										<tr>
											<td class="label_">Father:&nbsp<?php	echo $item1->fathers_Name;?></td>
											<td class="content"></td>
										</tr>
										<tr>
											<td class="label_">Class:&nbsp<?php echo $item1->course .' '. $item1->sem_ID . ' ' . $item1->section;;?></td>
											<td class="content"></td>
										</tr>
										<tr>
											<td class="label_">Invoice No.:&nbsp<?php	echo $item1->invoice_ID;?></td>
											<td class="content"></td>
										</tr>
																			</tbody></table>
								</td>
								<td colspan="2" width="50%" valign="top">
									<table border="0" class="myfont" cellpadding="5">
																				<tbody><tr valign="top">
											<td class="label_" width="">Submission Date:<?php echo
											date('d-m-Y');?></td>
											<td class="content"></td>
										</tr>
																				<tr valign="top">
											<td class="label_" width="130">Heads:&nbsp Admission </td>
											
										</tr>
										<tr valign="top">
											<td class="label_">Mode:<?php	echo $item1->fee_Mode;?> </td>
											<td class="content"></td>
										</tr>
											<tr valign="top">
											<td class="label_">Total Paid:&nbsp<?php echo $item1->paid;?>&nbsp&nbsp<b>Rs. </b>/-</td>
											<td></td>
											</td>
										</tr>
									</tbody></table>
								</td>
							</tr>
							<tr>
								<td class="myline_" colspan="4"></td>
							</tr>
							<tr>
								<td colspan="4" style="height: 10px"></td>
							</tr>
							<tr>
								<td colspan="4">
									<table border="0" cellpadding="5" class="table_" style="border:#009900 solid 0px">
										<tbody><tr>
											<td colspan="2" class="address_contact" width="50%">
												<b>Address</b><br> 
												Haldwani, Haldwani, UTTARAKHAND (INDIA)												<br>
												<b>Contact</b>: 90129 72556<br>
												<b>Email</b>: ttchld@gmail.com<br>
											</td>
											<td colspan="2" width="50%" align="right" valign="bottom" style="font-size: 12px">Authorized Signatory</td>
										</tr>
									</tbody></table>
								</td>
							</tr>
							<tr>
								<td class="myline_" colspan="4"></td>
							</tr>
							<tr>
								<td colspan="4" class="optionalNote">
									*Optional fee is not compulsory for student. Those student enrolled for additional facilities are required to submit the same.
									<br>
									</td>
							</tr>

						</tbody></table>
					</td>
				</tr>
			</tbody></table>
			</td></tr></tbody></table>


			 

			 <div class="row">
		<div class="col-sm-12 hide_button" style="margin-top: 10px">
        </div>
        <div style="clear: both; height: 10px"></div>
					<table border="0" class="myfont table_" cellpadding="10"><tbody><tr><td>
						<table  align ="center" style="width: 800px; font-size: 13px; font-family: verdana; border:#808080 solid 1px; background: #ffffff" class="table print_me">
				<tbody>
			
			<tr>
					<td>
						<table border="0"  align="center" cellpadding="0px" cellspacing="10px" class="table_" style="border:#009900 solid 0px">
							<tbody><tr class="feeHeader" align="center" >

								<td width="100" align="center"><img src="https://school.teamfreelancers.com/assets_/default-demo/logo/4.jpg?ver=1.4" width="100"></td>
								<td width="500">
									<div style="width:350px; background:0; border-radius: 5px">
											<b></b>
											</div>
									<span class="header_text">
									<b>The Demo School, Haldwani</b><br>
									<span style="font-weight: 100">Fee Receipt <br>
									<span style="font-size: 13px; font-weight: bold">
										2019, May									</span>
								</span></span></td>
								<td width="100"></td>
							</tr>
						</tbody></table>
					</td>
				</tr>
			
				<tr>
					<td>
							<tbody><tr>
								<td class="myline_" colspan="4"></td>
							</tr>
							<tr>
								<td colspan="4">
									<table border="0" cellpadding="0" cellspacing="0" class="table_" style="border:#009900 solid 0px">
										<tbody><tr>
											<td align="left" class="space_td"><?php 
											foreach ($receipt as $item1 )

											{ ?>
											Receipt No.:<?php	echo $item1->receipt_ID;?>
											 </td>
											<td align="center" style="width: 500px;padding: 0px 0px 0px 8px; vertical-align: middle"><h4 align="center"></h4>
												<div style="width:150px; background: #f0f0f0; border-radius: 5px">
											Student Copy
											</div>
											</td>
											<td align="right" class="space_td">Date:<?php echo
											date('d-m-Y');?></td> </td>
										</tr>
									</tbody></table>
								</td>
							</tr>
							<tr>
								<td class="myline_" colspan="4"></td>
							</tr>
							<tr>
								<td style="height: 10px"></td>
							</tr>
							<tr class="myfont">
								<td colspan="2" width="50%" valign="top" >
									<table border="0" class="myfont" cellpadding="5">
										<tbody><tr>
											<td class="label_" width="100" >
											
											Reg. No.:<?php	echo $item1->student_ID;
											?>
											</td>
											<td class="content"></td>
											
										</tr>
										<tr>
											<td class="label_">Name:&nbsp<?php	echo $item1->first_Name.' ' .$item1->last_Name;?></td>
											<td class="content"></td>
										</tr>
										<tr>
											<td class="label_">Father:&nbsp<?php	echo $item1->fathers_Name;?></td>
											<td class="content"></td>
										</tr>
										<tr>
											<td class="label_">Class:&nbsp<?php echo $item1->course .' '. $item1->sem_ID . ' ' . $item1->section;;?></td>
											<td class="content"></td>
										</tr>
										<tr>
											<td class="label_">Invoice No.:&nbsp<?php	echo $item1->invoice_ID;?></td>
											<td class="content"></td>
										</tr>
																			</tbody></table>
								</td>
								<td colspan="2" width="50%" valign="top">
									<table border="0" class="myfont" cellpadding="5">
																				<tbody><tr valign="top">
											<td class="label_" width="">Submission Date:<?php echo
											date('d-m-Y');?></td>
											<td class="content"></td>
										</tr>
																				<tr valign="top">
											<td class="label_" width="130">Heads:&nbsp Admission </td>
											
										</tr>
										<tr valign="top">
											<td class="label_">Mode:<?php	echo $item1->fee_Mode;?> </td>
											<td class="content"></td>
										</tr>
											<tr valign="top">
											<td class="label_">Total Paid:&nbsp<?php echo $item1->paid;?>&nbsp&nbsp<b>Rs. </b>/-</td>
											<td></td>
											</td><?php }?>
										</tr>
									</tbody></table>
								</td>
							</tr>
							<tr>
								<td class="myline_" colspan="4"></td>
							</tr>
							<tr>
								<td colspan="4" style="height: 10px"></td>
							</tr>
							<tr>
								<td colspan="4">
									<table border="0" cellpadding="5" class="table_" style="border:#009900 solid 0px">
										<tbody><tr>
											<td colspan="2" class="address_contact" width="50%">
												<b>Address</b><br> 
												Haldwani, Haldwani, UTTARAKHAND (INDIA)												<br>
												<b>Contact</b>: 90129 72556<br>
												<b>Email</b>: ttchld@gmail.com<br>
											</td>
											<td colspan="2" width="50%" align="right" valign="bottom" style="font-size: 12px">Authorized Signatory</td>
										</tr>
									</tbody></table>
								</td>
							</tr>
							<tr>
								<td class="myline_" colspan="4"></td>
							</tr>
							<tr>
								<td colspan="4" class="optionalNote">
									*Optional fee is not compulsory for student. Those student enrolled for additional facilities are required to submit the same.
									<br>
									</td>
							</tr>

						</tbody></table>
					</td>
				</tr>
			</tbody></table>
			</td></tr></tbody></table>
			 