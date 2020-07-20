const UglifyJS = require("uglify-js");
const fs = require('fs');
const mix = require('laravel-mix');
const { StringDecoder } = require('string_decoder');
const decoder = new StringDecoder('utf8');





var cacheFileName = "/tmp/cache.json";
const options={
    nameCache: JSON.parse(fs.readFileSync(cacheFileName, "utf8")),
    toplevel: false,
    mangle: {


        reserved: ['APP_LANG',"dependencies","costsTables"],

    },
    compress: {
        global_defs: {
            "@console.log": "alert"
        },
        passes: 2
    },
    output: {
        beautify:true,
        preamble: "/* uglified */",
        comments: true
    },

    sourceMap: {

    }
};


let fileConectionsArr = [];



function find_relative_files  (productionfile){



    var files_arr = fileConectionsArr;

    files_arr.forEach(function(item=this){
        var arrEl = item;



        arrEl.original_Files.forEach(function(original_file=this){



            if(original_file == productionfile){



                module.exports.combinefiles(arrEl.uni_filename,arrEl.original_Files,true);
                Mix.manifest.hash(new File(arrEl.uni_filename+".map").pathFromPublic()).refresh();
                Mix.manifest.hash(new File(arrEl.uni_filename).pathFromPublic()).refresh();


            }
        });

    });


};

let a = 1;


module.exports = {

    //watch original file for changes
    watchChanges: function (files_arr) {

        var obj = {};
        files_arr.forEach(function (item = this) {
            var arrEl = item;

            arrEl.original_Files.forEach(function (originalfile = this) {
                obj[originalfile] = originalfile;

            });


        });


        var arr = Object.keys(obj);


        arr.forEach(function (originalfilenew = this) {
            fs.watchFile(originalfilenew, (curr, prev) => {



                find_relative_files(originalfilenew);
            });

        })


    },


    combinefiles: function (unifidefilename, filesArr, watch = false) {

        if (compileJs!=undefined){


            var files = {uni_filename: unifidefilename, original_Files: filesArr};
        fileConectionsArr.push(files)


        fs.readFile('public/mix-manifest.json', (err, data) => {
            if (err) throw err;
            let versioned_files = JSON.parse(data);
            var filetoversion = unifidefilename.replace("public", "");


            var unifidefilenameSlice = unifidefilename.slice(unifidefilename.indexOf("/"));

            if (versioned_files[filetoversion] == undefined || watch == true ) {


                options.sourceMap = {
                    filename: unifidefilenameSlice,
                    url: unifidefilenameSlice + ".map",

                }


                var filesContents = filesArr.map(function (file) {
                    var file_end = "\r\n /*------------------------------------------------" + file + "------------------------------------------------------*/ \r\n";
                    file_end += fs.readFileSync(file, "utf8");
                    return file_end
                });


                var mapObject = JSON.parse(UglifyJS.minify(filesContents, options).map);


                var files_sources = filesArr.map(function (file2) {
                    var file = file2.replace("public/", "");
                    var numoftimes = file.split("/").length - 1;
                    var prepend = "../";

                    for (i = 0; i < numoftimes; i++) {
                        prepend += "../";

                    }

                    var append = "?id="+Math.floor(Math.random() * 1000);

                    file = prepend + file + append;

                    return file;


                });


                mapObject.sources = files_sources;
                mapObject = JSON.stringify(mapObject);



                fs.writeFileSync(unifidefilename + ".map", mapObject, "utf8");

                fs.writeFileSync(unifidefilename, UglifyJS.minify(filesContents, options).code, "utf8");


                fs.writeFileSync(cacheFileName, JSON.stringify(options.nameCache), "utf8");
                console.log(unifidefilename);

            }
            mix.version(unifidefilename + ".map");
            mix.version(unifidefilename);
            // mix.options({processCssUrls: false }).version('public/css/app.css')

        })

    }else{
            mix.version(unifidefilename);
        }


    },
    createCssFiles:function (srcFile,distFile){


    if(compileJs==undefined){

        mix.options({processCssUrls: false })
            .sass(srcFile,distFile)
            .sourceMaps(true, 'source-map').version();
    }else{

        var srcFile =srcFile.replace(/.*\//i,distFile+"/");
        var srcFileCss =srcFile.replace(".scss",".css");
        var srcFileMap =srcFile.replace(".scss",".css.map");
        mix.options({processCssUrls: false }).version(srcFileCss);
        mix.options({processCssUrls: false }).version(srcFileMap);


    }







},
    fileConectionsArr : fileConectionsArr

}

