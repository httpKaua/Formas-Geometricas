<?php
    class Forma {
        var $a;
        var $tipo;
        var $area;

        function __construct($a,$tipo) 
        {
            $this->a = $a;
            $this->tipo = $tipo;
        }
    }
    class Circulo extends Forma {
        var $d;
        var $r;

        function __construct($a,$tipo,$d)
        {
            parent::__construct($a,$tipo);
            $this->d = $d;
        }

        function calcularArea() {
            $this->r = $this->d / 2;
            $this->area = pi() * ($this->r * $this->r);
        }
    }
    class Retangulo extends Forma {
        var $b;
        var $h;

        function __construct($a,$tipo,$b,$h)
        {
            parent::__construct($a,$tipo);
            $this->b = $b;
            $this->h = $h;
        }

        function calcularArea() {
            $this->area = $this->b * $this->h;
        }
    }
    class Trapezio extends Forma {
        var $B;
        var $b;
        var $h;

        function __construct($a, $tipo,$B, $b, $h)
        {
            parent::__construct($a,$tipo);
            $this->B = $B;
            $this->b = $b;
            $this->h = $h;
        }

        function calcularArea() 
        {
            $this->area = ((($this->B + $this->b) * $this->h) / 2);
        }
    }
?>