    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>Home
                </a></li>
                <li class="active">Master</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Static In Class</h1>
            </div>
            <ul class="pagination">
                <li><a data-toggle="tab" href="#mfhead">Manage Static Heads</a></li>
                <li><a data-toggle="tab" href="#afhead">Associate Static Heads</a></li>
                
            </ul>
            <div class="tab-content">
                <div id="mfhead" class="tab-pane fade">
                                <div class="panel-heading">Add Static Heads<em class="caret"></em></div>
                                <div class="panel-body ">
                    <form role="form" name="frmSession" method="post" action="<?php echo site_url('flexihead_students/insert_record');?>">
                                <!--student details-->
                                <div class="col-md-3">
                                    <div class="form-group">
                                    <label>New Static Head</label>
                                    <input class="form-control"name="txtfrstnme" id="txtfrstnme">
                                </div></div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                    <label>Amount</label>
                                    <input class="form-control" name="txtlstnme" id="txtlstnme">
                                </div>
                            </div>
                                <div class="form-group col-md-3">
                                        <label>How Many Times</label>
                                        <select class="form-control" name="txtstts" id="txtstts">
                                            <option>Select</option>
                                            <option>One Time</option>
                                            <option>As Per Selected Months</option>
                                        </select><br>
                                    </div>
                                
                                
                            
                            <div class="col-sm-12">
                                    <button type="submit" class="btn btn-success">Add</button>
                                
                            </div>

                            <div class="form-group">
                                    <div class="col-md-12 widget-left" id="msghere" style="font-size: 10px; color: #ff0000">
                                    <br><br>    <?php echo $this->session->flashdata('msg_'); ?>
                                    </div>
                                </div>
                        </form>

            </div>
                         <div class="controls span6">
        <div class="widget-box">
            
            <div class="widget-content nopadding">
                <div class="">View Static Head<em class="caret"></em></div>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th style="text-align: left">Static Heads</th>
                             <th style="text-align: left">Amount(INR)</th>
                            <th style="text-align: left">How many times</th>
                            <th></th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="static_fee_heads_here">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="controls span3">
        <div class="widget-box" id="edit_static_head_panel" style="display: none">
            <div  style="border: #ff0000 solid 0px; width: 50px; height:50px; float: right; right: 0px; z-index: 2222; position: absolute;" id="student_photo_here"></div>
            <div class="widget-title"> <span class="icon"> <i class="icon-hand-right"></i> </span>
                <h5 style="color: #DD0000">Update Static Head</h5>
            </div>
            <div class="widget-content" style="color: #DD0000">
                <div class="control-group">
                    <label class="control-label">Edit Static Head</label>
                    <div class="controls">
                        <input type="text" name="txtFeeStaticHead_edit" value="" class="span12 text" autocomplete="off" required="required" id="txtFeeStaticHead_edit" style="color: #0000DD"  />
                        <input type="hidden" name="txtID_edit" value="" class="span12 text" required="required" id="txtID_edit"  />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">How many times</label>
                    <div class="controls">
                                                <select name="cmbDuration_edit" id="cmbDuration_edit" class="span12" required="required">
<option value="1">One time</option>
<option value="n" selected="selected">As per selected months</option>
</select>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="button" value="Update" class="btn btn-primary" id="update_static_head">
                        <input type="reset" value="Cancel" class="btn btn-danger cancel_static_head_update">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
                <div id="afhead" class="tab-pane">
                    <form action="#" class="form-vertical" name="frmFlexibleFee" id="frmFlexibleFee" method="post" accept-charset="utf-8">
                    <div class="row-fluid">
    <div class="controls span3">
        <div class="widget-box">
            <div  style="border: #ff0000 solid 0px; width: 50px; height:50px; float: right; right: 0px; z-index: 2222; position: absolute;" id="student_photo_here"></div>
            <div class="widget-title"> <span class="icon"> <i class="icon-ok-sign"></i> </span>
                <h4>Add Static Heads</h4>
            </div>
            <div class="widget-content">
                <div class="control-group">
                    <label class="control-label">New Static Head</label>
                    <div class="controls">
                        <input type="text" name="txtFeeFlexibleHead" value="" class="span12 text" autocomplete="off" required="required" id="txtFeeFlexibleHead"  />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Amount</label>
                    <div class="controls">
                        <input type="text" name="txtFeeFlexibleHeadAmt" value="" class="span12 text" autocomplete="off" required="required" id="txtFeeFlexibleHeadAmt"  />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">How many times</label>
                    <div class="controls">
                                                <select name="cmbDuration_felxi" id="cmbDuration_felxi" class="span12" required="required">
<option value="1">One time</option>
<option value="n" selected="selected">As per selected months</option>
</select>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="button" value="Add" class="btn btn-success" id="add_flexible_head">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="controls span6">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-time"></i></span><br></br>
              <h4>View Static Heads</h4>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th style="text-align: left">Static Heads</th>
                  <th style="text-align: right">Amount (INR)</th>
                  <th style="text-align: left">How many times</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody id="flexible_fee_heads_here">
                                <tr>
                  <td style="text-align: left" class="taskDesc"><i class="icon-info-sign"></i> EXAM FEE</td>
                  <td  style="text-align: right" class="taskDesc"> </td>
                  <td style="text-align: left" class="taskDesc"></td>
                  <td class="taskOptions">
                  <a href="#" class="tip edit_flexible_head_" id="EditFlexibleHead~1~EXAM FEE~500~1~One time"><i class="icon-pencil"></i></a> 
                  <a href="#" class="tip-top delete_flexible_head_" id="1"><i class="icon-remove"></a></td>
                </tr>
                                <tr>
                  <td style="text-align: left" class="taskDesc"><i class="icon-info-sign"></i> BUS FEE</td>
                  <td  style="text-align: right" class="taskDesc"> </td>
                  <td style="text-align: left" class="taskDesc"></td>
                  <td class="taskOptions">
                  <a href="#" class="tip edit_flexible_head_" id="EditFlexibleHead~2~BUS FEE~1000~n~As per selected months"><i class="icon-pencil"></i></a> 
                  <a href="#" class="tip-top delete_flexible_head_" id="2"><i class="icon-remove"></a></td>
                </tr>
                     <!--           <tr>
                  <td style="text-align: left" class="taskDesc"><i class="icon-info-sign"></i> EXAM FEE (1 CLASS)</td>
                  <td  style="text-align: right" class="taskDesc"> </td>
                  <td style="text-align: left" class="taskDesc"></td>
                  <td class="taskOptions">
                  <a href="#" class="tip edit_flexible_head_" id="EditFlexibleHead~3~EXAM FEE (1 CLASS)~400~1~One time"><i class="icon-pencil"></i></a> 
                  <a href="#" class="tip-top delete_flexible_head_" id="3"><i class="icon-remove"></a></td>
                </tr> -->
                <tr>
                  <td style="text-align: left" class="taskDesc"><i class="icon-info-sign"></i> CULTURAL PARTICIPATION FEE</td>
                  <td  style="text-align: right" class="taskDesc"></td>
                  <td style="text-align: left" class="taskDesc"></td>
                  <td class="taskOptions">
                  <a href="#" class="tip edit_flexible_head_" id="EditFlexibleHead~4~CULTURAL PARTICIPATION FEE~1500~1~One time"><i class="icon-pencil"></i></a> 
                  <a href="#" class="tip-top delete_flexible_head_" id="4"><i class="icon-remove"></a></td>
                </tr>
                                <tr>
                  <td style="text-align: left" class="taskDesc"><i class="icon-info-sign"></i> SPORTS FEE</td>
                  <td  style="text-align: right" class="taskDesc"></td>
                  <td style="text-align: left" class="taskDesc"></td>
                  <td class="taskOptions">
                  <a href="#" class="tip edit_flexible_head_" id="EditFlexibleHead~5~SPORTS FEE~1000~n~As per selected months"><i class="icon-pencil"></i></a> 
                  <a href="#" class="tip-top delete_flexible_head_" id="5"><i class="icon-remove"></a></td>
                </tr>
                                <tr>
                  <td style="text-align: left" class="taskDesc"><i class="icon-info-sign"></i> MUSIC FEE</td>
                  <td  style="text-align: right" class="taskDesc"></td>
                  <td style="text-align: left" class="taskDesc"></td>
                  <td class="taskOptions">
                  <a href="#" class="tip edit_flexible_head_" id="EditFlexibleHead~6~MUSIC FEE~850~n~As per selected months"><i class="icon-pencil"></i></a> 
                  <a href="#" class="tip-top delete_flexible_head_" id="6"><i class="icon-remove"></a></td>
                </tr>
                                <tr>
                  <td style="text-align: left" class="taskDesc"><i class="icon-info-sign"></i> ADMISSION</td>
                  <td  style="text-align: right" class="taskDesc"></td>
                  <td style="text-align: left" class="taskDesc"></td>
                  <td class="taskOptions">
                  <a href="#" class="tip edit_flexible_head_" id="EditFlexibleHead~7~ADMISSION~2000~1~One time"><i class="icon-pencil"></i></a> 
                  <a href="#" class="tip-top delete_flexible_head_" id="7"><i class="icon-remove"></i></a></td>
                </tr>
                                <tr>
                  <td style="text-align: left" class="taskDesc"><i class="icon-info-sign"></i> KARATE</td>
                  <td  style="text-align: right" class="taskDesc"></td>
                  <td style="text-align: left" class="taskDesc"></td>
                  <td class="taskOptions">
                  <a href="#" class="tip edit_flexible_head_" id="EditFlexibleHead~8~KARATE~200~n~As per selected months"><i class="icon-pencil"></i></a> 
                  <a href="#" class="tip-top delete_flexible_head_" id="8"><i class="icon-remove"></i></a></td>
                </tr>
                                <tr>
                  <td style="text-align: left" class="taskDesc"><i class="icon-info-sign"></i> SWIMMING</td>
                  <td  style="text-align: right" class="taskDesc"></td>
                  <td style="text-align: left" class="taskDesc"></td>
                  <td class="taskOptions">
                  <a href="#" class="tip edit_flexible_head_" id="EditFlexibleHead~9~SWIMMING~200~n~As per selected months"><i class="icon-pencil"></i></a> 
                  <a href="#" class="tip-top delete_flexible_head_" id="9"><i class="icon-remove"></i></a></td>
                </tr>
                              </tbody>
            </table>
          </div>
     


                    <div id="afhead" class="tab-pane fade"><div id="associate_flexible" class="tab-pane">
                    <form>
                    <div class="row-fluid">
    <div class="controls span4">
            <div class="widget-box">
              <div class="widget-title"><br>
                <h4>Flexible Heads</h4>
              </div>
              <div class="widget-content nopadding" style="overflow: auto; height: 200px">
                <table class="table table-bordered table-striped with-check">
                  <thead>
                    <tr>
                      <th><i class="icon-resize-vertical"></i></th>
                      <th style="text-align: left">Select Static Head</th>
                    </tr>
                  </thead>
                  <tbody id="flexibleHeads_for_associating_Students">
                  </tbody>
                </table>
              </div>
            </div>
        </div>
    <div class="controls span3">
        <div class="widget-box">
          <div class="widget-title"> 
            <h4>Classes in Session 2018-19</h4>
          </div>
          <div class="widget-content nopadding" style="overflow: auto; height: 350px">
            <table class="table table-bordered table-striped with-check">
              <thead>
                <tr>
                  <th><i class="icon-resize-vertical"></i></th>
                  <th style="text-align: left">Select Class</th>
                </tr>
              </thead>
              <tbody id="classes_to_find_students">
                
              </tbody>
            </table>
          </div>
       </div>
    </div>
    <div class="controls span5">
      <div class="control-group">
        <div class="widget-box">
          <div class="widget-title">
            <div style="float: left; padding: 5px; border:#C0C0C0 solid 1px; width: 20px;height: 25px; text-align: center">
              <input type="checkbox" id="classes_associates_students_for_flexibleHeads_check_boxes" />
            </div>
            <h5 id="name_of_class_for_students"></h5>
            <div style="clear: both"></div>
          </div>
          <div class="widget-content nopadding" style="overflow: auto; height: 300px">
            <table class="table table-bordered table-striped with-check">
              <thead>
                <tr>
                  <th><i class="icon-resize-vertical"></i></th>
                  <th style="text-align: left">Select Classe(s)</th>
                </tr>
              </thead>
              <tbody id="students_for_selected_class">
                
              </tbody>
            </table>
          </div>
      </div>
     </div>
     <div class="control-group">
            <div class="controls">
                <input type="button" value="Add Fee to selected Student(s)" class="btn btn-success span9" id="associate_flexible_head_with_Students">
                <input type="reset" value="X" class="btn btn-danger cancel_sassociate_flexible_head_with_Student span3" style="float: right">
            </div>
        </div>
    </div>
</div>
<hr />
<h4>View Associated Static Heads</h4>
<div class="row-fluid">
    <div class="controls span12">
      <div class="controls span4">
    <div class="widget-box">
      <div class="widget-title"> 
        <h5>Classes in Session 2018-19</h5>
      </div>
      <div class="widget-content nopadding" style="overflow: hidden;">
        <table class="table table-bordered table-striped with-check">
          <thead>
            <tr>
              <th><i class="icon-resize-vertical"></i></th>
              <th style="text-align: left">Select Class</th>
            </tr>
          </thead>
          <tbody id="classes_to_View_Students_status">
            
          </tbody>
        </table>
      </div>
    </div>
</div>
<div class="controls span8">
  <div class="widget-box">
    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
        <h5>Associated Heads for the Selected Class</h5>
    </div>
    <input type="hidden" value="NA" id="AssociatedClass_to_FlexiHead">
    <div class="widget-content" style="overflow: hidden" id="AssociatedHeads_against_selectedClass">
        &nbsp;
    </div>
  </div>
<div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Students with their Static Heads</h5>
                <h5 style="float: right;"><a href="" class="icon-print"></a></h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered" id="print_associated_flex_with_students" style="text-align: left">
                    <thead>
                        <tr>
                        <th style="text-align: left">Registration No</th>
                        <th style="text-align: left">Name</th>
                        <th style="text-align: left">Static Heads</th>
                        </tr>
                    </thead>
                    <tbody id="student_associated_flexibleheads_classwise">
                    </tbody>
                </table>
            </div>
        </div>
    </div>    </div>
</div>                    </form>                </div>
            </div>
        </div>
    </div>
</div>  </div>
                        
                    
        </div>
        
            
            <div class="col-sm-12">
                <p class="back-link">BCA final Year Project by <a href="#">FMS team</a></p>
            </div>
        </div><!--/.row-->
    </div>