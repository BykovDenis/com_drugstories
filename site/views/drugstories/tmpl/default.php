<?php 
defined('_JEXEC') or die("Restricted access"); 

?>

<form action="index.php" method="post"  name="adminForm" id="adminForm">
    <h3 style="text-align: center">Аптеки в Курской области</h3>
    <table class="adminlist">
        <thead>
            <tr>
                <th width="20">
                    <input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->items); ?>);" />
                </th>
                <th width="200">Название аптеки</th>
                <th width="200">Населенный пункт</th>
                <th width="450">Адрес аптеки</th>
                <th width="450">Телефоны</th>
            </tr>
        </thead>
        <?php
        $k = 0;        
        for($i=0, $n = count($this->items); $i<$n; $i++):        
            $row = $this->items[$i];                        
        ?>
        <tr class="<?php echo "row$k"; ?>">
            <td><?php echo JHtml::_('grid.id', $i, $row->store_id); ?>
            </td>    
            <td>
                <!-- статический URL -->
                <!--a href="<?= JUri::current();?>?option=com_drugstories&layout=drugstore&store_id=<?= $row->store_id; ?>"> <?php echo $row->store_name; ?></a-->                
                <!-- URL c ЧПУ -->
                <a href="<?=JRoute::_('index.php?layout=drugstore&id='.$row->store_id); ?>"> <?php echo $row->store_name; ?></a>
            </td>            
            <td>
                <?php echo $row->city_name; ?></a>
            </td>            
            <td>
                <?php echo $row->address; ?></a>
            </td>          
            <td>
                <?php echo $row->phones; ?></a>
            </td>     
        </tr>
        <?php $k = 1-$k; 
        endfor;
        ?>
    </table>
    <?php echo $this->pagination->getListFooter(); ?>
    <a href="<?= JUri::current() ?>?option=com_contractor"><<< Вернуться к перечню аптек <<< </a>
    
    <input type="hidden" name="option" value="com_drugstories" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecker" value="0" />
    
    <?php echo JHtml::_('form.token'); ?>    
    
</form>

