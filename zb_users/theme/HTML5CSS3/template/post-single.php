<article id="log{$article.ID}" class="top cate{$article.Category.ID} auth{$article.Author.ID}">
  <header>
    <time>{$article.Time('Ymd H:i:s')}</time>
    <h2>{$article.Title}</h2>
  </header>
  <section>{$article.Content}</section>
  <footer>
{if $article.Tags}
    <h4>etiket: {foreach $article.Tags as $tag}<a href="{$tag.Url}">{$tag.Name}</a>{/foreach}</h4>
{/if}
    <h5><em>Yazar:{$article.Author.StaticName}</em> <em>Kategori:{$article.Category.Name}</em> <em>Görüntülenme:{$article.ViewNums}</em> <em>Yorumlar:{$article.CommNums}</em></h5>
  </footer>
  <nav>
{if $article.Prev}
<a class="l" href="{$article.Prev.Url}" title="{$article.Prev.Title}">«Önceki</a>
{/if}
{if $article.Next}
<a class="r" href="{$article.Next.Url}" title="{$article.Next.Title}">Sonraki »</a>
{/if}
  </nav>
</article>

{if !$article.IsLock}
{template:comments}
{/if}
