<script>
   function showmodal(id){
           $.ajax({
        type: 'POST',
        url: "<?php echo $this->webroot; ?>admin/nominationdetails",
        data:{id: id},
         async: false,
        success: function(result) { 
          $('#Modal').modal('show');
          $(".modal-body").html(result);
        
        },
       
    });
 };
  </script>
<div class="main-content">
<div class="main-content-inner">
<div class="hr hr-18 dotted hr-double"></div>
<div class="row">
    <div class="col-xs-12">
        <h3 class="header smaller lighter blue">Nominations 2019 List</h3>

        <div class="clearfix">
            <div class="pull-right tableTools-container"></div>
        </div>
        
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                      <th>Sl.No</th>                      
                          
<th>Title</th>
<th>Name</th>
<th>Company</th>
<th>Designation</th>
<th>Position</th>
<th>Contact</th>
<th>Email</th>
<th>Registration Date</th>
<th>View Details</th>

                        
                    </tr>
                </thead>

                <tbody>
                   <?php $i=1;  foreach($arr_data as $data){ ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?=$data['AwardNomination']['title'] ?></td>
                        <td><?=$data['AwardNomination']['fname']." ".$data['AwardNomination']['lname'] ?></td>
                        <td><?=$data['AwardNomination']['company'] ?></td>
                        <td><?=$data['AwardNomination']['designation'] ?></td>
                        <td><?=$data['AwardNomination']['position'] ?></td>
                        <td><?=$data['AwardNomination']['contact'] ?></td>
                        <td><?=$data['AwardNomination']['email'] ?></td>
                        <td><?= date('d-m-Y',  strtotime($data['AwardNomination']['added_date'])) ?></td>
                        <td><a href="#" id="awards" onclick="showmodal(<?=$data['AwardNomination']['id']?>)" >View Details</a></td>
                         
                       
                    </tr>
                  
                     <?php $i++; } ?>
                    
                </tbody>
            </table>
        </div>
        <div id="Modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="padding-top:150px;">
                        <div class="modal-dialog" style="width:800px;margin: 0 auto;">

                            <div class="modal-content">
                                <div class="modal-header"><b>Details</b></div>
                                <div class="modal-body">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
</div>
  </div>
</div>
<!--<script src="<?=$this->webroot?>js/jquery.dataTables.min.js"></script>
		<script src="<?=$this->webroot?>js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="<?=$this->webroot?>js/dataTables.buttons.min.js"></script>
                <script src="<?=$this->webroot?>js/dataTables.select.min.js"></script>-->