# Dithermark Site

The support and marketing website for Dithermark. Not to be confused with the actual app [Dithermark](https://github.com/allen-garvey/dithermark).


## Dependencies for building

* POSIX compatible operating system
* GNU Make
* PHP >= 7.0 (with `cli` and `xml` extension)
* Node >= 6.11
* npm

## Dependencies for running

* Any modern browser

## Getting Started

* Clone or download this repository
* Open a command line and `cd` into the project directory
* Type `make install` to setup the project for the first time
* Type `make` to compile the project
* (If you run into any errors at this point, first check that you have all the needed dependencies for the project. Then type `make clean`, `make install`, and `make` again, and see if that fixes your problem).
* To ready the site for a production deploy, run `make release`