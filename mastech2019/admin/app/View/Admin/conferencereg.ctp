<div class="main-content">
<div class="main-content-inner">
<div class="hr hr-18 dotted hr-double"></div>
<div class="row">
    <div class="col-xs-12">
        <h3 class="header smaller lighter blue">Conference Registration List</h3>

        <div class="clearfix">
            <div class="pull-right tableTools-container"></div>
        </div>
        
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                      <th>Sl.No</th>                      
                          
<th>Name</th>
<th>Company</th>
<th>Title</th>
<th>Email</th>
<th>Contact Number</th>
<th>Business Type</th>
<th>Know about Mastech</th>
<th>MasterClass</th>
<th>Reg. Date</th>
<th>Delete</th>

                        
                    </tr>
                </thead>

                <tbody>
                   <?php $i=1;  
                   foreach($arr_data as $data){ ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?=$data['Conference']['name'] ?></td>
                        <td><?=$data['Conference']['company'] ?></td>
                        <td><?=$data['Conference']['title'] ?></td>
                        <td><?=$data['Conference']['email'] ?></td>
                        <td><?=$data['Conference']['number'] ?></td>
                        <td><?=$data['Conference']['type'] ?></td>
                        <td><?=$data['Conference']['about'] ?></td>
                        <td><?=$data['Conference']['masterclassInt'] ?></td>
                        <td><?= date('d/m/Y',strtotime($data['Conference']['reg_date'])) ?></td>
                        <td><a style="color:Blue;" href="<?php echo $this->webroot."admin/conferencedelete/".$data['Conference']['his_id'];?>" title="Delete user" onClick="return confirm('Are You Sure Want To Delete?')">Delete</a></td>
                    </tr>
                  
                     <?php $i++; } ?>
                     
                   
                    
                </tbody>
            </table>
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

