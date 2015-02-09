<?php 
defined('_JEXEC') or die("Restricted access"); 

// Выбираем инофрмацию об аптеке из выборки
$row = $this->items[0];

?>

<h3>Информация об аптеке</h3>
<table class="table-bordered, table" width="300">
    <tr>
        <td>
            Код аптеки
        </td>
        <td>
            <?=$row->store_id; ?>
        </td>
    </tr>
    <tr>
        <td>
            Наименование
        </td>
        <td>
            <?=$row->store_name; ?>
        </td>
    </tr>
    <tr>
        <td>
            Наеленный пункт
        </td>
        <td>
            <?=$row->city_name; ?>
        </td>
    </tr>
    <tr>
        <td>
            Адрес
        </td>
        <td>
            <?=$row->address; ?>
        </td>
    </tr>
    <tr>
        <td>
            Телефон
        </td>
            <td>
            <?=$row->phones; ?>
        </td>
    </tr>
</table>

<a href="<?=  JUri::current()?>?option=com_drugstories"><<< вернуться к списку аптек <<< </a>


