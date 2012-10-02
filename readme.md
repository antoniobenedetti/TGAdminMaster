# TGAdmin free and open source game server control panel. TGAdmin is a fork of GamePanelX v2.

### TGAdmin is a fork of GamePanelX Pro v2 that was developed by Ryan Gehrig in 2007 from scratch. The following TGAdmin releases are considered maintenance versions of GamePanelX without any dramatical modifications of the source.
 
------------------------------------------------------------------------
REQUIREMENTS
------------------------------------------------------------------------
Apache 2.2 or greater
PHP 5.2 or greater
MySQL 5.0 or greater
SSH2 extension


------------------------------------------------------------------------
INSTALLING
------------------------------------------------------------------------
- Download the complete Master tarball
- Extract the tarball locally
- Upload all files to your Linux hosting server
- Create a new database for TGAdmin
- CHMOD 777 "templates_c" and "admin/templates_c" directories
- Go go http://[yoursite]/tga/install/
- Fill out everything
- Delete the "install" directory from your server
- Login 


------------------------------------------------------------------------
UPDATING
------------------------------------------------------------------------

- Download the complete Master tarball
- Extract the tarball locally
- REMOVE the "include/db.php" file
- Upload all files over your old installation
- (optional but recommended): Delete all files inside "templates_c" and "admin/templates_c"
- Run the "install/update.php" script
- Delete the "install" directory from your server


------------------------------------------------------------------------
SUPPORT
------------------------------------------------------------------------

To obtain help and support, try the following:

- Submit an new issue on the GitHub page.
- Visit our website: www.tgadmin.com