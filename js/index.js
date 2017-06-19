function FunRandom() {

    var item_array = [
      {
   id: 1,
   title: 'iPhone',
   info:'You will buy an iPhone',
   img:'iphone.jpg'
 },
 {
   id: 1,
   title: 'iPad',
   info:'You will buy an iPad',
   img:'ipad.jpg'
    },
  {
    id: 1,
    title: 'Mac',
    info:'You will buy a Mac',
    img:'mac.jpg'
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

      <title>คุณจะได้ซื้อ {{item.title}} ในปีนี้</title>
      <meta property="og:title"  content="คุณจะได้ซื้อ {{item.title}} "/>
      <meta property="og:description"content=" {{item.info}} "/>
      <meta property="og:image"   content=" img/{{item.img}} "/>
        `
    })
];

document.addEventListener("DOMContentLoaded",
    function() {
        ng.bootstrap(FunRandom)
    }
)
