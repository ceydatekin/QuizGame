# QuizGame'e Hoşgeldiniz!

**QuizGame** uzaktan eğitimin artması sebebiyle öğrenciler için oluşturulmuş sınav platformudur. Hale çoğu özelliği gelişim aşamasında olup geri dönütlerle iyileştirilecektir.
* Demosunu görmek için [Tıklayınız](http://quizgame.eu5.org/index.php).

## Projeyi Çalıştırma
Proje ön kurulum gerektirmektedir. Proje dosyalarını yerel bilgisayarınızda çalıştırmak için **XAMPP** veya **WAMP** gibi bir uygulamaya ihtiyaç vardır. Proje dosyalarına erişmek ve bunları yerel bilgisayarınızda çalıştırmak için bu adımları takip edebilirsiniz.
- Deponun sağ üst kısmında bulunan yeşil renkli butona tıkladıktan sonra **"Download ZIP"** sekmesine tıklayabilirsiniz.
- Dosyayı çıkarın ve _sinav_sistemi_ klasörünü kopyalayın.
- Kök dizine yapıştırın. (**xampp** için: xampp/htdocs,  **wamp** için wamp/www,  **lamp** için var/www/html)
- PHPMyAdmin'i açın. (http://localhost/phpmyadmin)
- Adı **"test"** olan bir veritabanı oluşturun.
- `test.sql` dosyasını içe aktarın. (**Databese File** klasörünün içerisinde verilmektedir.)
- Tarayıcınızın arama bölümüne  `http://localhost/sinav_sistemi/index.php`  yazın ve adrese gidin.
- Örnek giriş yapıp sadece üyelere görüntülenen kısımları görmek için:
-- Kullanıcı Adı: `ogr@gmail.com`
-- Şifre: `123456` üyeliğini kullanabilirsiniz.

##  Kullanılan Teknolojiler

 - [HTML5](https://www.w3schools.com/html/), *Hypertext Markup Language*
 - [CSS3](https://www.w3schools.com/css/), *Cascading Style Sheets*
 - [JavaScript](https://www.javascript.com/),  *Dinamik Programlama Dili*
 - [MySQL](https://www.mysql.com/), *Veri Tabanı Yönetimi*
 - [PHP](https://www.php.net/),  *Hypertext Preprocessor*
 - [Bootstrap 5](https://getbootstrap.com/docs/5.0/getting-started/introduction/), *# CSS Framework*

## Sayfalar ve İşlevler
### Ana sayfa/Giriş Yap & Kayıt Ol Sayfası
Kullanıcıların girişini sağlayan bir ara yüzdür. Veri tabanından çektiği veriler ile girilen bilgilerin kontrolü sağlandıktan sonra erişim verilmektedir. Öğrenci ekleme kısmıda ana sayfada mevcuttur. 
>![start](https://user-images.githubusercontent.com/54938901/122468022-dab80f00-cfc3-11eb-9a45-274e96dde066.png)
>![start](https://user-images.githubusercontent.com/54938901/122468042-df7cc300-cfc3-11eb-94a7-6a308c219ada.png)
>![start](https://user-images.githubusercontent.com/54938901/122468015-d8ee4b80-cfc3-11eb-9541-b95ee70c0ac4.png)

### Öğrenci sayfası
Öğrencilerin ilk ana sayfasında aktif sınavlar mevcut olup o sınavlara erişimleri görünmektedir. İlerleyen zamanlarda ise daha güncel sınavlar yüklenip hak ve süre kısıtlaması yapılacaktır.
>![start](https://user-images.githubusercontent.com/54938901/122468035-de4b9600-cfc3-11eb-89db-f0c9d52916ab.png)
### Öğretmen Sayfası
Öğretmenlerin ilk ana sayfasında sınav ve ders ekleyebilme seçenekleri mevcuttur.
>![start](https://user-images.githubusercontent.com/54938901/122468027-dbe93c00-cfc3-11eb-8f53-2894374a87d6.png)
>![start](https://user-images.githubusercontent.com/54938901/122468032-dd1a6900-cfc3-11eb-901b-d8ca23b14bf8.png)
### Sınav Sayfası
Her soru sayfaya sırayla gelmektedir ve yukarıdaki çubuk 100 olduğunda sınavın gönderilmesi gerekmektedir.
>![start](https://user-images.githubusercontent.com/54938901/122468039-dee42c80-cfc3-11eb-9908-4c836fd2d641.png)
### Analiz
Sınav sonrası sonucun ve soru-cevap kıyaslamasının gösterildiği bir sayfadır.
## Oluşturan
`Ceyda Tekin`
*Beni takip etmek isterseniz [LinkedIn](https://www.linkedin.com/in/ceydatekin/) ve [blog](https://www.ceydatekin.com/)   sayfamı ziyaret edebilirsiniz.*
