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
    <tr>
        <td> Расположение на карте </td>
        <td>
            <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
             <script type="text/javascript">
            
            ymaps.ready(init);
            var myMap, 
                myPlacemark;

            function init () {
                var myMap = new ymaps.Map("map", {
                        center: [55.75, 37.62],
                        zoom: 7
                    });

                // Сделаем запрос на геокодирование, а затем спозиционируем карту, чтобы
                // все объекты попадали в видимую область карты и коэффициент масштабирования был
                // максимально возможным.
                var result = ymaps.geoQuery(ymaps.geocode(<?='"'.$row->city_name.' , '.$row->address.'"';  ?>)).applyBoundsToMap(myMap, {checkZoomRange: true});
                // Откластеризуем полученные объекты и добавим кластеризатор на карту.
                // Обратите внимание, что кластеризатор будет создан сразу, а объекты добавлены в него
                // только после того, как будет получен ответ от сервера.
                myMap.geoObjects.add(result.clusterize());
            }
            </script>
            <div id="map" style="width: 600px; height: 400px"></div>
        </td>
    </tr>
</table>

<!--a href="<?=  JUri::current()?>"><<< вернуться к списку аптек <<< </a-->

<a href="<?=JRoute::_('index.php?view=drugstories&contractor_id='.$row->contractor_id); ?>"><<< вернуться к списку аптек <<< </a>




