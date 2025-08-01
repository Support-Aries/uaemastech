<div class="modal-body">
    <div class="row">
        
        <div class="table-responsive">
            
            <table id="mytable" class="table table-bordred table-striped" style="font-size:12px;">                   
     
    <tbody>
        <?php if(!empty($data)) {?>
        <tr><th>Title</th><td><?=$data['AwardNomination']['title'] ?></td></tr>
        <tr><th>Name</th><td><?=$data['AwardNomination']['fname']." ".$data['AwardNomination']['lname'] ?></td></tr>
        <tr><th>Company</th><td><?=$data['AwardNomination']['company'] ?></td></tr>
        <tr><th>Designation</th><td><?=$data['AwardNomination']['designation'] ?></td></tr>
        <tr><th>Position</th><td><?=$data['AwardNomination']['position'] ?></td></tr>
        <tr><th>Contact</th><td><?=$data['AwardNomination']['contact'] ?></td></tr>
        <tr><th>Email</th><td><?=$data['AwardNomination']['email'] ?></td></tr>
        <tr><th>Name of person / Company</th><td><?=$data['AwardNomination']['person_name'] ?></td></tr>
        <!--<tr><th>Company of person</th><td><?=$data['AwardNomination']['person_company'] ?></td></tr>-->
        <tr><th>Year of Achievement</th><td><?=$data['AwardNomination']['achievement_yr'] ?></td></tr>
        <tr><th>Registration Date</th><td><?= date('d-m-Y',  strtotime($data['AwardNomination']['added_date'])) ?></td></tr>
        <tr><th>Description of Project / Innovation</th><td><?=$data['AwardNomination']['description'] ?></td></tr>
        <?php } else{ echo "No details"; }?>
   </tbody>
</table>
           
            
        </div>
    </div>
        </div>