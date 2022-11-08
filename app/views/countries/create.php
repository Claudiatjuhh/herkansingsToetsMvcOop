<?= $data['title'];?>

<form action="<?= URLROOT; ?>/countries/create" method="post">
    <table>
        <thead>
            <th><label for="">CountryName: </label></th>
            <th><label for="">CapitalCity: </label></th>
            <th><label for="">Continent: </label></th>
            <th><label for="">Population: </label></th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="text" name="CountryName" id="CountryName">
                </td>
                <td>
                    <input type="text" name="CapitalCity" id="CapitalCity">
                </td>
                <td>                   
                    <select name="Continent">
                        <option value="Europa">Europa</option>
                        <option value="Zuid-Amerika"?>>Zuid-Amerika</option>
                        <option value="Noord-amerika">Noord-amerika</option>
                        <option value="Azië">Azië</option>
                        <option value="Oceanië">Oceanië</option>
                        <option value="Antartica">Antartica</option>
                        <option value="Afrika">Afrika</option>
                    </select>
                </td>
                <td>
                    <input type="text" name="Population" id="Population">
                </td>
                <td>
                    <input type="hidden" name="Id">
                </td>
                <td>
                    <input type="submit" value="Maak Aan">
                </td>
            </tr>   
        </tbody>
    </table>
</form>