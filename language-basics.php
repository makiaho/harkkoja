<?php
/////////////////////////////////
/////// language-basics.php
////////////////////////////////////

echo "Exercises week 1 / ex. 2";
echo "<BR>";



/*****************
Read http://php.net/functions
Create function that gets two integers parameters, $a and $b. Function return 1 if $a is greater than $b, 0 if they are equal and -1 if $b > $a
Read usort from the php manual.
****************/


echo "sorting <BR> ";

function mysort($a,$b) 
{

if($a>$b)
{
return 1;
} else
{
	if ($a==$b)
	{
		return 0;
	}
	else
	{
		return -1;
	}
}

}

function myPersonSort(Person $a ,Person $b ) 
{

if($a->age > $b->age)
{
return 1;
} else
{
	if ($a->age == $b->age)
	{
		return 0;
	}
	else
	{
		return -1;
	}
}

}







/*****************
Create string from a to z with a help from array function range
http://php.net/manual/en/function.range.php
****************/

echo "Tehtävä 1 Create string  <BR>";
$str1='';
foreach (range('a', 'z') as $letter) {
    echo $letter;
    $str1.=$letter;
}
echo "<BR>";
echo "str1 = $str1 <BR>";
//tai
$str2 = join('', range('a', 'z'));
 
echo "<BR>";
echo "str2 = $str2 <BR>";



/*****************
Create an array with random values between 1 to 100
sort the array. Print sorted array
****************/
echo "Tehtävä 2 Create an array <BR>";


 

$taulukko[]= Array(); 
for ($i=0;$i<100;$i++)
{

$taulukko[$i] = rand(0,100);

echo $i. " ";
echo "$taulukko[$i] <BR>";

}

echo "Järjestetään: <BR>";
//sort ($taulukko);
usort($taulukko,"mysort");
for ($i=0;$i<100;$i++)
{

echo $i. " ";
echo "$taulukko[$i] <BR>";

}











/*****************
Read http://php.net/manual/en/language.oop5.php
Create Person class that has public member age.
Crate array of persons, lets say 10 of those. Print the age of all the persons.
****************/

//class ...

class Person
{
    // property declaration
	private $name='oletusnimi';
    public $age = 4;

    // method declaration
    public function displayAge() {
        echo $this->age;
    }
	 public function displayName() {
        echo $this->name;
    }
}


echo ' henkilöitä <BR>';
$henkiloTaulukko = array();
for ($i=0;$i<10;$i++)
{
	$henkiloTaulukko[$i] = new Person();
	$henkiloTaulukko[$i]->age = rand(0,100);
	$henkiloTaulukko[$i]->displayAge();
	echo '<BR>';
	

}

//jörjestetöön
echo ' jörjestetöön <BR>';
usort($henkiloTaulukko, "myPersonSort");

for ($i=0;$i<10;$i++)
{
	$henkiloTaulukko[$i]->displayAge();
	echo '<BR>';	

}




print_r ($henkiloTaulukko);

echo 'kokeilutaulukko <BR>';

print_r ($kokeilutaulukko);

/*****************
usort

From the previous tasks you have now function that sorts integers. Change is so that $a and $b are 
persons and compared intergers are the ages of those persons.
Then use the array of person that you created at the Person class exercise.

Use usort to sort array of persons with the callback function you just created, the one that compares persons.
****************/

//$array_of_persons = ....
// function comparePersons = function($a, $b)...
// usort($array_of_persons, "comparePersons");
//  print person ages, are they sorted?


?>