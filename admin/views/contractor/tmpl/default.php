<?php 
defined('_JEXEC') or die("Restricted access"); 

?>

<form action="index.php" method="post"  name="adminForm">
    <table class="adminlist">
        <thead>
            <tr>
                <th width="20">
                    <input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->items); ?>);" />
                </th>
                <th width="200">Код контрагента</th>
                <th width="200">Наименование</th>                
            </tr>
        </thead>
        <?php
        $k = 0;        
        for($i=0, $n = count($this->items); $i<$n; $i++):        
            $row = $this->items[$i];                        
        ?>
        <tr class="<?php echo "row$k"; ?>">
            <td><?php echo JHtml::_('grid.id', $i, $row->contractor_id); ?>
            </td>    
            <td>
                <?php echo $row->contractor_id; ?>
            </td>
            <td> 
                <a href="<?= JUri::current(); ?>?option=com_drugstories&contractor_id=<?=$row->contractor_id;?>"><?php echo $row->name; ?></a>
            </td>                        
        </tr>
        <?php $k = 1-$k; 
        endfor;
        ?>
    </table>
    
    <?php echo $this->pagination->getListFooter(); ?>
    
    <input type="hidden" name="option" value="com_contractor" />
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecker" value="0" />
    
      
    <?php echo JHtml::_('form.token'); ?>    
</form>