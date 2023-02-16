<?php
class rectangulo extends figura implements formulas{

    private $lado1;
    private $lado2;
    private $tipo;


    public function __construct($lado1, $lado2, $tipo)
    {
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->tipo = $tipo;
    }


    public function GetArea()
    {
        return $this->lado1 * $this->lado2;
    }

    public function GetPerimetro()
    {
        return ($this->lado1 * 2) + ($this->lado2 * 2);
    }

    public function GetTipo()
    {
        return $this->tipo;
    }

    public function area()
    {
        echo "El área del" . $this->GetTipo() . " es: " . $this->GetArea();
    }

    public function perimetro()
    {
        echo "El perímetro del" . $this->GetTipo() . "es: " . $this->GetPerimetro();
    }
}
