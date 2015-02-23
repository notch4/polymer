<!DOCTYPE html>
<html>
<head>
	<title>Polymer Test</title>
	<link rel="import" href="components/bower_components/polymer/polymer.html">
	<script src="components/bower_components/platform/platform.js"></script>

	<link rel="import" href="components/bower_components/font-roboto/roboto.html">

	<link rel="import" href="components/bower_components/core-scaffold/core-scaffold.html"> 
	<link rel="import" href="components/bower_components/core-item/core-item.html">
	<link rel="import" href="components/bower_components/core-icons/core-icons.html"> 
	<link rel="import" href="components/bower_components/paper-input/paper-input.html"> 
	<link rel="import" href="components/bower_components/core-tooltip/core-tooltip.html"> 
	<link rel="import" href="components/core-animated-pages/core-animated-pages.html">
	<link rel="import" href="components/core-animated-pages/transitions/slide-from-right.html">
	

	<link href="design.css" rel="stylesheet">
  	
</head>

<body unresolved fullbleed>
hjhjhjhjhj

<template is="auto-binding">
	  <core-scaffold id="scaffold">
	    <nav>
		  <core-toolbar class="tall"><span>Single Page Polymer</span></core-toolbar>
		  
		  <core-menu valueattr="hash" selected="{{route}}" on-core-select="{{menuItemSelected}}">
		      <template repeat="{{page, i in pages}}">
		        <paper-item hash="{{page.hash}}" noink>
		          <core-icon icon="label{{route != page.hash ? '-outline' : ''}}"></core-icon>
		          <a href="#{{page.hash}}">{{page.name}}</a>
		        </paper-item>
		      </template>
		    </core-menu>
		</nav>

		<!-- flex makes the bar span across the top of the main content area -->
		<core-toolbar tool flex>
		  <!-- flex spaces this element and justifies the icons to the right-side -->
		  <div flex>Application</div>
		  <core-icon-button icon="refresh"></core-icon-button>
		  <core-icon-button icon="add"></core-icon-button>
		</core-toolbar>

		<!-- main page -->
	    <div layout horizontal center-center fit>
		  <core-animated-pages id="pages" selected="1">
		      <section layout vertical center-center>
		        <div>
		        	<core-tooltip label="I'm a tooltip to the right" position="right">
  <core-icon icon="polymer"></core-icon>
</core-tooltip>
		        </div>
		      </section>
		      
		    </core-animated-pages>
		</div>
	  </core-scaffold>
  </template>


<script>
var template = document.querySelector('#t');
template.pages = [
  {name: 'Single', hash: 'one'},
  {name: 'page', hash: 'two'},
  {name: 'app', hash: 'three'},
  {name: 'using', hash: 'four'},
  {name: 'Polymer', hash: 'five'},
];
template.menuItemSelected = function(e, detail, sender) {
  if (detail.isSelected) {
    this.$ && this.$.scaffold.closeDrawer();
  }
};
</script>


</body>
</html>