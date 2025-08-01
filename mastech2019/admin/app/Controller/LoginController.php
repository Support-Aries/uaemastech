<?php
class LoginController extends AppController {
    var $uses = array('Admin','Speakertopic');
        public function index(){ 
    	$this->layout = '';   	 
    	$this->set('title','Mastech');
//    	$this->set('active','1');
        $this->set('description','');
        if(isset($_POST['login'])){ 
        	$log = $this->Admin->find('first',array('conditions'=>array('username'=>$_POST['user'],'password'=>md5($_POST['pass']),'role'=>1)));
        	if($log){
        		$this->Session->write('user', $log['Admin']['username']);
                $this->Session->write('role', $log['Admin']['role']);
        		$this->redirect(array('controller' => 'admin', 'action' => 'speakertopics'));
        	}else{
        		$this->Session->setFlash('Invalid Credentials');
        		$this->redirect(array('controller' => 'login', 'action' => 'index'));
        	}
        	
        }

    }
    public function logout(){
    	$this->Session->destroy();
        $this->redirect("/login");
        $this->autoRender = false;
//    	$this->redirect(array('controller' => 'admin', 'action' => 'index'));
    }
}
?>