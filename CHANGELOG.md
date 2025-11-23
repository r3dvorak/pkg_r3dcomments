# Changelog – R3D Comments (pkg_r3dcomments)

All relevant changes to this extension are listed in this document.

## [6.0.3] – 2025-11-22
### Added
- Initial release of the complete Joomla package `pkg_r3dcomments`
- Contains:
  - Component `com_r3dcomments`
  - Module `mod_r3dcomments`
  - Update server integration
  - SHA256 checksums in the update feed

### Improved
- Various internal optimizations for module rendering
- Improved YOOtheme compatibility

### Fixed
- Minor bugs in the update XML corrected
- More stable PowerShell build and update scripts


## [6.0.2] – 2025-11-21
### Added
- Module: First functional version with comment list + form

### Fixed
- Removed incorrect MVCFactory initialization in the plugin


## [6.0.1] – 2025-11-20
### Added
- Plugin: Category filter implemented
- Debug output added for easier troubleshooting

### Fixed
- Fixed bug where comments were not displayed under articles


## [6.0.0] – 2025-11-19
### Added
- Basic version of the `com_r3dcomments` component
- Nested replies (2 levels)
- Quote function
- Comment form with token
- Frontend edit for authors
- Administrator notifications
