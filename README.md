# Hotmail Email Verification Tool

## English

This project is a PHP script designed to verify email and password combinations from a large TXT file. The script reads the email credentials from the file, sends a verification request to a Node.js server, and saves the successfully verified credentials to a new file.

### Features

- Reads email and password combinations from a large TXT file.
- Verifies each email using a Node.js server.
- Saves successfully verified credentials to a separate TXT file.
- Handles large files efficiently by processing the data line by line.


### Installation

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/byk1lla/Hotmail-Checker.git
   cd Hotmail-Checker
   ```
   ## Install Node.js Dependencies:

    Navigate to the directory containing app.js and install the required dependencies:
   ```bash
    npm install
   ```

   ## Start the Node.js Server:
   ```bash
     node app.js
   ```

### Requirements

- PHP 7.4 or higher
- Node.js
- cURL extension for PHP

### Usage

1. Place your email and password combinations in a `emails.txt` file, formatted as `email:password`.
2. Run the PHP script to start the verification process.
3. The script will save successfully verified credentials to a `successful_verifications.txt` file.
4. The script outputs the number of successful verifications and the path to the output file.

---

## Türkçe

Bu proje, büyük bir TXT dosyasından e-posta ve şifre kombinasyonlarını doğrulamak için tasarlanmış bir PHP betiğidir. Betik, dosyadan e-posta bilgilerini okur, Node.js sunucusuna doğrulama isteği gönderir ve başarılı doğrulanan bilgileri yeni bir dosyaya kaydeder.

### Özellikler

- Büyük bir TXT dosyasından e-posta ve şifre kombinasyonlarını okur.
- Her e-postayı bir Node.js sunucusu kullanarak doğrular.
- Başarıyla doğrulanan bilgileri ayrı bir TXT dosyasına kaydeder.
- Verileri satır satır işleyerek büyük dosyaları verimli bir şekilde yönetir.




### Gereksinimler

- PHP 8 veya üstü
- Node.js
- PHP için cURL eklentisi

### Kullanım

1. E-posta ve şifre kombinasyonlarınızı `email:password` formatında `emails.txt` dosyasına yerleştirin.
2. Doğrulama sürecini başlatmak için PHP betiğini çalıştırın.
3. Betik, başarıyla doğrulanan bilgileri `successful_verifications.txt` dosyasına kaydedecektir.
4. Betik, başarılı doğrulama sayısını ve çıktı dosyasının yolunu gösterecektir.
