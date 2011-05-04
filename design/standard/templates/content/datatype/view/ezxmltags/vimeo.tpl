{if $videoWidth|is_integer|not}{set $videoWidth = ezini( 'VimeoSettings', 'DefaultWidth', 'embedtag.ini' )}{/if}
{if $videoHeight|is_integer|not}{set $videoHeight = ezini( 'VimeoSettings', 'DefaultHeight', 'embedtag.ini' )}{/if}
{def $embedUrl = fetch( 'embedtag', 'vimeo_embed_url', hash( 'video_url', $video ) )}
<div class="jvembed jvembed-vimeo">
    <iframe src={concat( $embedUrl, '?byline=0&amp;portrait=0' )|ezurl} width="{$videoWidth}" height="{$videoHeight}" frameborder="0"></iframe>
</div>