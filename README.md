# A installer sur votre ordinateur

La première fois, il n'y a pas besoin de le refaire les fois suivantes.

## Installer NPM
### Sous windows
https://blog.teamtreehouse.com/install-node-js-npm-windows
### Sous mac OS
https://www.dyclassroom.com/howto-mac/how-to-install-nodejs-and-npm-on-mac-using-homebrew

## Installer Git
https://git-scm.com/downloads


# Start a project using Sass and Php files

## First time

### Créer un repository sur Github
Ne pas créer de .gitignore, récupérer celui fourni par la démo (qui ignore nottament tout le dossier node_modules).

### Pull this repository on your computer (Clone)
Run Github Desktop > Clone a repository

### Run NPM
```bash
cd + chemin_complet_vers_le_dossier_du_site
npm install (création d'un dossier node_modules à la racine du dossier)
```

## Lancer Mamp (serveur de développement)
Lancer Mamp (serveur Apache permettant d'interpéter le php) et ouvrir le localhost.

http://localhost:8888/my-website-folder/public/

## Edit file webpack.config.js
Replace Xxxxxxxx par le nom du dossier de votre site : my-website-folder
```javascript
...
  output: {
    path: path.resolve('./public/build/'),
    publicPath: '/Xxxxxxxx/public/build/',//Edit here
    filename: '[name].js',
  },
...
```

## Edit file package.json

### Pour mac
```javascript
...
   "scripts": {
    "build": "NODE_ENV=production webpack --mode production",
    "build:dev": "NODE_ENV=development webpack --mode development",
    "watch": "NODE_ENV=development webpack --watch --mode development"
  },
...
```

### Pour Windows
```javascript
...
  "scripts": {
    "build": "webpack --mode production",
    "build:dev": "webpack --mode development",
    "watch": "webpack --watch --watch-poll --mode development"
  },
...
```

## During development

Leave this command running.
```bash
npm run watch
```

## To production (Mise en ligne) : build and save CSS and JS files
Before going to production, launch this
```bash
npm run build
```
