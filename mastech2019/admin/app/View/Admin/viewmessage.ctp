<div class="modal-body">
    <div class="row">
        
        <div class="table-responsive">
            
            <table id="mytable" class="table table-bordred table-striped" style="font-size:12px;">                   
     
    <tbody>
        <?php  if(!empty($arr_data)){  ?>
     <?=$arr_data['Sponsor']['message'] ?>
         <?php } 
            else { echo "No Message"; } 
            ?>
   </tbody>
</table>
           
            
        </div>
    </div>
        </div>

