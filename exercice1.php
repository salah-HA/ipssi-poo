<?php

require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;
use Ipssi\Evaluation\Exception\ExceptionOutOfLimit;
use Ipssi\Evaluation\Exception\ExceptionVide;
use Ipssi\Evaluation\Exception\ExceptionDivisionPar0;
use Ipssi\Evaluation\Exception\ExceptionNoNumeric;



class Diviseur {
    public function division(int $index, int $diviseur)
    {
        try{
            $valeurs = [17, 12, 15, 38, 29, 157, 89, -22, 0, 5];
            if ($diviseur === 0){
                throw new ExceptionDivisionPar0('toz');
            }
            if ($index <0 || $index > sizeof($valeurs)){
                throw new ExceptionOutOfLimit();
            }
        }
        catch (ExceptionDivisionPar0 $e){
            echo 'toz';
        }
        catch (ExceptionOutOfLimit $e){
            echo 'en dehors du champs d action';
        }
        return $valeurs[$index] / $diviseur;
    }
    public function getLength(){
        $valeurs = [17, 12, 15, 38, 29, 157, 89, -22, 0, 5];
        return sizeof($valeurs);
    }
}


$repeat = false;
while ($repeat === false){
    try{
        $input = $climate->input("Entrez l’indice de l’entier à diviser : ");
        $index = $input->prompt();
        $input = $climate->input("Entrez le diviseur : ");
        $diviseur = $input->prompt();

        if ($index < 0 || $index > 9){
            throw new ExceptionOutOfLimit("La valeur doit être compris entre 0 et 9" . PHP_EOL . "");
        }/*
        if ($diviseur = 0){
            throw new ExceptionDivisionPar0("Impossible de diviser par 0" . PHP_EOL . "");
        }
        /*if (empty($index) || empty($diviseur)){
            throw new ExceptionVide("Valeur non Saisi");
        }*/
        if (!is_numeric($index) || !is_numeric($diviseur)){
            throw new ExceptionNoNumeric("Valeur Saisi Incorrect");
        }

    }
    catch (ExceptionOutOfLimit $e){
        echo 'La valeur est en dehors du champs d action'. PHP_EOL . '' .$e->getMessage() ;
        $repeat === false;
    }/*
    catch (ExceptionDivisionPar0 $e){
        echo 'La valeur est en dehors du champs d action'. PHP_EOL . '' .$e->getMessage() ;
    }
    /*catch (ExceptionVide $e){
        echo 'La valeur est en dehors du champs d action 1'. PHP_EOL . '' .$e->getMessage() ;
    }*/
    catch (ExceptionNoNumeric $e){
        echo 'La valeur est en dehors du champs d action'. PHP_EOL . '' .$e->getMessage() ;
        $repeat === false;
    }
    $climate->output("Le résultat de la division est : " . (new Diviseur())->division($index, $diviseur));
}

