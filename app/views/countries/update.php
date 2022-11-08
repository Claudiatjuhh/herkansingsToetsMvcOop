<?php 

?>

<form action="<?= URLROOT; ?>/countries/update" method="post">
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
                    <input type="text" name="CountryName" id="CountryName" value="<?=$data["row"]->CountryName?>">
                </td>
                <td>
                    <input type="text" name="CapitalCity" id="CapitalCity" value="<?=$data["row"]->CapitalCity?>">
                </td>
                <td>                   
                    <select name="Continent">
                        <option value="Europa" <?php if($data['row']->continent == 'Europa'){echo 'Selected';}?> >Europa</option>
                        <option value="Zuid-Amerika"<?php if($data['row']->continent == 'Zuid-Amerika'){echo 'Selected';}?>>Zuid-Amerika</option>
                        <option value="Noord-amerika"<?php if($data['row']->continent == 'Noord-amerika'){echo 'Selected';}?>>Noord-amerika</option>
                        <option value="Azië" <?php if($data['row']->continent == 'Azië'){echo 'Selected';}?> >Azië</option>
                        <option value="Oceanië" <?php if($data['row']->continent == 'Oceanië'){echo 'Selected';}?> >Oceanië</option>
                        <option value="Antartica" <?php if($data['row']->continent == 'Antartica'){echo 'Selected';}?> >Antartica</option>
                        <option value="Afrika" <?php if($data['row']->continent == 'Afrika '){echo 'Selected';}?> >Afrika</option>
                    </select>
                </td>
                <td>
                    <input type="text" name="Population" id="Population" value="<?=$data["row"]->Population?>">
                </td>
                <td>
                    <input type="hidden" name="Id" value="<?=$data["row"]->Id?>">
                </td>
                <td>
                    <input type="submit" value="Update Gegevens">
                </td>
            </tr>   
        </tbody>
    </table>
</form>