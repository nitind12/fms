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
                        
                    <table  class="table table-bordered">
                        <tr>
                            <th colspan="5">Today's Collection </th>
                        </tr>
                        <tr>
                            <th>Receipt ID</th>
                            <th>Class</th>
                            <th>Invoice ID</th>
                            <th>Collection(Rs.)</th>
                            <th>Mode</th>
                        </tr>
                        <?php foreach($currenttotal as $item){
                        echo '<tr>';
                        echo '<td>';
                        echo $item->receipt_ID;
                        echo '</td>';
                        echo '<td>';
                        echo $item->class_sess_ID;
                        echo '</td>';
                        echo '<td>';
                        echo $item->invoice_ID;
                        echo '</td>';
                        echo '<td>';
                        echo $item->paid;
                        echo '</td>';
                        echo '<td>';
                        echo $item->fee_Mode;
                        echo '</td>';
                        echo '</tr>';
                        }
                        ?>
                    </table>
                </tr>
            </table>
        </div>

            
            <div class="col-sm-12">
                <p class="back-link">BCA final Year Project by <a href="#">FMS team</a></p>
            </div>
        </div><!--/.row-->
    </div>