
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
      <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  </head>
       <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<div class="row">
    <div class="col-lg-12">
    <center><h2>My Task</h2>   </center><br>              
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <a href="<?php print site_url();?>/add" class="pull-right btn btn-primary btn-xs" style="margin-bottom: 5px;"><i class="fa fa-plus"></i> Add Employee</a>                
    </div>
</div>

<div class="row">   
        <div class="col-lg-12">
    <table class="table table-bordered">
    <thead>
      <tr>
        <th width="15%">First Name</th>
        <th width="15%">Last Name</th>
        <th width="15%">Email</th>        
        <th width="10%">Phone</th>
        <th width="10%">Salary</th>
        <th width="25%">Action</th> 
      </tr>
    </thead>
    <tbody> 
        <?php foreach($empInfo as $key=>$element) { ?>
      <tr>
        <td><?php print $element['name']; ?></td>
        <td><?php print $element['last_name']; ?></td>  
        <td><?php print $element['email']; ?></td>
        <td><?php print $element['contact_no']; ?></td> 
        <td><?php print $element['salary']; ?></td> 
        <td>
        <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Click me
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a title="Display" href="<?php print site_url();?>/display/<?php print $element['id'];?>">view</a></li>
      <li><a title="Edit" href="<?php print site_url();?>/edit/<?php print $element['id'];?>">edit</a></li>
      <li><a title="Delete" href="<?php print site_url();?>/delete/<?php print $element['id'];?>" onClick="return confirm('Are you sure you want to delete?')" >delete</a></li>
    </ul>
  </div>
</div>
           
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</div>
