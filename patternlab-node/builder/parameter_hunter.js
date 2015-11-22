/* 
 * patternlab-node - v0.13.0 - 2015 
 * 
 * Brian Muenzenmeyer, and the web community.
 * Licensed under the MIT license. 
 * 
 * Many thanks to Brad Frost and Dave Olsen for inspiration, encouragement, and advice. 
 *
 */

(function () {
  "use strict";

  var parameter_hunter = function(){

    var extend = require('util')._extend,
    pa = require('./pattern_assembler'),
    mustache = require('mustache'),
    pattern_assembler = new pa();

    function findparameters(pattern, patternlab, partialMatch, startPattern){
      //find the partial's name
      var partialName = partialMatch.match(/([\w\-\.\/~]+)/g)[0];

      if(patternlab.config.debug){
        console.log('found patternParameters for ' + partialName);
      }

      //get the partial's pattern object
      var partialPattern = pattern_assembler.get_pattern_by_key(partialName, patternlab);

      //strip out the additional data and eval
      var leftParen = partialMatch.indexOf('(');
      var rightParen = partialMatch.indexOf(')');
      var paramString = '({' + partialMatch.substring(leftParen + 1, rightParen) + '})';

      //do no evil. there is no good way to do this that I can think of without using a split, which then makes commas and colons special characters and unusable within the pattern params
      var paramData = eval(paramString);

      //in order to only token-replace parameterized tags, switch them to ERB-style tags
      //as per the Mustache docs https://mustache.github.io/mustache.5.html.
      var escapedKey;
      var partialTemplateTmp = partialPattern.extendedTemplate;
      var regex;

      for(var i in paramData){
        if(paramData.hasOwnProperty(i) && (typeof paramData[i] === 'boolean' || typeof paramData[i] === 'number' || typeof paramData[i] === 'string')){
          //escape regex special characters as per https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions#Using_special_characters
          escapedKey = i.replace(/[.*+?^${}()|[\]\\\/]/g, '\\$&');

          //apply replacement based on allowable characters from lines 78 and 79 of mustache.js
          //of the Mustache for JS project.
          regex = new RegExp('{{([{#\\^\\/&]?\\s*' + escapedKey + '\\s*}?)}}', 'g');
          partialTemplateTmp = partialTemplateTmp.replace(regex, '<%$1%>');
        }
      }

      //then set the new delimiter at the beginning of the extended template
      partialTemplateTmp = '{{=<% %>=}}' + partialTemplateTmp;

      //render the newly delimited partial
      var renderedPartial = pattern_assembler.renderPattern(partialTemplateTmp, paramData);

      return renderedPartial;
    }

    return {
      find_parameters: function(pattern, patternlab, partialMatch, startPattern){
        return findparameters(pattern, patternlab, partialMatch, startPattern);
      }
    };

  };

  module.exports = parameter_hunter;

}());
