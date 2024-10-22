# Amphibian Species of the World Parse

Parse [Amphibian Species of the World](https://amphibiansoftheworld.amnh.org) web pages and extract data.

Note that Amphibian Species of the World has a CrossRef DOI [doi:10.5531/db.vz.0001](https://doi.org/10.5531/db.vz.0001). 

## Problems parsing names

My parser doesn’t properly handle “ and “ within author names, nor does it handle Oxford commas :(. Quick fix is a hack to convert “and” to “&”.

## Dates for names are taken from reference ids, but many of these lack dates!

Fix this:




