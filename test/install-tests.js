'use strict';

const {expect} = require('chai');
const fs = require('fs-extra');

describe('Installer', function () {
  it('should copy conf.yml to /', function () {
    expect(fs.existsSync('conf.yml')).to.be.true;
  });

  it('should copy patternlab-config.json to /', function () {
    expect(fs.existsSync('patternlab-config.json')).to.be.true;
  });

  it('should complete with pref.yml in /', function () {
    expect(fs.existsSync('pref.yml')).to.be.true;
  });

  it('should complete with source in /', function () {
    expect(fs.existsSync('source')).to.be.true;
  });

  it('should copy extend to /', function () {
    expect(fs.existsSync('extend')).to.be.true;
  });

  it('should install npms in /public/', function () {
    expect(fs.existsSync('public/node_modules')).to.be.true;
  });

  it('should compile index.html to /public/', function () {
    expect(fs.existsSync('public/index.html')).to.be.true;
  });
});
