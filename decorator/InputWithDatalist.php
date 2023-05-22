<?php
class InputWithDatalist {


private $input;
private $id;
private $dataset;

function __construct($input, string $id, array $dataset) {

$this->input = $input;
$this->id = $id;
$this->dataset = $dataset;

}

private function setListAttrib($out) {
$list = ' list="'.$this->id.'"';
return str_replace(' name=',$list.' name=',$out);
}

public function render() : string {
    $out = $this->input->render();
    $out = $this->setListAttrib($out);
    $opt = '<datalist id='.$this->id.'">';
    foreach($this->dataset as $entry){
        $opt.= '<option>'.$entry.'</option>';
    }
    $opt.= '</datalist>';
    $out.= $opt;
    return $out;
}
}