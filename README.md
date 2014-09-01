Hreflang-multitv
================

hreflang Tags Generator Multitv for Modx Evolution

Add one or multiple hreflang links for multilingual and international websites

See: https://support.google.com/webmasters/answer/189077?hl=en

![hreflang multitv](https://raw.githubusercontent.com/Nicola1971/Hreflang-multitv/master/hreflangmultitv.jpg)

# Requires:
MultiTv snippet: https://github.com/Jako/multiTV

# Package includes:

* **hreflang.config.inc.php** : multitv config file
* **hreflang** : template variable
* **langlist** : chunk (customizable list of languages)

# Instructions

* install with Package Manager or Store Module
* Assign the hreflang template variable to your template
* Add ```[[multiTV? &tvName=`hreflang` &display=`all`]]``` before the closing HEAD tag in your template

### Optional

Add or remove languages from **langlist** chunk:

### default chunk
```Select Language== ||Armenian==hy||Dutch==nl||English==en||Esperanto==eo||French==fr||Georgian==ka||German==de||Greek==el||Italian==it||Japanese==ja||Persian==fa||Portuguese==pt||Russian==ru||Spanish==es||Swedish==sv||Turkish==tr```

Complete list at:
http://en.wikipedia.org/wiki/ISO_3166-2#Current_codes
