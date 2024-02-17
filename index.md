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

hey there. thanks for visiting this site, i guess. i am a programmer from hungary living in southern california
and i do a bunch of stuff. see my [resume](/resume.html) for more details. i think everything else
here will be kinda boring, so that sucks.

i always feel like i'm not good at programming. if anyone tells you otherwise, they think far too highly of me.

{% include projects.md %}

{% include contact.md %}

{% include footer.md %}