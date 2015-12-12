var mongoose   = require('mongoose');
mongoose.connect('mongodb://localhost/test/restaurants'); // connect to our database
var Restaurant = require('../models/Restaurant');

module.exports.store =function(req, res) {

    var restaurant = new Restaurant();      // create a new instance of the restaurant model
    restaurant.name = req.body.name;  // set the restaurants name (comes from the request)
    restaurant.save(function(err) {
        if (err)
            res.send(err);

        res.json({ message: 'restaurant created!' });
    });

};

module.exports.index = function(req, res) {
    Restaurant.find(function (err, restaurants) {
        if (err)
            res.send(err);

        res.json(restaurants);
    });

};

module.exports.show = function(req, res) {
    Restaurant.findById(req.params._id, function(err, restaurant) {

        if (err)
            res.send(err);
        res.json(restaurant);
    });
};

module.exports.update = function(req, res) {

    // use our restaurant model to find the restaurant we want
    Restaurant.findById(req.params._id, function(err, restaurant) {

        if (err)
            res.send(err);

        restaurant.name = req.body.name;  // update the restaurants info

        // save the restaurant
        restaurant.save(function(err) {
            if (err)
                res.send(err);

            res.json({ message: 'restaurant updated!' });
        });

    });
};

module.exports.destroy = function(req, res) {
    Restaurant.remove({
        _id: req.params._id
    }, function(err, restaurant) {
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