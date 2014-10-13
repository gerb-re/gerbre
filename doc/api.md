# REST API

Gerb.re has a REST API which can be called for various tasks. As a general rule, all API methods return a JSON response, unless documented otherwise.

All methods are HTTPG GET methods.

## gerbsverbs

The **gerbsverbs** part of the API provides access to all API methods responsible for sentence generation and general tasks related to verbs.

### Sentence generator

* `/api/gerbsverbs/sentence` - redirects to `/api/gerbsverbs/sentence/nl`
* `/api/gerbsverbs/sentence/<language>` - generate one single sentence for the given *language* code.
* `/api/gerbsverbs/sentence/<language>/<number>` - generate an arbitrary *number* of sentences for the given *language* code.

