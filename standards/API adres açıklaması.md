API adres açıklaması
=================

### ön büro
- [x] Sınıflandırmayı alın (kimliği olan): GET / category /? id = 1
- [x] sınıflandırma al (adıyla): GET / category /? name = xx
- [x] Kategoriyi yarat: POST / category / create /
- [x] Sınıflandırma bilgisini güncelleme: POST / category / update /? id = 1
- [x] Kategoriyi sil: POST / category / delete /? id = 1
- [x] Makale al: GET / article /? id = 1
- [x] Bir makale oluşturma: POST / makale / oluşturma /
- [x] Güncelleme makalesi: POST / article / update /? id = 1
- [x] Makaleyi sil: POST / article / delete /? id = 1
- [] GET / articles /? Page = 1 & limit = 30 & category = 1 makalesiyle sınıflandırıldı
- [] Yorumu listesini alın: GET / comments /? Page = 1 & limit = 30 & article = 1
- [x] Tek bir açıklama alın: GET / comment /? id = 1
- [] Yorumu oluştur: POST / yorum / oluşturma /
- [] Güncelleme yorumu: POST / comment / update /? Id = 1
- [] yorum sil: POST / yorum / sil /? Id = 1
- [] Alt Yorum Al: GET / comments /? Parent = 1
- [] Etiket listesini alın: GET / tags /? Page = 1 & limit = 30
- [x] Etiket Al: GET / tag /? id = 1
- [x] Etiket Oluştur: POST / tag / create /
- [x] Güncelleme Etiketi: POST / tag / update /? id = 1
- [x] Etiketi Sil: POST / tag / delete /? id = 1
- [] Kullanıcı listesini alın: GET / members /? Page = 1 & limit = 30 & category = 1
- [x] Kullanıcıyı al: GET / member /? id = 1
- [x] Kullanıcı oluştur: POST / member / create /
- [x] Kullanıcıyı güncelle: POST / member / update /? id = 1
- [x] Kullanıcıyı sil: POST / member / delete /? id = 1
- [] arama: GET / arama / Anahtar

### arka plan
- [x] Web sitesi bilgilerini alın: GET /
- [] Site yapılandırmasını güncelleme: POST / setting / update /
- [x] Uygulamayı etkinleştir: POST / app / enable / id /
- [x] uygulamayı devre dışı bırak: POST / app / disable / id /
- [] ayarlamak için: POST / app / modify / id /
- [] Uygulama sil: POST / app / delete / id
- [x] Modülü al: GET / module /? id = 1
- [x] Oluşturma modülü: POST / module / create
- [x] Güncelleme modülü: POST / module / update /? id = 1
- [x] Modülü sil: POST / module / delete /? id = 1
- [] modül listesini alın: GET / modules /? Page = 1 & limit = 30
- [x] Eki alın: GET / upload /? id = 1
- [] ekleri yükle: POST / upload / create
- [] Ekleri sil: POST / upload / delete /? Id = 1
- [] eklerin listesini alın: GET / attachments /? Page = 1 & limit = 30
