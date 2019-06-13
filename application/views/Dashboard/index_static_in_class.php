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
                  <form class="form form-vertical" name="frm" action="<?php echo site_url('statichead_students/insert_record');?>" method="post" id="frm">
                     <div class="form-group ">
                       <label>New static Head</label>
                         <input class="form-control"name="txtsth" id="txtsth">
                    </div>
                    <div class="form-group">
                      <label>Amount</label>
                        <input class="form-control" name="txtsthamt" id="txtsthamt">
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
                    <th><div style="clear: both;" id= "printstaticdata"></div></th>
                    <th> <div style="clear: both;" id= "printstaticdata1"></div> <div style="clear: both;" id= "ptrn"></div>  </th>
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
        <form name="frmSelectStudents" id="frmSelectStudents" method="post" action="<?php echo site_url('statichead_students/getstaticheads');?>">
            <table class="table table-bordered with-check" >
             <tr>
               <th>                   
                   <table class="table table-bordered table-striped with-check">
                       <tr>
                          <th style="text-align: left">Select Static Head</th>
                       </tr>
                          <th> <div  id="staticheadshere" style="clear: both; overflow: hidden;";></div></th>
                          </tr>
                   </table>
               </th>
               <th>
                   <table class="table table-bordered table-striped with-check">
                     <tr>
                         <th style="text-align: left">Classes in Session</th>
                      </tr>
                        <th> <div class="myscroll" id="printclasshere" style="clear: both";></div></th>

                      </tr>
                      <tr>
                       <th>
                       <div id="studen" style="clear:both"></div>
                        <div class="controls">
                            <input type="submit" value="Add Fee to selected Student(s)" class="btn btn-success span9" id="associate">
                              <input type="reset" value="X" class="btn btn-danger cancel_sassociate_flexible_head_with_Student span3" style="float: right"> </div>
                        </th>
                    </tr>
                    </table>
               </th>
         </form>
            </th>
              </tr>
            </table>
          <h4><strong>View Associated Static Heads</strong></h4>
            
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
