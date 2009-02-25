## sidebar/

### Overview

This directory holds the sidebar files for the theme. The file from this directory that will be used is chosen based on the current page context.

A "default" template is required, and will be used when there are no other templates that match a given comment. This could be because no other templates have been created, or because the context doesn't match the templates that are available.


### Supported Override Filenames

- sidebar-default.php (or default.php)
- archive.php
- author.php
- author-{username}.php
- category.php
- cat-{slug}.php
- home.php
- page.php
- role-{rolename}.php
- search.php
- single.php
- tag.php
- tag-{slug}.php

This also supports all "content" templates for single pages using single-(standard content template name).php. Some examples:

- single-meta-{meta}-{key}.php
- single-cat-{slug}.php
- single-tag-{slug}.php
- single-author-{username}.php


### File Descriptions

Standard context file naming will work for files in this directory.
