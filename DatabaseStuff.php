<?php
require ("Entity.php");

//Contains database related code for the angajat page.
class ObjectModel {

    //Get all angajat numes from the database and return them in an array.
    function GetObjectTypes() {
        require ('Credentials.php');
        //Open connection and Select database.   
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);
        $result = mysql_query("SELECT DISTINCT nume FROM angajati") or die(mysql_error());
        $nume = array();

        //Get data from database.
        while ($row = mysql_fetch_array($result)) {
            array_push($nume, $row[0]);
        }

        //Close connection and return result.
        mysql_close();
        return $nume;
    }

    //Get Entity objects from the database and return them in an array.
    function GetObjectByType($nume) {
        require ('Credentials.php');
        //Open connection and Select database.     
        mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($database);

        $query = "SELECT * FROM angajati WHERE nume LIKE '$nume'";
        $result = mysql_query($query) or die(mysql_error());
        $objectArray = array();

        //Get data from database.
        while ($row = mysql_fetch_array($result)) {
			 $nume = $row[0];
			$prenume = $row[1];
			$cnp = $row[2];
			$telefon = $row[3];
			$nrdep = $row[4];
			$preg =$row[5];
			$vechime = $row[6];
			$angajare = $row[7];
			$functie = $row[8];
         


            //Create angajat objects and store them in an array.
            $angajat = new Entity($nume, $prenume, $cnp, $telefon, $nrdep, $preg, $vechime, $angajare, $functie);
            array_push($objectArray, $angajat);
        }
        //Close connection and return result
        mysql_close();
        return $objectArray;
    }

    function GetObjectById($cnp) {
        require ('Credentials.php');
        //Open connection and Select database.     
        mysql_connect($host, $user, $passwd) or die(mysql_error);
        mysql_select_db($database);

        $query = "SELECT * FROM angajati WHERE cnp = $cnp";
        $result = mysql_query($query) or die(mysql_error());

        //Get data from database.
        while ($row = mysql_fetch_array($result)) {
            $nume = $row[0];
			$prenume = $row[1];
			$cnp = $row[2];
			$telefon = $row[3];
			$nrdep = $row[4];
			$preg =$row[5];
			$vechime = $row[6];
			$angajare = $row[7];
			$functie = $row[8];


            //Create angajat objects and store them in an array.
            $angajat = new Entity($nume, $prenume, $cnp, $telefon, $nrdep, $preg, $vechime, $angajare, $functie);
        }
        //Close connection and return result
        mysql_close();
        return $angajat;
    }

    function InsertObject(Entity $angajat) {
        $query = sprintf("INSERT INTO angajati
                          (nume,prenume,cnp,telefon,nrdep,preg,vechime,angajare,functie)
                          VALUES
                          ('%s','%s','%s','%s','%d','%s','%d','%s','%s')",
                mysql_real_escape_string($angajat->nume),
				mysql_real_escape_string($angajat->prenume),
				mysql_real_escape_string($angajat->cnp),
				mysql_real_escape_string($angajat->telefon),
				mysql_real_escape_string($angajat->nrdep),
				mysql_real_escape_string($angajat->preg),
				mysql_real_escape_string($angajat->vechime),
				mysql_real_escape_string($angajat->angajare),
				mysql_real_escape_string($angajat->functie));
				

        $this->PerformQuery($query);
    }

    function UpdateObject($cnp, Entity $angajat) {
        $query = sprintf("UPDATE angajati
                            SET nume = '%s',prenume = '%s',cnp = '%s',telefon = '%s',nrdep = '%d',preg = '%s',vechime = '%d',angajare = '%s',functie = '%s'
                          WHERE cnp = $cnp",
			    mysql_real_escape_string($angajat->nume),
				mysql_real_escape_string($angajat->prenume),
				mysql_real_escape_string($angajat->cnp),
				mysql_real_escape_string($angajat->telefon),
				mysql_real_escape_string($angajat->nrdep),
				mysql_real_escape_string($angajat->preg),
				mysql_real_escape_string($angajat->vechime),
				mysql_real_escape_string($angajat->angajare),
				mysql_real_escape_string($angajat->functie));
                          
        $this->PerformQuery($query);
    }

    function DeleteObject($cnp) {
        $query = "DELETE FROM angajati WHERE cnp = $cnp";
        $this->PerformQuery($query);
    }

    function PerformQuery($query) {
        require ('Credentials.php');
        mysql_connect($host, $user, $passwd) or die(mysql_error());
        mysql_select_db($database);

        //Execute query and close connection
        mysql_query($query) or die(mysql_error());
        mysql_close();
    }
}
?>