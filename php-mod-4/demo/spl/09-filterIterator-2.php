<?php
class EvenFilter extends FilterIterator{


	public function __construct(Iterator $it){
		parent::__construct($it);
	}

	function accept(){
		if($this->current() % 2 != 0){
			return false;
		}
		return $this->current();
	}

}


$numbers = range(212345, 212377);

$even = new EvenFilter(new ArrayIterator($numbers));

foreach($even as $value){
	echo $value.' is even.<br />';
}
?>