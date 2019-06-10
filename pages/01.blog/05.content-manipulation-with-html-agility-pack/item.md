---
title: 'Content Manipulation with Html Agility Pack'
media_order: i_hug_that_feel.png
published: false
date: '18:14 10-06-2019'
hide_git_sync_repo_link: false
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
hide_from_post_list: false
---

In this walkthrough we will learn how to manipulate Sitecore data from Rich-Text Editor fields with Sitecore Powershell.

===

## The Scenario
You just completed a fairly substantial content migration from an archaic CMS into Sitecore. These new Product Detail Pages all contain associated content items labeled "Support Links" that holds a single Rich-Text Editor field that simply renders on the page as a Datasource. The client takes one quick look at the page and notices that all of the support links are missing super important icons that are used to indicate the file type of PDF or Zip. These icons were clearly in the new design, but this old data never had the markup required.

![I know that feel, bro](i_hug_that_feel.png)

```powershell
$htmlDocument = New-Object -TypeName HtmlAgilityPack.HtmlDocument
```