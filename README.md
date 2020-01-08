# Şikayet Oluşturma modülü
Bu modül web site kullanıcılarının şikayetlerini iletebilecekleri bir araç oluşturmaktadır.

# Modül Kurulumu
Bu projede modül kurulumu için portal Gii kullanıldı.Portal Gii, Yii2 yapısına uygun modül üretilmesine olanak sağladı.Modül kurulumuna ait işlemler

https://medium.com/kouosl/gii-kullanarak-mod%C3%BCl-olu%C5%9Fturma-a60dca546182

bu adreste detaylı olarak anlatılmıştır.Bu adreste gerçekleştirdiğimiz adımlardan sonra \vendor\kouosl\ dizini altında modülümüz oluşmuş oldu.Bu işlemlerin ardından generator işlemleri için yine portal Gii kullanılarak bu generatorlar projemize dahil edildi.

# Modülün Yapısı ve Kullanımı
Modül, front-end kısmında kullanıcıya bir şikayet formu alanı sunmaktadır.Kullanıcı bu form alanında istenilen bilgileri ve şikayetleri oluşturup gönderdikten sonra setFlash fonksiyonu ekrana "Şikayetiniz alındı" yazısı basarak gönderinin başarılı bir şekilde veritabanına kaydını onaylamış olacaktır.Front-End kısmında geçmiş kullanıcı şikayetlerine ait kayıtlar kullanıcılara gösterilmiştir.Back-End tarafında ise kullanıcılara ait şikayet kayıtları tutulmaktadır.Bu tutulan şikayet kayıtları için UPTADE,DELETE,VİEW işlemleri gerçekleştirilebilir.

# Proje için kullanılan kaynaklar
***https://medium.com/kouosl/gii-kullanarak-mod%C3%BCl-olu%C5%9Fturma-a60dca546182

***https://medium.com/kouosl/migration-902bf68b2461
***https://github.com/kouosl/vagrant-portal
***https://www.yiiframework.com/doc/guide/2.0/en
 
