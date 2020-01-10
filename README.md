


# Şikayet Oluşturma Modülü

Bu modül web site kullanıcılarının şikayetlerini iletebilecekleri bir modüldür.


# Kurulum

Modül kurulumu için portal klasöründe bulunan composer.json'da 
 
 		
       "minimum-stability": "dev", //Minimum stabilityi dev olarak güncelliyoruz
       
       ........
        
 		{
        //repostories kısmına bu kodu ekliyoruz
            "type": "vcs",
            "url": "https://github.com/2019-BLM317/portal-170202063-code.git"
        }

	   ........


     {         
     	//require kısmına bu kodu ekliyoruz
        
          "kouosl/portal-projemodulu": "dev-master"
   	 
     }
     
---------
composer.jsondaki işlemlerden sonra Back-end için portal\backend\config altında bulunan main.php dosyasına aşağıdaki kodu ekliyoruz.
	
    'projemodulu' => [
            'class' => 'kouosl\projemodulu\Module',
        ],
        
Daha sonra Front-End için ise portal\frontend\config altında bulunan main.php dosyasına aşağıdaki kodu ekliyoruz.
	
    'projemodulu' => [
            'class' => 'kouosl\projemodulu\Module',
        ],
---------
Bu işlemlerden sonra vagrant-portal klasörü içinde vagrant-up yapılarak vagrant çalıştırılmalı.(vagrant kurulumu için https://github.com/kouosl/vagrant-portal adresini kullanabilirsiniz.)

Vagrant çalıştırıldıktan sonra vagrant ssh ile sanal makinaya bağlanıp 
cd/var/www/portal komutu çalıştırılıp composer update edilmeli.Daha sonra migration işlemleri için 

php yii migrate --migrationPath=@vendor/kouosl/portal-projemodulu/migrations

komutu yazılarak migration işlemi gerçekleştirilmeli.Bu işlemlerin ardından modül kurulumunu tamamlamış oluyoruz.

# Modülün Yapısı ve Kullanımı
Modül, front-end kısmında kullanıcıya bir şikayet formu alanı sunmaktadır.


![](https://i.imgyukle.com/2020/01/10/VijBFN.jpg)


Kullanıcı bu form alanında
istenilen bilgileri ve şikayetleri oluşturup gönderdikten sonra setFlash fonksiyonu ekrana "Şikayetiniz alındı" yazısı basarak gönderinin başarılı bir şekilde veritabanına kaydını onaylamış olacaktır.


![](https://i.imgyukle.com/2020/01/10/VijeFM.jpg)


Front-End kısmında geçmiş kullanıcı şikayetlerine ait kayıtlar kullanıcılara gösterilmiştir.


![](https://i.imgyukle.com/2020/01/10/ViXoas.jpg)


Back-End tarafında ise kullanıcılara ait şikayet kayıtları tutulmaktadır.Bu tutulan şikayet kayıtları için update,delete,view işlemleri admin tarafından gerçekleştirilebilir.

![](https://i.imgyukle.com/2020/01/10/ViXI1v.jpg)


# Modül Bağlantısı:

http://portal.kouosl/projemodulu

http://portal.kouosl/admin/projemodulu
