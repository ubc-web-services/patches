# Patches

A central repository for collecting patches required for building Web Services' Drupal websites.


## smtp.phpmailer.inc.mail.ubc.ca.patch

Patches the Drupal 7 SMTP module with the required settings for establishing a connection to the UBC Mail server.

## SA-CORE-2018-004_bootrap-older-than-drupal-7.34.inc

Patches versions of Drupal 7 core older than 7.34 with the [core security update](https://www.drupal.org/sa-core-2018-004) released on April 25, 2018. Newer versions of Drupal 7 core requiring a standalone update should use [this one](https://cgit.drupalcode.org/drupal/rawdiff/?h=7.x&id=080daa38f265ea28444c540832509a48861587d0).

## biblio-pubmed-issue-900818.patch

Patches v.7.1 branch of the Biblio module to use https when fetching pubmed records, as per [this issue](https://www.drupal.org/project/biblio/issues/900818).

## IEF_compatibility-2193025-14.patch

Patches 7.x-3.0-alpha2 version of Conditional Fields module (used by students.ubc.ca)
