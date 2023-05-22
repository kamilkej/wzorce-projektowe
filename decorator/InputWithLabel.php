<?php
class InputWithLabel {

private $input;
private $label;
private $struct;

function __construct(InputText $input, string $label, string $struct='inside'){
$this->input = $input;
$this->label = $label;
$this->struct = $struct;
}
public function setOutside() {
$this->struct = 'outside';
}

public function render() : string {
    $for = ($this->struct=='outside') ? ' for="'.$this->input->getName().'"' : '';
    $out = '<label'.$for.'>';
    $out.= $this->label;
    ($this->struct=='outside') ? $out.= '</label>' : null;
    $out.= $this->input->render();
    ($this->struct=='inside') ? $out.= '</label>' : null;
    return $out;
}

}