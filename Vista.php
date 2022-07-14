<?php
	// Vista.php
	class Vista {
		public $img;
		public $blanco, $negro, $verdeclaro, $rojo;
		public function dibujarReloj($modelo){
			$this->img = imagecreate($modelo->ancho, $modelo->alto);
			$this->blanco = imagecolorallocate($this->img, 255, 255, 255);
			$this->negro = imagecolorallocate($this->img, 0, 0, 0);
			$this->rojo = imagecolorallocate($this->img, 255, 0, 0);
			$this->verdeclaro = imagecolorallocate($this->img, 196, 237, 220);
			imagefilledrectangle($this->img, 0, 0, $modelo->ancho, $modelo->alto, $this->blanco);
			imagefilledellipse($this->img, $modelo->centrox, $modelo->centroy, $modelo->ancho-30, $modelo->alto-30, $this->negro);
			imagefilledellipse($this->img, $modelo->centrox, $modelo->centroy, $modelo->ancho-40, $modelo->alto-40, $this->blanco);
			imagestring($this->img, 100, 110, 70, $modelo->centroy-189, $this->negro);	
			imagestring($this->img, 400, 190, 50, $modelo->centroy-188, $this->negro);	
			imagestring($this->img, 500, 260, 70, $modelo->centroy-199, $this->negro);	
			imagestring($this->img, 550, 310, 120, $modelo->centrox-198, $this->negro);	
			imagestring($this->img, 550, 345, 190, $modelo->centrox-197, $this->negro);	
			imagestring($this->img, 550, 320, 260, $modelo->centrox-196, $this->negro);
			imagestring($this->img, 400, 263, 320, $modelo->centrox-195, $this->negro);
			imagestring($this->img, 400, 190, 340, $modelo->centrox-194, $this->negro);
			imagestring($this->img, 300, 117, 319, $modelo->centrox-193, $this->negro);
			imagestring($this->img, 300, 70, 268, $modelo->centrox-192, $this->negro);
			imagestring($this->img, 300, 53, 192, $modelo->centrox-191, $this->negro);
			imagestring($this->img, 300, 70, 115, $modelo->centrox-190, $this->negro);
			imagefilledellipse($this->img, $modelo->centrox, $modelo->centroy, $modelo->ancho-390, $modelo->alto-390, $this->rojo);
			
			imagesetthickness($this->img, 1);
			imageline($this->img, $modelo->centrox,$modelo->centroy, $modelo->ancho-50000000, $modelo->alto-40000, $this->negro);
			imagesetthickness($this->img, 3);
			imageline($this->img, $modelo->centrox,$modelo->centroy, $modelo->ancho-150, $modelo->alto-350, $this->negro);
			imagesetthickness($this->img, 3);
			imageline($this->img, $modelo->centrox,$modelo->centroy, $modelo->ancho-350, $modelo->alto-150, $this->negro);
			
		
			//imagestring($this->img, 3, 10, 300, $modelo->titulo, $this->negro);	
			
			for($i=0; $i<60; $i++){
				if($i%5==0){
					//imagesetthickness(resource $image, int $thickness): bool
					imagesetthickness($this->img, 3);
					imageline($this->img, $modelo->arrptosext[$i]->x, $modelo->arrptosext[$i]->y, $modelo->arrptosint[$i]->x, $modelo->arrptosint[$i]->y, $this->rojo);	
                    
					
				}
				else{
					imagesetthickness($this->img, 1);
					//imageline($this->img, $modelo->arrptosext[$i]->x, $modelo->arrptosext[$i]->y, $modelo->arrptosint[$i]->x, $modelo->arrptosint[$i]->y, $this->negro);
					imagefilledellipse($this->img, $modelo->arrptosext[$i]->x, $modelo->arrptosext[$i]->y, 
					                               5, 5, $this->negro);
				}
				

			}
			imagepng($this->img);
			imagedestroy($this->img);
			
		}
		
		
	}
?>