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
                    <form role="form" name="frmSession" method="post" action="<?php echo site_url('statichead_students/insert_record');?>">
                                <!--student details-->
                                <div class="col-md-3">
                                    <div class="form-group">
                                    <label>New Static Head</label>
                                    <input class="form-control"name="txtsth" id="txtsth">
                                </div></div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                    <label>Amount</label>
                                    <input class="form-control" name="txtsthamt" id="txtsthamt">
                                </div>
                            </div>
                                <div class="form-group col-md-3">
                                        <label>How Many Times</label>
                                        <select class="form-control" name="txthmt" id="txthmt">
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
              <table>
                  <tr>
                    <th><div style="clear: both;" id= "printstaticdata"></div></th>
                    <th> <div style="clear: both;" id= "printstaticdata1"></div> <div style="clear: both;" id= "ptrn"></div>  </th>
                 </tr>
               </table>
            </div>
        </div>
    </div>
    <div class="controls span4">
    <div class="widget-box">
            <div  style="border: #ff0000 solid 0px; width: 50px; height:50px; float: right; right: 0px; z-index: 2222; position: absolute;" id="student_photo_here"></div>
            <div class="widget-title"> <span class="icon"> <i class="icon-ok-sign"></i> </span>
                <h5>Static Heads</h5>
            </div>
            <div class="widget-content">
                <div class="control-group">
                    <label class="control-label">Select Head</label>
                    <div class="controls">
                    <select name="cmbStaticHeads" id="cmbStaticHeads" class="span12" required="required">
                      <option value="">Select Static head</option>
                      <?php foreach ($static_data as $item) {?>
                        <option value="<?php echo $item->static_head_ID;?>"><?php echo $item->fee_Head;?></option>
                      <?php } ?>
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
            <h5>Classes in Session 2018-19</h5>
          </div>
          <div class="widget-content nopadding" style="overflow: auto; height: 350px">
            <table class="table table-bordered table-striped with-check">
              <thead>
                <tr>
                  <th style="text-align: left">Select Classes(s)</th>
                </tr>
                <tr>
                  <th id="printclasshere"></th>
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
    