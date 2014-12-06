/**
 * 登录模块
 */
(function() {
	"use strict";
	var loginApp = angular.module('loginApp', ["w5c.validator"]);
	loginApp.config(["w5cValidatorProvider", function (w5cValidatorProvider) {
        // 全局配置
		w5cValidatorProvider.config({
            blurTrig: false,
            showError: true,
            removeError: true

        });
		w5cValidatorProvider.setRules({
            username: {
                required: "该项不能为空"
            },
            password:{
            	required: "密码不能为空"
            }
        });
    }]);
    loginApp.controller("loginController", ["$scope", "$http", function ($scope, $http) {

        var vm = $scope.vm = {
            htmlSource: "",
            showErrorType: 1
        };

        vm.saveEntity = function (form) {
        	// 表单验证完成后调用
        	//TODO 提交数据
        	alert("提交数据");
        };

        //每个表单的配置，如果不设置，默认和全局配置相同
        vm.validateOptions = {
            blurTrig: false
        };

        vm.changeShowType = function () {
            if (vm.showErrorType == 2) {
                vm.validateOptions.showError = false;
                vm.validateOptions.removeError = false;
            } else {
                vm.validateOptions.showError = true;
                vm.validateOptions.removeError = true;
            }
        };

    }]);
})();