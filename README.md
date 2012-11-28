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
* autoconf 2.63 or newer. Configure autoconf it with

        xcodepath="$(xcode-select -print-path)"
        export PATH="$PATH:$xcodepath/usr/bin:$xcodepath/Toolchains/XcodeDefault.xctoolchain/usr/bin"
        export M4="xcrun m4"
        ./configure --prefix=/usr/local/autoconf

You may, of course, choose an other prefix if you plan to keep autoconf
installed.


BUILDING CROSSPACK-AVR
======================

After installing Xcode and autoconf, simply run

    export PATH="$PATH:/usr/local/autoconf/bin"
    ./mkdist.sh

in the root directory of the project. You may want to edit some options in
the script before running it. The user who runs the script needs write
permissions to the directory /usr/local.

The resulting disk image can be found in /tmp.

The build procedure preserves all downloaded packages. If you want to remove
them in order to save disk space, run

    ./mkclean.sh

