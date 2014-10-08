# Resources

This document outlines the structure and contents of the `resources` directory.

## Language resources

Language resources are being used by various components. Language resources contain, for instance, a dictionary (corpus really) of nouns and verbs, and a collection of sentences.

### Structure

Language resources are organized per language. A directory is used for each language, named after the two-character ISO language code (e.g. `en` for English). Each language-code directory is an individual language resource.

In those language directories, two subdirectories are created:

* words
* sentences

### Corpus

The corpus is a large collection of words. The collection is split between nouns and verbs, stored in two separate files:

* nouns.txt
* verbs.txt

We do not process multiple fors of the same verb. At the moment, only infinitives are stored in verbs.txt. This might change in the future. For nouns, we only store singular form (not the plural form).

### Sentences

For each language, we store a variety of sentences. Those sentences can either be completely hard-coded (we call those sentences *static* sentences) or they can be generated on-the-fly (those we call *dynamic* sentences).

Static sentences are stored in a text file `static.txt`. Each line in this file represents a full sentence. A static sentence might look like `Good morning, how are you doing?`.

Dynamic sentences are stored in a text file called `dynamic.txt`, where each line representents a new sentence. Dynamic sentences use nouns and/or verbs from the same language resource. In dynamic sentences, variables can be used and are replaced with a random word when the sentence is generated. For instance, a dynamic sentence `I am %verb%.` could result in `I am reading.`.

## Other resources

The `resources` directory makes it possible to store other resource types. Those types will be described in this document when they are being introduced.