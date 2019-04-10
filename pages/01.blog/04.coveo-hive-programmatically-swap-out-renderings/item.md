---
title: 'Coveo Hive: Programmatically swap out renderings'
media_order: screenshot_duplicate-page-with-standalone-searchbox.png
published: false
date: '16:58 11-12-2018'
taxonomy:
    tag:
        - 'Coveo for Sitecore'
        - Sitecore
        - PowerShell
    author:
        - 'Benjamin Sewards'
hide_git_sync_repo_link: false
hero_classes: 'overlay-dark-gradient hero-small'
header_image_credit: 'Image Caption'
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
post_icon: search-plus
hide_from_post_list: false
---

Coveo Hive for Sitecore introduces a new level of modularity, an experience editor friendly eco-system of customizable components. A challenge with this modularity we will be going over is with existing pages and what it takes to swap out old search components for Coveo Hive components.

===

## The Scenario
In my scenario, we're dealing with a complete Sitecore Implementation where Coveo has been tacked on. Let's say that we've just finished implementing a Coveo Search Results page for a particular section. After the search results page usually comes the stand-alone search page that redirects the user to the search results page. Let's also say that this has been configured on an example page for now by adding the Coveo Hiv Search Box component within a Search Section and an External Components Section and point the Search box to the search results page.

![sitecore duplicate page with standalone coveo searchbox](screenshot_duplicate-page-with-standalone-searchbox.png)

## SPE to the Rescue