<?php
	class MyFilesController extends AppController {
		
		public function index() {
			
		}
		
		function add() {
			if (!empty($this->data) &&
			is_uploaded_file($this->data['MyFile']['File']['tmp_name'])) {
				$fileData = fread(fopen($this->data['MyFile']['File']['tmp_name'], "r"),
				$this->data['MyFile']['File']['size']);
				
				$this->data['MyFile']['name'] = $this->data['MyFile']['File']['name'];
				$this->data['MyFile']['type'] = $this->data['MyFile']['File']['type'];
				$this->data['MyFile']['size'] = $this->data['MyFile']['File']['size'];
				$this->data['MyFile']['data'] = $fileData;
				
				$this->MyFile->save($this->data);
				
				$this->redirect('somecontroller/someaction');
			}
		}
		
		function download($id) {
			Configure::write('debug', 0);
			$file = $this->MyFile->findById($id);
			
			header('Content-type: ' . $file['MyFile']['type']);
			header('Content-length: ' . $file['MyFile']['size']);
			header('Content-Disposition: attachment; filename="'.$file['MyFile']['name'].'"');
			echo $file['MyFile']['data'];
			
			exit();
		}
	}
?>