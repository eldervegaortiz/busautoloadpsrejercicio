<?php
namespace View;

class ConsultaBus
{
    public function consultar()
    {
        echo '
        <form method="post">
            <label>Ingrese la placa:</label><br>
            <input type="text" name="placa" style="width: 120px;" required><br><br>

            <label>Seleccione el tipo de bus:</label><br>
            <input type="radio" name="tipo" value="pequeno" required> Pequeño
            <input type="radio" name="tipo" value="mediano"> Mediano
            <input type="radio" name="tipo" value="grande"> Grande<br><br>

            <strong>Parada 1</strong><br>
            Suben: <input type="number" name="suben1" min="0" style="width: 70px;"><br><br>

            <strong>Parada 2</strong><br>
            Bajan: <input type="number" name="bajan2" min="0" style="width: 70px;"> 
            Suben: <input type="number" name="suben2" min="0" style="width: 70px;"><br><br>

            <strong>Parada 3</strong><br>
            Bajan: <input type="number" name="bajan3" min="0" style="width: 70px;"> 
            Suben: <input type="number" name="suben3" min="0" style="width: 70px;"><br><br>

            <strong>Parada 4</strong><br>
            Bajan: <input type="number" name="bajan4" min="0" style="width: 70px;"> 
            Suben: <input type="number" name="suben4" min="0" style="width: 70px;"><br><br>

            <input type="submit" name="procesar" value="validar inf..">
        </form>
        <hr>';
    }
}