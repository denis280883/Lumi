<?php 
class Form{

	public $controller;

	public function __construct($controller){
		$this->controller = $controller;
	}

	public function input($name,$label,$options){
		$html ='<div class="clearfix">
					<label for="input'.$name.'">'.$label.'</label>
					<div class="input">';
		if(!isset($options['type'])){
			$html .= '<input type="text" id="input'.$name.'" name="'.$name.'" value="'.$this->controller->request->data->$name.'">';
		}elseif($options['type'] == 'textarea') {
			$html .= '<textarea id="input'.$name.'" name="'.$name.'">'.$this->controller->request->data->$name.'</textarea>';
		}
		$html .= '</div></div>';
		return $html;


	}
} ?>