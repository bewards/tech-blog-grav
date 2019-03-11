---
title: 'Creating a Bootstrap Modal with Sitecore SXA'
media_order: Banner_Sitecore-and-SXA.jpg
published: false
date: '21:18 07-03-2019'
hide_git_sync_repo_link: false
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
hide_from_post_list: false
---

This walkthrough describes in detail how to convert a Bootstrap 4 Modal and all of it's properties into a content-authorable custom SXA Component, along with the ability to add Modal buttons.

===

Starting from SXA v1.8, Bootstrap 4 has been introduced alongside Sitecore 9.1 Initial Release. If you're working from an earlier version of SXA, the same rules should apply.

## Bootstrap 4 Analysis
Before we get in to Sitecore, we'll need to review the Bootstrap 4 doc in order to come up with a list of Modal Properties and Options that we consider to be content authorable. Outlined below is the Modal markup with considerations between [brackets]:

```html
<div class="modal [fade]" tabindex="-1" role="dialog" 
    [data-backdrop="boolean|static", data-keyboard="boolean", data-focus="boolean", data-show="boolean"]>

    <div class="modal-dialog [modal-dialog-centered] [modal-lg, modal-md, modal-sm]" role="document">
        <div class="modal-content">

            <!-- Modal Header is optional: show when Modal Title is present or close icon is enabled -->
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>

            <!-- Modal footer is optional: show when buttons are present -->
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
```

## Duplicate the SXA Promo Component
Our Modal Component needs to have a new Sitecore interface template created with Fields that will be different from other OOTB Components. Navigate to the SXA Promo Rendering, right-click and run the built-in `Scripts > Clone Rendering` PowerShell script from the context menu.