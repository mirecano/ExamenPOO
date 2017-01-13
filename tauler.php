<?php
	//namespace Prepoo;
	require 'quadre.php';

	class Tauler{
		private $peces=array();
		private $tipus;
		private $nrows;
		private $ncols;


		function __construct($nrows=null, $ncols=null, $bgColor){
			$this->nrows=$nrows;
			$this->ncols=$ncols;
			$this->bgColor=$bgColor;
			//$this->tipus=$tipus;

			for ($i=0; $i < $nrows; $i++){ 
				for ($j=0; $j < $ncols; $j++){ 
					if($i%2!=0){
						if ($j%2==0) {
							$bgcolor = "black";
						}else{
							$bgcolor ="white";
						}
						$this->peces[$i][$j] = new Quadre('y', $bgcolor);
					}else{
						if ($j%2==0) {
							$bgcolor = "white";
						}else{
							$bgcolor ="black";
						}
						$this->peces[$i][$j] = new Quadre('y', $bgcolor);
					}
				}
			}
		}


		function escac($nRows=null, $nCols=null, $tipus){
			function setCell($fontColor, $bgColor, $border, $data, $i, $j){
				if(($i-1<$this->nrows)&&($j-1<$this->ncols)){
					if($data!=null){
					$this->peces[$i-1][$j-1]->setText($data);
					}
					if($bgColor!=null){
						$this->peces[$i-1][$j-1]->setbgColor($bgColor);
					}
					if($fontColor!=null){
						$this->peces[$i-1][$j-1]->setfontColor($fontColor);
					}
					if($border!=null){
						$this->peces[$i-1][$j-1]->setborder($border);
					}
				}
			}

		}

		function aleat($nrows=null, $ncols=null, $tipus){
			
		}


		function show(){
			$color1="<body style='background-color: tomato'>";
			echo $color1;
			echo '<table border="1">';
			for($i=0; $i<$this->nrows; $i++){
				echo '<tr>';
				for($j=0; $j<$this->ncols; $j++){
					//Creacio de cell
					$this->peces[$i][$j]->show();
				}
				echo '</tr>';
			}
			echo '</table></body>';
		}

	}