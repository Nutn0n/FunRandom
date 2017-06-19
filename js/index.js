function FunRandom() {

    var item_array = [
      {
   id: 1,
   title: 'iPhone',
   info:'You will buy an iPhone',
   img:'iphone'
 },
 {
   id: 1,
   title: 'iPad',
   info:'You will buy an iPad',
   img:'ipad'
    },
  {
    id: 1,
    title: 'Mac',
    info:'You will buy a Mac',
    img:'mac'
  }
    ];

    this.generate = function() {
        this.item = item_array[Math.floor(Math.random() * item_array.length)];
    }

    this.generate();
}

FunRandom.annotations = [
    new ng.Component( {
     selector: "random-meta"
    }),
    new ng.View({
      template: `
          <div>
          meta property="og:title"  content=" {{item.title}} " <br/>
          meta property="og:description"content=" {{item.info}} "<br/>
          meta property="og:image"   content=" {{item.img}} "<br/>
          </div>     `
    })
];

document.addEventListener("DOMContentLoaded",
    function() {
        ng.bootstrap(FunRandom)
    }
)
