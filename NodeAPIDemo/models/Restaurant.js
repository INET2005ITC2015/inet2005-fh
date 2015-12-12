/**
 * Created by inet2005 on 12/12/15.
 */
var mongoose = require('mongoose');
   var Schema = mongoose.Schema;

var RestaurantSchema = new Schema ({
    name: String

});

module.exposts = mongoose.model ('Restaurant', RestaurantSchema);