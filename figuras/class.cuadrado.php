<?php
class cuadrado extends figura implements formulas {

    private $lado1;
    private $tipo;


    public function __construct($lado1, $tipo)
    {
        $this->lado1 = $lado1;
        $this->tipo = $tipo;
    }


    public function GetArea()
    {
        return $this->lado1^2;
    }

    public function GetPerimetro()
    {
        return $this->lado1*4;
    }

    public function GetTipo()
    {
        return $this->tipo;
    }

    public function area()
    {
        echo "El área del" . $this->GetTipo() . "es: " . $this->GetArea();
    }

    public function perimetro()
    {
        echo "El perímetro del" . $this->GetTipo() . "es: " . $this->GetPerimetro();
    }
}
