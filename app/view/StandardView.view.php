<?php

Class StandardView extends Disco\classes\View {

    public function header(){
        return Template::build('header');
    }//header

    public function __construct(){

		//This begins the JavaScript and JQuery plug-ins from my project//
		$this->scriptSrc('/js/jquery-1.3.2.min.js');
		$this->scriptSrc('/js/jquery-ui-1.7.1.custom.min.js');
		$this->scriptSrc('/js/execute.js');
		$this->scriptSrc('/js/jquery-1.9.0.min.js');
		$this->scriptSrc('/js/jquery.nivo.slider.js');
		$this->scriptSrc('/js/jquery.color-RGBa-patch.js');
		//$this->scriptSrc('/js/example.js');
		$this->scriptSrc('/js/foundation.topbar.js');
		//This is discophp's included JavaScript sources
        $this->scriptSrc('http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js');
        $this->scriptSrc('/js/modernizr.js');
        $this->scriptSrc('/js/foundation.min.js');
        $this->scriptSrc('/js/js.js');
		//This begins the style sources
        $this->styleSrc('/css/foundation.min.css');
        $this->styleSrc('/css/new-master.css');

        $this->script('$(document).foundation();');

		

    }//construct

    public function footer(){
        return Template::build('footer');
    }//footer

}//Standard

?>
