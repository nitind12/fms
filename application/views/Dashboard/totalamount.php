<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                    <em class="fa fa-home"></em>Home
                </a></li>
                <li class="active">Total Fee Collection</li>
            </ol>
            
        </div><!--/.row-->
        <div >
            <table  class="table table-bordered table-striped">
                <tr>
                    <th>
                        <form class="form" id="frmAmount">
                            <fieldset>
                         <table  class="table table-bordered">
                        <tr>
                            <div class="form-group">
                                        <label>Select Class</label>
                                        <select class="form-control"  name="cmbClass" id="cmbClass" required="required">
                                            <option>Select Class</option>
                                            <?php foreach ($class_in_session as $item) {?>
                                                <option value="<?php echo $item->class_sess_ID;?>"><?php echo $item->class_sess_ID;?></option>
                                            <?php } ?>
                                         </select>
                                </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                        <label>Month From</label>
                                        <select class="form-control"  name="cmbMonthf" id="cmbMonthf" required="required">
                                            <option>Select Month</option>
                                          <?php for ($loop=1;$loop<=12; $loop++) {?>
                                                <option value="<?php echo $this->my_lib->getMonths($loop);?>"><?php echo $this->my_lib->getMonths($loop);?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                </div>
                        </tr>
                        <tr>
                            <div class="form-group">
                                        <label>Month To</label>
                                        <select class="form-control"  name="cmbMontht" id="cmbMontht" required="required">
                                            <option>Select To</option>
                                           <?php for ($loop=1;$loop<=12; $loop++) {?>
                                                
                                                <option value="<?php echo $this->my_lib->getMonths($loop);?>"><?php echo $this->my_lib->getMonths($loop);?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                </div>
                        </tr>
                        <div class="form-group">
                                    <div class="col-md-12 widget-right">
                                        <input type="submit" class="btn btn-primary btn-md pull-left" value="View">
                                    </div>
                                </div>
                    </table>
                </fieldset>
                    </form>
                </th>
                <th>
                        
                        <table  class="table table-bordered">
                        <tr>
                            <th>Total Collection </th>
                        </tr>
                        <tr>
                            <td><div  id="totaldisplayhere" style="clear:both;"></div></td>
                        </tr>
                    </table>
            
                </th>
            </tr>
            </table>
                </div>

            
            <div class="col-sm-12">
                <p class="back-link">BCA final Year Project by <a href="#">FMS team</a></p>
            </div>
        </div><!--/.row-->
    </div>