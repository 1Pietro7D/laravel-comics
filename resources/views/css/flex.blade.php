<style>
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
