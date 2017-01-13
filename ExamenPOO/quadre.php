<?php

	class Quadre{
		
		protected $Color;


		function show(){
			echo '<td style="padding-left:2px; background-color:'.$this->bgColor. '; color:' .$this->fontColor.'; border:' .$this->border.'">'.'<div style="height:50px; width:50px; overflow:hidden;"></div></td>';
		}


		function __construct($text=null, $bgColor=null, $fontColor=null, $border=null){
			$this->text=$text;
			$this->bgColor=$bgColor;
			$this->fontColor=$fontColor;
			$this->border=$border;
		}

		function setText($data){
			$this->text=$data;
		}

		function setbgColor($bgColor){
			$this->bgColor=$bgColor;
		}

		function getBgColor(){
			return $this->bgColor;
		}

		function setfontColor($fontColor){
			$this->fontColor=$fontColor;
		}

		function getfontColor(){
			return $this->fontColor;
		}

		function setborder($border){
			$this->border=$border;
		}

	}