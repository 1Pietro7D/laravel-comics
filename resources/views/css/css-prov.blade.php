<!-- css PROVVISORIO poichè run dev non va -->
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: content-box;
    }

    /****** UTILITIES NOT FILE */

    /*** VARIABLES ***/
    :root {
    --my-bg-principal:hsl(209deg 98% 49%);
    }

    /*** VARIABLES ***/

    /***** UTILITIES *****/
    .container-max{
        max-width: 1200px;
        margin: auto;
    }
    .adapt{
        width: 100%;
        height: 100%;
    }
    .adapt-scale-down{
        width: 100%;
        height: 100%;
        object-fit: scale-down;
    }
    .adapt-cover{
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    /***** /UTILITIES *****/

    /* HEADER */

    .header-top{
        background-color: var(--my-bg-principal);
        color: #fff
    }
    .ht-item{
        text-transform: uppercase;
    }
    .ht-item sup{
        font-size: 6px;
    }
    .ht-triangle{
        font-size: small;
    }
    .logo-header{
        --size: 75px;
        height: var(--size);
        width: var(--size);
    }
    .my-input-tx {
        border: 0;
        border-radius: 0;
        border-bottom: 2px solid var(--my-bg-principal);
        font-size: 1rem;
        min-width: 125px;
        text-align: end;
    }


     /* /HEADER */

    /****** /UTILITIES NOT FILE */







    /* utilities file */
    .scroll-y {
      overflow-y: scroll;
    }
    .scroll-x {
      overflow-x: scroll;
    }
    .scroll {
      overflow: scroll;
    }
    /* MARGIN */

    .m-1 {
      margin: 1rem;
    }
    .ml-1 {
      margin-left: 1rem;
    }
    .mr-1 {
      margin-right: 1rem;
    }
    .mb-1 {
      margin-bottom: 1rem;
    }

    /* PADDING (I decimali sono con 05, al momento gli unici) */
    .pad-bot-1 {
      padding-bottom: 1rem;
    }
    .pad-bot-2 {
      padding-bottom: 2rem;
    }
    .pad-top-1 {
      padding-top: 1rem;
    }
    .pad-0 {
      padding: 0;
    }
    .pad-05 {
      padding: 0.5rem;
    }
    .pad-1 {
      padding: 1rem;
    }
    .pad-2 {
      padding: 2rem;
    }
    .pad-3 {
      padding: 3rem;
    }
    .pad-4 {
      padding: 4rem;
    }
    .pad-5 {
      padding: 5rem;
    }
    .pad-y-0 {
      padding-top: 0rem;
      padding-bottom: 0rem;
    }
    .pad-y-05 {
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
    }
    .pad-y-1 {
     padding-top: 1rem;
     padding-bottom: 1rem;
    }
    .pad-y-1-5 {
     padding-top: 1.5rem;
     padding-bottom: 1.5rem;
    }
    .pad-y-2 {
    padding-top: 2rem;
    padding-bottom: 2rem;
    }
    .pad-y-3 {
    padding-top: 3rem;
    padding-bottom: 3rem;
    }
    .pad-y-4 {
    padding-top: 4rem;
    padding-bottom: 4rem;
    }
    .pad-y-5 {
    padding-top: 5rem;
    padding-bottom: 5rem;
    }
    .pad-x-0 {
    padding-right: 0rem;
    padding-left: 0rem;
    }
    .pad-x-05 {
    padding-right: 0.5rem;
    padding-left: 0.5rem;
    }
    .pad-x-1 {
    padding-right:1rem;
    padding-left: 1rem;
    }
    .pad-x-1-5 {
    padding-right:1.5rem;
    padding-left: 1.5rem;
    }
    .pad-x-2 {
    padding-right: 2rem;
    padding-left: 2rem;
    }
    .pad-x-3 {
    padding-right: 3rem;
    padding-left: 3rem;
    }
    .pad-x-4 {
    padding-right: 4rem;
    padding-left: 4rem;
    }
    .pad-x-5 {
    padding-right: 5rem;
    padding-left: 5rem;
    }

    /* /padding */

    /* gap */
    .gap-05 {
      gap: 0.5rem;
    }
    .gap-1 {
      gap: 1rem;
    }
    .gap-1-5 {
      gap: 1.5rem;
    }
    .gap-2 {
      gap: 2rem;
    }
    .gap-3 {
      gap: 3rem;
    }
    .gap-4 {
      gap: 4rem;
    }
    .gap-5 {
      gap: 5rem;
    }
    .gap-y-05 {
      row-gap: 0.5rem;
    }
    .gap-y-1 {
      row-gap: 1rem;
    }
    .gap-y-1-2 {
      row-gap: 1.5rem;
    }
    .gap-y-2 {
      row-gap: 2rem;
    }
    .gap-y-3 {
      row-gap: 3rem;
    }
    .gap-y-4 {
      row-gap: 4rem;
    }
    .gap-y-5 {
      row-gap: 5rem;
    }
    .gap-x-05 {
      column-gap: 0.5rem;
    }
    .gap-x-1 {
      column-gap: 1rem;
    }
    .gap-x-1-2 {
      column-gap: 1.5rem;
    }
    .gap-x-2 {
      column-gap: 2rem;
    }
    .gap-x-3 {
      column-gap: 3rem;
    }
    .gap-x-4 {
      column-gap: 4rem;
    }
    .gap-x-5 {
      column-gap: 5rem;
    }
    /* /gap */

    .float-sx {
      float: left;
    }
    .float-dx {
      float: right;
    }
    .clearfix::after {
      content: "";
      clear: both;
      display: table;
    }

    /***** /UTILITIES *****/

    .text-center {
      text-align: center;
    }
    .text-left {
      text-align: left;
    }

    .w-100 {
      width: 100%;
    }
    .w-40 {
      width: 40%;
    }

    .h-100 {
      height: 100%;
    }
    ul {
      list-style: none;
    }

    /*** DISPLAY ***/

    .d-grid {
      display: grid;
    }
    .d-flex {
      display: flex;
    }
    .d-inline-flex {
      display: inline-flex;
      /* Displays an element as an inline-level flex container */
    }
    .d-inherit {
      display: inherit;
    }
    .d-initial {
      display: initial;
    }
    .d-inline {
      display: inline;
    }
    .d-inline-block {
      display: inline-block;
    }
    .d-block {
      display: block;
    }
    .d-none {
      display: none;
    }
    .d-list-item {
      display: list-item;
    }

    /* table */

    .d-table {
      display: table;
    }

    .d-table-caption {
      display: table-caption;
    }
    .d-table-column-group {
      display: table-column-group;
    }
    .d-table-header-group {
      display: table-header-group;
    }
    .d-table-footer-group {
      display: table-footer-group;
    }
    .d-table-row-group {
      display: table-row-group;
    }
    .d-table-cell {
      display: table-cell;
    }
    .d-table-column {
      display: table-column;
    }
    .d-table-row {
      display: table-row;
    }
    /* /table */

    .contents {
      display: contents;
      /* Makes the container disappear, making the child elements children of the element the next level up in the DOM */
    }
    .run-in {
      display: run-in;
      /* Displays an element as either block or inline, depending on context */
      /* in che senso a seconda del caso? */
    }
    /* ++DA APPROFONDIRE++ */
    .webkit-inline-flex {
      display: -webkit-inline-flex;
      /* sembra esiste una versione ufficiale e questa.. quali sono le differenze? */
    }

    /*** /DISPLAY ***/

    .h100px{
        height: 100px;
    }

.flex-row{
 display: flex;
 flex-wrap: wrap;
}
.flex-col {
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
}
.flex-col-rev {
  display: flex;
  flex-wrap: wrap;
  flex-direction: column-reverse;
}
.flex-row-rev {
  display: flex;
  flex-wrap: wrap;
  flex-direction: row-reverse;
}

.d-flex {
  display: flex;
}
.d-inline-flex {
  display: inline-flex;
  /* Displays an element as an inline-level flex container */
}

.flex-1 {
  flex: 1;
  /* questa proprietà con questo valore 1, indipendentemente dal contenuto, divide i contenitori in parti uguali facendoli occupare tutto in contenitore, può averne 3 i quali corrispondono in sequenza a f-grow f-shrink e f-basis (in questo caso 1 da solo corrisponde a "1 0 auto")*/
}

/** flex-direction **/

.row-reverse {
  flex-direction: row-reverse;
}

.column-reverse {
  flex-direction: column-reverse;
}

/** /flex-direction **/

/** wrap **/

.wrap {
  flex-wrap: wrap;
}

.wrap-reverse {
  flex-wrap: wrap-reverse;
}

/** /wrap **/

/** justify-content **/

.justify-start {
  justify-content: flex-start;
}
.justify-center {
  justify-content: center;
}
.justify-end {
  justify-content: flex-end;
}
.justify-left {
  justify-content: left;
}
.justify-right {
  justify-content: right;
}
.justify-between {
  justify-content: space-between;
}

.justify-around {
  justify-content: space-around;
}

.justify-evenly {
  /* !! is NOT supported by all browser*/
  justify-content: space-evenly;
}

.justify-baseline {
  justify-content: baseline;
}

.justify-first-baseline {
  justify-content: first baseline;
}

.justify-last-baseline {
  justify-content: last baseline;
}
.justify-stretch {
  /* !! NOT supported by flexible boxes (flexbox). */
  justify-content: stretch;
}

/** /justify-content **/

/** align-items **/
.align-start {
  align-items: flex-start;
}
.align-end {
  align-items: flex-end;
}
.align-center {
  align-items: center;
}
.align-baseline {
  align-items: baseline;
}
.align-stretch {
  align-items: stretch;
}
/** /align-items **/

/** align-content **/
.align-cont-start {
  align-content: flex-start;
}
.align-cont-between {
  align-content: space-between;
}
.align-cont-end {
  align-content: flex-end;
}
.align-cont-around {
  align-content: space-around;
}

.align-cont-stretch {
  align-content: stretch;
}
/** align-content **/

/** align-self **/

.self-start {
  align-self: flex-start;
}

.self-end {
  align-self: flex-end;
}

.self-center {
  align-self: center;
}

.self-baseline {
  align-self: baseline;
}

.self-stretch {
  align-self: stretch;
}

/** /align-self **/

/** flex-shrink **/
.shrink-0 {
  flex-shrink: 0;
}
.shrink-1 {
  flex-shrink: 1;
}
.shrink-2 {
  flex-shrink: 2;
}

/** flex-shrink **/

/** flex-grow **/

.grow-1 {
  flex-grow: 1;
}
.grow-2 {
  flex-grow: 2;
}

/** /flex-grow **/

/** flex-basis **/

.base-30 {
  flex-basis: 30%;
}

/** flex-basis **/

/***** /flex *****/

.col-1{
    width: 100%;
}
.col-2{
    width: 50%;
}
.col-3{
    width: calc(100% / 3);
}
.col-4{
    width: 25%;
}
.col-5{
    width: width: 20%;
}
.col-6{
    width: calc(100% / 6);
}
.col-7{
    width: calc(100% / 7);
}
.col-8{
    width: calc(100% / 8);
}
.col-9{
    width: calc(100% / 9);
}
.col-10{
    width: 10%;
}

.col-2-1gap{
    width: calc(50% - 0.5rem);
}
.col-3-1gap{
    width: calc((100% - 2rem) / 3);
}
.col-4-1gap{
    width: calc((100% - 3rem) / 4);
}
.col-5-1gap{
    width: calc((100% - 4rem) / 5);
}
.col-6-1gap{
    width: calc((100% - 5rem) / 6);
}
.col-7-1gap{
    width: calc((100% - 6rem) / 7);
}
.col-8-1gap{
    width: calc((100% - 7rem) / 8);
}
.col-9-1gap{
    width: calc((100% - 8rem) / 9);
}
.col-10-1gap{
    width: calc((100% - 9rem) / 10);
}
</style>


