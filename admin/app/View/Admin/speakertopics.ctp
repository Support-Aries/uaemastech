<div class="main-content">
<div class="main-content-inner">
<div class="hr hr-18 dotted hr-double"></div>
<div class="row">
    <div class="col-xs-12">
        <h3 class="header smaller lighter blue">Speaker Topics</h3>

        <div class="clearfix">
            <div class="pull-right tableTools-container"></div>
        </div>
        <div class="table-header">
            Results for Speaker Topics
            <span class="pull-right"><a href="<?=$this->webroot?>admin/addspeaker"><button class="btn btn-pink">Add New Topic</button></a></span>
        </div>
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="center">
                          Sl No
                        </th>
                        <th>Topic</th>
                        <th>Background Image</th>
                        <th class="hidden-480">Status</th>
                        <th>Edit</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $i=1; foreach($arr_data as $data){ 
                    if($data['Speakertopic']['status']==1){
                      $class = "label-success";
                      $status = "Active";
                    }     
                    else{
                       $class = "label-danger";
                      $status = "Inactive"; 
                    }
                    ?>
                    <tr>
                        <td class="center">
                             <a href="#"><?= $i ?></a>
                        </td>

                        <td>
                            <a href="#"><?=$data['Speakertopic']['topic'] ?></a>
                        </td>
                        <td>
                            <a href="#"><img src="<?php echo $this->webroot;?>images/speakertopics/<?=$data['Speakertopic']['image']?>" style="width:50px;height:50px;" /></a>
                        </td>
                        
                        <td class="hidden-480">
                            <span style="cursor: pointer" onclick="changeStatus(<?=$data['Speakertopic']['status'] ?>,<?=$data['Speakertopic']['id'] ?>)" class="label label-sm <?=$class?>"><?=$status?></span>
                        </td>

                        <td>
                            <div class="hidden-sm hidden-xs action-buttons">
                                
                                <a class="green" href="<?= $this->webroot ?>admin/addspeaker/<?=$data['Speakertopic']['id'] ?>">
                                    <i class="ace-icon fa fa-pencil bigger-130"></i>
                                </a>

                            </div>

                        </td>
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