{if $socialcomment}
{$socialcomment}
{else}
<!--Yorum çıktısı-->

<dl id="comment">
  <dt>Mesaj listesi</dt>
  <dd>
<label id="AjaxCommentBegin"></label>
{foreach $comments as $key => $comment}
{template:comment}
{/foreach}

<!--Yorumlar çevirme çubuğu çıktı-->
<nav>
{template:pagebar}
</nav>
<label id="AjaxCommentEnd"></label>
  </dd>
</dl>


<!--Yorum kutusu-->
{template:commentpost}

{/if}
