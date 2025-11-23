# R3D Comments (pkg_r3dcomments)

R3D Comments is a lightweight, fast, and privacy-friendly comment extension for Joomla 5 and Joomla 6.
It offers basic commenting features without external services and is fully integrable with Joomla.

The package includes:
- a standalone Joomla component (`com_r3dcomments`)
- a YOOtheme-compatible frontend module (`mod_r3dcomments`)
- an optional content plugin (tag or category-based)

Ideal for websites that need simple, clear, and GDPR-friendly comments.

---

## Features

- **Joomla 5 & Joomla 6 compatible**
- **Two levels** (comment + reply)
- **Quote**: Selected comment text is automatically copied
- **Category filter** (comments only in defined categories)
- **YOOtheme Pro compatible** (modules, dynamic templates)
- **Frontend editing** (author can edit their comment)
- **Notification to administrators**
- **Publication workflow** (comments optionally visible only after approval)
- **Clean Bootstrap/Uikit-free output for template flexibility**
- **Integrated update server** (for automatic updates in the Joomla backend)

---

## System requirements

- PHP 8.1 or higher
- Joomla 5 or Joomla 6
- MySQL/MariaDB
- Optional: YOOtheme Pro for module integration in the builder

---

## Installation

1. Download the latest ZIP file from the `/04_dist/` folder.  
2. In the Joomla backend: *Extensions → Manage → Install*.  
3. The package installs:
   - Component  
   - Module  
   - (optional) Plugin  

4. Activate the **mod_r3dcomments** module  
5. Place it:
   - either in a template position
   - or in YOOtheme Pro as a **Module Element**

Optional: Activate the content plugin and configure the tag/category.

---

## Usage

### Via module (recommended)
The module is fully YOOtheme-compatible.

Simply display the **mod_r3dcomments** module on article pages.

### Via content plugin (optional)
Automatically display comments under articles based on:

- Categories
- Tags
- Shortcode `{r3dcomments}`

---

## Update server

The package contains its own update server entry.  
Updates appear automatically in the Joomla backend.

The update feed is located at:  
`https://www.r3d.de/joomlaextensions/updates/pkg_r3dcomments.xml`

---

## Downloads

All official releases are available in the folder:

`/04_dist/`

or via GitHub Releases.

---

## Development

### Repository structure

pkg_r3dcomments/
├── 01_src/ # Installable Joomla package
├── 02_build/ # Build scripts (not part of the repo)
├── 03_docs/ # Documentation, screenshots
├── 04_dist/ # Build artifacts (ZIPs)
└── 05_updates/ # Update feed generator

The folders `02_build` and `05_updates` are excluded for security reasons.

---

## License

GNU General Public License v2 or later  
Further information can be found in the `LICENSE` file.

## Support

Website: https://r3d.de  
Email: dev@r3d.de  
Author: Richard Dvořák / R3D Internet Services

---

## Changelog

See `CHANGELOG.md` in the repository.