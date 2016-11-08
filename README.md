# octoberrain/backend
[READ ONLY] Subtree split of the October Backend module (see octobercms/october)

Replaced newest ACE editor v1.2.5-dev for multibyte.

`composer.json`

```javascript
"repositories": [
  {
    "type": "vcs",
    "url": "https://github.com/creator4ever/backend"
  }
],
"require": {
   ...
   "octber/backend": "dev-aceeditor-newest"
}
```
