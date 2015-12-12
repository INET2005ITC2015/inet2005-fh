var express = require('express');
var router = express.Router();
var restaurantController = require('../controllers/restaurantController');

// middleware to use for all requests
router.use(function(req, res, next) {
    // do logging
    console.log('Something is happening.');
    next(); // make sure we go to the next routes and don't stop here
});

// test route to make sure everything is working (accessed at GET http://localhost:8080/api)
router.get('/', function(req, res) {
    res.json({ message: 'hooray! welcome to our api!' });
});

// more routes for our API will happen here
// on routes that end in /restaurants
// ----------------------------------------------------
router.route('/Restaurants')

    // create a Restaurant (accessed at POST http://localhost:3000/api/Restaurants)
    .post(restaurantController.store)
    .get(restaurantController.index)
    .get(restaurantController.show)
// update the Restaurant with this id (accessed at PUT http://localhost:8080/api/Restaurants/:Restaurant_id)
    .put(restaurantController.update)
// delete the Restaurant with this id (accessed at DELETE http://localhost:8080/api/Restaurants/:Restaurant_id)
    .delete(restaurantController.destroy);



// ----------------------------------------------------
router.route('/restaurants/:restaurant_id')

    // get the Restaurant with that id (accessed at GET http://localhost:8080/api/Restaurants/:Restaurant_id)


module.exports = router;
