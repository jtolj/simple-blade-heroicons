const fs = require("fs");
const rimraf = require("rimraf")
const path = require("path");
const jsdom = require("jsdom");
const { JSDOM } = jsdom;
var process = require("process");

let outputDir = path.resolve(__dirname, "../resources/views/components");

rimraf(`${outputDir}/*`, () => {

  let basePath = path.resolve(__dirname, "../node_modules/heroicons");
  let iconSets = [
    {
      directory: "24",
      prefix: "",
      versions: ["solid", "outline"],
    },
    {
      directory: "20",
      prefix: "m",
      versions: ["solid"],
    },
  ];
  
  iconSets.forEach((iconSet) => {
    iconSet.versions.forEach((version) => {
      let svgPath = `${basePath}/${iconSet.directory}/${version}`;
  
      fs.readdir(svgPath, (err, files) => {
        if (err) {
          console.error(err);
          process.exit(1);
        }
  
        files.forEach((file) => { 
          const identifier = `${iconSet.prefix}${version.charAt(0)}-${file.replace(/(\.svg)$/, "")}`;
  
          let container = new JSDOM(
            fs.readFileSync(`${svgPath}/${file}`).toString()
          );
          
          let svg = container.window.document.getElementsByTagName("svg")[0];
          let attributes = [];
          while (svg.attributes.length > 0) {
            let item = svg.attributes[0];
            attributes.push(`'${item.name}' => '${item.value}'`);
            svg.removeAttribute(svg.attributes[0].name);
          }
  
          let wrapperForUse = svg.cloneNode(true);
  
          while (wrapperForUse.firstChild) {
            wrapperForUse.removeChild(wrapperForUse.lastChild);
          }
  
          let contentsForUse = svg.innerHTML;
  
          wrapperForUse = wrapperForUse.outerHTML.replace(
            /^(<svg>)/,
            `<svg {{ $attributes->merge([${attributes.join(", ")}]) }}><use href="#heroicon-${identifier}" />`
          )
  
          svg = svg.outerHTML.replace(
            /^(<svg>)/,
              `<svg {{ $attributes->merge([${attributes.join(", ")}]) }}>`
            );
  
          const template = 
  `@props(['pushRef' => config('simple-blade-heroicons.use_references', false), 'showIcon' => true])
  
  @if ($pushRef)
    @if ($showIcon)
      ${wrapperForUse}
    @endif
  @once('heroicon-${identifier}')
    @push('simple-blade-icons')
      <g id="heroicon-${identifier}">${contentsForUse.trim()}</g>
    @endpush
  @endonce
  @else
    ${svg}
  @endif
  `
          let bladeFilename = `${outputDir}/${identifier}.blade.php`;
  
          fs.writeFile(bladeFilename, template, (err) => {
            if (err) {
              console.error(err);
              process.exit(1);
            }
          });
        });
      });
    });
  });

  let staticTemplates = ['icon.blade.php', 'iconset.blade.php', 'defs.blade.php'];
  staticTemplates.forEach((template) =>  fs.copyFileSync(path.resolve(__dirname, "./templates") + '/' + template, outputDir + '/' + template));
 
})

