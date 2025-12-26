Şablon sözdizimi açıklaması
========================


## yük

- Şablonun katıştırılması: `` {template: TEMPLATE_NAME} ``
- katıştırılmış modül: `` {module: MODULE_NAME} ``

## değişkeni

- Çıktı değişkeni: `` {$ article.Name} ``
- Sadece değişkenler çıkarmayın: `` {$ now = time ()} `` `` {$ abc = "my name"} "

# sabit
- referans sabitler: `` {# ZC_BLOG_HOST #} ``

## kontrol bildirimi

- if：
```php
{if $i==1}
    i=1
{elseif $i==2}
    i=2
{else}
    i=else
{/if}```

- for:
```php
{for $i  =  1 ;  $i  <=  10 ;  $i ++}
  <p>Bu ilk{$i}ikincil？</p>
{/for}```

- foreach:
```php
{foreach $articles as $article}
  <p>{$article.Title}</p>
{/foreach}```

## işlevi

- çağrı işlevi: `` {FUNCTION_NAME (FUNCTION_ARGUMENTS)}

## yorumları

`` İşte yorum *} ``

## PHP kodu

```php
{php}
  global $actions;
  print_r($actions);
  echo '12345';
{/php}
```

** Not: zbp şablonu doğrudan <? Php?> Ve <?> Etiketler'i kullanamaz ve yalnızca {php} ile php kodu içerebilir. 
