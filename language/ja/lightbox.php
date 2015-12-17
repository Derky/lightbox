<?php
/**
 *
 * Lightbox extension for the phpBB Forum Software package.
 * Translation by momo-i.
 *
 * @copyright (c) 2015 Matt Friedman
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'LIGHTBOX_SETTINGS'				=> 'Lightbox 設定',
	'LIGHTBOX_MAX_WIDTH'			=> '最大画像幅(ピクセル)',
	'LIGHTBOX_MAX_WIDTH_EXPLAIN'	=> 'この幅を超える画像はリサイズされLightboxエフェクトを使用して引き伸ばすことが出来ます。この値を0に設定すると画像のリサイズを無効にします。',
	'LIGHTBOX_GALLERY'				=> 'ギャラリーモードを許可',
	'LIGHTBOX_GALLERY_EXPLAIN'		=> 'Lightboxエフェクトを使用するページの全てのリサイズされた画像の間で簡単なナビゲーションを許可します。',
	'LIGHTBOX_SIGNATURES'			=> '署名画像のリサイズ',
	'LIGHTBOX_SIGNATURES_EXPLAIN'	=> '署名でリサイズされた画像の使用を許可します。',
	'LIGHTBOX_IMG_TITLES'			=> 'Show image file names',
	'LIGHTBOX_IMG_TITLES_EXPLAIN'	=> 'Image names will appear as a caption in the Lightbox effect.',
));
