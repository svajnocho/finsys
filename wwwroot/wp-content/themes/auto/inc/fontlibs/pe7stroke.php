<?php
/* Loads Stroke 7 Icon Font. */

// Enqueue CSS
wp_enqueue_style( 'thememove-font-pe-icon-7-stroke', TM_RENOVATION_URI . '/css/pe-icon-7-stroke.css' );

add_filter( 'vc_iconpicker-type-pe7stroke', 'vc_iconpicker_type_pe7stroke' );

/**
 * Pe7 Stroke icons from themes-pixeden.com/
 *
 * @param $icons - taken from filter - vc_map param field settings['source'] provided icons (default empty array).
 *               If array categorized it will auto-enable category dropdown
 *
 * @since 4.4
 * @return array - of icons for iconpicker, can be categorized, or not.
 */
function vc_iconpicker_type_pe7stroke( $icons ) {
	$pe7stroke_icons = array(
		array( "pe-7s-album" => esc_html__( "album", 'tm-renovation' ) ),
		array( "pe-7s-arc" => esc_html__( "arc", 'tm-renovation' ) ),
		array( "pe-7s-back-2" => esc_html__( "back-2", 'tm-renovation' ) ),
		array( "pe-7s-bandaid" => esc_html__( "bandaid", 'tm-renovation' ) ),
		array( "pe-7s-car" => esc_html__( "car", 'tm-renovation' ) ),
		array( "pe-7s-diamond" => esc_html__( "diamond", 'tm-renovation' ) ),
		array( "pe-7s-door-lock" => esc_html__( "door-lock", 'tm-renovation' ) ),
		array( "pe-7s-eyedropper" => esc_html__( "eyedropper", 'tm-renovation' ) ),
		array( "pe-7s-female" => esc_html__( "female", 'tm-renovation' ) ),
		array( "pe-7s-gym" => esc_html__( "gym", 'tm-renovation' ) ),
		array( "pe-7s-hammer" => esc_html__( "hammer", 'tm-renovation' ) ),
		array( "pe-7s-headphones" => esc_html__( "headphones", 'tm-renovation' ) ),
		array( "pe-7s-helm" => esc_html__( "helm", 'tm-renovation' ) ),
		array( "pe-7s-hourglass" => esc_html__( "hourglass", 'tm-renovation' ) ),
		array( "pe-7s-leaf" => esc_html__( "leaf", 'tm-renovation' ) ),
		array( "pe-7s-magic-wand" => esc_html__( "magic wand", 'tm-renovation' ) ),
		array( "pe-7s-male" => esc_html__( "male", 'tm-renovation' ) ),
		array( "pe-7s-map-2" => esc_html__( "map 2", 'tm-renovation' ) ),
		array( "pe-7s-next-2" => esc_html__( "next 2", 'tm-renovation' ) ),
		array( "pe-7s-paint-bucket" => esc_html__( "paint bucket", 'tm-renovation' ) ),
		array( "pe-7s-pendrive" => esc_html__( "pendrive", 'tm-renovation' ) ),
		array( "pe-7s-photo" => esc_html__( "photo", 'tm-renovation' ) ),
		array( "pe-7s-piggy" => esc_html__( "piggy", 'tm-renovation' ) ),
		array( "pe-7s-plugin" => esc_html__( "plugin", 'tm-renovation' ) ),
		array( "pe-7s-refresh-2" => esc_html__( "refresh 2", 'tm-renovation' ) ),
		array( "pe-7s-rocket" => esc_html__( "rocket", 'tm-renovation' ) ),
		array( "pe-7s-settings" => esc_html__( "settings", 'tm-renovation' ) ),
		array( "pe-7s-shield" => esc_html__( "shield", 'tm-renovation' ) ),
		array( "pe-7s-smile" => esc_html__( "smile", 'tm-renovation' ) ),
		array( "pe-7s-usb" => esc_html__( "usb", 'tm-renovation' ) ),
		array( "pe-7s-vector" => esc_html__( "vector", 'tm-renovation' ) ),
		array( "pe-7s-wine" => esc_html__( "wine", 'tm-renovation' ) ),
		array( "pe-7s-cloud-upload" => esc_html__( "cloud upload", 'tm-renovation' ) ),
		array( "pe-7s-cash" => esc_html__( "cash", 'tm-renovation' ) ),
		array( "pe-7s-close" => esc_html__( "close", 'tm-renovation' ) ),
		array( "pe-7s-bluetooth" => esc_html__( "bluetooth", 'tm-renovation' ) ),
		array( "pe-7s-cloud-download" => esc_html__( "cloud download", 'tm-renovation' ) ),
		array( "pe-7s-way" => esc_html__( "way", 'tm-renovation' ) ),
		array( "pe-7s-close-circle" => esc_html__( "close circle", 'tm-renovation' ) ),
		array( "pe-7s-id" => esc_html__( "id", 'tm-renovation' ) ),
		array( "pe-7s-angle-up" => esc_html__( "angle up", 'tm-renovation' ) ),
		array( "pe-7s-wristwatch" => esc_html__( "wristwatch", 'tm-renovation' ) ),
		array( "pe-7s-angle-up-circle" => esc_html__( "angle-up-circle", 'tm-renovation' ) ),
		array( "pe-7s-world" => esc_html__( "world", 'tm-renovation' ) ),
		array( "pe-7s-angle-right" => esc_html__( "Angle Right", 'tm-renovation' ) ),
		array( "pe-7s-volume" => esc_html__( "volume", 'tm-renovation' ) ),
		array( "pe-7s-angle-right-circle" => esc_html__( "angle right circle right", 'tm-renovation' ) ),
		array( "pe-7s-users" => esc_html__( "Users", 'tm-renovation' ) ),
		array( "pe-7s-angle-left" => esc_html__( "angle left", 'tm-renovation' ) ),
		array( "pe-7s-user-female" => esc_html__( "user female", 'tm-renovation' ) ),
		array( "pe-7s-angle-left-circle" => esc_html__( "angle left circle", 'tm-renovation' ) ),
		array( "pe-7s-up-arrow" => esc_html__( "Sound", 'tm-renovation' ) ),
		array( "pe-7s-angle-down" => esc_html__( "up arrow", 'tm-renovation' ) ),
		array( "pe-7s-switch" => esc_html__( "switch", 'tm-renovation' ) ),
		array( "pe-7s-angle-down-circle" => esc_html__( "down circle", 'tm-renovation' ) ),
		array( "pe-7s-scissors" => esc_html__( "scissors", 'tm-renovation' ) ),
		array( "pe-7s-wallet" => esc_html__( "wallet", 'tm-renovation' ) ),
		array( "pe-7s-safe" => esc_html__( "safe", 'tm-renovation' ) ),
		array( "pe-7s-volume2" => esc_html__( "volume2", 'tm-renovation' ) ),
		array( "pe-7s-volume1" => esc_html__( "volume1", 'tm-renovation' ) ),
		array( "pe-7s-voicemail" => esc_html__( "voice mail", 'tm-renovation' ) ),
		array( "pe-7s-video" => esc_html__( "video", 'tm-renovation' ) ),
		array( "pe-7s-user" => esc_html__( "user", 'tm-renovation' ) ),
		array( "pe-7s-upload" => esc_html__( "upload", 'tm-renovation' ) ),
		array( "pe-7s-unlock" => esc_html__( "unlock", 'tm-renovation' ) ),
		array( "pe-7s-umbrella" => esc_html__( "umbrella", 'tm-renovation' ) ),
		array( "pe-7s-trash" => esc_html__( "trash", 'tm-renovation' ) ),
		array( "pe-7s-tools" => esc_html__( "tools", 'tm-renovation' ) ),
		array( "pe-7s-timer" => esc_html__( "timer", 'tm-renovation' ) ),
		array( "pe-7s-ticket" => esc_html__( "ticket", 'tm-renovation' ) ),
		array( "pe-7s-target" => esc_html__( "target", 'tm-renovation' ) ),
		array( "pe-7s-sun" => esc_html__( "sun", 'tm-renovation' ) ),
		array( "pe-7s-study" => esc_html__( "study", 'tm-renovation' ) ),
		array( "pe-7s-stopwatch" => esc_html__( "stopwatch", 'tm-renovation' ) ),
		array( "pe-7s-star" => esc_html__( "star", 'tm-renovation' ) ),
		array( "pe-7s-speaker" => esc_html__( "speaker", 'tm-renovation' ) ),
		array( "pe-7s-signal" => esc_html__( "signal", 'tm-renovation' ) ),
		array( "pe-7s-shuffle" => esc_html__( "shuffle", 'tm-renovation' ) ),
		array( "pe-7s-shopbag" => esc_html__( "shopbag", 'tm-renovation' ) ),
		array( "pe-7s-share" => esc_html__( "share", 'tm-renovation' ) ),
		array( "pe-7s-server" => esc_html__( "server", 'tm-renovation' ) ),
		array( "pe-7s-search" => esc_html__( "search", 'tm-renovation' ) ),
		array( "pe-7s-film" => esc_html__( "film", 'tm-renovation' ) ),
		array( "pe-7s-science" => esc_html__( "science", 'tm-renovation' ) ),
		array( "pe-7s-disk" => esc_html__( "disk", 'tm-renovation' ) ),
		array( "pe-7s-ribbon" => esc_html__( "ribbon", 'tm-renovation' ) ),
		array( "pe-7s-repeat" => esc_html__( "repeat", 'tm-renovation' ) ),
		array( "pe-7s-refresh" => esc_html__( "refresh", 'tm-renovation' ) ),
		array( "pe-7s-add-user" => esc_html__( "add user", 'tm-renovation' ) ),
		array( "pe-7s-refresh-cloud" => esc_html__( "refresh cloud", 'tm-renovation' ) ),
		array( "pe-7s-paperclip" => esc_html__( "paperclip", 'tm-renovation' ) ),
		array( "pe-7s-radio" => esc_html__( "radio", 'tm-renovation' ) ),
		array( "pe-7s-note2" => esc_html__( "note2", 'tm-renovation' ) ),
		array( "pe-7s-print" => esc_html__( "print", 'tm-renovation' ) ),
		array( "pe-7s-network" => esc_html__( "network", 'tm-renovation' ) ),
		array( "pe-7s-prev" => esc_html__( "prev", 'tm-renovation' ) ),
		array( "pe-7s-mute" => esc_html__( "mute", 'tm-renovation' ) ),
		array( "pe-7s-power" => esc_html__( "power", 'tm-renovation' ) ),
		array( "pe-7s-medal" => esc_html__( "medal", 'tm-renovation' ) ),
		array( "pe-7s-portfolio" => esc_html__( "portfolio", 'tm-renovation' ) ),
		array( "pe-7s-like2" => esc_html__( "like2", 'tm-renovation' ) ),
		array( "pe-7s-plus" => esc_html__( "plus", 'tm-renovation' ) ),
		array( "pe-7s-left-arrow" => esc_html__( "left arrow", 'tm-renovation' ) ),
		array( "pe-7s-play" => esc_html__( "play", 'tm-renovation' ) ),
		array( "pe-7s-key" => esc_html__( "key", 'tm-renovation' ) ),
		array( "pe-7s-plane" => esc_html__( "plane", 'tm-renovation' ) ),
		array( "pe-7s-joy" => esc_html__( "joy", 'tm-renovation' ) ),
		array( "pe-7s-photo-gallery" => esc_html__( "photo gallery", 'tm-renovation' ) ),
		array( "pe-7s-pin" => esc_html__( "pin", 'tm-renovation' ) ),
		array( "pe-7s-phone" => esc_html__( "phone", 'tm-renovation' ) ),
		array( "pe-7s-plug" => esc_html__( "plug", 'tm-renovation' ) ),
		array( "pe-7s-pen" => esc_html__( "pen", 'tm-renovation' ) ),
		array( "pe-7s-right-arrow" => esc_html__( "right arrow", 'tm-renovation' ) ),
		array( "pe-7s-paper-plane" => esc_html__( "paper plane", 'tm-renovation' ) ),
		array( "pe-7s-delete-user" => esc_html__( "delete user", 'tm-renovation' ) ),
		array( "pe-7s-paint" => esc_html__( "paint", 'tm-renovation' ) ),
		array( "pe-7s-bottom-arrow" => esc_html__( "bottom arrow", 'tm-renovation' ) ),
		array( "pe-7s-notebook" => esc_html__( "notebook", 'tm-renovation' ) ),
		array( "pe-7s-note" => esc_html__( "note", 'tm-renovation' ) ),
		array( "pe-7s-next" => esc_html__( "next", 'tm-renovation' ) ),
		array( "pe-7s-news-paper" => esc_html__( "news paper", 'tm-renovation' ) ),
		array( "pe-7s-musiclist" => esc_html__( "musiclist", 'tm-renovation' ) ),
		array( "pe-7s-music" => esc_html__( "music", 'tm-renovation' ) ),
		array( "pe-7s-mouse" => esc_html__( "mouse", 'tm-renovation' ) ),
		array( "pe-7s-more" => esc_html__( "more", 'tm-renovation' ) ),
		array( "pe-7s-moon" => esc_html__( "moon", 'tm-renovation' ) ),
		array( "pe-7s-monitor" => esc_html__( "monitor", 'tm-renovation' ) ),
		array( "pe-7s-micro" => esc_html__( "micro", 'tm-renovation' ) ),
		array( "pe-7s-menu" => esc_html__( "menu", 'tm-renovation' ) ),
		array( "pe-7s-map" => esc_html__( "map", 'tm-renovation' ) ),
		array( "pe-7s-map-marker" => esc_html__( "map marker", 'tm-renovation' ) ),
		array( "pe-7s-mail" => esc_html__( "mail", 'tm-renovation' ) ),
		array( "pe-7s-mail-open" => esc_html__( "mail open", 'tm-renovation' ) ),
		array( "pe-7s-mail-open-file" => esc_html__( "mail open file", 'tm-renovation' ) ),
		array( "pe-7s-magnet" => esc_html__( "magnet", 'tm-renovation' ) ),
		array( "pe-7s-loop" => esc_html__( "loop", 'tm-renovation' ) ),
		array( "pe-7s-look" => esc_html__( "look", 'tm-renovation' ) ),
		array( "pe-7s-lock" => esc_html__( "lock", 'tm-renovation' ) ),
		array( "pe-7s-lintern" => esc_html__( "lintern", 'tm-renovation' ) ),
		array( "pe-7s-link" => esc_html__( "link", 'tm-renovation' ) ),
		array( "pe-7s-like" => esc_html__( "like", 'tm-renovation' ) ),
		array( "pe-7s-light" => esc_html__( "light", 'tm-renovation' ) ),
		array( "pe-7s-less" => esc_html__( "less", 'tm-renovation' ) ),
		array( "pe-7s-keypad" => esc_html__( "keypad", 'tm-renovation' ) ),
		array( "pe-7s-junk" => esc_html__( "junk", 'tm-renovation' ) ),
		array( "pe-7s-info" => esc_html__( "info", 'tm-renovation' ) ),
		array( "pe-7s-home" => esc_html__( "home", 'tm-renovation' ) ),
		array( "pe-7s-help2" => esc_html__( "help2", 'tm-renovation' ) ),
		array( "pe-7s-help1" => esc_html__( "help1", 'tm-renovation' ) ),
		array( "pe-7s-graph3" => esc_html__( "graph3", 'tm-renovation' ) ),
		array( "pe-7s-graph2" => esc_html__( "graph2", 'tm-renovation' ) ),
		array( "pe-7s-graph1" => esc_html__( "graph1", 'tm-renovation' ) ),
		array( "pe-7s-graph" => esc_html__( "graph3", 'tm-renovation' ) ),
		array( "pe-7s-global" => esc_html__( "global", 'tm-renovation' ) ),
		array( "pe-7s-gleam" => esc_html__( "gleam", 'tm-renovation' ) ),
		array( "pe-7s-glasses" => esc_html__( "glasses", 'tm-renovation' ) ),
		array( "pe-7s-gift" => esc_html__( "gift", 'tm-renovation' ) ),
		array( "pe-7s-folder" => esc_html__( "folder", 'tm-renovation' ) ),
		array( "pe-7s-flag" => esc_html__( "flag", 'tm-renovation' ) ),
		array( "pe-7s-filter" => esc_html__( "filter", 'tm-renovation' ) ),
		array( "pe-7s-file" => esc_html__( "file", 'tm-renovation' ) ),
		array( "pe-7s-expand1" => esc_html__( "expand1", 'tm-renovation' ) ),
		array( "pe-7s-exapnd2" => esc_html__( "expand2", 'tm-renovation' ) ),
		array( "pe-7s-edit" => esc_html__( "edit", 'tm-renovation' ) ),
		array( "pe-7s-drop" => esc_html__( "drop", 'tm-renovation' ) ),
		array( "pe-7s-drawer" => esc_html__( "drawer", 'tm-renovation' ) ),
		array( "pe-7s-download" => esc_html__( "download", 'tm-renovation' ) ),
		array( "pe-7s-display2" => esc_html__( "display2", 'tm-renovation' ) ),
		array( "pe-7s-display1" => esc_html__( "display1", 'tm-renovation' ) ),
		array( "pe-7s-diskette" => esc_html__( "diskette", 'tm-renovation' ) ),
		array( "pe-7s-date" => esc_html__( "date", 'tm-renovation' ) ),
		array( "pe-7s-cup" => esc_html__( "cup", 'tm-renovation' ) ),
		array( "pe-7s-culture" => esc_html__( "culture", 'tm-renovation' ) ),
		array( "pe-7s-crop" => esc_html__( "crop", 'tm-renovation' ) ),
		array( "pe-7s-credit" => esc_html__( "credit", 'tm-renovation' ) ),
		array( "pe-7s-copy-file" => esc_html__( "copy file", 'tm-renovation' ) ),
		array( "pe-7s-config" => esc_html__( "config", 'tm-renovation' ) ),
		array( "pe-7s-compass" => esc_html__( "compass", 'tm-renovation' ) ),
		array( "pe-7s-comment" => esc_html__( "comment", 'tm-renovation' ) ),
		array( "pe-7s-coffee" => esc_html__( "coffee", 'tm-renovation' ) ),
		array( "pe-7s-cloud" => esc_html__( "cloud", 'tm-renovation' ) ),
		array( "pe-7s-clock" => esc_html__( "clock", 'tm-renovation' ) ),
		array( "pe-7s-check" => esc_html__( "check", 'tm-renovation' ) ),
		array( "pe-7s-chat" => esc_html__( "chat", 'tm-renovation' ) ),
		array( "pe-7s-cart" => esc_html__( "cart", 'tm-renovation' ) ),
		array( "pe-7s-camera" => esc_html__( "Camera", 'tm-renovation' ) ),
		array( "pe-7s-call" => esc_html__( "call", 'tm-renovation' ) ),
		array( "pe-7s-calculator" => esc_html__( "calculator", 'tm-renovation' ) ),
		array( "pe-7s-browser" => esc_html__( "browser", 'tm-renovation' ) ),
		array( "pe-7s-box2" => esc_html__( "box2", 'tm-renovation' ) ),
		array( "pe-7s-box1" => esc_html__( "box1", 'tm-renovation' ) ),
		array( "pe-7s-bookmarks" => esc_html__( "bookmarks", 'tm-renovation' ) ),
		array( "pe-7s-bicycle" => esc_html__( "bicycle", 'tm-renovation' ) ),
		array( "pe-7s-bell" => esc_html__( "bell", 'tm-renovation' ) ),
		array( "pe-7s-battery" => esc_html__( "battery", 'tm-renovation' ) ),
		array( "pe-7s-ball" => esc_html__( "ball", 'tm-renovation' ) ),
		array( "pe-7s-back" => esc_html__( "back", 'tm-renovation' ) ),
		array( "pe-7s-attention" => esc_html__( "attention", 'tm-renovation' ) ),
		array( "pe-7s-anchor" => esc_html__( "anchor", 'tm-renovation' ) ),
		array( "pe-7s-albums" => esc_html__( "albums", 'tm-renovation' ) ),
		array( "pe-7s-alarm" => esc_html__( "alarm", 'tm-renovation' ) ),
		array( "pe-7s-airplay" => esc_html__( "airplay", 'tm-renovation' ) ),
	);

	return array_merge( $icons, $pe7stroke_icons );
}

?>