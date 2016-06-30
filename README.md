## ke_search_url_forwarder

EXT:ke_search_url_forwarder - enables pretty URls with ke_search


### Usage

Replace the following in `ke_search/Resources/Private/Templates/SearchForm.html`

```
<form method="get" id="form_kesearch_pi1" name="form_kesearch_pi1" action="{f:uri.page(pageUid: targetpage)}">
```

with

```
<form method="post" id="form_kesearch_pi1" name="form_kesearch_pi1" action="{f:uri.page( pageUid: '{targetpage}' pageType: '884422' )}">
```