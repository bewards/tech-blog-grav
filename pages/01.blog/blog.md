---
title: '<h2>Latest Blog Posts</h2>'
media_order: tahoe.jpg
hide_git_sync_repo_link: false
sitemap:
    changefreq: monthly
body_classes: 'header-dark header-transparent'
hero_classes: 'text-light title-h1h2 overlay-dark-gradient hero-large parallax'
blog_url: /blog
show_sidebar: false
show_breadcrumbs: true
show_pagination: true
content:
    items:
        - '@self.children'
    limit: 6
    order:
        by: date
        dir: desc
    pagination: true
    url_taxonomy_filters: true
bricklayer_layout: true
display_post_summary:
    enabled: false
feed:
    description: 'Sample Blog Description'
    limit: 10
pagination: true
---

<h1 style="color: #999;background-color: #f5f2f0;padding: 20px;border-radius: 0% 20%;"><strong><span style="">&lt;</span><span style="color: #905;">HighTechManLand</span> <span style="color: #690;">Author</span>="<span style="color: #07a">Ben Sewards</span>" <span style="color: #690;">Data-Purpose</span>="<span style="color: #07a">Make Html Great Again</span>" /&gt;</strong></h1>