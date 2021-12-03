<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleCart.css">
    <title>Document</title>
</head>
<body>
    <section>
    <?php
    if($data != null)
    {
        print "<div class='product_list'>";
        foreach($data as $row1)
        {
            foreach($row1 as $row)
            {
                print "<div class='product'>";
                print "<form action='http://localhost/cart/index' method='POST'>";
                print "<span>Модель ".$row[1]."</span><br>";
                print "<span>Номер ".$row[2]."</span><br>";
                print "<span>Цена ".$row[3]."</span><br>";
                if(key($row) == 'id_tariff')
                {
                    print "<input type='hidden' name='tariff_id' value='".$row[0]."'>";
                }
                else
                {
                    print "<input type='hidden' name='product_id' value='".$row[0]."'>";
                }
                print "<input type='submit' name='Delete' value='Delete'>";
                print "</form>";
                print "</div>";	
            }
        } 
        print "</div>";	

        print "<form action='http://localhost/cart/index' method = 'POST'>";
        print "<span>Имя</span><br>";
        print "<input type='text' name = 'first_name'><br>";
        print "<span>Фамилия</span><br>";
        print "<input type='text' name = 'second_name'><br>";
        print "<span>Отчество</span><br>";
        print "<input type='text' name = 'middle_name'><br>";
        print "<span>Адрес</span><br>";
        print "<input type='text' name = 'address'><br>";
        print "<input type='submit' value = 'Оформить'><br>";
        print "</form>";
    } 
    else
    {
        print "<span class = 'emptyCart'>В Вашей корзине еще ничего нет</span>";
    }  
    ?>
    </section>
</body>