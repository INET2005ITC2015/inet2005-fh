app=angular.module('studentApp',['ui.mask','ui.grid'])

app.controller('studentController',['$scope', '$http', function($scope, $http){

        $scope.students = []; // end of students array


            $http.get('students.json').success(function(data){
                $scope.students.push.apply($scope.students, data);});


            function Student(id, fName, lName) {
                this.id = id;
                this.fName = fName;
                this.lName = lName;
            }



            $scope.showPopper = function(){
                $scope.showIt=true;

            };
            $scope.hidePopper = function(){
                $scope.showIt=false;

            };

            $scope.StudentChecker = function(id) {
                var counter = 0;
                for (counter; counter < $scope.students.length; counter++) {
                    if (id === $scope.students[counter].id) {
                        return true
                    }
                }
                return false
            };

            $scope.addNewStudent = function() {
                if ($scope.StudentChecker($scope.id)) {
                    alert("That Id Exists Already")


                } else {

        this.studentToAdd = new Student($scope.id, $scope.fName, $scope.lName);
        $scope.students.push({
            id: this.studentToAdd.id,
            fName: this.studentToAdd.fName,
            lName: this.studentToAdd.lName
        });//close push

                }




            }}]);





