<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
      <ol class="breadcrumb">
        <li><a href="#">
          <em class="fa fa-home"></em>Home
        </a></li>
        <li class="active">Master</li>
      </ol>
    </div><!--/.row-->
    
      <div class="col-lg-12">
        <h1 class="page-header">Static in class</h1>
      </div>
      <ul class="pagination">
        <li class="active"><a data-toggle="tab" href="#mshead">Manage Static Heads</a></li>
        <li><a data-toggle="tab" href="#ashead">Associate Static Heads</a></li>
        </ul>
         <div class="tab-content">    
        <div id="mshead" class="tab-pane fade in active">

          <div class="panel-heading">Add static Heads</div>
          <table class="table table-bordered">
            <tr>
              <th>
                <div class="panel-body ">
                  <form class="form form-vertical" name="frm" action="<?php echo site_url('flexihead_students/insert_record');?>" method="post" id="frm">
                     <div class="form-group ">
                       <label>New static Head</label>
                         <input class="form-control"name="txtffh" id="txtffh">
                    </div>
                    <div class="form-group">
                      <label>Amount</label>
                        <input class="form-control" name="txtffhamt" id="txtffhamt">
                    </div>
                  
                <div class="form-group">
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
                  <br><br>  <?php echo $this->session->flashdata('msg_'); ?>
                  </div>
                </div>
            </form>

            </div>
          </div>
        </th>
          <th>
             <div class="controls span6">
        <div class="widget-box">
            
            <div class="widget-content nopadding">
                <div class="">View Static Head<em class="caret"></em></div>
                <table>
                  <tr>
                    <th><div style="clear: both;" id= "printheres"></div></th>
                    <th> <div style="clear: both;" id= "printheres1"></div> <div style="clear: both;" id= "ptrn"></div>  </th>
                 </tr>
               </table>
                
            </div>
        </div>
    </div>
  </th>
  </tr>
</table>
</div>


    
    <div id="ashead" class="tab-pane fade">





<div class="controls span4">
    <div class="widget-box">
            <form name="frmStaticheadData" class="form" id="frmStaticheadData" method="post" action="<?php echo site_url('statichead_students/getstaticheads');?>">

            <div  style="border: #ff0000 solid 0px; width: 50px; height:50px; float: right; right: 0px; z-index: 2222; position: absolute;" id="student_photo_here"></div>
            <div class="widget-title"> <span class="icon"> <i class="icon-ok-sign"></i> </span>
                <h3>Static Heads</h3>
            </div>
            <div class="widget-content">
                <div class="control-group">
                    <div class="controls">
                      <table class="table table-bordered table-striped with-check">
                       <tr>
                          <th style="text-align: left">Select Static Heads</th>
                       </tr>
                          <th> <div  id="staticheadshere" style="clear: both; overflow: hidden;";></div></th>
                          </tr>
                   </table>
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
                <input type="submit" value="Add Fee to selected Class" class="btn btn-success span9" id="associate_static_head_with_classes">
                <input type="reset" value="X" class="btn btn-danger cancel_static_associates_classes span3" style="float: right">
            </div>
        </div>
      </form>
        <div class="widget-content nopadding" style="overflow: auto; height: 350px">
            <table class="table table-bordered table-striped with-check">
              <thead>
                <tr>
                  <th style="text-align: left">Selected Classes(s)</th>
                </tr>
                <tr>
                  <th id="printselectedclasshere"></th>
                </tr>
              </thead>
              <tbody id="classes_associates_staticHeads">
                
              </tbody>
            </table>



       <div class="col-sm-12">
        <p class="back-link">BCA final Year Project by <a href="#">FMS team</a></p>
      </div>
