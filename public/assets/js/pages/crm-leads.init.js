!function(a){"use strict";var e=function(){};e.prototype.createStackedChart=function(a,e,t,r,s,o){Morris.Bar({element:a,data:e,xkey:t,ykeys:r,stacked:!0,labels:s,hideHover:"auto",resize:!0,gridLineColor:"#424d58",barSizeRatio:.2,barColors:o})},e.prototype.init=function(){this.createStackedChart("leads-statics",[{y:"2012",a:75,b:65},{y:"2013",a:50,b:40},{y:"2014",a:75,b:65},{y:"2015",a:50,b:40},{y:"2016",a:75,b:65},{y:"2017",a:100,b:90},{y:"2018",a:80,b:65}],"y",["a","b"],["Won Leads","Lost Leads"],["#4a81d4","#e3eaef"])},a.LeadsCharts=new e,a.LeadsCharts.Constructor=e}(window.jQuery),function(a){"use strict";window.jQuery.LeadsCharts.init()}();