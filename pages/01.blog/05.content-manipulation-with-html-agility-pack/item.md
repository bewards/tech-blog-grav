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

In this walkthrough we will learn how to manipulate Sitecore data from Rich-Text Editor fields with Sitecore PowerShell.

===

## The Scenario
You just completed a fairly substantial content migration from an archaic CMS into Sitecore. These new Product Detail Pages all contain associated content items labeled "Support Links" that holds a single Rich-Text Editor field that simply renders on the page as a Datasource. The client takes one quick look at the page and notices that all of the support links are missing super important icons that are used to indicate the file type of PDF or Zip. These icons were clearly in the new design, but this old data never had the markup required.

![I know that feel, bro](i_hug_that_feel.png) {.center}

## Luckily for us..
We have PowerShell! And because we're working in context of the ISE, we can already reference the Html Agility Pack included with Sitecore (I've yet to come across any issues with the version being from _2014_ even in Sitecore v9.1.1, but you may find yourself using a newer method that can be resolved by loading a newer dll with `[Reflection.Assembly]::LoadFile`).

We can start the script with getting all the items named "Support Links" with a specific template id:
```powershell
$supportItems = Get-Item -Path master: -Query "/sitecore/content/Tenant/Site A/Homepage//*[@@templateid='{A099DC2D-1E23-499F-B101-DBB0902148F4}' and @@name='Support Links']"
```

Loop through these items and load up the content from the Rich-Text Editor field into the Agility Pack magic:
```powershell
$supportItems | ForEach-Object {
    $supportItem = $_
    $content = $_."Content"    ## accessing the field value this way lets us not worry about the Begin/End Edit requirements
    
    $htmlDocument = New-Object -TypeName HtmlAgilityPack.HtmlDocument
    $htmlDocument.LoadHtml($content)
```

Find all the anchors using HtmlAgilityPack XPath query:
```powershell
foreach($x in $htmlDocument.DocumentNode.SelectNodes("//a")) {    ## foreach anchor in html
    $href = $x.Attributes["href"].Value
```

Check if the anchor is a Sitecore _Dynamic Url_, capture the Guid and retrieve the Media Item:
```powershell
if ($href  -like "~/media/*") {
    $guid = New-Object -TypeName System.guid -ArgumentList $([System.IO.Path]::GetFileNameWithoutExtension($href))        ## parse out the guid with a C# Path Helper Method!
    $mediaItem = Get-Item -Path master: -ID "{$($guid)}"
}
```

If the `Media Item` is a Zip or Pdf AND the icon has yet to be added, adjust the anchor's inner HTML to include the icon:
```powershell
if ($mediaItem.TemplateName -eq "Pdf" -and (-not $x.InnerHtml.Contains("fa-file-pdf"))) {
    Write-Host "Found PDF Link for Link [$($href)], DisplayName [$($mediaItem.DisplayName)]"								## LOG some good info
    $x.InnerHtml = "<em class='fa fa-file-pdf-o' aria-hidden='true' style='padding-right: 5px;'></em>" + $x.InnerHtml		## append the icon
}
elseif ($mediaItem.TemplateName -eq "Zip" -and (-not $x.InnerHtml.Contains("fa-file-archive"))) {
	Write-Host "Found Zip Link for Link [$($href)], DisplayName [$($mediaItem.DisplayName)]"
	$x.InnerHtml = "<em class='fa fa-file-archive-o' aria-hidden='true' style='padding-right: 5px;'></em>" + $x.InnerHtml
}
```

Now that we've made our updates in the `$htmlDocument` object, we can take that HTML and put it back in the Sitecore field:
```powershell
$newHTML = $htmlDocument.DocumentNode.OuterHtml
$_."Content" = $newHTML
```