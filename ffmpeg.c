/*
   ffmpeg-php - a php module for accessing audio/video info from movie files.

   Copyright (C) 2004,2005 Todd Kirby (ffmpeg.php@gmail.com)

   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with this program; if not, write to the Free Software
   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 */

#ifdef HAVE_CONFIG_H
#include "config.h"
#endif

#include <avcodec.h>
#include <avformat.h>

#include "php.h"
#include "php_ini.h"
#include "php_globals.h"
#include "ext/standard/info.h"

#include "php_ffmpeg.h"

#define FFMPEG_PHP_VERSION "0.4.4.0"

zend_module_entry ffmpeg_module_entry = {
#if ZEND_MODULE_API_NO >= 20010901
    STANDARD_MODULE_HEADER,
#endif
    "ffmpeg",
    NULL,
    PHP_MINIT(ffmpeg),
    PHP_MSHUTDOWN(ffmpeg),
    NULL,
    NULL,
    PHP_MINFO(ffmpeg),
#if ZEND_MODULE_API_NO >= 20010901
    FFMPEG_PHP_VERSION, 
#endif
    STANDARD_MODULE_PROPERTIES
};


#ifdef COMPILE_DL_FFMPEG
ZEND_GET_MODULE(ffmpeg);
#endif

extern void register_ffmpeg_movie_class(int);
extern void register_ffmpeg_animated_gif_class(int);
extern void register_ffmpeg_frame_class(int);

PHP_INI_BEGIN()
    PHP_INI_ENTRY("ffmpeg.allow_persistent", "0", PHP_INI_ALL, NULL)
PHP_INI_END()


/* {{{ php module init function
 */
PHP_MINIT_FUNCTION(ffmpeg)
{
    /* must be called before using avcodec libraries. */ 
    avcodec_init();

    /* register all codecs */
    av_register_all();

    REGISTER_INI_ENTRIES();
    
    register_ffmpeg_movie_class(module_number);
    register_ffmpeg_animated_gif_class(module_number);
    register_ffmpeg_frame_class(module_number);

    REGISTER_STRING_CONSTANT("FFMPEG_VERSION_NUMBER", 
		    FFMPEG_PHP_VERSION, CONST_CS | CONST_PERSISTENT);
    REGISTER_LONG_CONSTANT("LIBAVCODEC_VERSION_NUMBER", 
		    avcodec_version(), CONST_CS | CONST_PERSISTENT);
    REGISTER_LONG_CONSTANT("LIBAVCODEC_BUILD_NUMBER", 
		    avcodec_build(), CONST_CS | CONST_PERSISTENT);
    return SUCCESS;
}
/* }}} */


/* {{{ php module shutdown function
 */
PHP_MSHUTDOWN_FUNCTION(ffmpeg)
{
    av_free_static();

    // TODO: Free any remaining persistent movies here?
    
    UNREGISTER_INI_ENTRIES();

    return SUCCESS;
}
/* }}} */


/* {{{ php info function
   Add an entry for ffmpeg support in phpinfo() */
PHP_MINFO_FUNCTION(ffmpeg)
{
    php_info_print_table_start();
    php_info_print_table_header(2, "ffmpeg support (ffmpeg-php)", "enabled");
    php_info_print_table_row(2, "ffmpeg-php version", FFMPEG_PHP_VERSION);
    php_info_print_table_row(2, "libavcodec version", LIBAVCODEC_IDENT);
    php_info_print_table_row(2, "libavformat version", LIBAVFORMAT_IDENT);
    php_info_print_table_end();

    DISPLAY_INI_ENTRIES();
}
/* }}} */


/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * End:
 * vim600: noet sw=4 ts=4
 * vim<600: noet sw=4 ts=4
 */
