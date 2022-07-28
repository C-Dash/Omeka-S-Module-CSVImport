CSV Import (module for Omeka S) Modified for CDASH 
==================================================

[CSV Import] is a module for [Omeka S] and will allow users to import Entities from a simple CSV (comma separated value) file, and then map the CSV column data to Entity. Each row in the file represents metadata for a single Entity.

Furthermore, it’s possible to import directly files in formats [TSV] (tab separated value), a simpler and more efficient format, and [ODS] (OpenDocument Spreadsheet, the ISO standard office format for spreadsheets, managed by [LibreOffice] and a lot of other tools) directly.

Most often, the import will create new Omeka S items. It is also possible to import item sets, media and users, and other modules can add other import types. It’s possible to import mixed resources in one file too.

See the [Omeka S user manual](http://omeka.org/s/docs/user-manual/modules/csvimport/) for user documentation.

This CDASH version has a couple of modifications:

1. When importing Items, a column in the import table may contain references to the DC Identifier of an existing Omeka resource.  This attribute is set using the Column Settings (Wrench tool) to set Data Type to Omeka Resource.  Linking to identifier attributes other than Dublin Core: Identifier can be arranged by adjusting Resource Identifier Properties under the Basic Settings tab. 
This feature was added by [Daniel-KM](https://github.com/Daniel-KM/Omeka-S-module-CSVImport/tree/feature/identifier_resource)

2. For applications that involve importing multiple batches of items and media, field mappings may be saved as a JSON file and re-loaded. Mappings are set up and tested using the manual mappings form.  Once validated, the JSON array of mappings can be copied from the Job Details report and saved as a local file that can subsequently be loaded via the import form.    

Installation
------------

See general end user documentation for [Installing a module](http://omeka.org/s/docs/user-manual/modules/#installing-modules).

To install CSV Import from the source, go to the root of the module, and run `composer install`. Users
using the pre-packaged downloads from the Releases page or the omeka.org module directory don't need
to worry about this step.

To be able to import `ods`, the php extensions `zip` and `xml` should be installed (default in most cases).

Warning
-------

Use it at your own risk.

It’s always recommended to backup your files and your databases and to check your archives regularly so you can roll back if needed.

Troubleshooting
---------------

See online issues on the [Omeka forum] and the [module issues] page on GitHub.

License
-------

This plugin is published under [GNU/GPL v3].

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.

Contact
-------

Current maintainers:

* Roy Rosenzweig Center for History and New Media
* Daniel Berthereau (see [Daniel-KM] on GitHub)

Copyright
---------

* Copyright Roy Rosenzweig Center for History and New Media, 2015-2019
* Copyright Daniel Berthereau, 2017-2019

[CSV Import]: https://github.com/Omeka-s-modules/CSVImport
[Omeka S]: https://omeka.org/s
[TSV]: https://en.wikipedia.org/wiki/Tab-separated_values
[ODS]: http://opendocumentformat.org/aboutODF
[LibreOffice]: https://www.libreoffice.org
[Omeka forum]: https://forum.omeka.org/c/omeka-s/modules
[module issues]: https://github.com/omeka-s-modules/CSVImport/issues
[GNU/GPL v3]: https://www.gnu.org/licenses/gpl-3.0.html
[Daniel-KM]: https://github.com/Daniel-KM "Daniel Berthereau"

