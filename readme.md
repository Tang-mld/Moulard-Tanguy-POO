Les méthodes magiques : 



Les méthodes magiques commencent par 2 underscores et sont appelées automatiquement en fonction d'un évènement. Il y en a 8 en tout :

- __construct()

- __destrcut

- __set()

- __get()

- __wakeUp()

- __isset()

- __sleep()

- __unset()

  

- Le construct() se trouve dans une class et construit un objet Il est déclaré avec une fonction public et il peut prendre un ou plusieurs paramètres. Il se compose comme suit : 

<?php

public function __construct() {

}

?>

- Le __destruct() se trouve à la fin d'une class et il est déclaré dans une fonction public. Il est appelé implicitement et permet de détruire un objet. Il se compose comme suit :

<?php

public function __destruct() {

}

?>

- Le __set() permet de savoir si il y a un attribut privé ou qui n'existe pas. Il prend 2 valeurs en paramètres, le nom et la valeur. Il est déclaré dans une fonction public. Il se compose comme suit :

<?php

private $roue;

private $carburant;

public function __set($nom, $valeur) {

}

?>

- Le __get() permet de savoir si un attribut existe. Il prend 1 valeur en paramètre, le nom. Il est déclaré dans une fonction public. Il se compose comme suit :

<?php

private $moto;

public function __get($nom) {

}

?>

- Le __isset() renvoie un booléen et elle est appelé quand on utilise la fonction isset. Elle prend 1 valeur en paramètre, le nom. Elle est déclarée dans une fonction public. Elle se compose comme suit :

<?php

private $voiture = [];

public function __isset($nom) {

​	return isset($this->voiture[$nom]);

}

?>