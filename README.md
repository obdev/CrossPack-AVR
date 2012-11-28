CrossPack for AVR Development is a development environment for Atmel's AVR
microcontrollers running on Apple's OS X, similar to AVR Studio on Windows.
It consists of the GNU compiler suite, a C library for the AVR, the AVRDUDE
downloader and several other useful tools.

This repository contains a shell script which downloads the source code of
all required packages, compiles them, builds an installer package and wraps
it into a disk image, ready for distribution. It also contains resources such
as a project template, manual etc.


PREREQUISITES
=============

* Xcode 4.4. It probably also works with newer versions of Xcode.
* autoconf 2.63 or newer. Configure it with

        export M4="xcrun m4"
        ./configure --prefix=/usr/local

