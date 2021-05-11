<?php
    // 1.Programa que lea un valor de precio base y calcule su impuesto, 
    // si es valor es mayor de 150.000 se le aplicará un 19% de 
    // impuestos, en caso contrario se le aplicará un 16%.
    function impuesto(
            int $base, 
            string $mensaje = "Su impuesto es de : $"
    ):string{
        return (string) <<<APLICAR
                $mensaje ${!${''} = 
                        ($base > 150000) 
                        ? (double) $base + ($base * 0.19)
                        : (double) $base + ($base * 0.16)
                    }
        APLICAR;
    }
    echo impuesto(
        base: (int) 800,
        // mensaje: (string) "El calculo del impuesto es: $"
    );

?>