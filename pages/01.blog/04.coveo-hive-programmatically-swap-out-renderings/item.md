---
title: 'Coveo Hive: Programmatically swap out renderings'
media_order: screenshot_standalone-searchbox-pages.png
published: false
date: '16:58 11-12-2018'
taxonomy:
    tag:
        - Sitecore
        - 'Coveo for Sitecore'
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
In my scenario, we're dealing with a complete Sitecore Implementation where Coveo has been tacked on. Let's say that we've just finished implementing a Coveo Search Results page for a particular section. After the search results page usually comes an example implementation of a Page that has stand-alone search behavior that redirects the user to the search results page. Let's also say that this has been configured on an example page for now by adding the Coveo Hiv Search Box component within a Search Section and an External Components Section and pointing the Search box to the search results page:

![sitecore duplicate page with standalone coveo searchbox](screenshot_duplicate-page-with-standalone-searchbox.png)

## The Process
This process of setting up the Coveo stand-alone search behavior has to be done within Experience Editor due to dynamic placeholders and can take roughly 10-15 minutes per Page. In many cases, this example page with stand-alone search behavior has to be switched out on every page that previously had a searchbox. If we were to handle this manually, it could take over a day to configure  during a deployment to CM. A first thought could be to configure this within Std Values, but then you would have to reset every item's Rendering Definition back and completely lose any overrides of components per page.