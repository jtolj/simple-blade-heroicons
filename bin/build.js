const fs = require('fs');
const path = require('path');
var process = require('process');

let basePath = path.resolve(__dirname, '../node_modules/heroicons');
let versions = ['solid', 'outline'];

let outputDir = path.resolve(__dirname, '../resources/views/components');

versions.forEach((version) => {
  let svgPath = `${basePath}/${version}`;
  fs.readdir(svgPath, (err, files) => {
    if (err) {
      console.error(err);
      process.exit(1);
    }
    files.forEach((file) => {
      let svg = fs
        .readFileSync(`${svgPath}/${file}`)
        .toString()
        .replace(/^(<svg )/, '<svg {{ $attributes }} ');

      let bladeFilename = `${outputDir}/${version.charAt(0)}-${file.replace(
        /(\.svg)$/,
        ''
      )}.blade.php`;
      fs.writeFile(bladeFilename, svg, (err) => {
        if (err) {
          console.error(err);
          process.exit(1);
        }
      });
    });
  });
});
