<?php


include 'classfile.php';

if (isset($_POST['first']) . isset($_POST['second'])) {
    $triangle = new classfile;
    $triangle-> triangledge ($_POST['first'], $_POST['second']) ;
    
} else if (isset($_POST['binvalue'])) {
    $binarycount = new classfile;
    $binarycount->bincount($_POST['binvalue']) ;
 
} else if (isset($_POST['pt1']) . isset($_POST['pt2'])) {
    $partpaths = new classfile;
    $partpaths->jparts($_POST['pt1'],$_POST['pt2']) ;

} else if (isset($_POST['sastrynumber'])) {
    $sastrynum = new classfile;
    $sastrynum->sasnum($_POST['sastrynumber']) ;

}