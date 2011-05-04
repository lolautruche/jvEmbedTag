{if $videoWidth|is_integer|not}{set $videoWidth = ezini( 'YoutubeSettings', 'DefaultWidth', 'embedtag.ini' )}{/if}
{if $videoHeight|is_integer|not}{set $videoHeight = ezini( 'YoutubeSettings', 'DefaultHeight', 'embedtag.ini' )}{/if}
{def $embedUrl = fetch( 'embedtag', 'youtube_embed_url', hash( 'video_url', $video ) )}
<div class="jvembed jvembed-youtube">
    <iframe width="{$videoWidth}" height="{$videoHeight}" src={$embedUrl|ezurl} frameborder="0" allowfullscreen></iframe>
</div>