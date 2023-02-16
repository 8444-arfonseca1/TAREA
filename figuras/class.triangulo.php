<?php
class triangulo extends figura implements formulas{

    private $lado1;
    private $lado2;
    private $lado3;
    private $tipo;


    public function __construct($lado1, $lado2, $lado3, $tipo)
    {
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
        $this->tipo = $tipo;
    }


    public function GetArea()
    {
        $s = ($this->lado1 + $this->lado2 + $this->lado3) / 2;
        //retornar el area del triangulo conociendo sus 3 lados
        return sqrt($s * ($s - $this->lado1) * ($s - $this->lado2) * ($s - $this->lado3));
    }

    public function GetPerimetro()
    {
        //retornar el perimetro del triangulo conociendo sus 3 lados
        return $this->lado1 + $this->lado2 + $this->lado3;
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
