<?php 
class Form{

	public $controller;

	public function __construct($controller){
		$this->controller = $controller;
	}

	public function input($name,$label,$options = array()){
		$html ='<div class="clearfix">
					<label for="input'.$name.'">'.$label.'</label>
					<div class="input">';
		$attr = ' ';
		foreach ($options as $k=>$v) {
			if($k!='type'){
				$attr .= "$k=\"$v\"";
			}
		}
		if(!isset($options['type'])){
			$html .= '<input type="text" id="input'.$name.'" name="'.$name.'" value="'.$this->controller->request->data->$name.'" '.$attr.'>';
		}elseif($options['type'] == 'textarea') {
			$html .= '<textarea id="input'.$name.'" name="'.$name.''.$attr.'>'.$this->controller->request->data->$name.'</textarea>';
		}
		$html .= '</div></div>';
		return $html;


	}
} ?>