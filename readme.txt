=== Mmm Unity Loader ===
Contributors: MManifesto
Donate link: http://www.mediamanifesto.com/donate/
Tags: Unity, Unity Player, Unity Loader, Shortcode
Requires at least: 3.4
Tested up to: 4.1
Stable tag: 4.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Plugin to load unity3d files in a web player using a basic shortcode and UnityObject.js

== Description ==

This is a simple plugin to load unity3d files in a using this shortcode: [MmmUnityLoader src="yourfile.unity3d" width="640" heigh="480" /].


**Parameters:**

* **src**: The url to your unity3d file
* **height**: The height of the player
* **width**: The width of the player
* **attributes**: Any content you want added to the embed / object output add in here.
* **content**: Any content added between the start and the end of the shortcode tag will appear before the Unity object is loaded as a sort of "click to load"


**Usage Examples:**

[MmmUnityLoader src="yourfile.unity3d" width="640" heigh="480" /]

* This will load a file with a width of 640px by 480px - since no content was specified some simple text "Click here to load" will appear before the Object is loaded.

[MmmUnityLoader src="yourfile.unity3d" width="640" heigh="480"]
<img src="myloadingimage.jpg">
[/MmmUnityLoader]

* This will load a file with a width of 640px by 480px and an image instead of the default loading text.

See it in use on http://berv.ca/!


== Installation ==

1. Download and install the plugin from WordPress dashboard. You can also upload the entire “MmmUnityLoader” folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the ‘Plugins’ menu in WordPress


== Changelog ==

= 0.1 =
Published the plugin