<script>
//Display a confirmation box when trying to delete an object
function showConfirm(id)
{
    // build the confirmation box
    var c = confirm("Are you sure you wish to delete this item?");
    
    // if true, delete item and refresh
    if(c)
        window.location = "ObjectOverview.php?delete=" + id;
}
</script>

<?php
require ("DatabaseStuff.php");

//Contains non-database related function for the object page
class Controller {

    function CreateOverviewTable() {
        $result = "
            <table class='overViewTable'>
                <tr>
                    <td></td>
                    <td></td>
                    <td><b>nume</b></td>
					<td><b>prenume</b></td>
					<td><b>cnp</b></td>
					<td><b>telefon</b></td>
					<td><b>nrdep</b></td>
					<td><b>preg</b></td>
					<td><b>vechime</b></td>
					<td><b>angajare</b></td>
                    <td><b>functie</b></td>
                </tr>";

        $objectArray = $this->GetObjectByType('%');

        foreach ($objectArray as $key => $value) {
            $result = $result .
                    "<tr>
                        <td><a href='AddProdus.php?update=$value->nume'>Update</a></td>
                        <td><a href='#' onclick='showConfirm($value->nume)'>Delete</a></td>
                        <td><b>$value->nume</b></td>
					<td><b>$value->prenume</b></td>
					<td><b>$value->cnp</b></td>
					<td><b>$value->telefon</b></td>
					<td><b>$value->nrdep</b></td>
					<td><b>$value->preg</b></td>
					<td><b>$value->vechime</b></td>
					<td><b>$value->angajare</b></td>
                    <td><b>$value->functie</b></td>
                </tr>";
        }

        $result = $result . "</table>";
        return $result;
    }

    function CreateObjectDropdownList() {
        $objectModel = new ObjectModel();
        $result = "<form action = '' method = 'post' width = '200px'>
                    Please select a type: 
                    <select name = 'nume' >
                        <option value = '%' >All</option>
                        " . $this->CreateOptionValues($this->GetObjectTypes()) .
                "</select>
                     <input type = 'submit' value = 'Search' />
                    </form>";

        return $result;
    }

    function CreateOptionValues(array $valueArray) {
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . "<option value='$value'>$value</option>";
        }

        return $result;
    }

    function CreateObjectTables($nume) {
        $objectModel = new ObjectModel();
        $objectArray = $objectModel->GetObjectByType($nume);
        $result = "";

        //Generate a objectTable for each Entity in array
        foreach ($objectArray as $key => $angajat) {
            $result = $result .
                    "<table class = 'objectTable'>
                        <tr>
                            <th>nume: </th>
                            <td>$angajat->nume $ </td>
                        </tr>
						<tr>
                            <th>prenume: </th>
                            <td>$angajat->prenume $ </td>
                        </tr>
						<tr>
                            <th>cnp: </th>
                            <td>$angajat->cnp $ </td>
                        </tr>
						<tr>
                            <th>telefon: </th>
                            <td>$angajat->telefon $ </td>
                        </tr>
						<tr>
                            <th>nrdep: </th>
                            <td>$angajat->nrdep $ </td>
                        </tr>
						<tr>
                            <th>preg: </th>
                            <td>$angajat->preg $ </td>
                        </tr>
						<tr>
                            <th>vechime: </th>
                            <td>$angajat->vechime $ </td>
                        </tr>
						<tr>
                            <th>angajare: </th>
                            <td>$angajat->angajare $ </td>
                        </tr>
                        
                        <tr>
                            <th>functie: </th>
                            <td>$angajat->functie</td>
                        </tr>
                     </table>";
        }
        return $result;
    }

    //<editor-fold desc="Set Methods">
    function InsertObject() {
        $nume = $_POST["txtNume"];
        $prenume = $_POST["txtPren"];
        $cnp = $_POST["txtCnp"];
        $telefon = $_POST["txtTel"];
		$nrdep = $_POST["txtNrDep"];
		$preg = $_POST["txtPreg"];
		$vechime = $_POST["txtVechime"];
		$angajare = $_POST["txtAngajare"];
		$functie = $_POST["txtFunctie"];

        $angajat = new Entity($nume,$prenume,$cnp,$telefon,$nrdep,$preg,$vechime,$angajare,$functie);
        $objectModel = new ObjectModel();
        $objectModel->InsertObject($angajat);
    }

    function UpdateObject($name) {
        $nume = $_POST["txtNume"];
        $prenume = $_POST["txtPren"];
        $cnp = $_POST["txtCnp"];
        $telefon = $_POST["txtTel"];
		$nrdep = $_POST["txtNrDep"];
		$preg = $_POST["txtPreg"];
		$vechime = $_POST["txtVechime"];
		$angajare = $_POST["txtAngajare"];
		$functie = $_POST["txtFunctie"];

        $angajat = new Entity($nume,$prenume,$cnp,$telefon,$nrdep,$preg,$vechime,$angajare,$functie);
        $objectModel = new ObjectModel();
        $objectModel->InsertObject($name,$angajat);
    }

    function DeleteObject($nume) 
    {
        $objectModel = new ObjectModel();
        $objectModel->DeleteObject($nume);
    }

    //</editor-fold>
    //<editor-fold desc="Get Methods">
    function GetObjectById($nume) {
        $objectModel = new ObjectModel();
        return $objectModel->GetObjectById($nume);
    }

    function GetObjectByType($type) {
        $objectModel = new ObjectModel();
        return $objectModel->GetObjectByType($type);
    }

    function GetObjectTypes() {
        $objectModel = new ObjectModel();
        return $objectModel->GetObjectTypes();
    }

    //</editor-fold>
}
?>
