---
title: 'Sitecore Meetup Recap: ORMless - less is enough'
media_order: sitecore-plus-meetup.png
published: true
date: '14:22 15-02-2019'
taxonomy:
    tag:
        - Sitecore
        - ORM
        - Meetup
    month:
        - March
    author:
        - 'Benjamin Sewards'
hide_git_sync_repo_link: false
blog_url: /blog
show_sidebar: true
show_breadcrumbs: true
show_pagination: true
hide_from_post_list: false
metadata:
    description: 'What exactly does it mean to be free from an ORM? During this post I''d like to recap some ORM pitfalls and discussion points to consider when building out your next Sitecore Solution'
    robots: 'index, follow'
    'og:site_name': HighTechManLand
    'og:locale': English
---

Last month a long-time colleague of mine, Doug Couto, presented a Sitecore meetup @Rightpoint on going **ORMless** in his last couple Sitecore Solutions. What exactly does it mean to be free from an ORM? During this post I'd like to recap some ORM pitfalls and discussion points to consider when building out your next Sitecore Solution. As my familiarity of ORMs are based on over four years of using Glass, I will be basing this recap on my own experience tied to that ORM.

===

## :fa-object-group: ORM at a Glance
We've all heard the #1 presumed _substantial_ benefit of going with an ORM such as Glass.Mapper.Sc - saving development time. Installation is a breeze with NuGet and scaffolding the initial configuration of most ORMs is relatively fast depending on the experience of the developer. When diving in to the actual development of a component, the use of an ORM has immediate benefits.

The `SitecoreService` class provided by Glass.Mapper.Sc is a great extension into CRUD operations overlapping the Sitecore API that can save time with Migration and Importing tasks. Developers should be aware that just because this class is helpful, the use of the Sitecore API is still crucial and should be taken into account for these types of tasks for the following reasons: security permissions of items and users running the task, context switching of sites and databases, and batch updating while disabling indexes.

The usage of Interfaces directly correlates to Sitecore Template architecture, making concrete mapping of objects behind the scenes a 1-to-1 mapping. This mapping technique becomes inheritently beneficial with the use of automatic Code Generation to model your interfaces after templates within your local Sitecore environment. Having direct access to strongly-typed Sitecore fields via Interface properties gives ORMs an advantage over classic development. For example, a developer creates a Sitecore Template with a Multilist field called Authors. In order to have access to a List of strongly-typed Authors in Glass, one simply has to 1. Create the IAuthor Interface (presumabley auto-generated) and 2. update the Interface's Author Property to return type `IEnumerable<IAuthor>`. This development pattern is relatively easy to follow for new-comers, but there is a slight learning curve to this automapping. For instance, if the Interfaces are auto-generated, how and where does this property return type get updated? Within the use of a serialization storage like TDS, developers have learn to step through this project in order to add this return type to the template field item's *custom data* attribute in the Visual Studio property window. And if that was a mouthful, what type of learning curve are we looking at for getting this Sitecore data to the view?

As with any open source project, there comes a learning curve for your team and more likely than not, some bugs along the way. ORMs like Glass are an evolving product that require proper investment due to new features and authenticated documentation that can leave you stranded if proper training at a cost is not taken. Even when Glass documentation was public knowledge, developers were prone to making mistakes. The improper use of class and property contract attributes such as `IsLazy` and `SitecoreQuery("./*[@@templateid='{1A..}']), IsRelative = true]` can be riddled within a Sitecore Solution and undoubtedly make it harder to maintain code. In my own experience with bugs, I had previously spent a full week with a Solution trying to figure out why Language Fallback was failing to return items only to find out that because the ORM replaces so many Pipeline processors, a special flag called `VersionCountDisabler` had to be set in order to traverse through the tree to return said items when the parent items above them existed but did not have a version in any language. Sitecore by default would of not acted this way, but because an ORM is introduced, these types of issues can cause headaches and long hours of debugging internal custom code.

The proper knowledge acquired of an ORM is a time commitment, but also abstracts developers away from the essence of the regular Sitecore API. Many developers in the audience couldn't agree more that a lot of what an ORM can do can be accomplished with the use of `SitecoreExtensions` from Habitat and using proper Helix principles. Since Sitecore 8.2 and the changes to the `Sitecore.Context` kernel implementation, abstraction and virtual methods within new Interfaces makes Unit Testing a weightless afterthought need for an ORM. With Helix principles, features break templates down into smaller reusable contracts, which under the scenes may have a performance effect on particular ORM usage. This performance effect may solely be based on how a developer sets up and uses the ORM, but there is a costly toll to receiving way more than you need from an Object mapped through Interfaces that chain levels down to the base template.

## :fa-key: Key Takeaway of the Meetup
Start off with automated code generation for Template Constants (think Template Guids and Field Names), and the built-in IoC provided by Sitecore in order to register concrete types for Interfaces. By starting off with this minimal solution, you're already able to create and inject repository services into Controllers ([Repository Pattern Example](https://doc.sitecore.com/developers/sxa/17/sitecore-experience-accelerator/en/walkthrough--building-a-simple-rendering.html#UUID-fef65d9f-c7c1-501c-76d6-0db484cc4d4d_N1526305267686)) that will do the bulk business logic work for your Features. If later down the line you see a gap that cannot be easily implemented and requires an ORM, keep in mind how the ORM can effect your Sitecore Solution!