var mongoose   = require('mongoose');
mongoose.connect('mongodb://localhost/test/restaurants'); // connect to our database
var Restaurant = require('../models/Restaurant');

module.exposts.store =function(req, res) {

    var Restaurant = new Restaurant();      // create a new instance of the Restaurant model
    Restaurant.name = req.body.name;  // set the Restaurants name (comes from the request)


    // save the Restaurant and check for errors
    Restaurant.save(function(err) {
        if (err)
            res.send(err);

        res.json({ message: 'Restaurant created!' });
    });

};

module.exposts.index = function(req, res) {
    Restaurant.find(function (err, Restaurants) {
        if (err)
            res.send(err);

        res.json(Restaurants);
    });

};

module.exposts.show = function(req, res) {
    Restaurant.findById(req.params.Restaurant_id, function(err, Restaurant) {
        if (err)
            res.send(err);
        res.json(Restaurant);
    });
};

module.exposts.update = function(req, res) {

    // use our Restaurant model to find the Restaurant we want
    Restaurant.findById(req.params.Restaurant_id, function(err, Restaurant) {

        if (err)
            res.send(err);

        Restaurant.name = req.body.name;  // update the Restaurants info

        // save the Restaurant
        Restaurant.save(function(err) {
            if (err)
                res.send(err);

            res.json({ message: 'Restaurant updated!' });
        });

    });
};

module.exposts.destroy = function(req, res) {
    Restaurant.remove({
        _id: req.params.Restaurant_id
    }, function(err, Restaurant) {
        if (err)
            res.send(err);

        res.json({ message: 'Successfully deleted' });
    });
}








//module.exports.index = function(req, res) {
//    req.getConnection(function(err, connection) {
//        if (err) return next(err);
//
//        var query = connection.query('SELECT * FROM employees LIMIT 0,10', [], function(err, results) {
//            if (err) return next(err);
//
//            res.json(results);
//        });
//        console.log(query.sql);
//    });
//};
//
//module.exports.store = function(req, res) {
//
//    var input = JSON.parse(JSON.stringify(req.body));
//
//    req.getConnection(function (err, connection) {
//
//        var data = {
//
//            emp_no: input.emp_no,
//            birth_date: input.birth_date,
//            first_name: input.first_name,
//            last_name: input.last_name,
//            gender: input.gender,
//            hire_date: input.hire_date
//
//        };
//
//        var query = connection.query("INSERT INTO employees set ? ", data, function (err, rows) {
//
//            if (err) {
//                console.log("Error inserting : %s ", err);
//            } else {
//                res.json({message: 'Employee Added'})
//            }
//        });
//
//        console.log(query.sql);
//
//    });
//
//};
//
//module.exports.show = function(req, res) {
//
//    req.getConnection(function(err, connection) {
//        if (err) return next(err);
//
//        var query = connection.query('SELECT * FROM employees where emp_no = ?', req.params.emp_no, function(err, results) {
//            if (err) return next(err);
//
//            res.json(results);
//        });
//        console.log(query.sql);
//    });
//};
//
//module.exports.update = function(req, res) {
//
//    var input = JSON.parse(JSON.stringify(req.body));
//    var emp_no = req.params.emp_no;
//
//    req.getConnection(function (err, connection) {
//
//        var data = {
//
//            emp_no: input.emp_no,
//            birth_date: input.birth_date,
//            first_name: input.first_name,
//            last_name: input.last_name,
//            gender: input.gender,
//            hire_date: input.hire_date
//
//        };
//
//        var query = connection.query("UPDATE employees set ? WHERE emp_no = ? ",[data,emp_no], function(err, rows)
//        {
//
//            if (err) {
//                console.log("Error Updating : %s ", err);
//            }else{
//                res.json({message: 'Employee Updated'})
//            }
//        });
//        console.log(query.sql);
//
//    });
//};
//
//module.exports.destroy = function(req, res) {
//
//    var emp_no = req.params.emp_no;
//
//    req.getConnection(function (err, connection) {
//
//        var query = connection.query("DELETE FROM employees  WHERE emp_no = ? ",[emp_no], function(err, rows)
//        {
//
//            if(err) {
//                console.log("Error deleting : %s ", err);
//            }else{
//                res.json({ message: 'Successfully deleted' });
//            }
//        });
//        console.log(query.sql);
//    });
//};