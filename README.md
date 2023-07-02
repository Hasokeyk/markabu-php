# Kurulum

### Gereksinimler
1- Bilgisayarınızda veya sunucunuzda "composer" kurulu olması. Kurulu değilse "https://getcomposer.org/download/" bu linkten yardım alabilirsiniz.
2- Bilgisayarınızda veya sunucunuzda Php 7.4 veya daha üstü yüklü olması gerekmekte.

### Kurulum komutu
Aşağıdaki komutu çalışma dizininizde açtığınız bir terminale yazarsanız kütüphaneyi kullanmaya başlayabilirsiniz

```shell
composer require hasokeyk/markabul
```

# Kullanım

### Markabul bağlantısı
Aşağıdaki örnek kod ile markabul bağlantınızı yapabilirsiniz

```php
<?php

    use Hasokeyk\Markabul\Markabul;

    require (__DIR__)."/vendor/autoload.php";

    $supplierId = 'XXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabul = new Markabul($supplierId, $username, $password);
```

# Markabul Marketplace İşlemleri

### Markaları çekmek
Markabul'a kayıtlı olan tüm markaların listesini bu kodlar ile çekebilirsiniz.

```php
<?php

    use Hasokeyk\Markabul\Markabul;

    require (__DIR__)."/vendor/autoload.php";

    $supplierId = 'XXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabul = new Markabul($supplierId, $username, $password);

    $markabul_marketplace_brands = $markabul->marketplace->MarkabulMarketplaceBrands();

    $brands = $markabul_marketplace_brands->get_brands();
    print_r($brands);
```

### Marka Arama
Markabul'a kendi markanızı veya başka markaları aratabilirsiniz.

```php
<?php

    use Hasokeyk\Markabul\Markabul;

    require (__DIR__)."/vendor/autoload.php";

    $supplierId = 'XXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabul = new Markabul($supplierId, $username, $password);

    $markabul_marketplace_brands = $markabul->marketplace->MarkabulMarketplaceBrands();

    $brands = $markabul_marketplace_brands->search_brand('Herkes Alıyo');
    print_r($brands);
```

### Kategorileri Çekmek
Markabuldaki tüm kategorileri ve komisyonlarını çekebilirsiniz.

```php
<?php

    use Hasokeyk\Markabul\Markabul;

    require (__DIR__)."/vendor/autoload.php";

    $supplierId = 'XXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabul = new Markabul($supplierId, $username, $password);

    $markabul_marketplace_categories = $markabul->marketplace->MarkabulMarketplaceCategories();

    $categories = $markabul_marketplace_categories->get_categories();
    print_r($categories);
```

### Tekli Kategori Bilgisi Çekmek
Markabuldaki belirlediğiniz kategorilerin bilgilerini ve komisyonunu çekebilirsiniz.

```php
<?php

    use Hasokeyk\Markabul\Markabul;

    require (__DIR__)."/vendor/autoload.php";

    $supplierId = 'XXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabul = new Markabul($supplierId, $username, $password);

    $markabul_marketplace_categories = $markabul->marketplace->MarkabulMarketplaceCategories();

    $categories = $markabul_marketplace_categories->get_category_info(2610);
    print_r($categories);
```
### Siparişleri Çekmek
Markabuldaki mağazanıza ait tüm siparişleri çekebilirsiniz.

```php
<?php

    use Hasokeyk\Markabul\Markabul;

    require (__DIR__)."/vendor/autoload.php";

    $supplierId = 'XXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabul = new Markabul($supplierId, $username, $password);

    $markabul_marketplace_order = $markabul->marketplace->MarkabulMarketplaceOrders();

    $filter = [
        'status' => 'Created',//Created, Picking, Invoiced, Shipped ,Cancelled, Delivered, UnDelivered, Returned, Repack, UnPacked, UnSupplied
    ];
    $orders = $markabul_marketplace_order->get_my_orders($filter);
    print_r($orders);
```

### Ürünleri Çekmek
Markabuldaki mağazanıza ait tüm ürünleri çekebilirsiniz.

```php
<?php

    use Hasokeyk\Markabul\Markabul;

    require (__DIR__)."/vendor/autoload.php";

    $supplierId = 'XXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabul = new Markabul($supplierId, $username, $password);

    $markabul_marketplace_products = $markabul->marketplace->MarkabulMarketplaceProducts();

    $filter    = [
        'approved' => 'true',
    ];
    $products = $markabul_marketplace_products->get_my_products($filter);
    print_r($products);
```

## Diğer tüm özellikler için aşağıdaki linki kullanabilirsiniz.

https://github.com/Hasokeyk/markabul-php/tree/main/examples/Marketplace