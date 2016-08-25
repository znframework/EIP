<?php namespace ZN\Components;

class InternalTable extends \CallController implements TableInterface
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
    // Attr
    //--------------------------------------------------------------------------------------------------------
    // 
    // @var array
    //
    //--------------------------------------------------------------------------------------------------------
    protected $attr = [];
    
    //--------------------------------------------------------------------------------------------------------
    // Table
    //--------------------------------------------------------------------------------------------------------
    // 
    // @var string
    //
    //--------------------------------------------------------------------------------------------------------
    protected $table;
    
    //--------------------------------------------------------------------------------------------------------
    // Designer Methods Başlangıç
    //--------------------------------------------------------------------------------------------------------

    //--------------------------------------------------------------------------------------------------------
    // Attr
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param array $attributes
    //
    //--------------------------------------------------------------------------------------------------------
    public function attr(Array $attributes) : InternalTable
    {
        foreach( $attributes as $att => $val )
        {
            $this->attr[$att] = $val; 
        }

        return $this;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Align
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param string $align
    //
    //--------------------------------------------------------------------------------------------------------
    public function align(String $align) : InternalTable
    {
        $this->attr['align'] = $align;
        
        return $this;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Content
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param variadic $elements
    //
    //--------------------------------------------------------------------------------------------------------
    public function content(...$elements) : InternalTable
    {   
        $colNo = 1;
        $rowNo = 1;
        $table = '';
        $eol   = EOL;
        
        if( isset($elements[0][0]) && is_array($elements[0][0]))
        {
            $elements = $elements[0];   
        }
        
        foreach($elements as $key => $element)
        {
            $table .= $eol."\t".'<tr>'.$eol;
            
            if(is_array($element))foreach($element as $k => $v)
            {
                $val = $v;
                $attr = "";
                
                if(is_array($v))
                {
                    $attr = \Html::attributes($v);
                    $val = $k;
                }
                
                if( strpos($val, 'th:') === 0 )
                {
                    $rowType = 'th';
                    $val = substr($val, 3);
                }
                else
                {
                    $rowType = 'td';
                }
                
                $table .= "\t\t".'<'.$rowType.$attr.'>'.$val.'</'.$rowType.'>'.$eol;    
                $colNo++;
            }
        
            $table .= "\t".'</tr>'.$eol;
            $rowNo++;
        }
        
        $this->table = $table;
        
        return $this;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Cell
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param numeric $spacing
    // @param numeric $padding
    //
    //--------------------------------------------------------------------------------------------------------
    public function cell(Int $spacing, Int $padding) : InternalTable
    {
        $this->attr['cellspacing'] = $spacing;
        $this->attr['cellpadding'] = $padding;
        
        return $this;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Cell Spacing
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param numeric $spacing
    //
    //--------------------------------------------------------------------------------------------------------
    public function cellSpacing(Int $spacing) : InternalTable
    {
        $this->attr['cellspacing'] = $spacing;
        
        return $this;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Cell Padding
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param numeric $padding
    //
    //--------------------------------------------------------------------------------------------------------
    public function cellPadding(Int $padding) : InternalTable
    {
        $this->attr['cellpadding'] = $padding;
        
        return $this;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Border
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param numeric $border
    // @param string  $color
    //
    //--------------------------------------------------------------------------------------------------------
    public function border(Int $border, String $color = NULL) : InternalTable
    {
        $this->attr['border'] = $border;

        if( ! empty($color) )
        {
            $this->attr['bordercolor'] = $color;
        }

        return $this;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Border Size
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param numeric $border
    //
    //--------------------------------------------------------------------------------------------------------
    public function borderSize(Int $border) : InternalTable
    {
        $this->attr['border'] = $border;
    
        return $this;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Border Color
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param string $color
    //
    //--------------------------------------------------------------------------------------------------------
    public function borderColor(String $color) : InternalTable
    {
        $this->attr['bordercolor'] = $color;
    
        return $this;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Width
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param numeric $width
    //
    //--------------------------------------------------------------------------------------------------------
    public function width(Int $width) : InternalTable
    {
        $this->attr['width'] = $width;
        
        return $this;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Height
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param numeric $height
    //
    //--------------------------------------------------------------------------------------------------------
    public function height(Int $height) : InternalTable
    {
        $this->attr['height'] = $height;
        
        return $this;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Size
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param numeric $width
    // @param numeric $height
    //
    //--------------------------------------------------------------------------------------------------------
    public function size(Int $width, Int $height) : InternalTable
    {
        $this->attr['width']  = $width;
        $this->attr['height'] = $height;
        
        return $this;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Css
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param string $css
    //
    //--------------------------------------------------------------------------------------------------------
    public function css(String $css) : InternalTable
    {
        $this->attr['class'] = $css;
        
        return $this;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Style
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param array $attributes
    //
    //--------------------------------------------------------------------------------------------------------
    public function style(Array $attributes) : InternalTable
    {
        $attribute = '';
    
        foreach( $attributes as $key => $values )
        {
            if( is_numeric($key) )
            {
                $key = $values;
            }
            
            $attribute .= ' '.$key.':'.$values.';';
        }
        
        $this->attr['style'] = $attribute;
        
        return $this;   
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Background
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param mixed $background
    //
    //--------------------------------------------------------------------------------------------------------
    public function background(String $background) : InternalTable
    {
        $this->attr['background'] = $background;
        
        return $this;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Bg Color
    //--------------------------------------------------------------------------------------------------------
    // 
    // @param string $bgColor
    //
    //--------------------------------------------------------------------------------------------------------
    public function bgColor(String $bgColor) : InternalTable
    {
        $this->attr['bgcolor'] = $bgColor;
        
        return $this;
    }
    
    //--------------------------------------------------------------------------------------------------------
    // Designer Methods Bitiş
    //--------------------------------------------------------------------------------------------------------
    
    //--------------------------------------------------------------------------------------------------------
    // Create Method Başlangıç
    //--------------------------------------------------------------------------------------------------------

    public function create() : String
    {
        $table  = '<table'.\Html::attributes($this->attr).'>';
        $table .= $this->table;
        $table .= '</table>';
        
        if( ! empty($this->table)) $this->table = NULL;
        if( ! empty($this->attr))  $this->attr = [];
        
        return $table;
    }   
    
    //--------------------------------------------------------------------------------------------------------
    // Create Method Bitiş
    //--------------------------------------------------------------------------------------------------------
}