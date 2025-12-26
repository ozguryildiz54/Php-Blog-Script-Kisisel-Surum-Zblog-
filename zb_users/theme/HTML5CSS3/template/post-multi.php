<article id="log{$article.ID}" class="top cate{$article.Category.ID} auth{$article.Author.ID}">
  <header>
    <time>{$article.Time('Ymd')}</time>
    <h2><a href="{$article.Url}">{$article.Title}</a></h2>
  </header>
  <section>{$article.Intro}</section>
  <footer>
{if $article.Tags}
    <h4>etiket: {foreach $article.Tags as $tag}<a href="{$tag.Url}">{$tag.Name}</a>{/foreach}</h4>
{/if}
    <h5><em>Yazar:{$article.Author.StaticName}</em> <em>Kategori:{$article.Category.Name}</em> <em>Görüntülenme:{$article.ViewNums}</em> <em>Yorumlar:{$article.CommNums}</em></h5>
  </footer>
</article>
