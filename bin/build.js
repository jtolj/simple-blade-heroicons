const fs = require('fs');
const path = require('path');
const jsdom = require('jsdom');
const { JSDOM } = jsdom;
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
      let container = new JSDOM(
        fs
        .readFileSync(`${svgPath}/${file}`)
        .toString()
      );

      let svg = container.window.document.getElementsByTagName("svg")[0];
      let attributes = [];
      while (svg.attributes.length > 0) {
        let item = svg.attributes[0];
        attributes.push(`'${item.name}' => '${item.value}'`);
        svg.removeAttribute(svg.attributes[0].name);
      }

      svg = svg.outerHTML.replace(/^(<svg>)/, `<svg {{ $attributes->merge([${attributes.join(', ')}]) }}>`);

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
