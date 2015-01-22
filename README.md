#Auto Asset for laravel  

  加入    
    ` "repositories": [
        {
            "type": "git",
            "url": "https://github.com/haubar/autoasset.git"
        }
    ], ` 
    
  在｀composer.json｀下指令
  
  `composer require kerkerker/autoasset` 
  
  在 `app/config/app.php` 裡的 Providers 裡加入
  
  `'Kerkerker\Autoasset\AssetServiceProvider'`
  
  在 `app/config/app.php` 裡的 aliases 裡加入
  
  ` 'Asset'  => 'Kerkerker\Autoasset\Asset' `
  
