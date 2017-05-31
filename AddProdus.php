<?php
require 'Controller.php';
$Controller = new Controller();

$title = "Adauga un angajat nou: ";

if(isset($_GET["update"]))
{
    $angajat = $Controller->GetObjectById($_GET["update"]);
    
    $content ="<form action='' method='post'>
    <fieldset>
        <legend>Adauga un angajat nou</legend>
        <label for='name'>Nume:         </label>
        <input type='text' class='inputField' name='txtNume' value='$angajat->nume'  /><br/>

        <label for='prenume'>Prenume:   </label>
        <input type='text' class='inputField' name='txtPren' value='$angajat->prenume'/><br/>
		
		<label for='cnp'>CNP: </label>
        <input type='text' class='inputField' name='txtCnp' value='$angajat->cnp'/><br/>
		
		<label for='telefon'>Telefon: </label>
        <input type='text' class='inputField' name='txtTel' value='$angajat->telefon'/><br/>
		
		<label for='nrdep'>Numar Departament : </label>
        <input type='text' class='inputField' name='txtNrDep' value='$angajat->nrdep'/><br/>
		
		<label for='preg'>Pregatire profesionala: </label>
        <input type='text' class='inputField' name='txtPreg' value='$angajat->preg'/><br/>
		
		<label for='vechime'>Vechime in munca: </label>
        <input type='text' class='inputField' name='txtVechime' value='$angajat->vechime'/><br/>
		
		<label for='angajare'>Mod angajare: </label>
        <input type='text' class='inputField' name='txtAngajare' value='$angajat->angajare'/><br/>
		
		<label for='functie'>Functie: </label>
        <input type='text' class='inputField' name='txtFunctie' value='$angajat->functie'/><br/>
        <input type='submit' value='Submit'>
    </fieldset>
</form>";
}
 else 
{
    $content ="<form action='' method='post'>
    <fieldset>
         <legend>Adauga un angajat nou</legend>
        <label for='name'>Nume: </label>
        <input type='text' class='inputField' name='txtNume'/><br/>

        <label for='prenume'>Prenume: </label>
        <input type='text' class='inputField' name='txtPren'/><br/>
		
		<label for='cnp'>CNP: </label>
        <input type='text' class='inputField' name='txtCnp'/><br/>
		
		<label for='telefon'>Telefon: </label>
        <input type='text' class='inputField' name='txtTel'/><br/>
		
		<label for='nrdep'>Numar Departament : </label>
        <input type='text' class='inputField' name='txtNrDep'/><br/>
		
		<label for='preg'>Pregatire profesionala: </label>
        <input type='text' class='inputField' name='txtPreg'/><br/>
		
		<label for='vechime'>Vechime in munca: </label>
        <input type='text' class='inputField' name='txtVechime'/><br/>
		
		<label for='angajare'>Mod angajare: </label>
        <input type='text' class='inputField' name='txtAngajare'/><br/>
		
		<label for='functie'>Functie: </label>
        <input type='text' class='inputField' name='txtFunctie'/><br/>
        <input type='submit' value='Submit'>
    </fieldset>
</form>";
}


if(isset($_GET["update"]))
{
    if(isset($_POST["txtNume"]))
    {
        $Controller->UpdateObject($_GET["update"]);
    }
}
else
{
    if(isset($_POST["txtNume"]))
    {
        $Controller->InsertObject();
    }
}

include './Template.php';
?>


