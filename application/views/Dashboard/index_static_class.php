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
				<h1 class="page-header">Flexihead-Students</h1>
			</div>
			<ul class="nav nav-pills">
				<li><a data-toggle="tab" href="#static_head">Manage static Heads</a></li>
				<li><a data-toggle="tab" href="#associate_static">Associate static Heads</a></li>
      </ul>
    </div>
    <div class="widget-content tab-content">
                <div id="static_head" class="tab-pane active">
                  <form action="https://school.teamfreelancers.com/index.php/#" class="form-vertical" name="frmStaticFee" id="frmStaticFee" method="post" accept-charset="utf-8">
                    <div class="row-fluid">
    <div class="controls span3">
        <div class="widget-box">
            <div  style="border: #ff0000 solid 0px; width: 50px; height:50px; float: right; right: 0px; z-index: 2222; position: absolute;" id="student_photo_here"></div>
            <div class="widget-title"> <span class="icon"> <i class="icon-ok-sign"></i> </span>
               <div class="page-header"> <h3 class="text-warning"><strong>Add Static Heads</strong></h5></div>
            </div>
            <div class="widget-content">
                <div class="control-group">
                    <label class="control-label">New Static Head</label>
                    <div class="controls">
                        <input type="text" name="txtFeeStaticHead" value="" class="span12 text" autocomplete="off" required="required" id="txtFeeStaticHead"  />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">How many times</label>
                    <div class="controls">
                                                <select name="cmbDuration" id="cmbDuration" class="span12" required="required">
<option value="1">One time</option>
<option value="n" selected="selected">As per selected months</option>
</select>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <input type="button" value="Add" class="btn btn-success" id="add_static_head">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="controls span6">
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-time"></i></span>
                <h5>View Static Heads</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th style="text-align: left">Static Heads</th>
                            <th style="text-align: left">How many times</th>
                            <th>Discount Applicable ?</th>
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
</div>                    </form>                </div>
<div id="associate_static" class="tab-pane">
                  <form action="https://school.teamfreelancers.com/index.php/#" class="form-vertical" name="frmAssociateStaticFee" id="frmAssociateStaticFee" method="post" accept-charset="utf-8">
                    <div class="row-fluid">
  <div class="controls span4">
    <div class="widget-box">
            <div  style="border: #ff0000 solid 0px; width: 50px; height:50px; float: right; right: 0px; z-index: 2222; position: absolute;" id="student_photo_here"></div>
            <div class="widget-title"> <span class="icon"> <i class="icon-ok-sign"></i> </span>
                <strong class="page-header text-danger"><h3>Static Heads</h3></strong>
            </div>
            <div class="widget-content">
                <div class="control-group">
                    <label class="control-label">Select Head</label>
                    <div class="controls">
                                                <select name="cmbStaticHeads" id="cmbStaticHeads" class="span12" required="required">
<option value="x" selected="selected">Select Head</option>
<option value="1">REGISTRATION</option>
<option value="2">ADMISSION</option>
<option value="9">WITHDRAWL</option>
<option value="10">TUITION</option>
<option value="11">BOOK BANK</option>
<option value="12">MEDICAL</option>
<option value="13">SPORTS</option>
<option value="14">EXAM FEE</option>
</select>
                    </div>
                </div>
                 <div class="control-group">
                    <label class="control-label">Amount</label>
                    <div class="controls">
                        <input type="text" name="txtFeeStaticHeadAmt" value="" class="span12 text" autocomplete="off" required="required" id="txtFeeStaticHeadAmt"  />
                    </div>
                </div>
            </div>
        </div>
  </div>
  <div class="controls span3">
    <div class="widget-box">
          <div class="widget-title">
            <div style="float: left; padding: 5px; border:#C0C0C0 solid 1px; width: 20px;height: 25px; text-align: center">
                <input type="checkbox" id="classes_for_static_heads_check_boxes" name="title-checkbox" />
            </div>
            <h5>Classes in Session 2018-19</h5>
          </div>
          <div class="widget-content nopadding" style="overflow: auto; height: 350px">
            <table class="table table-bordered table-striped with-check">
              <thead>
                <tr>
                  <th><i class="icon-resize-vertical"></i></th>
                  <th style="text-align: left">Select Classe(s)</th>
                </tr>
              </thead>
              <tbody id="classes_associates_staticHeads">
                
              </tbody>
            </table>
          </div>
        </div>
       <div class="control-group">
            <div class="controls">
                <input type="button" value="Add Fee to selected Class" class="btn btn-success span9" id="associate_static_head_with_classes">
                <input type="reset" value="X" class="btn btn-danger cancel_static_associates_classes span3" style="float: right">
            </div>
        </div>
    </div>
    <div class="controls span5" id="accordion_staticHeads_in_classes">
        <div class="accordion" id="collapse-group">
            <div class="accordion-group widget-box">
                <div class="accordion-heading">
                    <div class="widget-title"> 
                        <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse"> 
                            <span class="icon"><i class="icon-plus-sign"></i></span>
                            <h5>Accordion option1</h5>
                        </a> 
                    </div>
                </div>

                <div class="collapse in accordion-body" id="collapseGOne">
                    <div class="widget-content"> This is opened by default </div>
                </div>
            </div>
        </div>
    </div>
</div>                    </form>                </div>
                
				
		
			
			<div class="col-sm-12">
				<p class="back-link">BCA final Year Project by <a href="#">FMS team</a></p>
			</div>
		</div><!--/.row-->
	</div>