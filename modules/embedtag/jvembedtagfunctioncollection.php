<?php

class JVEmbedTagFunctionCollection
{
    const YOUTUBE_VIDEOID_REGEXP = '@^http://www\.youtube\.com/watch\?v=(?P<videoId>[^&]+)@',
          DAILYMOTION_VIDEOID_REGEXP = '@^http://www\.dailymotion\.com/video/(?P<videoId>[^_]+)_.+@',
          VIMEO_VIDEOID_REGEXP = '@^http://(www\.)?vimeo\.com/(?P<videoId>[^/?]+)@';

    /**
     * Returns embed URL for a Youtube video, from its link
     * @param string $videoUrl Video URL on Youtube website
     */
    public static function getYoutubeEmbedUrl( $videoUrl )
    {
        $embedLink = '';
        $embedINI = eZINI::instance( 'embedtag.ini' );

        preg_match( self::YOUTUBE_VIDEOID_REGEXP, $videoUrl, $matches );
        if ( isset( $matches['videoId'] ) )
        {
            $embedLink = str_replace( '$$$VIDEO$$$', $matches['videoId'], $embedINI->variable( 'YoutubeSettings', 'EmbedLinkPattern' ) );
        }

        return array( 'result' => $embedLink );
    }

    /**
     * Returns embed URL for a DailyMotion video, from its link
     * @param string $videoUrl Video URL on DailyMotion website
     */
    public static function getDailymotionEmbedUrl( $videoUrl )
    {
        $embedLink = '';
        $embedINI = eZINI::instance( 'embedtag.ini' );

        preg_match( self::DAILYMOTION_VIDEOID_REGEXP, $videoUrl, $matches );
        if ( isset( $matches['videoId'] ) )
        {
            $embedLink = str_replace( '$$$VIDEO$$$', $matches['videoId'], $embedINI->variable( 'DailymotionSettings', 'EmbedLinkPattern' ) );
        }

        return array( 'result' => $embedLink );
    }

	/**
     * Returns embed URL for a Vimeo video, from its link
     * @param string $videoUrl Video URL on DailyMotion website
     */
    public static function getVimeoEmbedUrl( $videoUrl )
    {
        $embedLink = '';
        $embedINI = eZINI::instance( 'embedtag.ini' );

        preg_match( self::VIMEO_VIDEOID_REGEXP, $videoUrl, $matches );
        if ( isset( $matches['videoId'] ) )
        {
            $embedLink = str_replace( '$$$VIDEO$$$', $matches['videoId'], $embedINI->variable( 'VimeoSettings', 'EmbedLinkPattern' ) );
        }

        return array( 'result' => $embedLink );
    }
}
?>
