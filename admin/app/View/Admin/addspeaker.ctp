
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Page Creation</h3>
            </div>
                <label style="color: green;font-size: 18px"><?php echo $this->Session->flash('success') ?></label>
            <!-- /.box-header -->
            <!-- form start -->
            <?php $id = 0; $title= ""; if(isset($arr_data)&&!empty($arr_data)){
                $id = $arr_data['Speakertopic']['id'];
                $title = $arr_data['Speakertopic']['topic'];
                $image=$arr_data['Speakertopic']['image'];
            } ?>
            <form role="form" name="addspeaker" id="addspeaker" action="<?=$this->webroot?>admin/addspeaker" method="POST" enctype="multipart/form-data">
                 <input type="hidden" class="form-control" name="id" id="id" value="<?=$id?>">
              <div class="box-body">
                  <label style="color: green;font-size: 18px"><?php echo $this->Session->flash('success') ?></label>
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" name="topic" required value="<?=$title?>">
                </div>
                  <div class="form-group">
                  <label for="exampleInputEmail1">Background Image</label>
                  <input name="image" id="image" accept="image/*" type="file" class="form-control" value="<?php echo isset($image)?$image:''?>"    <?php echo isset($image)?'':"required"; ?> aria-required="true">
                                   <small>( Upload jpeg | jpg | png formated files )</small>
                                    <?php if (isset($image) && !empty($image)){ ?>
                                                     <img src="<?php echo $this->webroot;?>images/speakertopics/<?=$image?>" style="width:50px;height:50px;" />    
                                     <?php } ?>
                </div>
                
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
      </div>
      <!-- /.row -->
    </section>
<script>

  $.validate({
    modules : 'location, date, security, file',
    onModulesLoaded : function() {
      $('#country').suggestCountry();
    }
  });

  // Restrict presentation length
  $('#presentation').restrictLength( $('#pres-max-length') );

</script>
