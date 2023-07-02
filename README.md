# Kurulum

### Gereksinimler
1- Bilgisayarınızda veya sunucunuzda "composer" kurulu olması. Kurulu değilse "https://getcomposer.org/download/" bu linkten yardım alabilirsiniz.
2- Bilgisayarınızda veya sunucunuzda Php 7.4 veya daha üstü yüklü olması gerekmekte.

### Kurulum komutu
Aşağıdaki komutu çalışma dizininizde açtığınız bir terminale yazarsanız kütüphaneyi kullanmaya başlayabilirsiniz

```shell
composer require hasokeyk/markabu
```

# Kullanım

### Markabu bağlantısı
Aşağıdaki örnek kod ile markabu bağlantınızı yapabilirsiniz

```php
<?php

    use Hasokeyk\Markabu\Markabu;

    require (__DIR__)."/vendor/autoload.php";

    $supplierId = 'XXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabu($supplierId, $username, $password);
```

# Markabu Marketplace İşlemleri

### Markaları çekmek
Markabu'a kayıtlı olan tüm markaların listesini bu kodlar ile çekebilirsiniz.

```php
<?php

    use Hasokeyk\Markabu\Markabu;

    require (__DIR__)."/vendor/autoload.php";

    $supplierId = 'XXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabu($supplierId, $username, $password);

    $markabu_marketplace_brands = $markabu->marketplace->MarkabuMarketplaceBrands();

    $brands = $markabu_marketplace_brands->get_brands();
    print_r($brands);
```

### Marka Arama
Markabu'a kendi markanızı veya başka markaları aratabilirsiniz.

```php
<?php

    use Hasokeyk\Markabu\Markabu;

    require (__DIR__)."/vendor/autoload.php";

    $supplierId = 'XXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabu($supplierId, $username, $password);

    $markabu_marketplace_brands = $markabu->marketplace->MarkabuMarketplaceBrands();

    $brands = $markabu_marketplace_brands->search_brand('Herkes Alıyo');
    print_r($brands);
```

### Kategorileri Çekmek
Markabudaki tüm kategorileri ve komisyonlarını çekebilirsiniz.

```php
<?php

    use Hasokeyk\Markabu\Markabu;

    require (__DIR__)."/vendor/autoload.php";

    $supplierId = 'XXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabu($supplierId, $username, $password);

    $markabu_marketplace_categories = $markabu->marketplace->MarkabuMarketplaceCategories();

    $categories = $markabu_marketplace_categories->get_categories();
    print_r($categories);
```

### Tekli Kategori Bilgisi Çekmek
Markabudaki belirlediğiniz kategorilerin bilgilerini ve komisyonunu çekebilirsiniz.

```php
<?php

    use Hasokeyk\Markabu\Markabu;

    require (__DIR__)."/vendor/autoload.php";

    $supplierId = 'XXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabu($supplierId, $username, $password);

    $markabu_marketplace_categories = $markabu->marketplace->MarkabuMarketplaceCategories();

    $categories = $markabu_marketplace_categories->get_category_info(2610);
    print_r($categories);
```
### Siparişleri Çekmek
Markabudaki mağazanıza ait tüm siparişleri çekebilirsiniz.

```php
<?php

    use Hasokeyk\Markabu\Markabu;

    require (__DIR__)."/vendor/autoload.php";

    $supplierId = 'XXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabu($supplierId, $username, $password);

    $markabu_marketplace_order = $markabu->marketplace->MarkabuMarketplaceOrders();

    $filter = [
        'status' => 'Created',//Created, Picking, Invoiced, Shipped ,Cancelled, Delivered, UnDelivered, Returned, Repack, UnPacked, UnSupplied
    ];
    $orders = $markabu_marketplace_order->get_my_orders($filter);
    print_r($orders);
```

### Ürünleri Çekmek
Markabudaki mağazanıza ait tüm ürünleri çekebilirsiniz.

```php
<?php

    use Hasokeyk\Markabu\Markabu;

    require (__DIR__)."/vendor/autoload.php";

    $supplierId = 'XXXXX';
    $username   = 'XXXXXXXXXXXXXXXXXXXX';
    $password   = 'XXXXXXXXXXXXXXXXXXXX';

    $markabu = new Markabu($supplierId, $username, $password);

    $markabu_marketplace_products = $markabu->marketplace->MarkabuMarketplaceProducts();

    $filter    = [
        'approved' => 'true',
    ];
    $products = $markabu_marketplace_products->get_my_products($filter);
    print_r($products);
```

## Diğer tüm özellikler için aşağıdaki linki kullanabilirsiniz.

https://github.com/Hasokeyk/markabu-php/tree/main/examples/Marketplace