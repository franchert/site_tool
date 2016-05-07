/*used for gulpfile to add document.ready wrapper around compiled javascript*/
var through = require('through2');
var gutil = require('gulp-util');
var fs = require('fs');

module.exports = function(){
  var stream = through.obj(function(file, enc, cb) {
    if (file.isStream()) {
      this.emit('error', new PluginError(PLUGIN_NAME, 'Streams are not supported!'));
      return cb();
    }
    if (file.isBuffer()) {
        var contents = file.contents.toString();
        file.contents = Buffer.concat([new Buffer('$( window ).resize(function() {'), file.contents, new Buffer('});')]);
    }
    cb(null, file);
  }, function(){
  })
  return stream;
};