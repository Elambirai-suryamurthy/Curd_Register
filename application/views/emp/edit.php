<?php
//$this->load->view('templates/header');
    $id = $empInfo['id'] ? $empInfo['id'] : '';
    $first_name = $empInfo['first_name'] ? $empInfo['first_name'] : '';
    $last_name = $empInfo['last_name'] ? $empInfo['last_name'] : '';
    $email = $empInfo['email'] ? $empInfo['email'] : '';
    $address = $empInfo['address'] ? $empInfo['address'] : '';
    $contact_no = $empInfo['contact_no'] ? $empInfo['contact_no'] : '';
    $salary = $empInfo['salary'] ? $empInfo['salary'] : '';
?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
      <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script></head>
<div class="row">
    <div class="col-lg-12">
    <center><h2>My Task</h2>   </center><br><br>                
    </div>
</div><!-- /.row -->

<div class="row">
    <div class="col-lg-12">        
        <a href="<?php print site_url();?>" class="pull-right btn btn-primary btn-xs" style="margin: 2px;;"><i class="fa fa-list"></i> List</a>

    </div>
</div><!-- /.row -->

 <form action="<?php print site_url();?>/curd/update" method="POST" class="edit-emp" id="edit-emp">
    <input type="hidden" name="emp_id" value="<?php print $id; ?>">
<div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                     
                    </span>
                    <input type="text" name="first_name" class="form-control" id="first-name" placeholder="First Name" value="<?php print $first_name; ?>">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                      
                    </span>
                    <input type="text" name="last_name" class="form-control" id="last-name" placeholder="Last Name" value="<?php print $last_name; ?>">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                      
                    </span>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="<?php print $email; ?>">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                       
                    </span>
                    <input type="text" name="address" class="form-control" id="address" placeholder="Address" value="<?php print $address; ?>">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                     
                    </span>
                    <input type="text" name="contact_no" class="form-control" id="contact-no" placeholder="Contact No" value="<?php print $contact_no; ?>">
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-money"></i>
                    </span>
                    <input type="text" name="salary" class="form-control" id="last-name" placeholder="Salary" value="<?php print $salary; ?>">
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 text-right">
            <a href="<?php print site_url();?>" id="cancel-emp" class="btn btn-danger"><i class="fa fa-undo"></i> Cancel</a>
            <button type="submit" name="add_emp" id="submit-emp" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
        </div>
    </div>  
</form>
