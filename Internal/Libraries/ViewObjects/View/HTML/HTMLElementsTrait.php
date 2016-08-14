<?php namespace ZN\ViewObjects;

trait HTMLElementsTrait
{
	//--------------------------------------------------------------------------------------------------------
    //
    // Author     : Ozan UYKUN <ozanbote@gmail.com>
    // Site       : www.znframework.com
    // License    : The MIT License
    // Telif Hakkı: Copyright (c) 2012-2016, znframework.com
    //
    //--------------------------------------------------------------------------------------------------------
   
	//--------------------------------------------------------------------------------------------------------
	// href()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function href(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// accessKey()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function accessKey(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// aria()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $type
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function aria(String $type, String $element)
	{
		$this->settings['attr']['aria-'.$type] = $element;
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// charset()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function charset(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// contentEditable()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function contentEditable(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// contextMenu()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function contextMenu(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// coords()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function coords(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// data()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $type
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function data(String $type, String $element)
	{
		$this->settings['attr']['data-'.$type] = $element;
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// dir()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function dir(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// hidden()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function hidden(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// iceRepeating()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function iceRepeating(String $element)
	{
		$this->settings['attr']['ice:repeating'] = $element;
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// lang()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function lang(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// media()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function media(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// rel()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function rel(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// rel()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function rev(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// shape()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function shape(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// spellcheck()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function spellcheck(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// spry()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $type
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function spry(String $type, String $element)
	{
		$this->settings['attr']['spry-'.$type] = $element;
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// tabindex()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function tabIndex(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// target()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function target(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// src()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function src(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// source()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function source(String $element)
	{
		$this->settings['attr']['src'] = $element;
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// title()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $vspace
	//
	//--------------------------------------------------------------------------------------------------------
	public function title(String $element)
	{
		$this->settings['attr']['title'] = $element;
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// alt()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function alt(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// dynsrc()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function dynsrc(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// longdesc()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function longdesc(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// loop()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function loop(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// lowsrc()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function lowsrc(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// start()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function start(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// usemap()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function usemap(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// face()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function face(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}

	//--------------------------------------------------------------------------------------------------------
	// color()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function color(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
	
	//--------------------------------------------------------------------------------------------------------
	// pointsize()
	//--------------------------------------------------------------------------------------------------------
	// 
	// @param string $element
	//
	//--------------------------------------------------------------------------------------------------------
	public function pointSize(String $element)
	{
		$this->_element(__FUNCTION__, $element);
		
		return $this;
	}
}