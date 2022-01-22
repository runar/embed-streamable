//<?php

/* To prevent PHP errors (extending class does not exist) revealing path */
if (!\defined('\IPS\SUITE_UNIQUE_KEY')) {
    exit;
}

class hook76 extends _HOOK_CLASS_
{
    /**
     * Get URL bases (without schema) that we'll allow iframes from
     *
     * @return array
     */
    protected static function allowedIFrameBases()
    {
        $return = parent::allowedIFrameBases();

        return array_merge(
            $return, array(
                'streamable.com/',
            ),
        );
    }

    /**
     * Get OEmbed Services
     *
     * @see <a href="http://www.oembed.com">oEmbed</a>
     *
     * @return array
     */
    protected static function oembedServices()
    {
        $return = parent::oembedServices();

        return array_merge(
            $return, array(
                'streamable.com' => array(
                    'https://api.streamable.com/oembed.json',
                    static::EMBED_VIDEO,
                ),
            ),
        );
    }
}
