<table border="0" class="myfont table_" cellpadding="10"><tbody><tr><td>
			<table border="0" class="myfont table_" style="border:#009900 solid 0px">
				<tbody><tr>
					<td>
						<table border="0" cellpadding="0" cellspacing="0" class="table_" style="border:#009900 solid 0px">
							<tbody><tr class="feeHeader">
								<td width="100"><img src="https://school.teamfreelancers.com/assets_/default-demo/logo/4.jpg?ver=1.4" width="100"></td>
								<td width="500">
									<span class="header_text">
									<b>Fee Managemen System, Haldwani</b><br>
									<span style="font-weight: 100">Fee Receipt <br>
									<span style="font-size: 13px; font-weight: bold">
										2019, April									</span>
								</span></span></td>
								<td width="100"></td>
							</tr>
						</tbody></table>
					</td>
				</tr>
				<tr>
					<td>
						<table border="0" cellpadding="0" cellspacing="0" class="table_" style="border:#009900 solid 0px">
							<tbody><tr>
								<td class="myline_" colspan="4"></td>
							</tr>
							<tr>
								<td colspan="4">
									<table border="0" cellpadding="0" cellspacing="0" class="table_" style="border:#009900 solid 0px">
										<tbody><tr>
											<td align="left" class="space_td">
												<!--<?php foreach($receipt as $item)
													{
														echo $item->student_ID;
													}
												?>-->

											</td>
											<td align="center" class="space_td">
												<div style="width:150px; background: #f0f0f0; border-radius: 5px">
																									Office Copy
																								</div>
											</td>
											<td align="right" class="space_td">
												<?php echo date("d-m-Y");?>
											</td>
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
								<td colspan="2" width="50%" valign="top">
									<table border="0" class="myfont" cellpadding="5">
										<tbody><tr>
											<?php 
												foreach($receipt as $item)
										{
											echo '<td class="label_" width="100">Reg. no</td>';
											echo '<td class="content">'
											echo $item->student_ID;
											echo '</td>';
											echo '</tr>';
											echo '<tr>';
											echo '<td class="label_">Name</td>';
											echo '<td class="content">';
											echo '</td>';
											echo '</tr>';
											echo '<tr>';
											echo '<td class="label_">Father</td>';
											echo '<td class="content">';
											echo '</td>';
											echo '</tr>';
											echo '<tr>';
											echo '<td class="label_">Class</td>';
											echo '<td class="content">';
											echo '</td>';
										echo '</tr>';
										echo '<tr>';
											echo '<td class="label_">';
											echo '</td>';
											echo '<td class="content">';
											echo '</td>';
										echo '</tr>';
									echo '</tbody>';
									echo '</table>';
								echo '</td>';
								echo '<td colspan="2" width="50%" valign="top">';
									echo '<table border="0" class="myfont" cellpadding="5">';
											echo '<tbody>';
											echo '<tr valign="top">';
											echo '<td class="label_" width="130">Submission Date</td>';
											echo '<td class="content">30/04/2019</td>';
										echo '</tr>';
										echo  '<tr valign="top">';
											echo '<td class="label_" width="130">Heads</td>';
											echo '<td class="content">Admission, </td>';
										echo '</tr>';
										echo '<tr valign="top">';
											echo '<td class="label_">Mode </td>';
											echo '<td class="content">cash</td>';
										echo '</tr>';
											echo '<tr valign="top">';
											echo '<td class="label_">Total Paid</td>';
											echo '<td class="content"><b>Rs. 0</b>/- &nbsp;
												(zero)
											</td>';
										echo '</tr>';
								
									
								echo '</tbody>';
								echo '</table>';
								}
								?>
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