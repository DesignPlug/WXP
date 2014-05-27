WXP
===

After installing and activating the WXP-DomRouter plugin:

here: https://github.com/DesignPlug/wxp-dom-router

upload this to your theme's root directory

and add this line of code to your functions php

```php
if(current_theme_supports("WXP.DomRouter")){
    \WXP\Bootstrap::theme("WXP", "WXP\Theme");
}
```

The first param is the directory WXP DomRouter will look to autoload your controllers and other classes.
The second is the directory our config folder can be located.

have a look at the files, particularly dom-routes.php, everything is commented well and pretty straight forward.
In the event that you have any questions, or spot a bug, be sure to make an issue or contact me via facebook @
http://www.facebook.com/theleecode


Visit our blog @ http://www.designplug.net/blog
