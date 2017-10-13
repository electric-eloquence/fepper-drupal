'use strict';

const spawnSync = require('child_process').spawnSync;
const fs = require('fs');
const path = require('path');

// Run npm install.
spawnSync('npm', ['install'], {stdio: 'inherit'});

// Then, copy over Windows-specific files.
const windowsFiles = [
  'fepper.ps1',
  'fepper.vbs'
];

const srcDir = 'node_modules/fepper/excludes/profiles/windows';

windowsFiles.forEach(function (windowsFile) {
  fs.copyFileSync(path.resolve(srcDir, windowsFile), windowsFile);
});
