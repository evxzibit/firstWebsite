<?php
class PostsController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');
	
	public function index(){
		$this->set('allPosts', $this->Post->find('all'));
	}
	
	public function view($id = null){
		if(!$id){
			throw new NotFoundException(__('Invalid post id'));
		}
		$post = $this->Post->findById($id);
		if(!$post){
			throw new NotFoundException(__('Invalid post id'));
		}
		$this->set('post', $post);
	}
	
	public function delete($id = null){
		if(!$id){
			throw new NotFoundException(__('Invalid post id'));
		}
		if($this->Post->delete($id)){
			$this->Session->setFlash(__('Your post was deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Unable to delete your post'));
		
	}
	public function edit($id = null){
		if(!$id){
			throw new NotFoundException(__('Invalid post id'));
		}
		$post = $this->Post->findById($id);
		if(!$post){
			throw new NotFoundException(__('Invalid post id'));
		}
		
		if($this->request->is(array('post','put'))){
			$this->Post->id = $id;
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been Updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your post.'));
		}
		if(empty($this->request->data)) {
			$this->request->data = $post;
		} 
		
	}
	public function add(){
		if($this->request->is('post')){
			if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
		}
	}
	

}
