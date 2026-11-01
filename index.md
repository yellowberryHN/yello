---
layout: default
title: "your local hellhole"
description: it's like a trash compactor for your soul.
---
{% if jekyll.environment == 'production' %}
# [dev.yello.ooo](https://dev.yello.ooo) — zsolt zitting's testbed
## welcome to the funny testing zone.
{% else %}
# [yello.ooo](https://yello.ooo) — zsolt zitting's website
## {{ site.tagline }}
{% endif %}

{% include ascii.html %}

hey there. thanks for visiting this site! i am a programmer from hungary living in southern california
and i do a bunch of stuff. you can check out my projects, and where you can contact me below.

{% include projects.md %}

{% include contact.md %}

{% include footer.md %}