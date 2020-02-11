var $ = require("jquery");
// behaviour for our module
function foo(){
  $("body").addClass("asasasas");
}

// export (expose) foo to other modules
exports.foo = foo;