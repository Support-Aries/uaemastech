<script>
   function showmodal(id){
           $.ajax({
        type: 'POST',
        url: "<?php echo $this->webroot; ?>admin/viewmessage",
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
        <h3 class="header smaller lighter blue">Sponsor Enquiry List</h3>

        <div class="clearfix">
            <div class="pull-right tableTools-container"></div>
        </div>
        
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                      <th>Sl.No</th>                      
                          
<th>Name</th>
<th>Email</th>
<th>Contact Number</th>
<th>Company</th>
<th>Desigination</th>
<th>Submitted Date</th>
<th>View Message</th>
<th>Delete</th>
                        
                    </tr>
                </thead>

                <tbody>
                   <?php $i=1;  foreach($arr_data as $data){ ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?=$data['Sponsor']['name'] ?></td>
                        <td><?=$data['Sponsor']['email'] ?></td>
                        <td><?=$data['Sponsor']['phone'] ?></td>
                        <td><?=$data['Sponsor']['company'] ?></td>
                        <td><?=$data['Sponsor']['desigination'] ?></td>
                        <td><?= date('d/m/Y',strtotime($data['Sponsor']['reg_date'])) ?></td>
                        <td><a href="#" id="workshop" onclick="showmodal(<?=$data['Sponsor']['id']?>)" >View Message</a></td>
                       <td><a style="color:blue;" href="<?php echo $this->webroot."admin/sponsordelete/".$data['Sponsor']['id'];?>" title="Delete user" onClick="return confirm('Are You Sure Want To Delete?')">Delete</a></td>  
                       
                    </tr>
                  
                     <?php $i++; } ?>
                    
                </tbody>
            </table>
        </div>
        <div id="Modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="padding-top:150px;">
                        <div class="modal-dialog" style="width:800px;margin: 0 auto;">

                            <div class="modal-content">
                                <div class="modal-header"><b>Message</b></div>
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
<script src="<?=$this->webroot?>js/jquery.dataTables.min.js"></script>
		<script src="<?=$this->webroot?>js/jquery.dataTables.bootstrap.min.js"></script>
		<script src="<?=$this->webroot?>js/dataTables.buttons.min.js"></script>
                <script src="<?=$this->webroot?>js/dataTables.select.min.js"></script>
<script type="text/javascript">
 
			jQuery(function($) {
				//initiate dataTables plugin
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					bAutoWidth: false,
					"aoColumns": [
					  { "bSortable": false },
					  null, null,  
					  { "bSortable": false }
					],
					"aaSorting": [],
				
					select: {
						style: 'multi'
					}
			    } );
			$.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
			
				});
                function changeStatus(status,id){ 
                      var data = "status="+status+"&id="+id;//alert(data)
    result = $.ajax({
                          url:"<?=$this->webroot?>admin/changetopicstatus",
                          type:"POST",
                          data: data,
                           async: true,
                    success: function(data) {//alert(data);return false;
                        location.reload()
                    }
                 }).responseText;  
                }
		</script>
