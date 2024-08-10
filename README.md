
# Hotmail Login Checker

Bu uygulama **Imap** Kullanarak txt/hotmail.txt de bulunan ``` username:password``` Biçimindeki kullanıcı adları ve şifreleri [Rest.php](https://github.com/byk1lla/Hotmail-Checker/blob/main/php/rest.php) Yardımıyla Tek tek deneyerek Doğru olanları bulmanıza yarayan bir REST API Uygulamasıdır.
## API Kullanımı

#### Kullanıcı Girişini Yap
```http
  POST yourhost:3000/verify
```

| Parametre | Tip     | Açıklama                |
| :-------- | :------- | :------------------------- |
| `username` | `string` |  Kullanıcı Adı |
| `password` | `string` |  şifre |

Kullanıcı Adı şifrelerle burdan giriş kontrolü yapabilirsiniz.

## Kurulum 

Instagram Checkeri Yüklemek için aşağıdaki adımları izleyin.

```bash 
  git clone https://github.com/byk1lla/Hotmail-Checker
  cd Hotmail-Checker
```
Eğer Windowstaysanız Projenin Kaynak Dosyalarını [buraya tıklayıp](https://github.com/byk1lla/Hotmail-Checker/archive/refs/heads/main.zip) indirebilirsiniz.

Programın Çalışması için bazı kütüphaneleri kurmanız gerekiyor.

```bash 
  npm install
```


## Kullanım/Örnekler
Rest API ı çalıştırmak için 

```bash
  node app.js
```

Komutunu Çalıştırın.

Eğer **Xampp** Kullanıyorsanız API'ı Kurmak istediğiniz Klasöre atabilirsiniz.

Yok ben shellciyim arkadaş diyorsanız da 

```bash 
  php rest.php
```

Şeklinde Kullanabilirsiniz.

## Gereksinimler
  NODE: **20.X**
  PHP: **8.X**

Not: Unutmayın ki; txtdeki veriler ```username:password``` şeklinde olmalıdır yoksa çalışmaz.

#### Rest.php
**$inputFile** dan gelen verileri işleyerek **/verify**'a  istek gönderiyor.
```php 
  $inputFile  = "TXT/yourtxtfile.txt";
```


## App.js
<div align="center"><img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Flogos-download.com%2Fwp-content%2Fuploads%2F2019%2F01%2FJavaScript_Logo.png&f=1&nofb=1&ipt=1c662e3132fbd96664cbcdc41fe63634f9d05afac8850a19f702138641799a7e&ipo=images" 
  width="20"> <span padding="1px">app.js</span> </div>
 
> [!CAUTION]
> APP Js Programın Yapı Taşıdır ve eğer herhangi bir __sorun__ olursa program çalışmayacaktır. 

Burada Login işlemleri gerçekleşir.

> [!IMPORTANT]
> Sadece **POST** İstekleri Kabul Edilir.


| Parametre | Tip     | Açıklama                |
| :-------- | :------- | :------------------------- |
| `success` | `boolean` |  Eğer Giriş Başarılıysa true eğer değilse false değerini döndürür. |
| `error` | `boolean` |  Eğer Giriş Başarısızsa true değerini döndürür.  |
| `message` | `string` | Sunucudan gelen mesajları döndürür |

## Link

[twitter](https://twitter.com/byk1lla_)

## Licences
[MIT](https://choosealicense.com/licenses/mit/)
[APACHE 2.0](https://choosealicense.com/licenses/apache-2.0/)
