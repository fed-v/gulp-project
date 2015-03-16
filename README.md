Gulp Project Template
============

This is a template or a initial setup for a simple [gulp](http://gulpjs.com/) project. 
It aims to provide some common tasks to a web app development within a organized structure.


### Features

- CSS Autoprefixing
- Automatically minify css files
- Automatically compile Less (with source maps!)
- Automatically lint scripts via jsHint
- Automatically uglify script files
- Automatically optimize image files (.jpg, .png, .gif)
- Watches for changes
- Generates a optimized build


### Structure

A sample project strucutre would be:

```
|-- app
|  |-- less
|  |  |-- normalize.less
|  |  |-- mixins.less
|  |  |-- project.less
|  |-- js
|  |  |-- main.js
|  |-- images
|  |  |-- background.png
|  |-- index.html
|-- dist
|  |-- css
|  |  |-- styles.min.css
|  |-- js
|  |  |-- vendor
|  |  |  |-- jquery-1.11.2.min.js
|  |  |-- main.min.js
|  |-- images
|  |-- index.html
|-- node_modules
```


### Install npm dependencies

```
npm install
```

This runs through all dependencies listed in `package.json` and downloads them to a `node_modules` folder in your project directory.


### Copyright

The MIT License (MIT)
Copyright © 2015 Federico Venturino <fed_v@hotmail.com>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the “Software”), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

