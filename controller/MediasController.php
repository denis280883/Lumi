<?php

class MediasController extends Controller {
	function admin_index ($id) {
		$this->layout = 'model';
		$this->loadModel ('Media');
		if ($this->request->data && !empty ($_FILES['file']['name'])) {
			if (strpos ($_FILES['file']['type'], 'image') !== false) {
				$dir = WEBROOT . DS . 'img' . DS . date ('Y-m');
				if (!file_exists ($dir))
					mkdir ($dir, 0777);
				move_uploaded_file ($_FILES['file']['tmp_name'], $dir . DS . $_FILES['file']['name']);
				$this->Media->save (array (
					'name'		=> $this->request->data->name,
					'file'		=> date ('Y-m') . '/' . $_FILES['file']['name'],
					'post_id'	=> $id,
					'type'		=> 'img'
				));
				$this->Session->setFlash ("L'image a bien été uploadé");
			}
			else {
				$this->Form->errors['file'] = "Le fichier n'est pas une image";
			}
		}
		$this->layout = 'modal';
		$d['images'] = $this->Media->find (array (
			'conditions' => array ('post_id' => $id
		))); 
		$d['post_id'] = $id;
		$this->set ($d); 
	}

	function admin_delete ($id) {
		$this->loadModel ('Media');
		$media = $this->Media->findFirst (array (
			'conditions' => array ('id'=>$id)
		));
		unlink (WEBROOT . DS . 'img' . DS . $media->file);
		$this->Media->delete ($id);
		$this->Session->setFlash ("Le média a bien été supprimé");
		$this->redirect ('admin/medias/index/' . $media->post_id);
	}
}