<?php
class AdminController extends AppController {
    var $uses = array('Admin','Speakertopic','Conference','Sponsor','AwardNomination');

    
    public function index(){ 
    	

    }
    
    
    public function home(){

    	$this->set('title','Mastech | Admin');
//    	$this->set('active','1');
        $this->set('description','');

    }
     
    
    public function addspeaker(){
       $this->set('title','Add Speaker Topics'); 
       if(isset($this->passedArgs[0])&&!empty($this->passedArgs[0])){
           $id = $this->passedArgs[0];
           $arr_data = $this->Speakertopic->find('first',array('conditions'=>array('Speakertopic.id'=>$id)));
           $this->set('arr_data',$arr_data);
       }
       if(isset($_POST)&&!empty($_POST)){
           $arr_data = $_POST;
           $arr_data['date'] = strtotime('now');
            if ((isset($_FILES)) && (!empty($_FILES['image']['name']))) {
                $logo1 = $_FILES['image']['name']; /*                 * **image upload start**** */
                $filename1 = pathinfo($logo1, PATHINFO_FILENAME);
                $ext1 = pathinfo($logo1, PATHINFO_EXTENSION);
                $arr_sp1 = array('@', '#', '$', '%', '^', '*', '&');
                $filename1 = str_replace($arr_sp1, "_", $filename1);
                $created_date1 = strtotime('now');
                $filename1 = $filename1 . $created_date1;
                //
                //                    $filetosave  = $filename."_".$created_date.".".$ext;
                $filetosave1 = $filename1 . "." . $ext1;
                $temp_name1 = $_FILES["image"]["tmp_name"];
                $abs_path1 = getcwd();
                $filepath1 = $abs_path1 ."/images/speakertopics/".$filetosave1;
               
                $res1 = move_uploaded_file($temp_name1, $filepath1);
                
                $arr_data['image'] = "$filetosave1"; 
            } 
           if($this->Speakertopic->save($arr_data))
           {
               $this->Session->setFlash('Saved Successfully', 'default', array(), 'success');
               $this->redirect(array('controller'=>'admin','action'=>'speakertopics')); 
           }
            
       }
    }
   
    public function speakertopics(){
        $this->set('title','Speaker Topics'); 
        $arr_data = $this->Speakertopic->find('all',array('order'=>array('id'=>"DESC")));
        $this->set('arr_data',$arr_data);
    }
  public function sponsorreg(){
        $this->set('title','Sponsor Enquiry'); 
        $arr_data = $this->Sponsor->find('all',array('order'=>array('id'=>"DESC")));
        $this->set('arr_data',$arr_data);
    }
     public function sponsordelete(){
        $this->set('title','Sponsor Enquiry'); 
         
    	
         $this->Sponsor->delete($this->passedArgs[0]);
        $this->redirect(array('controller'=>'admin','action'=>'sponsorreg'));

    }
      public function conferencereg(){
        $this->set('title','Conference Registration'); 
        $arr_data = $this->Conference->find('all',array('order'=>array('his_id'=>"DESC")));
        $this->set('arr_data',$arr_data);
    }
    public function conferencedelete()
            {
        $this->set('title','Conference Registration'); 
//        $this->Conference->his_id = $this->passedArgs[0];
//$this->Conference->delete();
//         $this->Conference->delete();
        $id=$this->passedArgs[0];
        
        $this->Conference->query("delete  from conference_registration where his_id = $id");
        $this->redirect(array('controller'=>'admin','action'=>'conferencereg'));

    }
    public function changetopicstatus(){
        $this->layout='';
        $this->autoRender=FALSE;
        if(isset($_POST['status'])){
            $status = $_POST['status'];
            if($status==1)
                $upStatus = 0;
            else $upStatus=1;
            $arr_save['id'] = $_POST['id']; 
            $arr_save['status'] = $upStatus;
            $this->Speakertopic->save($arr_save);
        }
    }
    public function viewmessage(){
         $this->layout='';
         if(isset($_POST) && !empty($_POST)){
        $arr_data = $this->Sponsor->find('first',array('conditions'=>array('id'=>$_POST['id']),'order'=>array('id'=>"DESC")));
        $this->set('arr_data',$arr_data);
         }
    }
    public function award_nomination(){
        $this->set('title','Award Nomination'); 
        $arr_data = $this->AwardNomination->find('all',array('order'=>array('id'=>"DESC")));
        $this->set('arr_data',$arr_data);
    }
    public function nominationdetails(){
        $this->layout='';
         if(isset($_POST) && !empty($_POST)){
        $arr_data = $this->AwardNomination->find('first',array('conditions'=>array('id'=>$_POST['id'])));
        $this->set('data',$arr_data);
         }
    }
    
}
?>