console.warn(`
	|===============CINGULAR================|
	|===	CodeIgniter		AngularJS	====|
	|-----		Buku	Kontak		--------|
	|										|
	|	Author	: Hadi Hidayat Hammurabi	|
	|	Email	: didikipb007@gmail.com		|
	|	Blog	: themindware.blogspot.com	|
	|										|
	|=======================================|
	
`)

var app = angular.module('bukukontak',['ngRoute']);

app.config(function($routeProvider){
  $routeProvider
  .when('/',{
    templateUrl:'/application/views/templates/home.html'
  })
  .when('/home',{
    templateUrl:'/application/views/templates/home.html'
  })
  .when('/tambahkontak',{
    templateUrl:'/application/views/templates/formtambahkontak.html'
  })
  .when('/suntingkontak',{
      templateUrl:'/application/views/templates/formsuntingkontak.html'
    })
  .otherwise({
    template:"ora ono"
  })
})

app.controller('mainclr',function($scope, $http){
  $scope.kontaks = []

  var reload = function(){
    $http.get('/kontak/getkontak').success(function(res){
      $scope.kontaks = res
    })
  }

  reload()

  $scope.tambahkontak = function(data){
    $http.post('/kontak/addkontak', data).success(function(res){
      Materialize.toast('Berhasil menambah data.', 4000)
      reload()
      window.location.href = '/#/home'
    })
  }
  $scope.hapuskontak = function(id){
    $http.post('/kontak/delkontak', id).success(function(res){
      Materialize.toast('Berhasil menghapus data.', 4000)
      reload()
      window.location.href = '/#/home'
    })
  }
  $scope.ambilkontak = function(id){
    window.location.href = '/#/suntingkontak'
    $http.get('/kontak/ambilkontak/'+id).success(function(res){
      $scope.edit = res[0]
    })
  }
  $scope.suntingkontak = function(data){
    $http.post('/kontak/suntingkontak', data).success(function(res){
      Materialize.toast('Data telah diubah.', 4000)
      reload()
      window.location.href = '/#/home'
    })
  }
})
