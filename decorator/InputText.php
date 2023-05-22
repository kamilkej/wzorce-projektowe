<?php
class InputText {
    private $name;
private $minLength = null;
private $maxLength = null;
function __construct(string $name, int $maxLen, int $minLen=null) {
$this->name = $name;
$this->minLength = $minLen;
$this->maxLength = $maxLen;
}
public function getName() : string {
return $this->name;
}

public function render() : string {
    $out = '<input type="text"';
    $out.= ' name="'.$this->name.'"';
    ($this->minLength!==null) ? $out.= ' minlength="'.$this->minLength.'"' : null;
    ($this->maxLength!==null) ? $out.= 'maxLength="'.$this->maxLength.'"' : null;
    return $out.' />';
}

}