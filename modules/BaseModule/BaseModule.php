<?php
	class BaseModule
	{
		protected $type = "BaseModule";
		protected $reqTypes = array("GET", "POST", "PUT", "DELETE");
		
		public function getType() {
			return $this->type;
		}
		
		public function checkRequest( $reqType ) {
			return !empty(array_search( $reqType, $this->reqTypes ));
		}
	}
?>