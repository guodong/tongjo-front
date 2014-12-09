/**
 * 浏览项目模块
 */
(function(){

	var scanApp = angular.module('scanApp',['ngRoute','ui.bootstrap']);
	scanApp.config(['$routeProvider',function($routeProvider){
		$routeProvider.when('/',{
			templateUrl:'scanproject-1',
			controller:'defaultCtl'
		}).when('/special-:specialId',{
			templateUrl:'scanproject-2',
			controller:'categoryCtl'
		}).when('/category-:categoryId',{
			templateUrl:'scanproject-2',
			controller:'categoryCtl'
		}).when('/category-:categoryId/:subcategoryId',{
			templateUrl:'scanproject-2',
			controller:'categoryCtl'
		}).otherwise({
			redirectTo:'/'
		});		
	}]);
	scanApp.controller('defaultCtl',function($scope){
		//TODO 获得数据
		$scope.projects = projects;
		$(".tech span").hover(function(){
			$(this).find("div").fadeIn();
		},function(){
			$(this).find("div").fadeOut();
		});
	});
	scanApp.controller('categoryCtl',function($scope,$routeParams){
		//TODO 获得数据
		$scope.projects = projects.concat(projects).concat(projects.reverse())
						  .concat(projects).concat(projects.reverse());
		if($routeParams.specialId != null){
			$scope.title = specialTitle[$routeParams.specialId-1];
		}else if($routeParams.subcategoryId != null){
			$scope.title = subcategoryTitle[$routeParams.categoryId-1][$routeParams.subcategoryId-1];
			//alert($routeParams.subcategoryId);
		}else if($routeParams.categoryId != null){
			//alert($routeParams.categoryId);
			$scope.title = categoryTitle[$routeParams.categoryId-1];
		}
		$scope.page.index = 1;
		//$scope.id = $routeParams.categoryId;
	});
	var specialTitle = new Array("最热项目","最新项目","推荐项目");
	var categoryTitle = new Array("技术","设计","商业市场","校园创业","创意","公益","比赛");
	var subcategoryTitle = new Array(["技术 》计算机","技术 》 通信","技术 》 互联网","技术 》 智能","技术 》自动化"],
			["设计 》艺术设计","设计 》工业设计","设计 》交互设计","设计 》平面设计","设计 》动画设计"],
			["商业市场 》营销","商业市场 》管理","商业市场 》策划"]);
	var projects = new Array(
		{
			imgurl: "/img/web.png",
			teamcount: 2,
			personcount: 3,
			link:"#",
			title:"网站开发"
		},
		{
			imgurl: "/img/cpt.png",
			teamcount: 2,
			personcount: 3,
			link:"#",
			title:"比赛"
		},
		{
			imgurl: "/img/market.png",
			teamcount: 2,
			personcount: 3,
			link:"#",
			title:"商业市场"
		},
		{
			imgurl: "/img/phone.png",
			teamcount: 2,
			personcount: 3,
			link:"#",
			title:"移动设备"
		});
	scanApp.controller("scanController", ["$scope", function ($scope) {
		$scope.page = {
			    size: 8,
			    index: 1
	    };
		$scope.hoverIn = function(){
		    this.hoverEdit = true;
		};

		$scope.hoverOut = function(){
		    this.hoverEdit = false;
		};
		
		$scope.more = function (event,specialId) {  
			//TODO 获取更多数据
			if ($(event.target).html() == "查看更多&gt;&gt;")
				$(event.target).html("<<收起");
			else $(event.target).html("查看更多>>");
			//console.log(specialId);
	   }
	}]);
	scanApp.filter('size', function() {
		  return function (items) {
		    if (!items)
		      return 0;
		    return items.length || 0
		  }
   });
   scanApp.filter('paging', function() {
		 return function (items, index, pageSize) {
		    if (!items)
		      return [];
		    var offset = (index - 1) * pageSize;
		    return items.slice(offset, offset + pageSize);
		 }
  });
})();
