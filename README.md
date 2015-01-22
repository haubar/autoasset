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
  
  在要使用的blade樣版中使加入
  
   ｀{{ Asset::style('') }}｀
   ｀{{ Asset::script('') }}｀
  
  會自動加入網址對應檔案的CSS 及 javascript 
  
  example:
  ```
    `http://laravel.local/register`
    `<link media="all" type="text/css" rel="stylesheet" href="http://laravel.local/register.css">`
  ```
  > config 可另外加入path參數
  
