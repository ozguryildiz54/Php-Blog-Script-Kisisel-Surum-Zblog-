## kodlama belirtimi

### Dosya biçimi

UTF-8, BOM başlığı yok

### Kod stili

Genel olarak [PSR-2 spesifikasyonu] (http://www.php-fig.org/psr/psr-2/) ([Çince sürüm] (https://github.com/PizzaLiu/PHP-FIG/blob/) master / PSR-2-coding-style-guide-cn.md)), ancak aşağıdaki ek kurallarla:

1. Her satır sınırsız karakter içerebilir.
1. Kod, PHP 5.2'nin çalıştırabileceği sözdizimine (örneğin, `` `` `` `` `` `` `` `` `` `` `` `` `` gibi yazılmalıdır.
1. ** noktalı virgül bitmeden birden çok noktalı virgülü yasaklar.
1. Operatörün yanında bir boşluk olmalıdır.

### adlandırma belirtimi

İşlev adı
    1. [big-hump-style nomoclature] (https://www.wikipedia.org/wiki/%E9%A7%9D%E5%B3%B0%E5%BC%8F%E5%A4%A7%E5% kullanın. B0% 8F% E5% AF% AB).
2. Sınıf
    1. Sınıfın özellikleri içinde, veritabanına çağrı yaparsanız, lütfen alana karşılık gelen nitelik adının ve veritabanının bulunduğundan emin olun. Mesela: `` `` mem_ID \ `` `` `` `Member.ID``.
    2. Sınıfın isminin ilk harfi.
3. küresel değişkenler
    1. Tümü küçük harfleri birleştirin.
4. Sabit
    1. Tümü büyük harfle yazılmış, alt çizgi ile ayrılmıştır ("_").
