<meta charset="UTF-8">
<?php
switch ($_GET['funct']) {
        case 'Корінь':
                print sqrt($_GET['numb']);
                break;
        case '^2':
                print pow($_GET['numb'],2) ;
                break;
}

