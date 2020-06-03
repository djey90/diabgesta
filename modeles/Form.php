<?php
class Form
{
    private $datas = [];
    public function __construct($datas = [])
    {
        $this->datas = $datas;
    }

    private function getValue($nom)
    {
        $value = "";
        if (isset($this->datas['nom'])) {
            $value = $this->datas[$nom];
        }
    }

    private function input($type, $nom, $label)
    {

        $value = $this->getValue($nom);
        if ($type == 'textarea') {
            $input = "<textarea require  name=\"$nom\" class=\"form-control\" id=\"input$nom\"$value</textarea>";
        } else {
            $input = "<input type=\"$type\" name=\"$nom\" class=\"form-control\" id=\"input$nom\" placeholder=\"Votre mail\" required  value=\"$value\">";
        }


        return "<div class=\"form-group\">
    <label for=\"input$nom\" class=\"intitu\">$label <span class=\"asthCont\">*</span></label>
    $input;
</div>";
    }

    public function text($nom, $label)
    {
        return $this->input('text', $nom, $label);
    }
    public function mail($nom, $label)
    {
        return $this->input('mail', $nom, $label);
    }
    public function objet($nom, $label)
    {
        return $this->input('objet', $nom, $label);
    }

    public function textarea($nom, $label)
    {

        return $this->input('textarea', $nom, $label);
    }
}
