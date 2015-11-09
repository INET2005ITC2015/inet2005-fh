app=angular.module('studentApp',[])

    app.controller('studentController',function($scope){

        $scope.students = []; // end of students array

        function Student(id, fName, lName) {
            this.id = id;
            this.fName = fName;
            this.lName = lName;
        }

        $scope.showPopper = function(){
        $scope.showIt=true;

        }
        $scope.hidePopper = function(){
            $scope.showIt=false;

        }

        $scope.StudentChecker = function(id) {
           var counter = 0;
            for (counter; counter < $scope.students.length; counter++) {
                if (id === $scope.students[counter].id) {
                    return true
                }
            }
            return false
        }

       $scope.addNewStudent = function() {
            if(!$scope.StudentChecker($scope.id)){
           this.studentToAdd = new Student($scope.id, $scope.fName, $scope.lName);
           $scope.students.push({
               id: this.studentToAdd.id,
               fName: this.studentToAdd.fName,
               lName: this.studentToAdd.lName

           });//close push

            }
             else
            { alert("That Id Exists Already")}

           ;


       }});



