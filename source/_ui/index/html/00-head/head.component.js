module.exports = {
  id: 'patternlab-head',
  dangerouslySetInnerHTML: {
    __html: `
<title id="title">Fepper D8</title>
<meta charset="UTF-8">
{{! Never cache patterns. }}
<meta http-equiv="cache-control" content="max-age=0">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
<meta http-equiv="pragma" content="no-cache">
{{! Handle the viewport. }}
<meta name="viewport" content="width=device-width, initial-scale=1.0">
{{! Load the UI styles. }}
<link rel="stylesheet" href="node_modules/fepper-ui/styles/ui.css" media="all">
<link rel="stylesheet" href="node_modules/fepper-ui/styles/prism-typeahead.css" media="all">
<link rel="stylesheet" href="{{ pathsPublic.css }}/pattern-scaffolding.css" media="all">
{{! Namespace a window.FEPPER_UI object to contain globals. }}
<script>window.FEPPER_UI = {};</script>
{{! Load libraries. }}
<script src="node_modules/feplet/dist/feplet.browser.min.js"></script>
<script src="node_modules/he/he.js"></script>
<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/js-beautify/js/lib/beautify-html.js"></script>
<script src="node_modules/mousetrap/mousetrap.min.js"></script>
<script src="node_modules/prismjs/prism.js"></script>
<script src="node_modules/redux/dist/redux.min.js"></script>
<script src="node_modules/typeahead.js/dist/typeahead.bundle.min.js"></script>
<script src="node_modules/universal-cookie/umd/universalCookie.min.js"></script>
<script src="node_modules/wolfy87-eventemitter/EventEmitter.min.js"></script>
<script src="{{ pathsPublic.js }}/src/variables.styl" type="text/javascript"></script>
<script src="{{ pathsPublic.js }}/src/fepper-obj.js"></script>
`
  }
};
