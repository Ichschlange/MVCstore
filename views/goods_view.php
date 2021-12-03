<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <section>
    <div class="product_list">
    <?php
	foreach($data as $row)
	{
        print "<div class='product'>";
        print "<form id='form1' name='form1' method='post' action='http://localhost/goods/index'>";
        print "<span>Модель ".$row[1]."</span><br>";
        print "<span>Номер ".$row[2]."</span><br>";
        print "<span>Цена ".$row[3]."</span><br>";
        print "<input type='hidden' name='product_id' value='".$row[0]."'>";
        print "<input type='hidden' name='cost' value='".$row[3]."'>";
        print "<input type='submit' name='Submit' value='В корзину'>";
        print "</form>";
        print "</div>";	
    }
    ?>
    </div>
    <div class="sortFilter">
        <form action="http://localhost/goods/index" method="post">
        <div class="sort">
            <span>Сортировать по</span>
            <select name="sortSelect">
                <option value="name">Модель</option>
                <option value="number">Номер</option>
                <option value="cost">Цена</option>
            </select>
            <input type="checkbox" name="sortCheck">
        </div>
        <div class="filter">
            <span>Фильтровать по</span>
            <select name="filterSelect">
                <option value="name">Модель</option>
                <option value="number">Номер</option>
                <option value="cost">Цена</option>
            </select>
            <span>Ключевое слово</span>
            <input type="text" name="filterCheck">
        </div>
        <input type="submit" value="Применить">
        </form>
    </div>
    </section>
</body>