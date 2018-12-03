# UUID plugin for Craft CMS 3.x

UUID Twig extension.

![Screenshot](resources/img/plugin-logo.png)

## Requirements

This plugin requires Craft CMS 3.0.0 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require craftedsystems/craft-uuid/uuid

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for UUID.

## UUID Overview

UUID Twig extension adds the Twig function `getUUID()`.

## Configuring UUID

No configuration required.

## Using UUID

```twig
{# Example usage #}
{% set uuid = getUUID() %}
{{ uuid }}
```

## UUID Roadmap

Some things to do, and ideas for potential features:

* Release it

Brought to you by [Crafted Systems](https://www.crafted.systems)
