{if $videoWidth|is_integer|not}{set $videoWidth = ezini( 'DailymotionSettings', 'DefaultWidth', 'embedtag.ini' )}{/if}
{if $videoHeight|is_integer|not}{set $videoHeight = ezini( 'DailymotionSettings', 'DefaultHeight', 'embedtag.ini' )}{/if}
{def $embedUrl = fetch( 'embedtag', 'dailymotion_embed_url', hash( 'video_url', $video ) )}
<div class="jvembed jvembed-dailymotion">
    <iframe frameborder="0" width="{$videoWidth}" height="{$videoHeight}" src={concat( $embedUrl, '?width=', $videoWidth, '&amp;wmode=transparent' )|ezurl}></iframe>
</div>