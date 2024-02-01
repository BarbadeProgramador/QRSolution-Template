<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Tabla PDF</title>
    <style>
        h1{
            text-align: center;
        }

        table {
            width: 6.25in; /* Tamaño de la tabla en pulgadas (10 * 2.5) */
            height: 7.464in; /* Tamaño de la tabla en pulgadas (8 * 2.33) */
            border-collapse: collapse;
            
        }

        td {
            width: 0.625in; /* Tamaño de cada celda en pulgadas (2.5 / 4) */
            height: 0.932in; /* Tamaño de cada celda en pulgadas (2.33 / 4) */
            border: 1px solid whitesmoke;
            text-align: center;
            
        }

        img {
            max-width: 100%;
            max-height: 100%;
        }

            /* .blue-border {
            border: 2px solid blue;
            padding: 5px;
            } */
        
    </style>
</head>
<body>
    <h1>{{$textDocument}}</h1>
    <table >
        @for ($i = 0; $i < 8; $i++)
            <tr>
                @for ($j = 0; $j < 10; $j++)
                    <td style="font-size: x-small; width: 80px; height: 100px;">
                        @if ($qrPath)
                        <div style="border: 2px solid lightblue; padding: 5px;">
                        <img src="{{$qrPath}}" alt="imagen" name="imagen"  >
                        </div>
                        <label for="imagen" style="font-size: 8px;"><strong>{{$codigoPrenda}}</strong></label>
                        @endif
                    </td>
                @endfor
            </tr>
        @endfor
    </table>
</body>
</html>
